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
                        <div class="text-xl font-bold font-serif tracking-tight">Radio UNILAG (103.1 FM)</div>
                        <div class="text-xl font-bold font-serif tracking-tight">Amen online radio (Internet)</div>
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
                            Radio UNILAG: 7:00 AM - 7:15 AM
                        </div>
                        <div class="flex items-start text-sm text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 mr-3 mt-0.5"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Amen online radio: 9:00 AM - 9:15 AM
                        </div>
                    </div>
                </div>
            </div>

            <!-- Spotify Podcast Card -->
            <div
                class="group bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-2xl hover:shadow-green-500/10 transition-all duration-300 transform hover:-translate-y-2 flex flex-col">
                <div
                    class="h-48 bg-gradient-to-br from-[#1DB954] to-[#158a3e] flex items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-black/10"></div>
                    <div class="text-center text-white relative z-10">
                        {{-- Spotify logo SVG --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-2 opacity-90" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C5.374 0 0 5.373 0 12s5.374 12 12 12 12-5.373 12-12S18.626 0 12 0zm5.518 17.306c-.216.356-.66.47-1.016.255-2.782-1.7-6.28-2.085-10.407-1.142-.397.09-.795-.156-.886-.553-.09-.397.156-.795.553-.886 4.511-1.031 8.38-.587 11.502 1.32.356.215.47.66.254 1.006zm1.472-3.272c-.271.44-.847.578-1.286.307-3.183-1.957-8.034-2.524-11.806-1.381-.49.145-1.007-.133-1.152-.622-.145-.49.133-1.007.622-1.152 4.305-1.307 9.66-.674 13.314 1.574.44.271.578.847.308 1.274zm.127-3.404c-3.815-2.266-10.11-2.474-13.752-1.369-.585.177-1.203-.152-1.38-.737s.152-1.203.737-1.38c4.186-1.27 11.135-1.025 15.528 1.585.527.313.7.99.387 1.518-.313.527-.99.7-1.52.383z"/>
                        </svg>
                        <div class="text-xl font-bold font-serif tracking-tight">Old Broadcasts</div>
                        <div class="text-sm font-medium opacity-80 tracking-wide">on Spotify</div>
                    </div>
                </div>
                <div class="p-8 flex-1 flex flex-col">
                    <span class="text-xs font-bold tracking-widest text-green-600 uppercase mb-3 block">Podcast Archive</span>
                    <h3 class="text-2xl font-bold font-serif text-gray-900 mb-3 group-hover:text-green-600 transition-colors leading-snug">
                        Faith Broadcasts on Spotify</h3>
                    <p class="text-gray-500 text-sm mb-6 flex-1 leading-relaxed">
                        Catch up on past Word Increase Ministries broadcasts. Listen to powerful teachings and
                        faith-building messages from our archive, available anytime on Spotify.
                    </p>
                    <div class="space-y-3 mb-8">
                        <div class="flex items-start text-sm text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                            </svg>
                            Available on-demand, anytime
                        </div>
                        <div class="flex items-start text-sm text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                            </svg>
                            Stream or download episodes
                        </div>
                    </div>
                    <a href="https://open.spotify.com/show/4mrIULt7smtLjqZoIOaKxR" target="_blank" rel="noopener noreferrer"
                        class="block text-center w-full bg-green-50 text-green-700 font-semibold py-3 px-6 rounded-full hover:bg-[#1DB954] hover:text-white transition-all duration-300 shadow-sm mt-auto flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C5.374 0 0 5.373 0 12s5.374 12 12 12 12-5.373 12-12S18.626 0 12 0zm5.518 17.306c-.216.356-.66.47-1.016.255-2.782-1.7-6.28-2.085-10.407-1.142-.397.09-.795-.156-.886-.553-.09-.397.156-.795.553-.886 4.511-1.031 8.38-.587 11.502 1.32.356.215.47.66.254 1.006zm1.472-3.272c-.271.44-.847.578-1.286.307-3.183-1.957-8.034-2.524-11.806-1.381-.49.145-1.007-.133-1.152-.622-.145-.49.133-1.007.622-1.152 4.305-1.307 9.66-.674 13.314 1.574.44.271.578.847.308 1.274zm.127-3.404c-3.815-2.266-10.11-2.474-13.752-1.369-.585.177-1.203-.152-1.38-.737s.152-1.203.737-1.38c4.186-1.27 11.135-1.025 15.528 1.585.527.313.7.99.387 1.518-.313.527-.99.7-1.52.383z"/>
                        </svg>
                        Listen on Spotify
                    </a>
                </div>
            </div>

            <!-- Faith for breakfast -->
            <div
                class="group bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-2xl hover:shadow-red-500/10 transition-all duration-300 transform hover:-translate-y-2 flex flex-col">
                <div
                    class="h-48 bg-gradient-to-br from-[#FF0000] to-[#cc0000] flex items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-black/10"></div>
                    <div class="text-center text-white relative z-10">
                        {{-- YouTube logo SVG --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-2 opacity-90" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                        <div class="text-xl font-bold font-serif tracking-tight">Virtual</div>
                        <div class="text-xl font-bold font-serif tracking-tight">LIVE on YouTube</div>
                    </div>
                </div>
                <div class="p-8 flex-1 flex flex-col">
                    <span class="text-xs font-bold tracking-widest text-red-600 uppercase mb-3 block">Monthly
                        event</span>
                    <h3
                        class="text-2xl font-bold font-serif text-gray-900 mb-3 group-hover:text-red-600 transition-colors leading-snug">
                        Faith For Breakfast</h3>
                    <p class="text-gray-500 text-sm mb-6 flex-1 leading-relaxed">Join us live for a moment of faith adventure
                        for everyday victory.<br />Come and learn at His feet to boost your faith.</p>

                    <div class="space-y-3 mb-8">
                        <div class="flex items-start text-sm text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 mr-3 mt-0.5"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            3rd Saturday (Jan - Sept)
                        </div>
                        <div class="flex items-start text-sm text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 mr-3 mt-0.5"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Youtube: 9:00 AM - 10:00 AM
                        </div>
                        @php
                            $nextEventDate = null;
                            $now = \Carbon\Carbon::now();
                            $checkDate = $now->copy();
                            
                            for ($i = 0; $i < 24; $i++) {
                                $month = $checkDate->month;
                                if ($month >= 1 && $month <= 9) {
                                    $thirdSaturday = \Carbon\Carbon::parse("third saturday of " . $checkDate->format('F Y'))->setTime(10, 0, 0);
                                    if ($now->lte($thirdSaturday)) {
                                        $nextEventDate = $thirdSaturday;
                                        break;
                                    }
                                }
                                $checkDate->addMonthNoOverflow()->startOfMonth();
                            }
                        @endphp
                        @if($nextEventDate)
                        <div class="flex items-start text-sm text-red-600 font-semibold animate-pulse-subtle">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-500 mr-3 mt-0.5"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            The next faith for breakfast is on {{ $nextEventDate->format('F d Y') }}
                        </div>
                        @endif
                    </div>
                    <a href="https://bit.ly/m/WordIncreaseMinistry" target="_blank" rel="noopener noreferrer"
                        class="block text-center w-full bg-red-50 text-red-700 font-semibold py-3 px-6 rounded-full hover:bg-[#FF0000] hover:text-white transition-all duration-300 shadow-sm mt-auto flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                        Join Online
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection