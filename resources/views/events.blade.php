@extends('layouts.app')

@section('title', 'Events - Word Increase Ministries')
@section('description', 'Upcoming events and activities from our magazine community')

@section('content')
<!-- Hero Section -->
<div class="bg-orange-800">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-center">
        <h1 class="text-4xl font-bold text-white mb-4">Events</h1>
        <p class="text-xl text-white max-w-3xl mx-auto">
            Join us for exciting events, workshops, and community gatherings throughout the year.
        </p>
    </div>
</div>

<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Upcoming Events -->
    <div class="mb-16">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Upcoming Events</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Event Card 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="h-48 bg-gradient-to-r from-blue-500 to-purple-600 flex items-center justify-center">
                    <div class="text-center text-white">
                        <div class="text-3xl font-bold">15</div>
                        <div class="text-sm">March</div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Magazine Launch Party</h3>
                    <p class="text-gray-600 mb-4">Join us for the official launch of our Spring 2024 issue with live music, refreshments, and exclusive previews.</p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <x-svg-icon name="location" class="w-4 h-4 mr-2" />
                        Downtown Gallery, Main Street
                    </div>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <x-svg-icon name="clock" class="w-4 h-4 mr-2" />
                        7:00 PM - 10:00 PM
                    </div>
                    <button class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors">
                        RSVP Now
                    </button>
                </div>
            </div>

            <!-- Event Card 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="h-48 bg-gradient-to-r from-green-500 to-teal-600 flex items-center justify-center">
                    <div class="text-center text-white">
                        <div class="text-3xl font-bold">22</div>
                        <div class="text-sm">March</div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Writing Workshop</h3>
                    <p class="text-gray-600 mb-4">Learn the art of storytelling and improve your writing skills with our experienced editors and published authors.</p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <x-svg-icon name="location" class="w-4 h-4 mr-2" />
                        Community Center, Oak Avenue
                    </div>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <x-svg-icon name="clock" class="w-4 h-4 mr-2" />
                        2:00 PM - 5:00 PM
                    </div>
                    <button class="w-full bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 transition-colors">
                        Register
                    </button>
                </div>
            </div>

            <!-- Event Card 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="h-48 bg-gradient-to-r from-orange-500 to-red-600 flex items-center justify-center">
                    <div class="text-center text-white">
                        <div class="text-3xl font-bold">05</div>
                        <div class="text-sm">April</div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Photography Exhibition</h3>
                    <p class="text-gray-600 mb-4">Discover stunning photography from our featured artists and learn about visual storytelling techniques.</p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <x-svg-icon name="location" class="w-4 h-4 mr-2" />
                        Art Gallery, River District
                    </div>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <x-svg-icon name="clock" class="w-4 h-4 mr-2" />
                        6:00 PM - 9:00 PM
                    </div>
                    <button class="w-full bg-orange-600 text-white py-2 px-4 rounded-lg hover:bg-orange-700 transition-colors">
                        View Details
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Past Events -->
    <div class="mb-16">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Past Events</h2>

        <div class="space-y-6">
            <!-- Past Event 1 -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div class="flex-1">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Winter Issue Launch</h3>
                        <p class="text-gray-600 mb-2">Celebrated the release of our Winter 2024 issue with an intimate gathering of contributors and readers.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <x-svg-icon name="calendar" class="w-4 h-4 mr-2" />
                            February 10, 2024
                        </div>
                    </div>
                    <div class="mt-4 md:mt-0 md:ml-6">
                        <span class="inline-block bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm">Completed</span>
                    </div>
                </div>
            </div>

            <!-- Past Event 2 -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div class="flex-1">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Editor's Meet & Greet</h3>
                        <p class="text-gray-600 mb-2">An opportunity to meet our editorial team and discuss potential submissions and collaborations.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <x-svg-icon name="calendar" class="w-4 h-4 mr-2" />
                            January 20, 2024
                        </div>
                    </div>
                    <div class="mt-4 md:mt-0 md:ml-6">
                        <span class="inline-block bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm">Completed</span>
                    </div>
                </div>
            </div>

            <!-- Past Event 3 -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div class="flex-1">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Holiday Reading Circle</h3>
                        <p class="text-gray-600 mb-2">A cozy gathering where we shared our favorite holiday stories and discussed the year's best reads.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <x-svg-icon name="calendar" class="w-4 h-4 mr-2" />
                            December 15, 2023
                        </div>
                    </div>
                    <div class="mt-4 md:mt-0 md:ml-6">
                        <span class="inline-block bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm">Completed</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Event Newsletter Signup -->
    <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg p-8 text-center text-white">
        <h2 class="text-3xl font-bold mb-4">Stay Updated</h2>
        <p class="text-xl mb-6">Don't miss out on our upcoming events! Subscribe to our newsletter for the latest updates.</p>
        <div class="max-w-md mx-auto flex gap-4">
            <input
                type="email"
                placeholder="Enter your email address"
                class="flex-1 px-4 py-3 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-white"
            >
            <button class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                Subscribe
            </button>
        </div>
    </div>
</div>
@endsection
