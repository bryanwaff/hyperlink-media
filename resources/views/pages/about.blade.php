@extends('layouts.app')

@section('title', 'About Us - Technical Event Production Specialists')
@section('meta_description', 'Learn about Hyperlink Media Services: our mission, vision, technical capabilities, decades of event experience, and proven live production execution across East Africa.')

@section('content')
    <!-- About Hero Banner -->
    <section class="bg-navy text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 opacity-20 pointer-events-none">
            <div class="absolute -right-20 -top-20 w-96 h-96 bg-cyan rounded-full blur-3xl"></div>
            <div class="absolute -left-20 -bottom-20 w-96 h-96 bg-orange rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block px-3.5 py-1 rounded-full bg-cyan/20 text-cyan text-xs font-semibold tracking-wider uppercase mb-4">
                We Visualize Your Imagination
            </span>
            <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight max-w-3xl mx-auto leading-tight">
                Bringing Imagination to Life With <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange to-cyan">Media Magic</span>
            </h1>
            <p class="text-slate-300 text-lg max-w-2xl mx-auto mt-4 leading-relaxed">
                Hyperlink Media Services is your trusted event partner for spectacular, engaging meetings and technical event production across East Africa and beyond.
            </p>
        </div>
    </section>

    <!-- Company Story & Mission -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-orange">Who We Are</span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-navy">Technical Event Production Specialists</h2>
                    <p class="text-slate-600 text-base leading-relaxed">
                        At <span class="font-semibold text-navy">Hyperlink Media Services</span>, we turn vision into immersive experience through the power of media craftsmanship. From vibrant live streams to captivating documentaries, our work is driven by a passion for storytelling and technical precision.
                    </p>
                    <p class="text-slate-600 text-base leading-relaxed">
                        Each project begins by listening closely to our clients' imagination, then translating that into stunning visuals and seamless events using cutting-edge audiovisual tools, creative lighting, audio, and staging solutions. With every show staged, every frame captured, and every broadcast delivered — we craft the kind of media magic that elevates the future of storytelling in East Africa.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-4 border-t border-slate-100">
                        <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                            <p class="text-navy font-bold text-base flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-orange"></span>
                                Our Mission
                            </p>
                            <p class="text-slate-600 text-xs sm:text-sm mt-2 leading-relaxed">
                                To empower businesses and individuals by providing innovative and comprehensive media solutions that help them thrive in the digital landscape. We are dedicated to leveraging technology and creativity to exceed client expectations.
                            </p>
                        </div>
                        <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                            <p class="text-navy font-bold text-base flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-cyan"></span>
                                Our Vision
                            </p>
                            <p class="text-slate-600 text-xs sm:text-sm mt-2 leading-relaxed">
                                To be a leading global provider of cutting-edge media services that drive growth and success for our clients, revolutionizing the industry by staying at the forefront of emerging technologies and trends.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Visual Collage / Highlight Cards -->
                <div class="space-y-6">
                    <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200/80 shadow-md">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 rounded-xl bg-orange/10 text-orange flex items-center justify-center font-bold text-lg">
                                01
                            </div>
                            <h3 class="text-xl font-bold text-navy">Creative Event Production</h3>
                        </div>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            We know how to take your event concept and transform it into something authentic, creating an inspiring and memorable live event experience for all in-person and virtual guests.
                        </p>
                    </div>

                    <div class="p-8 rounded-3xl bg-navy text-white shadow-xl relative overflow-hidden">
                        <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-cyan/20 rounded-full blur-xl"></div>
                        <div class="relative">
                            <div class="flex items-center gap-4 mb-4">
                                <div class="w-12 h-12 rounded-xl bg-cyan/20 text-cyan flex items-center justify-center font-bold text-lg">
                                    02
                                </div>
                                <h3 class="text-xl font-bold text-white">Decades of Collective Experience</h3>
                            </div>
                            <p class="text-slate-300 text-sm leading-relaxed">
                                Our veteran team has decades of hands-on experience in the events industry, delivering big corporate summits, presidential forums, gala dinners, and multi-day international expos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="py-20 bg-slate-100/60 border-y border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-orange">Our Principles</span>
                <h2 class="text-3xl sm:text-4xl font-bold text-navy mt-1">What Guides Every Production</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-xs">
                    <div class="w-10 h-10 rounded-lg bg-orange/10 text-orange flex items-center justify-center mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-navy text-lg mb-2">Technical Precision</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Rigorous calibration of sound, light, and live video signals to ensure zero failure during high-stakes broadcasts.</p>
                </div>

                <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-xs">
                    <div class="w-10 h-10 rounded-lg bg-cyan/10 text-cyan flex items-center justify-center mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-navy text-lg mb-2">Unwavering Reliability</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Redundant stream paths, backup power, and fail-safe signal distribution for ministerial and international summits.</p>
                </div>

                <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-xs">
                    <div class="w-10 h-10 rounded-lg bg-orange/10 text-orange flex items-center justify-center mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-navy text-lg mb-2">Client Partnership</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">We listen closely to our clients' imagination, collaborating transparently from floor planning to post-event archiving.</p>
                </div>

                <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-xs">
                    <div class="w-10 h-10 rounded-lg bg-cyan/10 text-cyan flex items-center justify-center mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-navy text-lg mb-2">Regional Reach</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Serving Nairobi, Mombasa, Eldoret, Kisumu, and expanding across East Africa with mobile OB broadcast units.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Proven 4-Step Technical Execution Process -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-orange">Methodology</span>
                <h2 class="text-3xl sm:text-4xl font-bold text-navy mt-1">Our Proven 4-Step Production Framework</h2>
                <p class="text-slate-600 text-base mt-2">A systematic approach that ensures technical excellence and zero stress on event day.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="relative p-6 rounded-2xl bg-slate-50 border border-slate-200 flex flex-col justify-between">
                    <div>
                        <span class="text-3xl font-extrabold text-orange/30 block mb-2">01</span>
                        <h4 class="font-bold text-navy text-lg mb-2">Site Audit & Planning</h4>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Acoustic analysis, power assessment, sightline evaluation, camera placement plotting, and network bandwidth testing.
                        </p>
                    </div>
                    <div class="mt-4 pt-4 border-t border-slate-200 text-xs font-semibold text-orange">Phase: Pre-Production</div>
                </div>

                <div class="relative p-6 rounded-2xl bg-slate-50 border border-slate-200 flex flex-col justify-between">
                    <div>
                        <span class="text-3xl font-extrabold text-cyan/30 block mb-2">02</span>
                        <h4 class="font-bold text-navy text-lg mb-2">AV & Stage Rigging</h4>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Truss installation, line-array tuning, intelligent lighting fixture programming, LED screen alignment, and multi-mic checks.
                        </p>
                    </div>
                    <div class="mt-4 pt-4 border-t border-slate-200 text-xs font-semibold text-cyan">Phase: Staging & Rigging</div>
                </div>

                <div class="relative p-6 rounded-2xl bg-slate-50 border border-slate-200 flex flex-col justify-between">
                    <div>
                        <span class="text-3xl font-extrabold text-orange/30 block mb-2">03</span>
                        <h4 class="font-bold text-navy text-lg mb-2">Live Broadcast & Mixing</h4>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Live vision mixing, 4K multi-camera switching, hybrid remote participant integration, audio engineering, and live recording.
                        </p>
                    </div>
                    <div class="mt-4 pt-4 border-t border-slate-200 text-xs font-semibold text-orange">Phase: Live Execution</div>
                </div>

                <div class="relative p-6 rounded-2xl bg-slate-50 border border-slate-200 flex flex-col justify-between">
                    <div>
                        <span class="text-3xl font-extrabold text-cyan/30 block mb-2">04</span>
                        <h4 class="font-bold text-navy text-lg mb-2">Archival & Documentaries</h4>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Full conference session archiving, cinematic highlight films, mini-documentaries, and high-resolution photo asset delivery.
                        </p>
                    </div>
                    <div class="mt-4 pt-4 border-t border-slate-200 text-xs font-semibold text-cyan">Phase: Post-Production</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom CTA -->
    <section class="bg-navy py-16 text-white text-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">
                Partner With Technical Event Production Specialists
            </h2>
            <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto">
                Ready to elevate your conference, summit, or gala dinner? Contact our production studio in Nairobi today.
            </p>
            <div class="pt-2">
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl text-base font-bold text-white bg-orange hover:bg-orange/90 shadow-xl shadow-orange/30 transition-all duration-200">
                    <span>Contact Our Production Team</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endsection
