@extends('layouts.app')

@section('title', 'Contact Us - Airvice')

@section('content')
    <!-- Page Header -->
    <div class="bg-gray-900 py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center opacity-30" style="background-image: url('https://images.pexels.com/photos/7019608/pexels-photo-7019608.jpeg');"></div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Contact Us</h1>
            <div class="text-gray-300">
                <a href="{{ route('home') }}" class="hover:text-primary transition">Home</a>
                <span class="mx-2">/</span>
                <span>Contact Us</span>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Contact Form -->
                <div class="lg:w-2/3">
                    <h2 class="text-3xl font-bold mb-6 text-gray-800">Get In Touch</h2>
                    <p class="text-gray-600 mb-8">Have a question or need a quote? Fill out the form below and we'll get back to you shortly.</p>

                    @if(session('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                            <p class="font-bold">Success</p>
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif

                    <form id="whatsappForm" action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-gray-700 font-medium mb-2">Your Name</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:border-primary focus:bg-white focus:outline-none transition @error('name') border-red-500 @enderror" placeholder="John Doe">
                                @error('name')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:border-primary focus:bg-white focus:outline-none transition @error('email') border-red-500 @enderror" placeholder="john@example.com">
                                @error('email')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:border-primary focus:bg-white focus:outline-none transition @error('phone') border-red-500 @enderror" placeholder="+1 (555) 000-0000">
                                @error('phone')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                                <input type="text" id="subject" name="subject" value="{{ old('subject') }}" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:border-primary focus:bg-white focus:outline-none transition @error('subject') border-red-500 @enderror" placeholder="Service Inquiry">
                                @error('subject')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:border-primary focus:bg-white focus:outline-none transition @error('message') border-red-500 @enderror" placeholder="How can we help you?">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="bg-blue-700 text-white font-bold py-4 px-10 rounded-full hover:bg-[#153152] transition shadow-lg w-full md:w-auto">Send Message</button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="lg:w-1/3">
                    <div class="bg-gray-50 p-8 rounded-xl shadow-lg border border-gray-100">
                        <h3 class="text-2xl font-bold mb-6 text-gray-800">Contact Information</h3>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-primary shadow-sm mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-1">Our Location</h4>
                                    <p class="text-gray-600"> B8 plot no.03, Niti khand 2, Near JMD Medical, Swarn Jayanti Park, Indrapuram, Ghaziabad Uttar Pradesh Pin Code- 201014</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-primary shadow-sm mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-1">Phone Number</h4>
                                    <p class="text-gray-600">+91 8882600406</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-primary shadow-sm mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-1">Email Address</h4>
                                    <p class="text-gray-600">support@reliableseva.com</p>
                                    <p class="text-gray-600">admin@reliableseva.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="h-96 w-full">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.506932263335!2d77.3696739!3d28.644536299999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfb832c917855%3A0x898e1885c3e1a2cf!2sReliableSeva!5e0!3m2!1sen!2sin!4v1769163659371!5m2!1sen!2sin" width="100%" height="100%" style="border: 0;" allowfullscreen="" loading="lazy"></iframe>
    </section>

    <!-- WhatsApp Script -->
    <script>
        document.getElementById('whatsappForm').addEventListener('submit', function(e) {
            e.preventDefault();

            let name = document.getElementById('name').value;
            let email = document.getElementById('email').value;
            let phone = document.getElementById('phone').value;
            let subject = document.getElementById('subject').value;
            let message = document.getElementById('message').value;

            let whatsappMessage =
                `*New Service Query*%0A%0A` +
                `*Name:* ${name}%0A` +
                `*Email:* ${email}%0A` +
                `*Phone:* ${phone}%0A` +
                `*Subject:* ${subject}%0A` +
                `*Message:* ${message}`;

            let whatsappURL = `https://wa.me/918882600406?text=${whatsappMessage}`;

            window.open(whatsappURL, '_blank');
        });
    </script>
@endsection
