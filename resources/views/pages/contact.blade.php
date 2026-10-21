@extends('layouts.app')

@section('title', 'Contact Us - Get in Touch')
@section('meta_description', 'Contact Hyperlink Media Services in Nairobi for technical event production quotes, live-streaming inquiries, AV setups, staging, or multi-camera videography.')

@section('content')
    <!-- Contact Hero Banner -->
    <section class="bg-navy text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 opacity-20 pointer-events-none">
            <div class="absolute -right-20 top-0 w-96 h-96 bg-cyan rounded-full blur-3xl"></div>
            <div class="absolute -left-20 bottom-0 w-96 h-96 bg-orange rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block px-3.5 py-1 rounded-full bg-orange/20 text-orange text-xs font-semibold tracking-wider uppercase mb-4">
                We Visualize Your Imagination
            </span>
            <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight max-w-3xl mx-auto leading-tight">
                Get in Touch With <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange to-cyan">Hyperlink Media Services</span>
            </h1>
            <p class="text-slate-300 text-lg max-w-2xl mx-auto mt-4 leading-relaxed">
                Planning an upcoming summit, hybrid conference, concert, or corporate gala? Contact our technical production team in Nairobi today for an event audit or quotation.
            </p>
        </div>
    </section>

    <!-- Main Contact Section -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Success notification banner if redirected back with success -->
            @if (session('success'))
                <div class="mb-10 p-5 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 flex items-start gap-3 shadow-xs">
                    <svg class="w-6 h-6 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <h4 class="font-bold text-base">Inquiry Received!</h4>
                        <p class="text-sm mt-0.5">{{ session('success') }}</p>
                    </div>
                </div>
            @endif

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <!-- Col 1: Contact Information & Process -->
                <div class="lg:col-span-5 space-y-8">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-orange">Direct Contacts</span>
                        <h2 class="text-3xl font-bold text-navy mt-1">We'd Love to Hear From You</h2>
                        <p class="text-slate-600 text-sm mt-2 leading-relaxed">
                            Whether you need a full turnkey technical production team for a multi-room summit or specialist audio-visual equipment, our leadership is ready to assist.
                        </p>
                    </div>

                    <!-- Contact Details Card -->
                    <div class="p-8 rounded-3xl bg-white border border-slate-200 shadow-xs space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-11 h-11 rounded-xl bg-cyan/10 text-cyan flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-navy text-sm uppercase tracking-wide">Studio & Office Address</h4>
                                <p class="text-slate-600 text-sm mt-1">2nd Ave Garden<br>Nairobi, Kenya</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-11 h-11 rounded-xl bg-orange/10 text-orange flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-navy text-sm uppercase tracking-wide">Phone & Direct Call</h4>
                                <p class="text-slate-600 text-sm mt-1">
                                    <a href="tel:+254702509216" class="hover:text-orange transition-colors font-medium">+254 702 509 216</a>
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-11 h-11 rounded-xl bg-cyan/10 text-cyan flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-navy text-sm uppercase tracking-wide">Email Inquiries</h4>
                                <p class="text-slate-600 text-sm mt-1">
                                    <a href="mailto:info@hyperlinkmediaservices.com" class="hover:text-cyan transition-colors">info@hyperlinkmediaservices.com</a><br>
                                    <a href="https://www.hyperlinkmediaservices.com" target="_blank" rel="noopener noreferrer" class="hover:text-cyan transition-colors text-xs text-slate-500">www.hyperlinkmediaservices.com</a>
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-11 h-11 rounded-xl bg-orange/10 text-orange flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-navy text-sm uppercase tracking-wide">Operating Hours</h4>
                                <p class="text-slate-600 text-sm mt-1">Monday &ndash; Saturday: 8:00 AM &ndash; 6:00 PM EAT<br><span class="text-xs text-orange font-semibold">24/7 Technical On-Call during active live events</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- What Happens Next Box -->
                    <div class="p-6 rounded-2xl bg-navy text-white space-y-4">
                        <h4 class="font-bold text-white text-base">What Happens After You Reach Out?</h4>
                        <ol class="space-y-3 text-xs text-slate-300">
                            <li class="flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-cyan/20 text-cyan font-bold flex items-center justify-center shrink-0 text-[11px]">1</span>
                                <span>We review your event brief and assign a technical director for your venue type.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-orange/20 text-orange font-bold flex items-center justify-center shrink-0 text-[11px]">2</span>
                                <span>We conduct a site visit or technical call to evaluate sound, light, rigging, and streaming lines.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-cyan/20 text-cyan font-bold flex items-center justify-center shrink-0 text-[11px]">3</span>
                                <span>You receive an itemized technical equipment rider, crew plan, and transparent quote.</span>
                            </li>
                        </ol>
                    </div>
                </div>

                <!-- Col 2: Project Inquiry Form -->
                <div class="lg:col-span-7">
                    <div class="p-8 sm:p-10 rounded-3xl bg-white border border-slate-200 shadow-lg">
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold text-navy">Request an Event Proposal</h3>
                            <p class="text-slate-600 text-sm mt-1">Fill out the details below and our technical production team will prepare a tailored solution.</p>
                        </div>

                        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                            @csrf

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <!-- Name -->
                                <div>
                                    <label for="name" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                        Full Name <span class="text-orange">*</span>
                                    </label>
                                    <input type="text"
                                           name="name"
                                           id="name"
                                           required
                                           value="{{ old('name') }}"
                                           placeholder="e.g. Bernard Mwangi"
                                           class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-hidden focus:ring-2 focus:ring-orange/30 focus:border-orange text-sm transition-all">
                                    @error('name')
                                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div>
                                    <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                        Email Address <span class="text-orange">*</span>
                                    </label>
                                    <input type="email"
                                           name="email"
                                           id="email"
                                           required
                                           value="{{ old('email') }}"
                                           placeholder="e.g. info@organization.org"
                                           class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-hidden focus:ring-2 focus:ring-orange/30 focus:border-orange text-sm transition-all">
                                    @error('email')
                                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <!-- Phone -->
                                <div>
                                    <label for="phone" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                        Phone Number <span class="text-orange">*</span>
                                    </label>
                                    <input type="tel"
                                           name="phone"
                                           id="phone"
                                           required
                                           value="{{ old('phone') }}"
                                           placeholder="e.g. +254 700 000 000"
                                           class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-hidden focus:ring-2 focus:ring-orange/30 focus:border-orange text-sm transition-all">
                                </div>

                                <!-- Company / Organization -->
                                <div>
                                    <label for="company" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                        Organization / Client Name
                                    </label>
                                    <input type="text"
                                           name="company"
                                           id="company"
                                           value="{{ old('company') }}"
                                           placeholder="e.g. Ministry, NGO, or Enterprise"
                                           class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-hidden focus:ring-2 focus:ring-orange/30 focus:border-orange text-sm transition-all">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <!-- Service of Interest -->
                                <div>
                                    <label for="service" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                        Primary Technical Service
                                    </label>
                                    <select name="service"
                                            id="service"
                                            class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white focus:outline-hidden focus:ring-2 focus:ring-orange/30 focus:border-orange text-sm transition-all">
                                        <option value="live-streaming" {{ request('service') == 'live-streaming' ? 'selected' : '' }}>Event Live-Streaming & Hybrid Broadcast</option>
                                        <option value="audio-visual" {{ request('service') == 'audio-visual' ? 'selected' : '' }}>Audio-Visual Solutions, Staging & Lighting</option>
                                        <option value="videography" {{ request('service') == 'videography' ? 'selected' : '' }}>Multi-Camera Videography & Vision Mixing</option>
                                        <option value="photography" {{ request('service') == 'photography' ? 'selected' : '' }}>Corporate & Event Photography</option>
                                        <option value="documentary" {{ request('service') == 'documentary' ? 'selected' : '' }}>Documentary Production & Archiving</option>
                                        <option value="crew-sourcing" {{ request('service') == 'crew-sourcing' ? 'selected' : '' }}>Technical Crew Sourcing & Staging</option>
                                        <option value="full-production">Full Turnkey Technical Production (All Services)</option>
                                    </select>
                                </div>

                                <!-- Event Scale / Scope -->
                                <div>
                                    <label for="budget" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                        Estimated Event Scale
                                    </label>
                                    <select name="budget"
                                            id="budget"
                                            class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white focus:outline-hidden focus:ring-2 focus:ring-orange/30 focus:border-orange text-sm transition-all">
                                        <option value="small">Single Room / Under 100 Guests</option>
                                        <option value="medium" selected>Conference / 100 &ndash; 500 Delegates</option>
                                        <option value="large">Major Summit / 500 &ndash; 2,000 Delegates</option>
                                        <option value="mega">Pan-African Mega Forum / Multi-Venue</option>
                                        <option value="concert_roadshow">Concert, Festival or Nationwide Roadshow</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Message -->
                            <div>
                                <label for="message" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                    Event Details, Dates & Requirements <span class="text-orange">*</span>
                                </label>
                                <textarea name="message"
                                          id="message"
                                          rows="5"
                                          required
                                          placeholder="Please share event dates, venue location, expected audience size, whether hybrid live-streaming is required, and any specific staging requirements..."
                                          class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-hidden focus:ring-2 focus:ring-orange/30 focus:border-orange text-sm transition-all">{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="space-y-4 pt-2">
                                <button type="submit"
                                        class="w-full inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl text-base font-bold text-white bg-orange hover:bg-orange/90 shadow-lg shadow-orange/30 hover:shadow-xl transition-all duration-200">
                                    <span>Submit Event Inquiry</span>
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </button>
                                <p class="text-center text-xs text-slate-500">
                                    We respect your privacy. Inquiries are handled with confidentiality and answered within 24 hours.
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
