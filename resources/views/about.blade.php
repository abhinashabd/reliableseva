@extends('layouts.app')

@section('title', 'About Us - ReliableSeva')

@section('content')
    <!-- Page Header -->
    <div class="bg-gray-900 py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center opacity-30" style="background-image: url('https://images.pexels.com/photos/7006674/pexels-photo-7006674.jpeg');"></div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">About Us</h1>
            <div class="text-gray-300">
                <a href="{{ route('home') }}" class="hover:text-primary transition">Home</a>
                <span class="mx-2">/</span>
                <span>About Uds</span>
            </div>
        </div>
    </div>

    <!-- About Content -->
    <section class="py-20 bg-blue-50/60">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-12 items-center">
                <div class="lg:w-1/2">
                    <img src="/asset/images/aboutus.png" alt="ReliableSeva Team" class="rounded-lg shadow-xl w-full">
                </div>
                <div class="lg:w-1/2">
                    <span class="text-primary font-bold text-sm uppercase tracking-wider mb-2 block">About Us</span>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-900">ReliableSeva Technologies Private Limited</h2>

                    <p class="text-gray-600 mb-6 leading-relaxed">
                        ReliableSeva Technologies Private Limited is a professionally managed home appliance repair service company,
                        committed to delivering reliable, affordable, and timely repair solutions to households. We focus on quality
                        service, transparent processes, skilled manpower, and a strong customer-first approach.
                    </p>

                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Currently, ReliableSeva specializes in Air Conditioner repair and servicing, including installation,
                        uninstallation, routine maintenance, gas refilling, and troubleshooting of technical issues. Our objective
                        is to make appliance repair simple, safe, and hassle-free by providing dependable doorstep services through
                        trained and verified technicians.
                    </p>

                    <p class="text-gray-600 mb-6 leading-relaxed">
                        We believe in building long-term relationships with our customers by maintaining honesty, professionalism,
                        and consistent service quality. Every service request is handled with proper diagnosis, clear communication,
                        and efficient resolution.
                    </p>

                    <p class="text-gray-600 mb-6 leading-relaxed">
                        As part of our growth strategy, ReliableSeva Technologies Private Limited is actively expanding its service
                        portfolio to include refrigerator, washing machine, microwave oven, and other home appliance repair services
                        in the near future.
                    </p>

                    <p class="text-gray-600 mb-6 leading-relaxed">
                        With a dedicated operations team and responsive customer support, ReliableSeva aims to become a trusted
                        household service brand known for reliability, safety, and customer satisfaction.
                    </p>

                    <div class="grid grid-cols-2 gap-6 mt-8">
                        <div>
                            <h4 class="text-4xl font-bold text-primary mb-2">15+</h4>
                            <p class="text-gray-600">Years Experience</p>
                        </div>
                        <div>
                            <h4 class="text-4xl font-bold text-primary mb-2">2k+</h4>
                            <p class="text-gray-600">Happy Customers</p>
                        </div>
                        <div>
                            <h4 class="text-4xl font-bold text-primary mb-2">50+</h4>
                            <p class="text-gray-600">Verified Technicians</p>
                        </div>
                        <div>
                            <h4 class="text-4xl font-bold text-primary mb-2">24/7</h4>
                            <p class="text-gray-600">Customer Support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="py-24 bg-[#1f2b4d]">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">

                <!-- LEFT SIDE -->
                <div class="grid grid-cols-2 gap-6">
                    <div class="row-span-2">
                        <img src="/asset/images/ourmission.png" alt="Service Work"
                             class="w-full h-full object-cover rounded-lg">
                    </div>
                    <div>
                        <img src="https://images.pexels.com/photos/14522790/pexels-photo-14522790.jpeg" alt="Technician"
                             class="w-full h-64 object-cover rounded-lg">
                    </div>
                    <div class="bg-[#0b1b33] rounded-lg flex items-center justify-center text-center p-10">
                        <h3 class="text-white text-4xl font-bold leading-tight">
                            25000+ <br>
                            <span class="text-3xl font-semibold">Service Requests Handled</span>
                        </h3>
                    </div>
                </div>

                <!-- RIGHT SIDE -->
                <div>
                    <span class="text-orange-500 font-semibold uppercase tracking-wide mb-4 block">
                        Our Mission
                    </span>

                    <h2 class="text-4xl font-bold text-white leading-snug mb-6">
                        Reliable Service Built on Trust
                    </h2>

                    <p class="text-white text-lg leading-relaxed mb-6">
                        Our mission at ReliableSeva Technologies Private Limited is to provide reliable, affordable, and high-quality
                        home appliance repair services that customers can trust. We aim to simplify appliance repair through timely
                        doorstep service, skilled and verified technicians, transparent pricing, and honest communication.
                    </p>

                    <p class="text-white text-lg leading-relaxed mb-6">
                        We are committed to building long-term relationships with our customers by consistently delivering dependable
                        service experiences while continuously improving our processes, service standards, and customer support systems.
                    </p>

                    <div class="bg-gray-100 p-6 rounded-lg mb-8">
                        <h4 class="text-xl font-semibold text-gray-900">
                            Comfort made simple with ReliableSeva at your service
                        </h4>
                    </div>

                    <a href="{{ route('contact') }}"
                       class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-semibold text-lg px-12 py-4 rounded-full transition">
                        Book Service Now
                    </a>
                </div>
            </div>
        </div>
    </section>

   <!-- WHY CHOOSE US – DITTO SAME UI -->
