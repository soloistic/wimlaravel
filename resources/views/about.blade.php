@extends('layouts.app')

@section('title', 'About Us - Word Increase Ministries')
@section('description', 'Learn about Word Increase Ministries, our mission, and our beliefs')

@section('content')
<!-- Hero Section -->
<div class="relative overflow-hidden bg-brand-900 border-b border-brand-800/30">
    <div class="absolute -top-40 -right-40 w-96 h-96 rounded-full bg-brand-600/20 blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-40 -left-40 w-96 h-96 rounded-full bg-orange-500/10 blur-3xl pointer-events-none"></div>
    
    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
        <h1 class="text-4xl md:text-6xl font-bold font-serif text-white mb-6">About Us</h1>
        <p class="text-xl text-brand-100/90 max-w-3xl mx-auto font-light leading-relaxed">
            Welcome to Word Increase Ministries. This ministry was set up by Divine mandate in the year 2000 to reach out to many souls.
        </p>
    </div>
</div>

<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <!-- Our Story -->
    <div class="mb-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold font-serif text-gray-900 mb-6">Our Mandate</h2>
                <p class="text-gray-700 leading-relaxed mb-4 text-lg">
                    This ministry was set up by Divine mandate in the year 2000. It is set up to reach out to many souls in various ways including:
                </p>
                <ul class="list-disc list-inside text-gray-700 space-y-3 mb-6 marker:text-brand-500 text-lg">
                    <li>Publication of faith books</li>
                    <li>Publication and free distribution of Voice of Faith teaching magazine</li>
                    <li>Organization of seminars, conferences and faith meetings</li>
                </ul>
                <p class="text-gray-700 leading-relaxed text-lg">
                    The focus of the ministry is majorly in three folds: 
                    <strong class="text-brand-600">Faith in the Word</strong>, 
                    <strong class="text-brand-600">The potency of God's Word</strong>, and 
                    <strong class="text-brand-600">The Holy Spirit</strong>.
                </p>
            </div>
            <div class="bg-gradient-to-br from-brand-600 to-orange-500 rounded-3xl shadow-xl shadow-brand-500/20 p-10 text-white transform hover:-translate-y-2 transition-transform duration-500">
                <h3 class="text-2xl font-bold font-serif mb-4 flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brand-100" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                    Our Mission
                </h3>
                <p class="text-lg text-brand-50 leading-relaxed mb-8">
                    Word Increase Ministries is called to occupy the teaching ministry. We are sent to edify the body of Christ, teach them the indepth of the word of Faith and perfecting the saints.
                </p>
                <div class="w-full h-px bg-white/20 mb-8"></div>
                <h3 class="text-2xl font-bold font-serif mb-4 flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brand-100" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                    The Five Fold Ministry
                </h3>
                <p class="text-lg text-brand-50 leading-relaxed">
                    The Bible says: "And he gave some, apostles; and some, prophets; and some, evangelists; and some, pastors and teachers; For the perfecting of the saints..." (Ephesians 4:11-12). We believe in the five fold ministry.
                </p>
            </div>
        </div>
    </div>

    <!-- What We Believe -->
    <div class="mb-20">
        <h2 class="text-3xl font-bold font-serif text-gray-900 text-center mb-12">What We Believe</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center group bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-brand-500/10 transition-all duration-300 transform hover:-translate-y-1">
                <div class="bg-brand-50 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold font-serif text-brand-600">1</span>
                </div>
                <h3 class="text-xl font-bold font-serif text-gray-900 mb-4">The Power of the Word</h3>
                <p class="text-gray-600 leading-relaxed">
                    This ministry believes that the Word of God without the aid of any sort is sufficiently powerful to bring everyman to his place of destiny through faith.
                </p>
            </div>

            <div class="text-center group bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-brand-500/10 transition-all duration-300 transform hover:-translate-y-1">
                <div class="bg-brand-50 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold font-serif text-brand-600">2</span>
                </div>
                <h3 class="text-xl font-bold font-serif text-gray-900 mb-4">Faith Produces Results</h3>
                <p class="text-gray-600 leading-relaxed">
                    We believe that Faith is the substance that produces results. It is faith that makes hope to become a reality.
                </p>
            </div>

            <div class="text-center group bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-brand-500/10 transition-all duration-300 transform hover:-translate-y-1">
                <div class="bg-brand-50 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold font-serif text-brand-600">3</span>
                </div>
                <h3 class="text-xl font-bold font-serif text-gray-900 mb-4">Pleasing God</h3>
                <p class="text-gray-600 leading-relaxed">
                    We believe that the only way to please God is by faith. It is non-negotiable.
                </p>
            </div>
        </div>
    </div>

    <!-- Contact Information -->
    <div class="bg-white rounded-3xl shadow-lg shadow-gray-200/40 p-12 text-center max-w-4xl mx-auto border border-gray-50">
        <h2 class="text-3xl font-bold font-serif text-gray-900 mb-6">Get in Touch</h2>
        <p class="text-gray-500 text-lg mb-8 max-w-2xl mx-auto leading-relaxed">
            We'd love to hear from you. Reach out to us through email or via Whatsapp.
        </p>
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
@endsection
