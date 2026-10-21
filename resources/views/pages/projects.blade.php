@extends('layouts.app')

@section('title', 'Landmark Projects & Case Studies - Hyperlink Media Services')
@section('meta_description', 'Explore landmark technical event productions, hybrid broadcasts, and documentaries delivered by Hyperlink Media Services for the African Union, Government of Kenya, WASPA, ICPAK, and KTB.')

@section('content')
    <!-- Projects Hero Banner -->
    <section class="bg-navy text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 opacity-20 pointer-events-none">
            <div class="absolute -right-20 top-0 w-96 h-96 bg-cyan rounded-full blur-3xl"></div>
            <div class="absolute -left-20 bottom-0 w-96 h-96 bg-orange rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block px-3.5 py-1 rounded-full bg-cyan/20 text-cyan text-xs font-semibold tracking-wider uppercase mb-4">
                Our Portfolio
            </span>
            <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight max-w-3xl mx-auto leading-tight">
                Landmark Projects & <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange to-cyan">Proven Executions</span>
            </h1>
            <p class="text-slate-300 text-lg max-w-2xl mx-auto mt-4 leading-relaxed">
                Explore how Hyperlink Media Services delivers technical mastery for presidential summits, international forums, national expos, and corporate conferences across East Africa.
            </p>
        </div>
    </section>

    <!-- Projects Filter & Grid (Alpine.js) -->
    <section class="py-20 bg-slate-50 min-h-[600px]" x-data="{ currentFilter: 'all' }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Filter Buttons -->
            <div class="flex flex-wrap items-center justify-center gap-2 mb-14">
                <button @click="currentFilter = 'all'"
                        type="button"
                        class="px-5 py-2.5 rounded-xl text-sm font-semibold transition-all duration-200"
                        :class="currentFilter === 'all' ? 'bg-navy text-white shadow-md' : 'bg-white text-slate-600 hover:text-navy border border-slate-200'">
                    All Projects
                </button>
                <button @click="currentFilter = 'hybrid'"
                        type="button"
                        class="px-5 py-2.5 rounded-xl text-sm font-semibold transition-all duration-200"
                        :class="currentFilter === 'hybrid' ? 'bg-navy text-white shadow-md' : 'bg-white text-slate-600 hover:text-navy border border-slate-200'">
                    Hybrid Broadcast
                </button>
                <button @click="currentFilter = 'av'"
                        type="button"
                        class="px-5 py-2.5 rounded-xl text-sm font-semibold transition-all duration-200"
                        :class="currentFilter === 'av' ? 'bg-navy text-white shadow-md' : 'bg-white text-slate-600 hover:text-navy border border-slate-200'">
                    Audio-Visual & Staging
                </button>
                <button @click="currentFilter = 'documentary'"
                        type="button"
                        class="px-5 py-2.5 rounded-xl text-sm font-semibold transition-all duration-200"
                        :class="currentFilter === 'documentary' ? 'bg-navy text-white shadow-md' : 'bg-white text-slate-600 hover:text-navy border border-slate-200'">
                    Documentary & Archiving
                </button>
            </div>

            <!-- Projects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Project 1: AUF2 -->
                <div x-show="currentFilter === 'all' || currentFilter === 'hybrid'"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="group rounded-3xl bg-white border border-slate-200 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col">
                    <div class="h-56 bg-gradient-to-tr from-navy to-slate-800 p-8 flex flex-col justify-between relative overflow-hidden">
                        <div class="flex justify-between items-start">
                            <span class="px-3 py-1 rounded-full bg-cyan/20 text-cyan text-xs font-semibold">Pan-African Hybrid Broadcast</span>
                            <span class="text-xs text-slate-400 font-mono">Nairobi, Kenya</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-white group-hover:text-cyan transition-colors">2nd Africa Urban Forum (AUF2)</h3>
                            <p class="text-xs text-slate-300 mt-1">AUC &bull; Kenyan Government &bull; UN-Habitat</p>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Convened by the African Union Commission and hosted by the Kenyan Government. Hyperlink executed the pan-African hybrid broadcast, multi-room technical management, VIP protocol media, and live documentary archiving.
                            </p>
                            <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xs text-slate-500 font-semibold block">Key Scope Delivered:</span>
                                <span class="text-sm font-bold text-navy">Multi-Room Hybrid Sync &bull; Protocol VIP Media &bull; Pan-African Feeds</span>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2 pt-2 border-t border-slate-100">
                            <span class="text-xs px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">African Union</span>
                            <span class="text-xs px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">Hybrid Sync</span>
                            <span class="text-xs px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">Protocol Support</span>
                        </div>
                    </div>
                </div>

                <!-- Project 2: WASPA Conference -->
                <div x-show="currentFilter === 'all' || currentFilter === 'hybrid' || currentFilter === 'av'"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="group rounded-3xl bg-white border border-slate-200 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col">
                    <div class="h-56 bg-gradient-to-tr from-orange/80 via-navy to-slate-900 p-8 flex flex-col justify-between relative overflow-hidden">
                        <div class="flex justify-between items-start">
                            <span class="px-3 py-1 rounded-full bg-orange/20 text-orange text-xs font-semibold">Conference & Exhibition</span>
                            <span class="text-xs text-slate-400 font-mono">PrideInn Mombasa</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-white group-hover:text-orange transition-colors">Kenya Water & Sanitation Expo</h3>
                            <p class="text-xs text-slate-300 mt-1">Ministry of Water & Irrigation &bull; WASPA</p>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Integrated physical panel discussions at PrideInn Paradise Beach Resort with virtual international delegates, capturing high-stakes Cabinet Secretary keynotes and providing graphics support for technical exhibitors.
                            </p>
                            <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xs text-slate-500 font-semibold block">Key Scope Delivered:</span>
                                <span class="text-sm font-bold text-navy">Live Multi-Cam OB &bull; Exhibition Media Hub &bull; Virtual Panel Bridge</span>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2 pt-2 border-t border-slate-100">
                            <span class="text-xs px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">WASPA Kenya</span>
                            <span class="text-xs px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">Multi-Camera</span>
                            <span class="text-xs px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">Exhibitor Hub</span>
                        </div>
                    </div>
                </div>

                <!-- Project 3: ODPC Conference -->
                <div x-show="currentFilter === 'all' || currentFilter === 'hybrid' || currentFilter === 'documentary'"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="group rounded-3xl bg-white border border-slate-200 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col">
                    <div class="h-56 bg-gradient-to-tr from-slate-900 to-navy p-8 flex flex-col justify-between relative overflow-hidden">
                        <div class="flex justify-between items-start">
                            <span class="px-3 py-1 rounded-full bg-cyan/20 text-cyan text-xs font-semibold">Data Protection Summit</span>
                            <span class="text-xs text-slate-400 font-mono">Mombasa, Kenya</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-white group-hover:text-cyan transition-colors">Data Privacy Conference</h3>
                            <p class="text-xs text-slate-300 mt-1">Office of the Data Protection Commissioner (ODPC)</p>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Themed "Trust the Data, Drive the Future." Hyperlink provided critical broadcast infrastructure, documentary production, multi-stakeholder media support, and live digital streaming for international regulators and university delegates.
                            </p>
                            <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xs text-slate-500 font-semibold block">Key Scope Delivered:</span>
                                <span class="text-sm font-bold text-navy">High-Level Broadcast Management &bull; Documentary & Archiving</span>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2 pt-2 border-t border-slate-100">
                            <span class="text-xs px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">ODPC</span>
                            <span class="text-xs px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">Documentary</span>
                            <span class="text-xs px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">Broadcast Rig</span>
                        </div>
                    </div>
                </div>

                <!-- Project 4: ICPAK 42nd Annual Seminar -->
                <div x-show="currentFilter === 'all' || currentFilter === 'hybrid' || currentFilter === 'documentary'"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="group rounded-3xl bg-white border border-slate-200 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col">
                    <div class="h-56 bg-gradient-to-tr from-navy to-orange/40 p-8 flex flex-col justify-between relative overflow-hidden">
                        <div class="flex justify-between items-start">
                            <span class="px-3 py-1 rounded-full bg-orange/20 text-orange text-xs font-semibold">Dual-Venue Hybrid Sync</span>
                            <span class="text-xs text-slate-400 font-mono">Edition I & II</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-white group-hover:text-orange transition-colors">ICPAK 42nd Annual Seminars</h3>
                            <p class="text-xs text-slate-300 mt-1">Institute of Certified Public Accountants of Kenya</p>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Managed seamless real-time live-streaming between dual venues, interactive virtual platform facilitating remote delegate Q&A as if physically present, and live documentary recap production.
                            </p>
                            <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xs text-slate-500 font-semibold block">Key Scope Delivered:</span>
                                <span class="text-sm font-bold text-navy">Dual-Venue Hybrid Relay &bull; Interactive Q&A Platform &bull; Documentary</span>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2 pt-2 border-t border-slate-100">
                            <span class="text-xs px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">ICPAK</span>
                            <span class="text-xs px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">Dual-Venue</span>
                            <span class="text-xs px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">Virtual Q&A</span>
                        </div>
                    </div>
                </div>

                <!-- Project 5: EU - Kenya Business Forum -->
                <div x-show="currentFilter === 'all' || currentFilter === 'hybrid' || currentFilter === 'av'"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="group rounded-3xl bg-white border border-slate-200 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col">
                    <div class="h-56 bg-gradient-to-tr from-slate-900 via-navy to-cyan/40 p-8 flex flex-col justify-between relative overflow-hidden">
                        <div class="flex justify-between items-start">
                            <span class="px-3 py-1 rounded-full bg-cyan/20 text-cyan text-xs font-semibold">Presidential Summit</span>
                            <span class="text-xs text-slate-400 font-mono">Nairobi, Kenya</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-white group-hover:text-cyan transition-colors">EU - Kenya Business Forum</h3>
                            <p class="text-xs text-slate-300 mt-1">KEPSA &bull; European Union &bull; Government of Kenya</p>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Opened by H.E. President William Ruto and EU Trade Commissioner with 700+ global leaders. Hyperlink supported digital breakout sessions, high-level B2B matchmaking infrastructure, and media content creation.
                            </p>
                            <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xs text-slate-500 font-semibold block">Key Scope Delivered:</span>
                                <span class="text-sm font-bold text-navy">B2B Matchmaking Infrastructure &bull; Thematic Breakouts &bull; Content</span>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2 pt-2 border-t border-slate-100">
                            <span class="text-xs px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">European Union</span>
                            <span class="text-xs px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">KEPSA</span>
                            <span class="text-xs px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">B2B Media</span>
                        </div>
                    </div>
                </div>

                <!-- Project 6: Magical Kenya Travel Expo -->
                <div x-show="currentFilter === 'all' || currentFilter === 'av' || currentFilter === 'hybrid'"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="group rounded-3xl bg-white border border-slate-200 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col">
                    <div class="h-56 bg-gradient-to-tr from-navy to-slate-800 p-8 flex flex-col justify-between relative overflow-hidden">
                        <div class="flex justify-between items-start">
                            <span class="px-3 py-1 rounded-full bg-orange/20 text-orange text-xs font-semibold">East Africa Premier Fair</span>
                            <span class="text-xs text-slate-400 font-mono">Kenya Tourism Board</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-white group-hover:text-orange transition-colors">Magical Kenya Travel Expo (MKTE)</h3>
                            <p class="text-xs text-slate-300 mt-1">Kenya Tourism Board (KTB)</p>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Connected 300+ exhibitors and 150 hosted buyers from across the globe. Hyperlink provided dynamic live multi-camera production, hybrid seminar streaming for knowledge sessions, and exhibitor media hub support.
                            </p>
                            <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xs text-slate-500 font-semibold block">Key Scope Delivered:</span>
                                <span class="text-sm font-bold text-navy">Live Multi-Camera &bull; Knowledge Sessions Hybrid Streaming &bull; Media Hub</span>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2 pt-2 border-t border-slate-100">
                            <span class="text-xs px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">KTB</span>
                            <span class="text-xs px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">Tourism Fair</span>
                            <span class="text-xs px-2.5 py-1 rounded-md bg-slate-100 text-slate-700">Live Multi-Cam</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Bottom CTA Strip -->
    <section class="bg-navy py-16 text-white text-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">
                Plan Your Next Landmark Event With Us
            </h2>
            <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto">
                Trust East Africa's proven technical event production team. Contact us for technical riders, AV quotes, or production management.
            </p>
            <div class="pt-2">
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl text-base font-bold text-white bg-orange hover:bg-orange/90 shadow-xl shadow-orange/30 transition-all duration-200">
                    <span>Discuss Your Event Requirements</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endsection
