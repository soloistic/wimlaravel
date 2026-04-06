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
                    <h2 class="text-3xl font-bold font-serif text-brand-900">{{ $year }}</h2>
                    <div class="h-px flex-1 bg-gradient-to-r from-brand-200 to-transparent mx-8"></div>
                </div>

                <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-x-4 gap-y-10">
                    @foreach($pdfs as $pdf)
                        <div class="group flex flex-col">
                            <!-- Thumbnail with Hover Overlay -->
                            <div class="relative aspect-[3/4] rounded-xl overflow-hidden shadow-sm border border-gray-100 group-hover:shadow-xl transition-all duration-500 bg-gray-50">
                                <img
                                    src="{{ Storage::url($pdf->thumbnail_url) }}"
                                    alt="{{ $pdf->title }}"
                                    class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-in-out"
                                >
                                
                                <!-- Action Overlay -->
                                <div class="absolute inset-0 bg-brand-900/60 opacity-0 group-hover:opacity-100 transition-all duration-300 backdrop-blur-[2px] flex items-center justify-center gap-2 sm:gap-3">
                                    <a href="{{ route('magazine', $pdf) }}" 
                                       class="p-2 sm:p-2.5 bg-white rounded-full text-brand-600 hover:bg-brand-50 hover:scale-110 transition-all duration-200 shadow-lg"
                                       title="Read Magazine">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </a>
                                    <a href="{{ Storage::url($pdf->pdf_url) }}" 
                                       target="_blank"
                                       class="p-2 sm:p-2.5 bg-white rounded-full text-brand-600 hover:bg-brand-50 hover:scale-110 transition-all duration-200 shadow-lg"
                                       title="Download PDF">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Compact Title -->
                            <div class="mt-3 px-1">
                                <h3 class="text-[10px] sm:text-xs font-bold text-gray-900 line-clamp-2 group-hover:text-brand-600 transition-colors leading-tight text-center">
                                    {{ $pdf->title }}
                                </h3>
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
                teaching magazine, kindly reach out to us via email or Whatsapp.</p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
            <a href="mailto:wordincreaseministry@gmail.com" class="w-full sm:w-auto bg-brand-600 text-white px-8 py-3.5 rounded-full font-medium hover:bg-brand-700 hover:shadow-lg hover:shadow-brand-600/30 transition-all duration-300 flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                Email Us
            </a>
            <a href="tel:+2348139323232" class="w-full sm:w-auto bg-gray-900 text-white px-8 py-3.5 rounded-full font-medium hover:bg-gray-800 hover:shadow-lg hover:shadow-gray-900/30 transition-all duration-300 flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
  <path d="M20.52 3.48A11.79 11.79 0 0 0 12.01 0C5.39 0 .02 5.37.02 12c0 2.12.55 4.18 1.6 6L0 24l6.19-1.62A11.93 11.93 0 0 0 12.01 24c6.62 0 11.99-5.37 11.99-12 0-3.2-1.25-6.2-3.48-8.52zM12.01 21.8c-1.8 0-3.55-.48-5.08-1.39l-.36-.21-3.67.96.98-3.58-.23-.37a9.77 9.77 0 0 1-1.5-5.21c0-5.4 4.4-9.8 9.86-9.8 2.63 0 5.1 1.02 6.96 2.88a9.76 9.76 0 0 1 2.88 6.92c0 5.4-4.4 9.8-9.86 9.8zm5.42-7.36c-.3-.15-1.77-.87-2.04-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.17-.17.2-.35.22-.65.07-.3-.15-1.28-.47-2.43-1.5-.9-.8-1.5-1.78-1.67-2.08-.17-.3-.02-.46.13-.61.14-.14.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.67-1.62-.92-2.22-.24-.58-.49-.5-.67-.5h-.57c-.2 0-.52.07-.8.37-.27.3-1.05 1.02-1.05 2.5s1.08 2.9 1.23 3.1c.15.2 2.12 3.24 5.14 4.54.72.31 1.28.5 1.72.64.72.23 1.38.2 1.9.12.58-.09 1.77-.72 2.02-1.42.25-.7.25-1.3.17-1.42-.07-.12-.27-.2-.57-.35z"/>
</svg>
                +234 813 932 3232
            </a>
            </div>
        </div>
    </div>
</div>
@endsection
