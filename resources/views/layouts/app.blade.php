<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Word Increase Ministries (aka WIM)')</title>
    <meta name="description" content="@yield('description', 'Word Increase Ministries (aka WIM)')">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">

    <!-- Tailwind CSS CDN for quick styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    },
                    colors: {
                        brand: {
                            50: '#fdf8f6',
                            100: '#f2e8e5',
                            500: '#ea580c',
                            600: '#d54d04',
                            800: '#9a3412',
                            900: '#7c2d12',
                        }
                    },
                    keyframes: {
                        'pulse-subtle': {
                            '0%, 100%': { opacity: 1 },
                            '50%': { opacity: 0.8 },
                        }
                    },
                    animation: {
                        'pulse-subtle': 'pulse-subtle 3s ease-in-out infinite',
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <style>
        .magazine-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .magazine-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .magazine-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .magazine-thumbnail {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 8px;
        }
    </style>
</head>

<body class="bg-brand-50 min-h-screen font-sans text-gray-800 antialiased selection:bg-brand-500 selection:text-white">
    <!-- Navigation -->
    <nav
        class="sticky top-0 z-50 bg-white/70 backdrop-blur-lg border-b border-gray-200/50 shadow-sm transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                        <img src="{{ asset('favicon.png') }}" alt="Word Increase Ministries"
                            class="h-10 w-auto object-contain drop-shadow-sm group-hover:scale-105 transition-transform duration-300">
                    </a>
                </div>

                <div class="flex items-center space-x-1 sm:space-x-8">
                    <a href="{{ route('home') }}"
                        class="text-gray-600 hover:text-brand-600 px-3 py-2 rounded-full text-sm font-medium transition-colors hover:bg-brand-50">Home</a>
                    <a href="{{ route('about') }}"
                        class="text-gray-600 hover:text-brand-600 px-3 py-2 rounded-full text-sm font-medium transition-colors hover:bg-brand-50">About</a>
                    <a href="{{ route('voice-of-faith') }}"
                        class="text-gray-600 hover:text-brand-600 px-3 py-2 rounded-full text-sm font-medium transition-colors hover:bg-brand-50">
                        <span class="sm:hidden">VOF</span>
                        <span class="hidden sm:inline">Voice of Faith</span>
                    </a>
                    <a href="{{ route('events') }}"
                        class="text-gray-600 hover:text-brand-600 px-3 py-2 rounded-full text-sm font-medium transition-colors hover:bg-brand-50">Events</a>
                    <a href="{{ route('privacy') }}"
                        class="text-gray-600 hover:text-brand-600 px-3 py-2 rounded-full text-sm font-medium transition-colors hover:bg-brand-50">Privacy</a>

                    <!-- Social Media Links -->
                    <div class="flex items-center space-x-4 sm:ml-2 sm:pl-4 sm:border-l border-gray-200">
                        <a href="https://www.youtube.com/@wordincreaseministries" target="_blank"
                            rel="noopener noreferrer" class="text-gray-400 hover:text-red-600 transition-colors"
                            title="YouTube">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/p/Word-Increase-Ministries-Page-100089681253060" target="_blank"
                            rel="noopener noreferrer" class="text-gray-400 hover:text-red-600 transition-colors"
                            title="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879v-6.99h-2.54v-2.89h2.54V9.797c0-2.507 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.462h-1.26c-1.242 0-1.63.771-1.63 1.562v1.875h2.773l-.443 2.89h-2.33v6.99C18.343 21.128 22 16.991 22 12z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4 text-white">Word Increase Ministries</h3>
                    <p class="text-gray-400 text-sm mb-2 hover:text-white transition-colors">
                        <a href="mailto:wordincreaseministry@gmail.com">wordincreaseministry@gmail.com</a>
                    </p>
                    <p class="text-gray-400 text-sm mb-2 hover:text-white transition-colors">
                        <a href="tel:+2348139323232">+234 813 932 3232</a>
                    </p>
                    <p class="text-gray-400 text-sm leading-relaxed mt-4">
                        Jesus is Lord!
                    </p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white">Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-white">About</a></li>
                        <li><a href="{{ route('voice-of-faith') }}" class="text-gray-300 hover:text-white">Voice of
                                Faith</a></li>
                        <li><a href="{{ route('events') }}" class="text-gray-300 hover:text-white">Events</a></li>
                        <li><a href="{{ route('privacy') }}" class="text-gray-300 hover:text-white">Privacy Policy</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
                    <div class="flex flex-col space-y-3">
                        <a href="https://www.youtube.com/@wordincreaseministries" target="_blank"
                            rel="noopener noreferrer"
                            class="text-gray-300 hover:text-white inline-flex items-center gap-2 group">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5 text-gray-400 group-hover:text-red-500 transition-colors"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
                            </svg>
                            YouTube Channel
                        </a>
                    </div>
                    <div class="flex flex-col space-y-3">
                        <a href="https://www.facebook.com/p/Word-Increase-Ministries-Page-100089681253060" target="_blank"
                            rel="noopener noreferrer"
                            class="text-gray-300 hover:text-white inline-flex items-center gap-2 group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879v-6.99h-2.54v-2.89h2.54V9.797c0-2.507 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.462h-1.26c-1.242 0-1.63.771-1.63 1.562v1.875h2.773l-.443 2.89h-2.33v6.99C18.343 21.128 22 16.991 22 12z" />
                            </svg>
                            Facebook
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-300">&copy; {{ date('Y') }} Word Increase Ministries (aka WIM). All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</body>

</html>