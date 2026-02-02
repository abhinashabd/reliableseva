<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

<header class="bg-white shadow-md sticky top-0 z-50">
    <!-- Top Bar -->
    <div class="bg-blue-500 text-white py-2 text-sm hidden md:block" style="background-color: #153152">
        <div class="container mx-auto px-4 flex justify-between items-center">

            <!-- Left : Email & Phone -->
            <div class="flex items-center space-x-6">
                <div class="flex items-center">
                    <svg class="w-4 h-4 mr-2 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                    <span>support@reliableseva.com</span>
                </div>

                <div class="flex items-center">
                    <svg class="w-4 h-4 mr-2 text-blue-300" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                        </path>
                    </svg>
                    <span>8882600406</span>
                </div>
            </div>

            <!-- Center : Moving Text -->
            <div class="flex-1 mx-6 overflow-hidden">
                <div class="whitespace-nowrap animate-marquee text-center font-medium">
                   ReliableSeva – Trusted Home Appliance Repair Services | Contact for Fast Support
                </div>
            </div>

            <!-- Right : Social Icons -->
            <div class="flex items-center space-x-4">
                <a href="#" class="hover:text-red-500 transition"><i class="fab fa-youtube"></i></a>
                <a href="#" class="hover:text-blue-400 transition"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://x.com/Reliablese78486" class="hover:text-sky-400 transition"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/reliableseva/" class="hover:text-blue-500 transition"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/reliableseva/" class="hover:text-pink-400 transition"><i class="fab fa-instagram"></i></a>
            </div>

        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="container mx-auto px-4">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('asset/images/logo.png') }}" alt="ReliableSeva Logo" class="h-20 w-auto">
                <div class="text-gray-700 text-md md:text-3xl font-bold">ReliableSeva</div>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}"
                    class="text-gray-700 hover:text-blue-600 font-medium transition uppercase {{ request()->routeIs('home') ? 'text-blue-600' : '' }}">Home</a>

                <a href="{{ route('about') }}"
                    class="text-gray-700 hover:text-blue-600 font-medium transition uppercase {{ request()->routeIs('about') ? 'text-blue-600' : '' }}">About Us</a>

                <a href="{{ route('services') }}"
                    class="text-gray-700 hover:text-blue-600 font-medium transition uppercase {{ request()->routeIs('services') ? 'text-blue-600' : '' }}">Services</a>

                <a href="{{ route('ourblog') }}"
                    class="text-gray-700 hover:text-blue-600 font-medium transition uppercase {{ request()->routeIs('ourblog') ? 'text-blue-600' : '' }}">Blog</a>

                <a href="{{ route('contact') }}"
                    class="bg-blue-600 text-white px-5 py-2 rounded-full font-medium hover:bg-blue-700 transition uppercase">Contact Us</a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-btn" class="text-gray-700 hover:text-blue-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
<div id="mobile-menu" class="hidden md:hidden mt-4 pb-4 border-t border-gray-100">
    <a href="{{ route('home') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium uppercase">Home</a>
    <a href="{{ route('about') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium uppercase">About Us</a>
    <a href="{{ route('services') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium uppercase">Services</a>
    <a href="{{ route('ourblog') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium uppercase">Blog</a>
    <!--<a href="{{ route('contact') }}" class="block py-2 text-gray-700 hover:text-blue-600 font-medium uppercase">Contact Us</a>-->
    
    <!-- Mobile Responsive Contact Us Button -->
    <a href="{{ route('contact') }}" class="block w-full text-center mt-2 bg-blue-600 text-white px-5 py-2 rounded-full font-medium hover:bg-blue-700 transition uppercase">
        Contact Us
    </a>
</div>

    </nav>
</header>

<style>
@keyframes marquee {
    0% { transform: translateX(100%); }
    100% { transform: translateX(-100%); }
}
.animate-marquee {
    animation: marquee 15s linear infinite;
}
</style>

<!-- JavaScript to toggle mobile menu -->
<script>
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
