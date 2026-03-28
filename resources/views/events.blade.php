@extends('layouts.app')

@section('title', 'Events - Word Increase Ministries')
@section('description', 'Join our radio broadcasts and upcoming faith clinics')

@section('content')
<!-- Hero Section -->
<div class="relative overflow-hidden bg-brand-900 border-b border-brand-800/30">
    <div class="absolute -top-40 -right-40 w-96 h-96 rounded-full bg-brand-600/20 blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-40 -left-40 w-96 h-96 rounded-full bg-orange-500/10 blur-3xl pointer-events-none">
    </div>

    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
        <h1 class="text-4xl md:text-6xl font-bold font-serif text-white mb-6">Events & Broadcasts</h1>
        <p class="text-xl text-brand-100/90 max-w-3xl mx-auto font-light leading-relaxed">
            Join us for powerful teachings and faith-building broadcasts.
        </p>
    </div>
</div>

<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <!-- Upcoming Events -->
    <div class="mb-20">
        <h2 class="text-3xl font-bold font-serif text-gray-900 mb-10 flex items-center gap-4">
            Our Broadcast Schedule
            <div class="h-px flex-1 bg-gray-200"></div>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Faith Clinic Radio Card -->
            <div
                class="group bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-2xl hover:shadow-brand-500/10 transition-all duration-300 transform hover:-translate-y-2 flex flex-col">
                <div
                    class="h-48 bg-gradient-to-br from-brand-600 to-orange-500 flex items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-black/10"></div>
                    <div class="text-center text-white relative z-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-2 opacity-90" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                        </svg>
                        <div class="text-xl font-bold font-serif tracking-tight">Radio UNILAG</div>
                        <div class="text-sm font-medium tracking-widest uppercase">103.1 FM</div>
                    </div>
                </div>
                <div class="p-8 flex-1 flex flex-col">
                    <span class="text-xs font-bold tracking-widest text-brand-600 uppercase mb-3 block">Weekly
                        Broadcast</span>
                    <h3
                        class="text-2xl font-bold font-serif text-gray-900 mb-3 group-hover:text-brand-600 transition-colors leading-snug">
                        Faith Clinic Programme</h3>
                    <p class="text-gray-500 text-sm mb-6 flex-1 leading-relaxed">The ministry broadcasts the Faith
                        Clinic programme every Saturday. Endeavour to listen to the clinic section and tell others about
                        it. You will surely be blessed and healed by His teaching Words.</p>

                    <div class="space-y-3 mb-8">
                        <div class="flex items-start text-sm text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 mr-3 mt-0.5"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Every Saturday
                        </div>
                        <div class="flex items-start text-sm text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 mr-3 mt-0.5"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            7:00 AM - 7:15 AM
                        </div>
                    </div>
                    <a href="https://unilag.edu.ng/unilag-radio" target="_blank"
                        class="block text-center w-full bg-brand-50 text-brand-700 font-semibold py-3 px-6 rounded-full hover:bg-brand-600 hover:text-white transition-all duration-300 shadow-sm mt-auto">
                        Listen Online
                    </a>
                </div>
            </div>

            <!-- Faith for breakfast -->
            <div
                class="group bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-2xl hover:shadow-brand-500/10 transition-all duration-300 transform hover:-translate-y-2 flex flex-col">
                <div
                    class="h-48 bg-gradient-to-br from-brand-600 to-orange-500 flex items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-black/10"></div>
                    <div class="text-center text-white relative z-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-2 opacity-90" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                        </svg>
                        <div class="text-xl font-bold font-serif tracking-tight">Virtual</div>
                        <div class="text-sm font-medium tracking-widest uppercase">Youtube</div>
                    </div>
                </div>
                <div class="p-8 flex-1 flex flex-col">
                    <span class="text-xs font-bold tracking-widest text-brand-600 uppercase mb-3 block">Monthly
                        event</span>
                    <h3
                        class="text-2xl font-bold font-serif text-gray-900 mb-3 group-hover:text-brand-600 transition-colors leading-snug">
                        Faith For Breafkast</h3>
                    <p class="text-gray-500 text-sm mb-6 flex-1 leading-relaxed">Join us for a moment of faith adventure
                        for everyday victory.</p>

                    <div class="space-y-3 mb-8">
                        <div class="flex items-start text-sm text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 mr-3 mt-0.5"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            3rd Saturday of every month
                        </div>
                        <div class="flex items-start text-sm text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 mr-3 mt-0.5"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            9:00 AM - 10:00 AM
                        </div>
                    </div>
                    <a href="https://bit.ly/m/WordIncreaseMinistry" target="_blank"
                        class="block text-center w-full bg-brand-50 text-brand-700 font-semibold py-3 px-6 rounded-full hover:bg-brand-600 hover:text-white transition-all duration-300 shadow-sm mt-auto">
                        Join Online
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection