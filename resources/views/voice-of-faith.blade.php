@extends('layouts.app')

@section('title', 'Voice of Faith Magazines - Word Increase Ministries')
@section('description', 'Read our Voice of Faith magazines grouped by year.')

@section('content')
<!-- Hero Section -->
<div class="relative overflow-hidden bg-brand-900 border-b border-brand-800/30">
    <div class="absolute -top-40 -right-40 w-96 h-96 rounded-full bg-brand-600/20 blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-40 -left-40 w-96 h-96 rounded-full bg-orange-500/10 blur-3xl pointer-events-none"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
        <h1 class="text-4xl md:text-6xl font-bold font-serif text-white mb-6">Voice of Faith Magazines</h1>
        <p class="text-xl text-brand-100/90 max-w-3xl mx-auto font-light leading-relaxed">
            Explore our deeply inspiring publications, ordered by year.
        </p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    @if($groupedPdfs->count() > 0)
        @foreach($groupedPdfs as $year => $pdfs)
            <div class="mb-20 last:mb-0">
                <div class="mb-10 flex items-center">
                    <h2 class="text-4xl font-bold font-serif text-brand-900">{{ $year }}</h2>
                    <div class="h-px flex-1 bg-gradient-to-r from-brand-200 to-transparent mx-8"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($pdfs as $pdf)
                        <div class="group bg-white rounded-3xl shadow-sm border border-gray-100 hover:shadow-2xl hover:shadow-brand-500/10 transition-all duration-300 overflow-hidden transform hover:-translate-y-2 flex flex-col">
                            <a href="{{ route('magazine', $pdf) }}" class="block relative overflow-hidden aspect-[3/4]">
                                <img
                                    src="{{ Storage::url($pdf->thumbnail_url) }}"
                                    alt="{{ $pdf->title }}"
                                    class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-in-out"
                                >
                                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-gray-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-8">
                                    <span class="text-white font-medium flex items-center gap-2 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                        Read now 
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                            <div class="p-8 flex-1 flex flex-col bg-white">
                                <span class="text-xs font-bold tracking-widest text-brand-600 uppercase mb-3 block">Edition</span>
                                <h3 class="text-2xl font-bold font-serif text-gray-900 mb-6 group-hover:text-brand-600 transition-colors line-clamp-2 leading-snug">{{ $pdf->title }}</h3>
                                
                                <div class="mt-auto flex items-center justify-between pt-6 border-t border-gray-100">
                                    <a
                                        href="{{ route('magazine', $pdf) }}"
                                        class="inline-flex items-center justify-center bg-brand-50 text-brand-700 hover:bg-brand-600 hover:text-white px-5 py-2.5 text-sm font-semibold rounded-full transition-all duration-300 shadow-sm"
                                    >
                                        View Magazine
                                    </a>
                                    <a
                                        href="{{ Storage::url($pdf->pdf_url) }}"
                                        target="_blank"
                                        class="text-gray-400 hover:text-brand-600 transition-colors p-2 rounded-full hover:bg-brand-50"
                                        title="Download PDF"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    @else
        <!-- Premium Empty State -->
        <div class="text-center py-24 bg-white rounded-3xl border border-gray-100 shadow-sm max-w-3xl mx-auto">
            <div class="mx-auto w-24 h-24 bg-brand-50 rounded-full flex items-center justify-center mb-8 shadow-inner shadow-brand-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-brand-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
            </div>
            <h3 class="text-3xl font-bold font-serif text-gray-900 mb-4">No magazines yet</h3>
            <p class="text-lg text-gray-500 mb-10 max-w-md mx-auto">We're currently preparing our next deeply inspiring publication. Check back soon!</p>
        </div>
    @endif
</div>

<!-- Subscription CTA -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-20">
    <div
        class="bg-gradient-to-br from-brand-50 to-orange-50 rounded-3xl p-8 md:p-12 text-center border border-brand-100 shadow-sm relative overflow-hidden">
        <!-- Decorative blobs -->
        <div class="absolute -top-24 -right-24 w-48 h-48 rounded-full bg-brand-200/50 blur-3xl pointer-events-none">
        </div>
        <div class="absolute -bottom-24 -left-24 w-48 h-48 rounded-full bg-orange-200/50 blur-3xl pointer-events-none">
        </div>

        <div class="relative z-10 max-w-3xl mx-auto">
            <div
                class="mx-auto w-16 h-16 bg-white rounded-full flex items-center justify-center mb-6 shadow-sm border border-brand-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-brand-500" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
            </div>
            <h3 class="text-2xl md:text-4xl font-bold font-serif text-brand-900 mb-4">Get Our Magazine Monthly</h3>
            <p class="text-gray-600 mb-8 text-lg font-light">If you are interested in receiving our Voice of Faith
                teaching magazine, kindly fill the online form below.</p>
            <a href="https://goo.gl/forms/rQSNchzUFeT7USPI2" target="_blank" rel="noopener noreferrer"
                class="inline-flex items-center gap-2 bg-gradient-to-r from-brand-600 to-orange-500 text-white px-8 py-4 rounded-full font-semibold hover:shadow-lg hover:shadow-brand-500/30 transition-all duration-300 transform hover:-translate-y-1">
                Fill Subscription Form
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</div>
@endsection
