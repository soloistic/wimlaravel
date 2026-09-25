@extends('layouts.app')

@section('title', 'Offline - Word Increase Ministries')
@section('description', 'You are currently offline. Cached magazines and pages remain available.')

@section('content')
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
    <div class="bg-white rounded-3xl border border-gray-100 shadow-sm p-10 md:p-14">
        <div class="mx-auto w-16 h-16 bg-brand-50 rounded-full flex items-center justify-center mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.364 5.636a9 9 0 010 12.728m-12.728 0a9 9 0 010-12.728m12.728 0L12 12m0 0l-6.364-6.364M12 12l6.364 6.364M12 12L5.636 18.364" />
            </svg>
        </div>
        <h1 class="text-3xl md:text-4xl font-bold font-serif text-gray-900 mb-4">You're offline</h1>
        <p class="text-gray-600 text-lg font-light mb-8">
            No internet connection. Pages and magazines you've opened before may still be available from cache.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <button onclick="window.location.reload()"
                class="bg-brand-600 text-white px-8 py-3.5 rounded-full font-medium hover:bg-brand-700 transition-colors">
                Try again
            </button>
            <a href="{{ route('home') }}"
                class="bg-gray-900 text-white px-8 py-3.5 rounded-full font-medium hover:bg-gray-800 transition-colors">
                Go home
            </a>
        </div>
    </div>
</div>
@endsection
