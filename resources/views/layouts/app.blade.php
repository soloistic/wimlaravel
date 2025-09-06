<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Word Increase Ministries (aka WIM)')</title>
    <meta name="description" content="@yield('description', 'Word Increase Ministries (aka WIM)')">

    <!-- Tailwind CSS CDN for quick styling -->
    <script src="https://cdn.tailwindcss.com"></script>

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
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .magazine-thumbnail {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 8px;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-gray-800">
                        Word Increase Ministries
                    </a>
                </div>

                <div class="flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="{{ route('about') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">About</a>
                    <a href="{{ route('events') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Events</a>
                    <a href="{{ route('privacy') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Privacy</a>

                    <!-- Social Media Links -->
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-gray-600">
                            <x-svg-icon name="facebook" class="w-5 h-5" />
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-600">
                            <x-svg-icon name="instagram" class="w-5 h-5" />
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
                    <h3 class="text-lg font-semibold mb-4">Word Increase Ministries</h3>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white">Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-white">About</a></li>
                        <li><a href="{{ route('events') }}" class="text-gray-300 hover:text-white">Events</a></li>
                        <li><a href="{{ route('privacy') }}" class="text-gray-300 hover:text-white">Privacy Policy</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white">Facebook</a>
                        <a href="#" class="text-gray-300 hover:text-white">Instagram</a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-300">&copy; {{ date('Y') }} Word Increase Ministries (aka WIM). All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
