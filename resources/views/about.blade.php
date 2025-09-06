@extends('layouts.app')

@section('title', 'About Us - Word Increase Ministries')
@section('description', 'Learn about our Word Increase Ministries and our mission to deliver quality content')

@section('content')
<!-- Hero Section -->
<div class="bg-orange-800">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-center">
        <h1 class="text-4xl font-bold text-white mb-6">About Us</h1>
        <p class="text-xl text-white max-w-3xl mx-auto">
            We are passionate about creating and curating exceptional content that informs, inspires, and engages our readers.
        </p>
    </div>
</div>

<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Our Story -->
    <div class="mb-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Story</h2>
                <p class="text-gray-700 mb-4">
                    Founded with a vision to bring together the best in editorial content, our Word Increase Ministries
                    has grown from a small publication to a trusted source of information and inspiration for
                    thousands of readers worldwide.
                </p>
                <p class="text-gray-700 mb-4">
                    We believe in the power of storytelling, the importance of quality journalism, and the
                    value of diverse perspectives. Each issue is carefully crafted to provide our readers
                    with content that matters.
                </p>
                <p class="text-gray-700">
                    Our team of writers, editors, and designers work tirelessly to ensure that every page
                    meets our high standards for excellence and authenticity.
                </p>
            </div>
            <div class="bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg p-8 text-white">
                <h3 class="text-2xl font-bold mb-4">Our Mission</h3>
                <p class="text-lg mb-4">
                    To deliver thought-provoking, well-researched, and beautifully designed content
                    that enriches the lives of our readers.
                </p>
                <h3 class="text-2xl font-bold mb-4">Our Vision</h3>
                <p class="text-lg">
                    To be the leading source of quality magazine content that bridges communities
                    and fosters meaningful conversations.
                </p>
            </div>
        </div>
    </div>

    <!-- Our Values -->
    <div class="mb-16">
        <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">Our Values</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <x-svg-icon name="check" class="w-8 h-8 text-blue-600" />
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Quality</h3>
                <p class="text-gray-600">We maintain the highest standards in everything we publish, ensuring accuracy and excellence.</p>
            </div>

            <div class="text-center">
                <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <x-svg-icon name="users" class="w-8 h-8 text-green-600" />
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Community</h3>
                <p class="text-gray-600">We foster connections and build communities through shared stories and experiences.</p>
            </div>

            <div class="text-center">
                <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <x-svg-icon name="lightning" class="w-8 h-8 text-purple-600" />
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Innovation</h3>
                <p class="text-gray-600">We embrace new ideas and technologies to enhance our content and reach.</p>
            </div>

            <div class="text-center">
                <div class="bg-orange-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <x-svg-icon name="heart" class="w-8 h-8 text-orange-600" />
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Passion</h3>
                <p class="text-gray-600">Our love for great content drives everything we do and every story we tell.</p>
            </div>
        </div>
    </div>

    <!-- Our Team -->
    <div class="mb-16">
        <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">Meet Our Team</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                <div class="w-24 h-24 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-white text-2xl font-bold">SM</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Sarah Mitchell</h3>
                <p class="text-blue-600 font-medium mb-3">Editor-in-Chief</p>
                <p class="text-gray-600">With over 10 years of experience in publishing, Sarah leads our editorial vision and ensures every piece meets our high standards.</p>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                <div class="w-24 h-24 bg-gradient-to-br from-green-400 to-green-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-white text-2xl font-bold">DJ</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">David Johnson</h3>
                <p class="text-green-600 font-medium mb-3">Creative Director</p>
                <p class="text-gray-600">David brings our stories to life through stunning visual design and innovative layouts that captivate our readers.</p>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                <div class="w-24 h-24 bg-gradient-to-br from-purple-400 to-purple-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-white text-2xl font-bold">EC</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Emily Chen</h3>
                <p class="text-purple-600 font-medium mb-3">Managing Editor</p>
                <p class="text-gray-600">Emily coordinates our editorial calendar and manages our talented team of writers and contributors.</p>
            </div>
        </div>
    </div>

    <!-- Our Impact -->
    <div class="bg-gray-50 rounded-lg p-8 mb-16">
        <h2 class="text-3xl font-bold text-gray-900 text-center mb-8">Our Impact</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div>
                <div class="text-4xl font-bold text-blue-600 mb-2">50K+</div>
                <div class="text-gray-600">Monthly Readers</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-green-600 mb-2">24</div>
                <div class="text-gray-600">Issues Published</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-purple-600 mb-2">15</div>
                <div class="text-gray-600">Countries Reached</div>
            </div>
        </div>
    </div>

    <!-- Contact Information -->
    <div class="bg-white rounded-lg shadow-lg p-8 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-6">Get in Touch</h2>
        <p class="text-gray-600 mb-6">
            We'd love to hear from our readers and community members. Follow us on social media
            for the latest updates and behind-the-scenes content.
        </p>
        <div class="flex justify-center space-x-6">
            <a href="#" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                Follow on Facebook
            </a>
            <a href="#" class="bg-pink-500 text-white px-6 py-3 rounded-lg hover:bg-pink-600 transition-colors">
                Follow on Instagram
            </a>
        </div>
    </div>
</div>
@endsection
