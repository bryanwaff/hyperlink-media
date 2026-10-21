@extends('layouts.app')

@section('title', 'Hyperlink Media Services - We Visualize Your Imagination')
@section('meta_description', 'Your trusted event partner in East Africa for live-streaming, audiovisual solutions, multi-camera videography, staging, and documentary production.')

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-b from-slate-100 via-white to-slate-50 py-20 lg:py-28">
        <!-- Background decorative gradients -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-7xl h-full pointer-events-none opacity-40">
            <div class="absolute -top-24 left-10 w-96 h-96 bg-cyan/15 rounded-full blur-3xl"></div>
            <div class="absolute top-1/3 right-10 w-96 h-96 bg-orange/10 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Hero Content -->
                <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-orange/10 text-orange text-xs font-semibold tracking-wide uppercase">
                        <span class="w-2 h-2 rounded-full bg-orange animate-pulse"></span>
                        Technical Event Production Specialists &bull; East Africa
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-navy tracking-tight leading-[1.15]">
                        We Visualize <span class="text-transparent bg-clip-text bg-orange">Your Imagination</span>
                    </h1>

                    <p class="text-lg sm:text-xl text-slate-600 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        At <span class="font-semibold text-navy">Hyperlink Media Services</span>, we are your trusted event partner for successful, engaging meetings and spectacular live events. From creative lighting, sound, and LED staging to pan-African hybrid live-streaming and high-level documentary production, we turn event concepts into authentic, inspiring realities.
                    </p>

                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-2">
                        <a href="{{ route('services') }}"
                           class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl text-base font-semibold text-white bg-orange hover:bg-orange/90 shadow-lg shadow-orange/25 hover:shadow-xl transition-all duration-200">
                            <span>Explore Our Services</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                        <a href="{{ route('projects') }}"
                           class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl text-base font-semibold text-navy bg-white border border-slate-200 hover:border-navy hover:bg-slate-50 shadow-xs transition-all duration-200">
                            <span>View Landmark Projects</span>
                        </a>
                    </div>

                    <!-- Client Trust Badges -->
                    <div class="pt-6 flex flex-wrap items-center justify-center lg:justify-start gap-6 text-sm text-slate-500">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-cyan" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Pan-African Hybrid Reach</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-orange" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Turnkey Audio-Visual & Staging</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-cyan" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Presidential & Summit Quality</span>
                        </div>
                    </div>
                </div>

                <!-- Hero Graphic Card: Live Production Control Suite -->
                <div class="lg:col-span-5">
                    <div class="relative mx-auto max-w-md lg:max-w-none">
                        <div class="relative rounded-2xl bg-gradient-to-tr from-navy to-slate-900 p-8 text-white shadow-2xl border border-slate-700/50 overflow-hidden">
                            <!-- Background accent glow -->
                            <div class="absolute -top-12 -right-12 w-48 h-48 bg-orange/20 rounded-full blur-2xl"></div>
                            <div class="absolute -bottom-12 -left-12 w-48 h-48 bg-cyan/20 rounded-full blur-2xl"></div>

                            <div class="relative space-y-6">
                                <div class="flex items-center justify-between border-b border-slate-700/70 pb-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-3 h-3 rounded-full bg-red-500 animate-ping"></div>
                                        <span class="text-xs font-mono font-semibold text-red-400 uppercase tracking-wider">LIVE ON AIR</span>
                                    </div>
                                    <span class="text-xs font-mono text-cyan">hms-broadcast-control::v4.2</span>
                                </div>

                                <div class="space-y-4">
                                    <div class="p-4 rounded-xl bg-white/5 border border-white/10 backdrop-blur-xs">
                                        <div class="flex justify-between items-center text-xs text-slate-400 mb-1">
                                            <span>Pan-African Hybrid Broadcast</span>
                                            <span class="text-green-400 font-semibold">100% Multi-Room Sync</span>
                                        </div>
                                        <div class="w-full bg-slate-800 rounded-full h-2">
                                            <div class="bg-gradient-to-r from-cyan to-orange h-2 rounded-full w-[95%]"></div>
                                        </div>
                                    </div>

                                    <div class="p-4 rounded-xl bg-white/5 border border-white/10 backdrop-blur-xs flex items-center justify-between">
                                        <div>
                                            <p class="text-xs text-slate-400">Multi-Camera Production</p>
                                            <p class="text-xl font-bold text-white">4K UHD Vision Mixing</p>
                                        </div>
                                        <div class="w-10 h-10 rounded-lg bg-orange/20 flex items-center justify-center text-orange">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="p-4 rounded-xl bg-white/5 border border-white/10 backdrop-blur-xs flex items-center justify-between">
                                        <div>
                                            <p class="text-xs text-slate-400">Audio-Visual & Staging</p>
                                            <p class="text-xl font-bold text-cyan">Line Arrays &bull; LED Video Walls</p>
                                        </div>
                                        <div class="w-10 h-10 rounded-lg bg-cyan/20 flex items-center justify-center text-cyan">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <div class="pt-2 text-center">
                                    <a href="{{ route('contact') }}" class="text-xs text-slate-300 hover:text-orange underline underline-offset-4 transition-colors">
                                        Book an event technical site audit & consultation &rarr;
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Metrics Stats Strip -->
    <section class="bg-navy text-white py-12 border-y border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-slate-800">
                <div class="pt-4 md:pt-0">
                    <p class="text-3xl sm:text-4xl font-extrabold text-orange">500+</p>
                    <p class="text-sm text-slate-400 mt-1 uppercase tracking-wider font-medium">Events & Summits Delivered</p>
                </div>
                <div class="pt-4 md:pt-0">
                    <p class="text-3xl sm:text-4xl font-extrabold text-cyan">100%</p>
                    <p class="text-sm text-slate-400 mt-1 uppercase tracking-wider font-medium">Hybrid Stream Reliability</p>
                </div>
                <div class="pt-4 md:pt-0">
                    <p class="text-3xl sm:text-4xl font-extrabold text-white">Decades</p>
                    <p class="text-sm text-slate-400 mt-1 uppercase tracking-wider font-medium">Collective Production Experience</p>
                </div>
                <div class="pt-4 md:pt-0">
                    <p class="text-3xl sm:text-4xl font-extrabold text-orange">Pan-African</p>
                    <p class="text-sm text-slate-400 mt-1 uppercase tracking-wider font-medium">Regional & Global Reach</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Capabilities Overview -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-orange">What We Do</span>
                <h2 class="text-3xl sm:text-4xl font-bold text-navy mt-2 mb-4">Complete Technical Event Production & Media Services</h2>
                <p class="text-slate-600 text-lg">
                    From stage engineering and intelligent lighting to 4K multi-camera broadcasting and documentary filmmaking, our multidisciplinary team delivers world-class execution across East Africa.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1: Event Live-Streaming -->
                <div class="group p-8 rounded-2xl bg-slate-50 hover:bg-white border border-slate-200/80 hover:border-cyan/40 hover:shadow-xl transition-all duration-300">
                    <div class="w-12 h-12 rounded-xl bg-cyan/10 text-cyan flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-cyan group-hover:text-white transition-all duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy mb-3 group-hover:text-cyan transition-colors">Event Live-Streaming</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">
                        Pan-African and global hybrid broadcasts, multi-room technical synchronization, interactive delegate Q&A portals, and low-latency virtual platforms.
                    </p>
                    <a href="{{ route('services') }}#live-streaming" class="inline-flex items-center text-sm font-semibold text-cyan hover:text-navy transition-colors">
                        Learn more &rarr;
                    </a>
                </div>

                <!-- Service 2: Audio-Visual Solutions -->
                <div class="group p-8 rounded-2xl bg-slate-50 hover:bg-white border border-slate-200/80 hover:border-orange/40 hover:shadow-xl transition-all duration-300">
                    <div class="w-12 h-12 rounded-xl bg-orange/10 text-orange flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-orange group-hover:text-white transition-all duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy mb-3 group-hover:text-orange transition-colors">Audio-Visual Solutions</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">
                        State-of-the-art staging, intelligent concert and architectural lighting, crystal-clear line-array sound systems, and ultra-high-definition LED video walls.
                    </p>
                    <a href="{{ route('services') }}#audio-visual" class="inline-flex items-center text-sm font-semibold text-orange hover:text-navy transition-colors">
                        Learn more &rarr;
                    </a>
                </div>

                <!-- Service 3: Multi-Camera Videography -->
                <div class="group p-8 rounded-2xl bg-slate-50 hover:bg-white border border-slate-200/80 hover:border-cyan/40 hover:shadow-xl transition-all duration-300">
                    <div class="w-12 h-12 rounded-xl bg-cyan/10 text-cyan flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-cyan group-hover:text-white transition-all duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy mb-3 group-hover:text-cyan transition-colors">Videography & Live Multi-Cam</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">
                        High-definition 4K broadcast cameras, jib & crane operators, live vision mixing, wireless feeds, and multi-location feed management for high-stakes events.
                    </p>
                    <a href="{{ route('services') }}#videography" class="inline-flex items-center text-sm font-semibold text-cyan hover:text-navy transition-colors">
                        Learn more &rarr;
                    </a>
                </div>

                <!-- Service 4: Documentary & Archiving -->
                <div class="group p-8 rounded-2xl bg-slate-50 hover:bg-white border border-slate-200/80 hover:border-orange/40 hover:shadow-xl transition-all duration-300">
                    <div class="w-12 h-12 rounded-xl bg-orange/10 text-orange flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-orange group-hover:text-white transition-all duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy mb-3 group-hover:text-orange transition-colors">Documentary & Content Creation</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">
                        Compelling conference highlight films, institutional mini-documentaries, executive interviews, and media archival assets for international partners.
                    </p>
                    <a href="{{ route('services') }}#documentary" class="inline-flex items-center text-sm font-semibold text-orange hover:text-navy transition-colors">
                        Learn more &rarr;
                    </a>
                </div>

                <!-- Service 5: Commercial & Event Photography -->
                <div class="group p-8 rounded-2xl bg-slate-50 hover:bg-white border border-slate-200/80 hover:border-cyan/40 hover:shadow-xl transition-all duration-300">
                    <div class="w-12 h-12 rounded-xl bg-cyan/10 text-cyan flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-cyan group-hover:text-white transition-all duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy mb-3 group-hover:text-cyan transition-colors">Photography & Media Hub</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">
                        VIP protocol and high-level dignitary photography, real-time social media image feeds, press distribution kits, and exhibition showcase photography.
                    </p>
                    <a href="{{ route('services') }}#photography" class="inline-flex items-center text-sm font-semibold text-cyan hover:text-navy transition-colors">
                        Learn more &rarr;
                    </a>
                </div>

                <!-- Service 6: Crew Sourcing & Staging -->
                <div class="group p-8 rounded-2xl bg-gradient-to-br from-navy to-slate-900 text-white border border-slate-800 shadow-xl flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-white/10 text-orange flex items-center justify-center mb-6">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Crew Sourcing & Technical Staging</h3>
                        <p class="text-slate-300 text-sm leading-relaxed mb-6">
                            Complete staffing of certified technical directors, audio engineers, lighting designers, vision mixers, and VIP protocol media handlers.
                        </p>
                    </div>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-5 py-2.5 rounded-lg bg-orange hover:bg-orange/90 text-white text-sm font-semibold transition-all">
                        Request Technical Crew
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Landmark Projects Showcase (Real Client Work from Company Profile) -->
    <section class="py-20 bg-slate-100/70 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-orange">Proven Execution</span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-navy mt-1">Featured Landmark Projects</h2>
                    <p class="text-slate-600 text-sm mt-1 max-w-xl">
                        Trusted by the African Union, Kenyan Government Ministries, international development agencies, and professional bodies.
                    </p>
                </div>
                <div class="mt-4 md:mt-0">
                    <a href="{{ route('projects') }}" class="inline-flex items-center gap-1.5 text-sm font-semibold text-navy hover:text-orange transition-colors">
                        <span>View all landmark projects</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Landmark Project 1: AUF2 -->
                <div class="group rounded-2xl bg-white border border-slate-200 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col">
                    <div class="h-48 bg-gradient-to-tr from-navy to-slate-800 flex items-center justify-center p-6 relative overflow-hidden">
                        <div class="absolute inset-0 bg-cyan/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <div class="text-center">
                            <span class="px-3 py-1 rounded-full bg-cyan/20 text-cyan text-xs font-semibold">Pan-African Hybrid Broadcast</span>
                            <h4 class="text-white text-xl font-bold mt-2">2nd Africa Urban Forum (AUF2)</h4>
                            <p class="text-xs text-slate-300 mt-1">AUC &bull; Government of Kenya &bull; UN-Habitat</p>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <p class="text-slate-600 text-sm mb-4 leading-relaxed">
                                Managed pan-African hybrid broadcast, multi-room technical management, VIP protocol media, and archival documentary production for African Heads of State and Ministers in Nairobi.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="text-xs px-2.5 py-0.5 rounded-md bg-slate-100 text-slate-700">Multi-Room Hybrid</span>
                                <span class="text-xs px-2.5 py-0.5 rounded-md bg-slate-100 text-slate-700">Protocol Media</span>
                                <span class="text-xs px-2.5 py-0.5 rounded-md bg-slate-100 text-slate-700">Live Archival</span>
                            </div>
                        </div>
                        <a href="{{ route('projects') }}" class="text-sm font-semibold text-orange hover:text-navy transition-colors inline-flex items-center gap-1">
                            Project details &rarr;
                        </a>
                    </div>
                </div>

                <!-- Landmark Project 2: WASPA Conference -->
                <div class="group rounded-2xl bg-white border border-slate-200 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col">
                    <div class="h-48 bg-gradient-to-tr from-slate-900 via-navy to-orange/40 flex items-center justify-center p-6 relative overflow-hidden">
                        <div class="text-center">
                            <span class="px-3 py-1 rounded-full bg-orange/20 text-orange text-xs font-semibold">Hybrid Conference & Exhibition</span>
                            <h4 class="text-white text-xl font-bold mt-2">Kenya Water & Sanitation Expo</h4>
                            <p class="text-xs text-slate-300 mt-1">Ministry of Water & Irrigation &bull; WASPA</p>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <p class="text-slate-600 text-sm mb-4 leading-relaxed">
                                Delivered at PrideInn Paradise Mombasa. Seamlessly integrated physical panel discussions with virtual international delegates, high-stakes Cabinet Secretary keynotes, and technical exhibition media.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="text-xs px-2.5 py-0.5 rounded-md bg-slate-100 text-slate-700">PrideInn Mombasa</span>
                                <span class="text-xs px-2.5 py-0.5 rounded-md bg-slate-100 text-slate-700">Multi-Camera OB</span>
                                <span class="text-xs px-2.5 py-0.5 rounded-md bg-slate-100 text-slate-700">Exhibitor Hub</span>
                            </div>
                        </div>
                        <a href="{{ route('projects') }}" class="text-sm font-semibold text-orange hover:text-navy transition-colors inline-flex items-center gap-1">
                            Project details &rarr;
                        </a>
                    </div>
                </div>

                <!-- Landmark Project 3: ODPC Data Privacy Conference -->
                <div class="group rounded-2xl bg-white border border-slate-200 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col">
                    <div class="h-48 bg-gradient-to-tr from-slate-800 to-navy flex items-center justify-center p-6 relative overflow-hidden">
                        <div class="text-center">
                            <span class="px-3 py-1 rounded-full bg-green-500/20 text-green-400 text-xs font-semibold">High-Level Broadcast & Documentary</span>
                            <h4 class="text-white text-xl font-bold mt-2">Data Privacy Conference (ODPC)</h4>
                            <p class="text-xs text-slate-300 mt-1">Office of Data Protection Commissioner</p>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <p class="text-slate-600 text-sm mb-4 leading-relaxed">
                                Provided high-level broadcast management, documentary production, and hybrid engagement for global data regulators, academic communities, and tech leaders in Mombasa under "Trust the Data, Drive the Future."
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="text-xs px-2.5 py-0.5 rounded-md bg-slate-100 text-slate-700">ODPC Kenya</span>
                                <span class="text-xs px-2.5 py-0.5 rounded-md bg-slate-100 text-slate-700">Broadcast Rig</span>
                                <span class="text-xs px-2.5 py-0.5 rounded-md bg-slate-100 text-slate-700">Live Documentary</span>
                            </div>
                        </div>
                        <a href="{{ route('projects') }}" class="text-sm font-semibold text-orange hover:text-navy transition-colors inline-flex items-center gap-1">
                            Project details &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us / The Hyperlink Advantage -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-orange">The Hyperlink Advantage</span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-navy">Why Leading Organizations Partner With Us</h2>
                    <p class="text-slate-600 text-base leading-relaxed">
                        We don't just supply equipment; we orchestrate flawless event experiences. Our team brings decades of collective experience in the events industry, working on all kinds of events for big businesses, international conferences, sophisticated gala dinners, product launches, and concert tours.
                    </p>

                    <div class="space-y-4 pt-2">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-orange/10 text-orange flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-navy text-base">Decades of Technical Mastery</h4>
                                <p class="text-slate-600 text-sm">Seasoned technical directors and engineers who know how to take your event concept and transform it into something authentic and inspiring.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-cyan/10 text-cyan flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-navy text-base">Pan-African Multi-Location Sync</h4>
                                <p class="text-slate-600 text-sm">Seamless dual-venue and multi-room hybrid broadcasts connecting local physical audiences with global stakeholders with zero disruption.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-orange/10 text-orange flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-navy text-base">Complete In-House AV Inventory</h4>
                                <p class="text-slate-600 text-sm">Direct access to industry-standard audio gear, digital sound consoles, line-array speakers, LED walls, and broadcast OB equipment.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Highlight Card -->
                <div class="rounded-3xl bg-slate-900 p-8 sm:p-10 text-white relative shadow-2xl border border-slate-800">
                    <div class="flex items-center gap-1 text-orange mb-6">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @endfor
                    </div>
                    <blockquote class="text-lg sm:text-xl font-medium leading-relaxed text-slate-200 mb-8">
                        &ldquo;Hyperlink Media Services demonstrated outstanding technical mastery and professionalism throughout our hybrid conference. Their multi-camera broadcast and multi-room audio-visual synchronization ensured our international and physical delegates engaged effortlessly.&rdquo;
                    </blockquote>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-tr from-cyan to-orange flex items-center justify-center font-bold text-white text-base">
                            HM
                        </div>
                        <div>
                            <p class="font-bold text-white">Conference Technical Secretariat</p>
                            <p class="text-xs text-slate-400">Pan-African Summit & Regional Forums</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom CTA Strip -->
    <section class="bg-gradient-to-r from-navy via-slate-900 to-navy py-16 text-white text-center relative overflow-hidden">
        <div class="absolute inset-0 bg-orange/5 pointer-events-none"></div>
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">
                Ready to Visualize Your Next Spectacular Event?
            </h2>
            <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto">
                Schedule a consultation or site audit with our technical production team in Nairobi today. Let&rsquo;s craft an inspiring and memorable live experience for your guests.
            </p>
            <div class="pt-2">
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl text-base font-bold text-white bg-orange hover:bg-orange/90 shadow-xl shadow-orange/30 transition-all duration-200">
                    <span>Request Technical Proposal</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endsection
