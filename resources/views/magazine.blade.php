@extends('layouts.app')

@section('title', $pdf->title . ' - Word Increase Ministries')
@section('description', 'Read ' . $pdf->title . ' online or download the PDF.')

@section('content')
<!-- Hero Section -->
<div class="bg-orange-800">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-center">
        <h1 class="text-4xl font-bold text-white">{{ $pdf->title }}</h1>
    </div>
</div>

<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Back Button -->
    <div class="mb-8">
        <a href="{{ route('home') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800">
            <x-svg-icon name="arrow-left" class="w-5 h-5 mr-2" />
            Back to Voice of Faith magazines
        </a>
    </div>

    <!-- Magazine Header -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
        <div class="md:flex">
            <div class="md:w-1/3">
                <img
                    src="{{ Storage::url($pdf->thumbnail_url) }}"
                    alt="{{ $pdf->title }}"
                    class="w-full h-96 md:h-full object-cover"
                    onerror="this.src='https://via.placeholder.com/400x600/cccccc/666666?text=No+Image'"
                >
            </div>
            <div class="md:w-2/3 p-8 flex flex-col justify-center">
                <div class="space-y-4">
                    <a
                        href="{{ Storage::url($pdf->pdf_url) }}"
                        target="_blank"
                        class="inline-flex items-center bg-blue-600 text-white px-4 py-2 text-sm rounded-lg hover:bg-blue-700 transition-colors"
                    >
                        <x-svg-icon name="download" class="w-5 h-5 mr-2" />
                        Download PDF
                    </a>

                    <div class="text-sm text-gray-500">
                        <p>Click the button above to download and read this magazine offline.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PDF Viewer Section -->
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Read Online</h2>
        <div class="bg-gray-100 rounded-lg p-8 text-center">
            <iframe
                src="{{ Storage::url($pdf->pdf_url) }}#toolbar=1&navpanes=1&scrollbar=1"
                width="100%"
                height="600"
                class="rounded-lg"
                style="border: none;"
            >
                <p>Your browser does not support PDFs.
                    <a href="{{ Storage::url($pdf->pdf_url) }}" target="_blank">Click here to download the PDF</a>
                </p>
            </iframe>
        </div>
    </div>

    <!-- Share Section -->
    <div class="bg-white rounded-lg shadow-lg p-6 mt-8">
        <h3 class="text-xl font-bold text-gray-900 mb-4">Share this Magazine</h3>
        <div class="flex space-x-4">
            <a href="#" class="bg-blue-600 text-white px-3 py-2 text-sm rounded-lg hover:bg-blue-700 transition-colors">
                Share on Facebook
            </a>
            <a href="#" class="bg-pink-500 text-white px-3 py-2 text-sm rounded-lg hover:bg-pink-600 transition-colors">
                Share on Instagram
            </a>
        </div>
    </div>
</div>
@endsection
