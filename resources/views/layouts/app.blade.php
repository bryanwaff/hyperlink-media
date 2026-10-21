@php
    // App Layout for Hyperlink Media Services
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'Hyperlink Media Services - We Visualize Your Imagination. Premier Technical Event Production, Live-Streaming, AV Solutions, Staging & Media Production across East Africa.')">

    <title>@yield('title', 'Hyperlink Media Services') | We Visualize Your Imagination</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Google / Bunny Fonts: Hind (Body) & Poppins (Headings) -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=hind:300,400,500,600,700|poppins:400,500,600,700,800" rel="stylesheet" />

    <!-- Vite CSS and JavaScript (Tailwind CSS v4 & Alpine.js) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="flex flex-col min-h-screen bg-slate-50 text-slate-800 font-sans antialiased selection:bg-orange selection:text-white" x-data="{ mobileMenuOpen: false }">

    <!-- Top Notification Bar -->
    <div class="bg-navy text-slate-300 text-xs py-2 px-4 border-b border-navy/40">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
            <div class="flex items-center gap-4">
                <a href="mailto:info@hyperlinkmediaservices.com" class="inline-flex items-center gap-1.5 hover:text-cyan transition-colors">
                    <svg class="w-3.5 h-3.5 text-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    info@hyperlinkmediaservices.com
                </a>
                <a href="tel:+254702509216" class="inline-flex items-center gap-1.5 hover:text-orange transition-colors">
                    <svg class="w-3.5 h-3.5 text-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    +254 702 509 216
                </a>
            </div>
            <div class="flex items-center gap-4">
                <span class="text-slate-400 font-medium hidden md:inline">We Visualize Your Imagination &bull; Serving East Africa & Beyond</span>
                <div class="flex items-center space-x-3 text-slate-300">
                    <span class="inline-flex items-center gap-1 text-[11px] text-cyan">
                        <svg class="w-3 h-3 text-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Nairobi, Kenya
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-slate-200/80 shadow-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Brand Logo (Vector SVG) -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 group py-1" aria-label="Hyperlink Media Services">
                    <img src="{{ asset('images/logo-landscape.svg') }}"
                         alt="Hyperlink Media Services Logo"
                         class="h-10 sm:h-12 w-auto object-contain transition-transform duration-300 group-hover:scale-102">
                </a>

                <!-- Desktop Menu -->
                <nav class="hidden md:flex items-center space-x-1 lg:space-x-2">
                    <a href="{{ route('home') }}"
                       class="px-3.5 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('home') ? 'text-orange bg-orange/10 font-semibold' : 'text-slate-700 hover:text-navy hover:bg-slate-100' }}">
                        HOME
                    </a>
                    <a href="{{ route('about') }}"
                       class="px-3.5 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('about') ? 'text-orange bg-orange/10 font-semibold' : 'text-slate-700 hover:text-navy hover:bg-slate-100' }}">
                        ABOUT US
                    </a>
                    <a href="{{ route('services') }}"
                       class="px-3.5 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('services') ? 'text-orange bg-orange/10 font-semibold' : 'text-slate-700 hover:text-navy hover:bg-slate-100' }}">
                        SERVICES
                    </a>
                    <a href="{{ route('projects') }}"
                       class="px-3.5 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('projects') ? 'text-orange bg-orange/10 font-semibold' : 'text-slate-700 hover:text-navy hover:bg-slate-100' }}">
                        OUR WORK
                    </a>
                    <a href="{{ route('contact') }}"
                       class="px-3.5 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('contact') ? 'text-orange bg-orange/10 font-semibold' : 'text-slate-700 hover:text-navy hover:bg-slate-100' }}">
                        CONTACT US
                    </a>
                </nav>

                <!-- Desktop CTA Button -->
                <div class="hidden md:flex items-center space-x-3">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-lg text-sm font-semibold text-white bg-orange hover:bg-orange/90 shadow-md shadow-orange/25 hover:shadow-lg hover:shadow-orange/30 transition-all duration-200">
                        <span>GET A QUOTE</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex md:hidden items-center">
                    <button @click="mobileMenuOpen = !mobileMenuOpen"
                            type="button"
                            class="p-2 rounded-lg text-slate-700 hover:text-navy hover:bg-slate-100 focus:outline-hidden"
                            aria-label="Toggle navigation">
                        <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg x-show="mobileMenuOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Dropdown Menu -->
        <div x-show="mobileMenuOpen"
             x-cloak
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             class="md:hidden border-b border-slate-200 bg-white px-4 pt-2 pb-6 space-y-2">
            <a href="{{ route('home') }}"
               @click="mobileMenuOpen = false"
               class="block px-4 py-2.5 rounded-lg text-base font-medium {{ request()->routeIs('home') ? 'bg-orange/10 text-orange font-semibold' : 'text-slate-700 hover:bg-slate-100' }}">
                HOME
            </a>
            <a href="{{ route('about') }}"
               @click="mobileMenuOpen = false"
               class="block px-4 py-2.5 rounded-lg text-base font-medium {{ request()->routeIs('about') ? 'bg-orange/10 text-orange font-semibold' : 'text-slate-700 hover:bg-slate-100' }}">
                ABOUT
            </a>
            <a href="{{ route('services') }}"
               @click="mobileMenuOpen = false"
               class="block px-4 py-2.5 rounded-lg text-base font-medium {{ request()->routeIs('services') ? 'bg-orange/10 text-orange font-semibold' : 'text-slate-700 hover:bg-slate-100' }}">
                SERVICES
            </a>
            <a href="{{ route('projects') }}"
               @click="mobileMenuOpen = false"
               class="block px-4 py-2.5 rounded-lg text-base font-medium {{ request()->routeIs('projects') ? 'bg-orange/10 text-orange font-semibold' : 'text-slate-700 hover:bg-slate-100' }}">
                WHAT WE DO
            </a>
            <a href="{{ route('contact') }}"
               @click="mobileMenuOpen = false"
               class="block px-4 py-2.5 rounded-lg text-base font-medium {{ request()->routeIs('contact') ? 'bg-orange/10 text-orange font-semibold' : 'text-slate-700 hover:bg-slate-100' }}">
                CONTACT US
            </a>
            <div class="pt-2">
                <a href="{{ route('contact') }}"
                   @click="mobileMenuOpen = false"
                   class="flex items-center justify-center gap-2 w-full px-5 py-3 rounded-lg text-base font-semibold text-white bg-orange hover:bg-orange/90 shadow-md">
                    <span>GET A QUOTE</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-navy text-slate-300 pt-16 pb-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 mb-12">
                <!-- Col 1: Brand & Bio -->
                <div class="lg:col-span-2 space-y-4">
                    <a href="{{ route('home') }}" class="inline-block" aria-label="Hyperlink Media Services">
                        <img src="{{ asset('images/logo-landscape.svg') }}"
                             alt="Hyperlink Media Services Logo"
                             class="h-10 sm:h-11 w-auto object-contain">
                    </a>
                    <p class="text-orange font-semibold text-xs uppercase tracking-wider">
                        Visualizing Your Imagination
                    </p>
                    <p class="text-slate-400 text-sm leading-relaxed max-w-sm">
                        We bring live events, summits, conferences and broadcasts to life with creative lighting, crystal-clear audio, dynamic staging and audiovisual solutions.
                    </p>
                    <div class="flex items-center space-x-3 pt-2">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/5 border border-white/10 text-xs text-cyan">
                            <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                            Serving Kenya, East Africa & Beyond
                        </span>
                    </div>
                </div>

                <!-- Col 2: Navigation Links -->
                <div>
                    <h3 class="text-white text-sm font-semibold uppercase tracking-wider mb-4">Quick Links</h3>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-orange transition-colors">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-orange transition-colors">About Us</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-orange transition-colors">Our Services</a></li>
                        <li><a href="{{ route('projects') }}" class="hover:text-orange transition-colors">Landmark Projects</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-orange transition-colors">Get in Touch</a></li>
                    </ul>
                </div>

                <!-- Col 3: Technical Capabilities -->
                <div>
                    <h3 class="text-white text-sm font-semibold uppercase tracking-wider mb-4">Core Services</h3>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{{ route('services') }}#live-streaming" class="hover:text-cyan transition-colors">Event Live-Streaming</a></li>
                        <li><a href="{{ route('services') }}#audio-visual" class="hover:text-cyan transition-colors">Audio-Visual Solutions</a></li>
                        <li><a href="{{ route('services') }}#videography" class="hover:text-cyan transition-colors">Multi-Camera Videography</a></li>
                        <li><a href="{{ route('services') }}#photography" class="hover:text-cyan transition-colors">Corporate Photography</a></li>
                        <li><a href="{{ route('services') }}#documentary" class="hover:text-cyan transition-colors">Documentary Production</a></li>
                        <li><a href="{{ route('services') }}#crew-sourcing" class="hover:text-cyan transition-colors">Crew Sourcing & Staging</a></li>
                    </ul>
                </div>

                <!-- Col 4: Contact Info -->
                <div>
                    <h3 class="text-white text-sm font-semibold uppercase tracking-wider mb-4">Contact Us</h3>
                    <ul class="space-y-3 text-sm text-slate-400">
                        <li class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 text-orange mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>2nd Ave Garden, Nairobi, Kenya</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-cyan shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <a href="tel:+254702509216" class="hover:text-white transition-colors">+254 702 509 216</a>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-orange shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <a href="mailto:info@hyperlinkmediaservices.com" class="hover:text-white transition-colors">info@hyperlinkmediaservices.com</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Copyright & Disclaimer -->
            <div class="pt-8 mt-8 border-t border-slate-800/80 flex flex-col sm:flex-row justify-between items-center text-xs text-slate-500 gap-4">
                <p>&copy; {{ date('Y') }} Hyperlink Media Services. All rights reserved. &bull; We Visualize Your Imagination</p>
                <div class="flex space-x-6">
                    <a href="{{ route('about') }}" class="hover:text-slate-400 transition-colors">Company Overview</a>
                    <a href="{{ route('services') }}" class="hover:text-slate-400 transition-colors">Technical Production</a>
                    <a href="{{ route('contact') }}" class="hover:text-slate-400 transition-colors">Request Proposal</a>
                </div>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
