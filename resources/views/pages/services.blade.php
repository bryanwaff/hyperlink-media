@extends('layouts.app')

@section('title', 'Our Services - Technical Event Production & Media')
@section('meta_description', 'Explore Hyperlink Media Services capabilities: event live-streaming, audio-visual solutions, multi-camera videography, documentary production, photography, and crew sourcing across East Africa.')

@section('content')
    <!-- Services Hero Banner -->
    <section class="bg-navy text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 opacity-20 pointer-events-none">
            <div class="absolute top-0 right-1/4 w-96 h-96 bg-cyan rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-1/4 w-96 h-96 bg-orange rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block px-3.5 py-1 rounded-full bg-orange/20 text-orange text-xs font-semibold tracking-wider uppercase mb-4">
                What We Offer
            </span>
            <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight max-w-3xl mx-auto leading-tight">
                Comprehensive Technical <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange to-cyan">Event Production</span>
            </h1>
            <p class="text-slate-300 text-lg max-w-2xl mx-auto mt-4 leading-relaxed">
                We are technical event production specialists who love nothing more than bringing to life spectacular live events to impress an audience.
            </p>
        </div>
    </section>

    <!-- Services Deep Dive -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-24">

            <!-- Service 1: Event Live-Streaming -->
            <div id="live-streaming" class="scroll-mt-28 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-5 order-2 lg:order-1">
                    <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-lg space-y-6">
                        <div class="w-14 h-14 rounded-2xl bg-cyan/10 text-cyan flex items-center justify-center">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h4 class="text-2xl font-bold text-navy">Live-Streaming Highlights</h4>
                        <div class="grid grid-cols-2 gap-3 text-sm font-medium text-slate-700">
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-cyan"></span> Pan-African Broadcast
                            </div>
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-orange"></span> Multi-Room Sync
                            </div>
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-cyan"></span> Dual-Venue Linking
                            </div>
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-orange"></span> Interactive Delegate Q&A
                            </div>
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-cyan"></span> Dedicated CDN / Cloud
                            </div>
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-orange"></span> Redundant Backups
                            </div>
                        </div>
                        <div class="pt-2">
                            <a href="{{ route('contact') }}?service=live-streaming" class="w-full inline-flex items-center justify-center px-6 py-3 rounded-xl text-sm font-bold text-white bg-navy hover:bg-slate-800 transition-colors">
                                Inquire About Live-Streaming &rarr;
                            </a>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 order-1 lg:order-2 space-y-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-cyan">Broadcast Engineering</span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-navy">Event Live-Streaming & Hybrid Broadcast</h2>
                    <p class="text-slate-600 text-base leading-relaxed">
                        We deliver broadcast-grade live-streaming infrastructure that bridges physical venues across East Africa with regional and global virtual delegates. From presidential inaugurations and Pan-African summits to corporate shareholder meetings, our broadcast systems guarantee zero downtime.
                    </p>

                    <div class="space-y-3 pt-2">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-cyan mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <strong class="text-navy">Pan-African Hybrid Broadcast:</strong> Seamless multi-lingual feeds, high-capacity simultaneous viewer handling, and secure virtual attendee portals.
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-cyan mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <strong class="text-navy">Multi-Room & Dual-Venue Synchronization:</strong> Real-time bi-directional audio/video relay between parallel breakout halls and multiple physical properties.
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-cyan mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <strong class="text-navy">Interactive Virtual Platforms:</strong> Integrated real-time audience Q&A, digital polling, remote speaker video linkups, and instant session recordings.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 2: Audio-Visual Solutions -->
            <div id="audio-visual" class="scroll-mt-28 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 space-y-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-orange">Technical Staging & Acoustics</span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-navy">Audio-Visual Solutions, Staging & Lighting</h2>
                    <p class="text-slate-600 text-base leading-relaxed">
                        We transform any venue into a captivating stage environment. Our technical inventory includes high-fidelity sound systems, intelligent architectural lighting, custom stage designs, and high-resolution LED screens engineered for crystal-clear visibility.
                    </p>

                    <div class="space-y-3 pt-2">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-orange mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <strong class="text-navy">Creative Lighting Design:</strong> Moving heads, wash lights, beam fixtures, profile spots, and mood lighting programmed to match your brand palette.
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-orange mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <strong class="text-navy">Line-Array Sound & Digital Consoles:</strong> Feedback-free, broadcast-pure audio tuning for multi-thousand delegate auditoriums and outdoor stadiums.
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-orange mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <strong class="text-navy">Ultra-HD LED Walls & Stage Fabrication:</strong> Seamless high-pitch indoor and outdoor LED displays, speaker podiums, backdrops, and safety rigging.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5">
                    <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-lg space-y-6">
                        <div class="w-14 h-14 rounded-2xl bg-orange/10 text-orange flex items-center justify-center">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <h4 class="text-2xl font-bold text-navy">AV Equipment Fleet</h4>
                        <div class="grid grid-cols-2 gap-3 text-sm font-medium text-slate-700">
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-orange"></span> Line Arrays
                            </div>
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-cyan"></span> Digital Mixers
                            </div>
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-orange"></span> P2.6 / P3.9 LED
                            </div>
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-cyan"></span> DMX Moving Lights
                            </div>
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-orange"></span> Wireless Mics
                            </div>
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-cyan"></span> Stage Trussing
                            </div>
                        </div>
                        <div class="pt-2">
                            <a href="{{ route('contact') }}?service=audio-visual" class="w-full inline-flex items-center justify-center px-6 py-3 rounded-xl text-sm font-bold text-white bg-orange hover:bg-orange/90 transition-colors">
                                Inquire About Audio-Visual Solutions &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 3: Multi-Camera Videography -->
            <div id="videography" class="scroll-mt-28 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-5 order-2 lg:order-1">
                    <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-lg space-y-6">
                        <div class="w-14 h-14 rounded-2xl bg-cyan/10 text-cyan flex items-center justify-center">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path>
                            </svg>
                        </div>
                        <h4 class="text-2xl font-bold text-navy">Camera & Vision Capabilities</h4>
                        <div class="grid grid-cols-2 gap-3 text-sm font-medium text-slate-700">
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-cyan"></span> 4K Broadcast Cams
                            </div>
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-orange"></span> Live Vision Switcher
                            </div>
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-cyan"></span> Jib & Crane Shots
                            </div>
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-orange"></span> Wireless Teradek
                            </div>
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-cyan"></span> Multi-Angle Recording
                            </div>
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-orange"></span> Live Lower-Thirds
                            </div>
                        </div>
                        <div class="pt-2">
                            <a href="{{ route('contact') }}?service=videography" class="w-full inline-flex items-center justify-center px-6 py-3 rounded-xl text-sm font-bold text-white bg-navy hover:bg-slate-800 transition-colors">
                                Inquire About Multi-Cam Videography &rarr;
                            </a>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 order-1 lg:order-2 space-y-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-cyan">Live Broadcast Production</span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-navy">Videography & Live Multi-Camera Production</h2>
                    <p class="text-slate-600 text-base leading-relaxed">
                        Capture every powerful keynote, panel debate, and audience reaction in stunning 4K and Full HD. Our mobile production units and technical directors direct live camera cuts, lower-third titles, and media playback seamlessly.
                    </p>

                    <div class="space-y-3 pt-2">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-cyan mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <strong class="text-navy">Live Vision Mixing:</strong> Certified technical directors switching camera angles in real time with dynamic graphics, title overlays, and sponsor branding.
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-cyan mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <strong class="text-navy">Jib, Crane & Roaming Gimbal:</strong> Sweeping cinematic overheads and crisp ground-level tracking that give your event broadcast prestige.
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-cyan mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <strong class="text-navy">Multi-Room Technical Feeds:</strong> Routing live feeds to media overflow tents, press briefing centers, and VIP holding rooms without lag.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 4: Documentary & Content Archiving -->
            <div id="documentary" class="scroll-mt-28 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 space-y-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-orange">Narrative Storytelling</span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-navy">Documentary Production & Archiving</h2>
                    <p class="text-slate-600 text-base leading-relaxed">
                        Your event’s impact should endure long after the stage lights go down. We produce cinematic mini-documentaries, official summit recap films, stakeholder impact stories, and comprehensive media archives for donors, governments, and sponsors.
                    </p>

                    <div class="space-y-3 pt-2">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-orange mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <strong class="text-navy">Institutional Documentaries:</strong> Professional field recording and post-production telling the story of your program or development milestone.
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-orange mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <strong class="text-navy">Same-Day Highlight Reels:</strong> High-energy recap videos edited on-site to build momentum across social media and press outlets.
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-orange mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <strong class="text-navy">Archival Master Packs:</strong> Categorized and time-stamped full session recordings with transcriptions for institutional knowledge management.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5">
                    <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-lg space-y-6">
                        <div class="w-14 h-14 rounded-2xl bg-orange/10 text-orange flex items-center justify-center">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        </div>
                        <h4 class="text-2xl font-bold text-navy">Documentary Services</h4>
                        <div class="grid grid-cols-2 gap-3 text-sm font-medium text-slate-700">
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-orange"></span> Script & Storyboarding
                            </div>
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-cyan"></span> Executive Interviews
                            </div>
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-orange"></span> Color Grading
                            </div>
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-cyan"></span> Sound Mixing & Voice
                            </div>
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-orange"></span> Archival Ingestion
                            </div>
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-cyan"></span> Donor Video Kits
                            </div>
                        </div>
                        <div class="pt-2">
                            <a href="{{ route('contact') }}?service=documentary" class="w-full inline-flex items-center justify-center px-6 py-3 rounded-xl text-sm font-bold text-white bg-orange hover:bg-orange/90 transition-colors">
                                Inquire About Documentary &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 5: Commercial Photography -->
            <div id="photography" class="scroll-mt-28 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-5 order-2 lg:order-1">
                    <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-lg space-y-6">
                        <div class="w-14 h-14 rounded-2xl bg-cyan/10 text-cyan flex items-center justify-center">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h4 class="text-2xl font-bold text-navy">Photo & Media Hub</h4>
                        <div class="grid grid-cols-2 gap-3 text-sm font-medium text-slate-700">
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-cyan"></span> VIP Protocol Photos
                            </div>
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-orange"></span> Rapid Cloud Delivery
                            </div>
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-cyan"></span> High-Res Keynotes
                            </div>
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-orange"></span> Exhibitor Media
                            </div>
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-cyan"></span> Press Distribution
                            </div>
                            <div class="p-3 rounded-xl bg-white border border-slate-200/80 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-orange"></span> Gala & Red Carpet
                            </div>
                        </div>
                        <div class="pt-2">
                            <a href="{{ route('contact') }}?service=photography" class="w-full inline-flex items-center justify-center px-6 py-3 rounded-xl text-sm font-bold text-white bg-navy hover:bg-slate-800 transition-colors">
                                Inquire About Photography &rarr;
                            </a>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 order-1 lg:order-2 space-y-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-cyan">Visual Still Imagery</span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-navy">Corporate & Event Photography</h2>
                    <p class="text-slate-600 text-base leading-relaxed">
                        Our seasoned photographers specialize in capturing protocol moments with Heads of State, high-level diplomatic exchanges, energetic exhibition floors, and refined gala banquets.
                    </p>

                    <div class="space-y-3 pt-2">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-cyan mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <strong class="text-navy">Protocol & VIP Coverage:</strong> Discreet, respectful, and well-briefed photographers capturing bilateral talks, signings, and stage handshakes.
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-cyan mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <strong class="text-navy">Live Media Hub & Instant Wire:</strong> On-site tethering and live editing allowing your communications team to tweet and release photos within minutes.
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-cyan mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <strong class="text-navy">Exhibition Booth Showcases:</strong> Highlighting sponsor activations, corporate pavilions, and branded merchandise with architectural elegance.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 6: Crew Sourcing & Staging Management -->
            <div id="crew-sourcing" class="scroll-mt-28 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 space-y-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-orange">Technical Operations</span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-navy">Crew Sourcing & Technical Direction</h2>
                    <p class="text-slate-600 text-base leading-relaxed">
                        An event is only as strong as the crew behind the consoles. Hyperlink Media Services provides fully staffed, disciplined technical squads that ensure your schedule runs like clockwork.
                    </p>

                    <div class="space-y-3 pt-2">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-orange mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <strong class="text-navy">Technical Directors & Stage Managers:</strong> Calling cues, coordinating speaker changes, stage teleprompters, and backstage flow.
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-orange mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <strong class="text-navy">Certified Sound & Lighting Engineers:</strong> Operating high-end consoles, RF wireless frequencies, and intelligent fixtures throughout the event.
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-orange mt-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <strong class="text-navy">Broadcast Switchers & Streaming Ops:</strong> Managing live encoders, backup bonded satellite/4G links, and live platform moderation.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5">
                    <div class="p-8 rounded-3xl bg-navy text-white shadow-xl space-y-6">
                        <div class="w-14 h-14 rounded-2xl bg-white/10 text-orange flex items-center justify-center">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h4 class="text-2xl font-bold text-white">Need Technical Crew?</h4>
                        <p class="text-slate-300 text-sm leading-relaxed">
                            Whether you need an entire turn-key technical department or specialist camera operators for your roadshow, we mobilize across Kenya and East Africa.
                        </p>
                        <div class="pt-2">
                            <a href="{{ route('contact') }}" class="w-full inline-flex items-center justify-center px-6 py-3 rounded-xl text-sm font-bold text-white bg-orange hover:bg-orange/90 transition-colors">
                                Request Crew Availability &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Bottom CTA -->
    <section class="bg-navy py-16 text-white text-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">
                Let's Bring Technical Excellence to Your Next Event
            </h2>
            <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto">
                Reach out to our team in Nairobi for custom equipment packages, multi-camera live streams, or technical crew sourcing.
            </p>
            <div class="pt-2">
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl text-base font-bold text-white bg-orange hover:bg-orange/90 shadow-xl shadow-orange/30 transition-all duration-200">
                    <span>Request Custom Event Quote</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endsection
