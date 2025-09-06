@extends('layouts.app')

@section('title', 'Home - Word Increase Ministries (aka WIM)')
@section('description', 'Voice of faith magazines')

@section('content')
<!-- Hero Section -->
<div class="bg-orange-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-center">
        <h1 class="text-4xl font-bold text-white mb-4">Voice of faith magazines (VOF)</h1>
        <p class="text-xl text-white max-w-3xl mx-auto">
            Discover our monthly VOF magazines
        </p>
    </div>
</div>

<!-- Magazine Grid -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    @if($pdfs->count() > 0)
        <div class="magazine-grid">
            @foreach($pdfs as $pdf)
                <div class="magazine-card bg-white rounded-lg shadow-md overflow-hidden">
                    <a href="{{ route('magazine', $pdf) }}">
                        <img
                            src="{{ Storage::url($pdf->thumbnail_url) }}"
                            alt="{{ $pdf->title }}"
                            class="magazine-thumbnail"
                        >
                    </a>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $pdf->title }}</h3>
                        <div class="flex justify-between items-center">
                            <a
                                href="{{ route('magazine', $pdf) }}"
                                class="bg-blue-600 text-white px-3 py-2 text-sm rounded-md hover:bg-blue-700 transition-colors"
                            >
                                View Magazine
                            </a>
                            <a
                                href="{{ Storage::url($pdf->pdf_url) }}"
                                target="_blank"
                                class="text-blue-600 hover:text-blue-800 font-medium"
                            >
                                Download PDF
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <!-- Empty State -->
        <div class="text-center py-16">
            <div class="mx-auto w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mb-6">
                <x-svg-icon name="document" class="w-12 h-12 text-gray-400" />
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">No magazines yet</h3>
            <p class="text-gray-600 mb-6">Check back soon for our latest publications.</p>
            <a href="{{ route('about') }}" class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 transition-colors">
                Learn More
            </a>
        </div>
    @endif
</div>
@endsection
