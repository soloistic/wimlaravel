/* VOF PWA service worker — Blade MPA strategy.
 * - Admin / Filament / Livewire: network-only (never cached).
 * - Navigations: network-first, fallback to cache, then /offline.
 * - Vite assets, images, fonts: stale-while-revalidate.
 * - /storage PDFs + thumbnails: cache-first (offline magazine reading).
 */
const STATIC_CACHE = 'vof-static-v1';
const PAGES_CACHE = 'vof-pages-v1';
const MEDIA_CACHE = 'vof-media-v1';

const PRECACHE = [
  '/offline',
  '/manifest.webmanifest',
  '/icons/icon-192.png',
  '/icons/icon-512.png',
  '/favicon.png',
];

// Never intercept these — admin app must stay fresh and functional.
const BYPASS_PREFIXES = [
  '/admin',
  '/livewire',
  '/filament',
  '/api/',
];

function isBypassed(url) {
  return BYPASS_PREFIXES.some((p) => url.pathname.startsWith(p));
}

self.addEventListener('install', (event) => {
  event.waitUntil(
    caches
      .open(STATIC_CACHE)
      .then((cache) => cache.addAll(PRECACHE))
      .then(() => self.skipWaiting()),
  );
});

self.addEventListener('activate', (event) => {
  event.waitUntil(
    (async () => {
      const keys = await caches.keys();
      await Promise.all(
        keys.map((key) => {
          if (![STATIC_CACHE, PAGES_CACHE, MEDIA_CACHE].includes(key)) {
            return caches.delete(key);
          }
          return undefined;
        }),
      );
      if ('navigationPreload' in self.registration) {
        try {
          await self.registration.navigationPreload.enable();
        } catch {
          // Navigation preload not supported — ignore.
        }
      }
      await self.clients.claim();
    })(),
  );
});

self.addEventListener('message', (event) => {
  if (event.data === 'SKIP_WAITING') {
    self.skipWaiting();
  }
});

async function networkFirstNavigation(event) {
  const cache = await caches.open(PAGES_CACHE);
  try {
    const preload = await event.preloadResponse;
    if (preload) {
      cache.put(event.request, preload.clone());
      return preload;
    }
    const fresh = await fetch(event.request);
    // Only cache successful HTML responses.
    if (fresh && fresh.status === 200) {
      cache.put(event.request, fresh.clone());
    }
    return fresh;
  } catch {
    const cached =
      (await cache.match(event.request)) ||
      (await caches.match('/offline'));
    if (cached) return cached;
    return Response.error();
  }
}

async function staleWhileRevalidate(event, cacheName) {
  const cache = await caches.open(cacheName);
  const cached = await cache.match(event.request);
  const network = fetch(event.request)
    .then((fresh) => {
      if (fresh && fresh.status === 200) {
        cache.put(event.request, fresh.clone());
      }
      return fresh;
    })
    .catch(() => cached);
  return cached || network;
}

async function cacheFirstMedia(event) {
  const cache = await caches.open(MEDIA_CACHE);
  const cached = await cache.match(event.request);
  if (cached) {
    // Refresh in the background for next visit.
    event.waitUntil(
      fetch(event.request)
        .then((fresh) => {
          if (fresh && fresh.status === 200) {
            return cache.put(event.request, fresh.clone());
          }
          return undefined;
        })
        .catch(() => undefined),
    );
    return cached;
  }
  try {
    const fresh = await fetch(event.request);
    if (fresh && fresh.status === 200) {
      cache.put(event.request, fresh.clone());
    }
    return fresh;
  } catch {
    return caches.match('/offline');
  }
}

self.addEventListener('fetch', (event) => {
  const { request } = event;
  if (request.method !== 'GET') return;

  const url = new URL(request.url);

  // Only handle same-origin + Google Fonts. Let everything else pass through.
  const isFontHost =
    url.hostname === 'fonts.googleapis.com' ||
    url.hostname === 'fonts.gstatic.com';
  if (url.origin !== self.location.origin && !isFontHost) return;

  // Admin / Livewire / API: always network.
  if (isBypassed(url)) return;

  // PDF + thumbnail storage: offline-first so magazines open without network.
  if (url.pathname.startsWith('/storage/')) {
    event.respondWith(cacheFirstMedia(event));
    return;
  }

  // Page navigations: network-first with offline fallback.
  if (request.mode === 'navigate') {
    event.respondWith(networkFirstNavigation(event));
    return;
  }

  // Vite bundles, images, fonts, manifest, icons: SWR.
  event.respondWith(staleWhileRevalidate(event, STATIC_CACHE));
});