<section class="py-28 bg-[#f0f5f9] to-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4">

        <!-- Heading -->
        <div class="text-center mb-20">
            <span class="uppercase tracking-widest text-sm text-gray-500 block mb-4">
                Why Choose Us
            </span>

            <h2 class="text-4xl md:text-5xl font-extrabold text-[#1f3b63] mb-6">
                Our Core Values
            </h2>

            <div class="w-24 h-1 bg-sky-300 mx-auto rounded-full"></div>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">

            <!-- Reliability -->
            <div class="bg-white rounded-3xl shadow-[0_20px_60px_rgba(0,0,0,0.08)] px-10 py-14 text-center">
                <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-sky-100 flex items-center justify-center">
                    <svg class="w-7 h-7 text-[#1f3b63]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1f3b63] mb-4">Reliability</h3>
                <p class="text-gray-600 leading-relaxed">
                    We are committed to delivering dependable services and consistent service quality that customers can trust every time.
                </p>
            </div>

            <!-- Customer Focus -->
            <div class="bg-white rounded-3xl shadow-[0_20px_60px_rgba(0,0,0,0.08)] px-10 py-14 text-center">
                <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-sky-100 flex items-center justify-center">
                    <svg class="w-7 h-7 text-[#1f3b63]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1f3b63] mb-4">Customer Focus</h3>
                <p class="text-gray-600 leading-relaxed">
                   Our customers are at the center of everything we do. We listen, understand their needs, and strive to exceed expectations through responsive support.
                </p>
            </div>

            <!-- Transparency -->
            <div class="bg-white rounded-3xl shadow-[0_20px_60px_rgba(0,0,0,0.08)] px-10 py-14 text-center">
                <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-sky-100 flex items-center justify-center">
                    <svg class="w-7 h-7 text-[#1f3b63]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 8c-1.657 0-3 .895-3 2v4c0 1.105 1.343 2 3 2s3-.895 3-2v-4c0-1.105-1.343-2-3-2z"/>
                        <path d="M5 10v4a7 7 0 0014 0v-4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1f3b63] mb-4">Transparency</h3>
                <p class="text-gray-600 leading-relaxed">
                 We follow honest and ethical business practices with clear communication, fair pricing, and no hidden charges.
                </p>
            </div>

            <!-- Quality & Safety -->
            <div class="bg-white rounded-3xl shadow-[0_20px_60px_rgba(0,0,0,0.08)] px-10 py-14 text-center">
                <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-sky-100 flex items-center justify-center">
                    <svg class="w-7 h-7 text-[#1f3b63]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M9 12l2 2 4-4"/>
                        <path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1f3b63] mb-4">Quality & Safety</h3>
                <p class="text-gray-600 leading-relaxed">
                   We maintain high service standards by following proper procedures, using the right tools, and ensuring safe service practices at every stage.
                </p>
            </div>

            <!-- Professionalism -->
            <div class="bg-white rounded-3xl shadow-[0_20px_60px_rgba(0,0,0,0.08)] px-10 py-14 text-center">
                <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-sky-100 flex items-center justify-center">
                    <svg class="w-7 h-7 text-[#1f3b63]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5s-3 1.343-3 3 1.343 3 3 3z"/>
                        <path d="M6 21v-2a4 4 0 014-4h4a4 4 0 014 4v2"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1f3b63] mb-4">Professionalism</h3>
                <p class="text-gray-600 leading-relaxed">
                   We uphold punctuality, respect, and integrity in all customer interactions, ensuring a professional experience from start to finish.
                </p>
            </div>

            <!-- Continuous Improvement -->
            <div class="bg-white rounded-3xl shadow-[0_20px_60px_rgba(0,0,0,0.08)] px-10 py-14 text-center">
                <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-sky-100 flex items-center justify-center">
                    <svg class="w-7 h-7 text-[#1f3b63]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M4 4v6h6"/>
                        <path d="M20 20v-6h-6"/>
                        <path d="M4 10c2.667-4 6.667-6 12-6"/>
                        <path d="M20 14c-2.667 4-6.667 6-12 6"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1f3b63] mb-4">Continuous Improvement</h3>
                <p class="text-gray-600 leading-relaxed">
                    We continuously improve our skills, processes, and technology to deliver better service experiences and adapt to changing customer needs.
                </p>
            </div>

        </div>
    </div>
</section>

@endsection
