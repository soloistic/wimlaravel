import './bootstrap';

// PWA: capture the install prompt so UI can trigger it later,
// and reload once a new service worker takes over.
window.deferredPwaPrompt = null;

window.addEventListener('beforeinstallprompt', (event) => {
  event.preventDefault();
  window.deferredPwaPrompt = event;
  window.dispatchEvent(new CustomEvent('pwa:installable'));
});

window.addEventListener('appinstalled', () => {
  window.deferredPwaPrompt = null;
  window.dispatchEvent(new CustomEvent('pwa:installed'));
});

if ('serviceWorker' in navigator) {
  navigator.serviceWorker.addEventListener('controllerchange', () => {
    window.dispatchEvent(new CustomEvent('pwa:updated'));
  });
}
