@extends('layouts.app')

@section('title', 'Our Services - Airvice')

@section('content')
    <!-- WhatsApp Contact Modal -->
    <div id="whatsappModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center p-4">
        <div class="bg-white rounded-xl shadow-2xl max-w-md w-full transform transition-all">
            <div class="p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-2xl font-bold text-gray-800">Book Service</h3>
                    <button onclick="closeWhatsappModal()" class="text-gray-500 hover:text-gray-700 text-2xl">
                        &times;
                    </button>
                </div>
                
                <form id="whatsappForm" class="space-y-4">
                    <input type="hidden" id="serviceName" name="service_name">
                    <input type="hidden" id="servicePrice" name="service_price">
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Full Name *</label>
                        <input type="text" name="name" required 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Mobile Number *</label>
                        <input type="tel" name="phone" required 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="+91XXXXXXXXXX">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <input type="email" name="email" 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Address *</label>
                        <textarea name="address" rows="3" required 
                                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="text-sm text-gray-600 mb-1">Selected Service: <span id="modalServiceName" class="font-semibold"></span></p>
                        <p class="text-sm text-gray-600">Price: <span id="modalServicePrice" class="font-bold text-green-600"></span></p>
                    </div>
                    
                    <div class="pt-4">
                        <button type="submit" 
                                class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                            <i class="fab fa-whatsapp"></i>
                            Send via WhatsApp
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Page Header -->
    <div class="bg-gray-900 py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center opacity-30" style="background-image: url('https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?q=80&w=2070&auto=format&fit=crop');"></div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Our Services</h1>
            <div class="text-gray-300">
                <a href="{{ route('home') }}" class="hover:text-primary transition">Home</a>
                <span class="mx-2">/</span>
                <span>Services</span>
            </div>
        </div>
    </div>

   <!-- Services Grid -->
    <section class="py-20 bg-blue-50/60">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://thehealthyhome.me/img/404c22a4-bec2-4cf8-8a89-fd7c256d1a05/full-ac-cleaning.jpg?q=80&fit=max&crop=1920%2C1080%2C0%2C0" alt="AC Deep Service" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute bottom-0 left-0 bg-green-100 text-green-800 px-4 py-1 text-sm font-bold">Premium</div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">ADVANCE DEEP SERVICE WITH DOUBLE COATING</h3>
                        <p class="text-gray-600 mb-6">Premium deep cleaning service with double protective coating for enhanced AC performance and longevity.</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-3xl font-bold text-gray-800">₹2499</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">180 DAYS WARRANTY</span>
                        </div>
                        <ul class="space-y-2 mb-6 text-gray-700">
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Deep cleaning of all components</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Double protective coating</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Performance optimization</li>
                        </ul>
                        <button onclick="openWhatsappModal('ADVANCE DEEP SERVICE WITH DOUBLE COATING', '₹2499')" 
                                class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                            <i class="fab fa-whatsapp"></i>
                            Contact for Service
                        </button>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://public.carlcare.com/public/33c20c4c1c67c756759c6dd01287c254.png" alt="Fresh Air AC Service" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute bottom-0 left-0 bg-green-100 text-green-800 px-4 py-1 text-sm font-bold">Cleaning</div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">FRESH AIR AC Services</h3>
                        <p class="text-gray-600 mb-6">Comprehensive AC service to ensure fresh, clean air circulation and optimal cooling performance.</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-3xl font-bold text-gray-800">₹499</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">10 DAYS WARRANTY</span>
                        </div>
                        <ul class="space-y-2 mb-6 text-gray-700">
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Filter cleaning & replacement</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Air duct cleaning</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Coil cleaning</li>
                        </ul>
                        <button onclick="openWhatsappModal('FRESH AIR AC Services', '₹499')" 
                                class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                            <i class="fab fa-whatsapp"></i>
                            Contact for Service
                        </button>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://cdn.prod.website-files.com/67f5e66549a88bf8073508c2/691eb405c4fe35dd4156faaa_Maintenance%20(8).jpg" alt="Water Leakage" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute bottom-0 left-0 bg-green-100 text-green-800 px-4 py-1 text-sm font-bold">Repair</div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">WATER LEAKAGE REPAIR</h3>
                        <p class="text-gray-600 mb-6">Professional repair service for AC water leakage issues with thorough diagnosis and permanent solutions.</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-3xl font-bold text-gray-800">₹599</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">30 DAYS WARRANTY</span>
                        </div>
                        <ul class="space-y-2 mb-6 text-gray-700">
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Drain pipe cleaning</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Leak detection & sealing</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Drain pan inspection</li>
                        </ul>
                        <button onclick="openWhatsappModal('WATER LEAKAGE REPAIR', '₹599')" 
                                class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                            <i class="fab fa-whatsapp"></i>
                            Contact for Service
                        </button>
                    </div>
                </div>

                 <!-- Service 4 -->
                 <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://content.jdmagicbox.com/v2/comp/delhi/v2/011pxx11.xx11.250523185041.f5v2/catalogue/vasim-malik-airconditioner-vijay-vihar-rohini-delhi-ac-installation-services-yzr4jq6jbd.jpg" alt="AC Checkup" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute bottom-0 left-0 bg-green-100 text-green-800 px-4 py-1 text-sm font-bold">Checkup</div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">AC Repair/CHECK UP</h3>
                        <p class="text-gray-600 mb-6">Complete AC health checkup and minor repair service to identify and fix issues before they become major problems.</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-3xl font-bold text-gray-800">₹249</span>
                            <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-medium">DEPENDS ON WORK</span>
                        </div>
                        <ul class="space-y-2 mb-6 text-gray-700">
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Complete system diagnosis</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Performance testing</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Minor repairs included</li>
                        </ul>
                        <button onclick="openWhatsappModal('AC Repair/CHECK UP', '₹249')" 
                                class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                            <i class="fab fa-whatsapp"></i>
                            Contact for Service
                        </button>
                    </div>
                </div>

                 <!-- Service 5 -->
                 <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://5.imimg.com/data5/SELLER/Default/2024/11/467005547/TJ/SJ/YF/20418660/ac-gas-refilling-services-500x500.jpeg" alt="Gas Charging" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute bottom-0 left-0 bg-green-100 text-green-800 px-4 py-1 text-sm font-bold">Refill</div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">Gas Charging</h3>
                        <p class="text-gray-600 mb-6">Professional refrigerant gas charging service for optimal cooling performance and energy efficiency.</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-3xl font-bold text-gray-800">₹2299</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">60 DAYS WARRANTY</span>
                        </div>
                        <ul class="space-y-2 mb-6 text-gray-700">
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Refrigerant refilling</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Leak testing</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Pressure optimization</li>
                        </ul>
                        <button onclick="openWhatsappModal('Gas Charging', '₹2299')" 
                                class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                            <i class="fab fa-whatsapp"></i>
                            Contact for Service
                        </button>
                    </div>
                </div>

                 <!-- Service 6 -->
                 <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://alpheating.ca/wp-content/uploads/2023/05/understanding-and-fixing-electrical-problems-in-ac-units-alp-heating-5.jpg" alt="No Power Issue" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute bottom-0 left-0 bg-green-100 text-green-800 px-4 py-1 text-sm font-bold">Electrical</div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">No Power Issue Repair</h3>
                        <p class="text-gray-600 mb-6">Expert repair service for AC power issues including electrical faults, wiring problems, and component failures.</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-3xl font-bold text-gray-800">₹249</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">10-60 DAYS WARRANTY</span>
                        </div>
                        <ul class="space-y-2 mb-6 text-gray-700">
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Electrical fault diagnosis</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Wiring repair</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Component testing</li>
                        </ul>
                        <button onclick="openWhatsappModal('No Power Issue Repair', '₹249')" 
                                class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                            <i class="fab fa-whatsapp"></i>
                            Contact for Service
                        </button>
                    </div>
                </div>

                <!-- Service 7 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://5.imimg.com/data5/SELLER/Default/2021/6/GW/FE/DU/39481449/ac-repair-service.jpg" alt="AC Uninstallation" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute bottom-0 left-0 bg-green-100 text-green-800 px-4 py-1 text-sm font-bold">Uninstall</div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">UNINSTALLATION SPLIT AC</h3>
                        <p class="text-gray-600 mb-6">Professional uninstallation service for split AC units with careful handling and proper disconnection.</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-3xl font-bold text-gray-800">₹699</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">10 DAYS WARRANTY</span>
                        </div>
                        <ul class="space-y-2 mb-6 text-gray-700">
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Safe refrigerant recovery</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Electrical disconnection</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Wall mounting removal</li>
                        </ul>
                        <button onclick="openWhatsappModal('UNINSTALLATION SPLIT AC', '₹699')" 
                                class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                            <i class="fab fa-whatsapp"></i>
                            Contact for Service
                        </button>
                    </div>
                </div>

                <!-- Service 8 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://5.imimg.com/data5/SELLER/Default/2025/10/555383773/VS/WO/HP/151439080/concealed-split-ac-installation-services-500x500.webp" alt="AC Installation" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute bottom-0 left-0 bg-green-100 text-green-800 px-4 py-1 text-sm font-bold">Install</div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">Installation SPLIT AC</h3>
                        <p class="text-gray-600 mb-6">Professional installation service for split AC units with proper mounting, electrical work, and testing.</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-3xl font-bold text-gray-800">₹1500</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">30 DAYS WARRANTY</span>
                        </div>
                        <ul class="space-y-2 mb-6 text-gray-700">
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Wall mounting & alignment</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Electrical connection</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Vacuum & gas charging</li>
                        </ul>
                        <button onclick="openWhatsappModal('Installation SPLIT AC', '₹1500')" 
                                class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                            <i class="fab fa-whatsapp"></i>
                            Contact for Service
                        </button>
                    </div>
                </div>

                <!-- Service 9 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://content.jdmagicbox.com/v2/comp/delhi/x6/011pxx11.xx11.180316222441.y4x6/catalogue/j-k-airconditioners-south-city-2-gurgaon-ac-installation-services-kg86aepwen.jpg" alt="Window AC Uninstallation" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute bottom-0 left-0 bg-green-100 text-green-800 px-4 py-1 text-sm font-bold">Uninstall</div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">UNINSTALLATION WINDOW AC</h3>
                        <p class="text-gray-600 mb-6">Professional uninstallation service for window AC units with careful removal and sealing.</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-3xl font-bold text-gray-800">₹399</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">30 DAYS WARRANTY</span>
                        </div>
                        <ul class="space-y-2 mb-6 text-gray-700">
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Safe unit removal</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Window sealing</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Electrical disconnection</li>
                        </ul>
                        <button onclick="openWhatsappModal('UNINSTALLATION WINDOW AC', '₹399')" 
                                class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                            <i class="fab fa-whatsapp"></i>
                            Contact for Service
                        </button>
                    </div>
                </div>

                <!-- Service 10 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://balajiaircon.com/wp-content/uploads/2025/08/image.png" alt="Window AC Installation" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute bottom-0 left-0 bg-green-100 text-green-800 px-4 py-1 text-sm font-bold">Install</div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">Installation WINDOW AC</h3>
                        <p class="text-gray-600 mb-6">Professional installation service for window AC units with secure mounting and proper sealing.</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-3xl font-bold text-gray-800">₹699</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">10 DAYS WARRANTY</span>
                        </div>
                        <ul class="space-y-2 mb-6 text-gray-700">
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Window frame preparation</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Secure mounting</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Proper sealing & insulation</li>
                        </ul>
                        <button onclick="openWhatsappModal('Installation WINDOW AC', '₹699')" 
                                class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                            <i class="fab fa-whatsapp"></i>
                            Contact for Service
                        </button>
                    </div>
                </div>

                <!-- Service 11 - Annual Maintenance -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://blairsair.com/wp-content/uploads/2024/01/tuckerenterprise-9-1080x675.jpg" alt="Annual Maintenance" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute bottom-0 left-0 bg-green-100 text-green-800 px-4 py-1 text-sm font-bold">Maintenance</div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">ANNUAL MAINTENANCE SERVICES</h3>
                        <p class="text-gray-600 mb-6">Comprehensive annual maintenance plan to keep your AC running efficiently throughout the year.</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-3xl font-bold text-gray-800">₹1499</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">ANNUAL PLAN</span>
                        </div>
                        <ul class="space-y-2 mb-6 text-gray-700">
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Quarterly servicing</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Priority support</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Discount on repairs</li>
                        </ul>
                        <button onclick="openWhatsappModal('ANNUAL MAINTENANCE SERVICES', '₹1499')" 
                                class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                            <i class="fab fa-whatsapp"></i>
                            Contact for Service
                        </button>
                    </div>
                </div>


     <!-- Washing Machine Card -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300">
        <div class="h-64 overflow-hidden relative">
            <img src="https://5.imimg.com/data5/SELLER/Default/2025/10/555870163/JL/SG/AP/72434936/washing-machine-repairing-service-500x500.jpg" alt="Washing Machine" class="w-full h-full object-cover transition duration-500 hover:scale-110">
            <div class="absolute bottom-0 left-0 bg-yellow-100 text-yellow-800 px-4 py-1 text-sm font-bold">COMING SOON</div>
        </div>
        <div class="p-8">
            <h3 class="text-2xl font-bold mb-4">WASHING MACHINE</h3>
            <p class="text-gray-600 mb-6">Professional washing machine repair and maintenance services for all major brands.</p>
            <ul class="space-y-2 mb-6 text-gray-700">
                <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Drum & motor servicing</li>
                <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Water inlet & drainage checks</li>
                <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Filter cleaning & replacement</li>
            </ul>
            <div class="w-full text-center bg-gray-200 text-gray-700 font-bold py-3 px-4 rounded-lg cursor-not-allowed">
                COMING SOON
            </div>
        </div>
    </div>

    <!-- RO Card -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300">
        <div class="h-64 overflow-hidden relative">
            <img src="https://5.imimg.com/data5/SELLER/Default/2024/10/457870927/DV/HV/EQ/103182142/250-liter-industrial-ro-water-purifier-500x500.jpeg" alt="RO" class="w-full h-full object-cover transition duration-500 hover:scale-110">
            <div class="absolute bottom-0 left-0 bg-yellow-100 text-yellow-800 px-4 py-1 text-sm font-bold">COMING SOON</div>
        </div>
        <div class="p-8">
            <h3 class="text-2xl font-bold mb-4">RO</h3>
            <p class="text-gray-600 mb-6">Reliable RO system servicing and repair to ensure pure and safe drinking water.</p>
            <ul class="space-y-2 mb-6 text-gray-700">
                <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Filter & membrane replacement</li>
                <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Leak detection & repair</li>
                <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>RO water quality check</li>
            </ul>
            <div class="w-full text-center bg-gray-200 text-gray-700 font-bold py-3 px-4 rounded-lg cursor-not-allowed">
                COMING SOON
            </div>
        </div>
    </div>

    <!-- Refrigerator Card -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300">
        <div class="h-64 overflow-hidden relative">
            <img src="https://5.imimg.com/data5/SELLER/Default/2025/8/539438126/HD/YE/VV/15180118/refrigerator-repairing-service-500x500.jpg" alt="Refrigerator" class="w-full h-full object-cover transition duration-500 hover:scale-110">
            <div class="absolute bottom-0 left-0 bg-yellow-100 text-yellow-800 px-4 py-1 text-sm font-bold">COMING SOON</div>
        </div>
        <div class="p-8">
            <h3 class="text-2xl font-bold mb-4">REFRIGERATOR</h3>
            <p class="text-gray-600 mb-6">Comprehensive refrigerator repair and maintenance by certified technicians.</p>
            <ul class="space-y-2 mb-6 text-gray-700">
                <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Compressor & coolant inspection</li>
                <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Door seal & gasket replacement</li>
                <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Temperature & thermostat checks</li>
            </ul>
            <div class="w-full text-center bg-gray-200 text-gray-700 font-bold py-3 px-4 rounded-lg cursor-not-allowed">
                COMING SOON
            </div>
        </div>
    </div>

    <!-- Geyser Card -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300">
        <div class="h-64 overflow-hidden relative">
            <img src="https://hometriangle.com/imagecache/media/525443/package.png" alt="Geyser" class="w-full h-full object-cover transition duration-500 hover:scale-110">
            <div class="absolute bottom-0 left-0 bg-yellow-100 text-yellow-800 px-4 py-1 text-sm font-bold">COMING SOON</div>
        </div>
        <div class="p-8">
            <h3 class="text-2xl font-bold mb-4">GEYSER</h3>
            <p class="text-gray-600 mb-6">Expert geyser installation, repair, and maintenance services.</p>
            <ul class="space-y-2 mb-6 text-gray-700">
                <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Tank cleaning & maintenance</li>
                <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Heating element inspection</li>
                <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Leak & pressure check</li>
            </ul>
            <div class="w-full text-center bg-gray-200 text-gray-700 font-bold py-3 px-4 rounded-lg cursor-not-allowed">
                COMING SOON
            </div>
        </div>
    </div>

    <!-- Microwave Card -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300">
        <div class="h-64 overflow-hidden relative">
            <img src="https://hometriangle.com/imagecache/media/526530/package.png" alt="Microwave" class="w-full h-full object-cover transition duration-500 hover:scale-110">
            <div class="absolute bottom-0 left-0 bg-yellow-100 text-yellow-800 px-4 py-1 text-sm font-bold">COMING SOON</div>
        </div>
        <div class="p-8">
            <h3 class="text-2xl font-bold mb-4">MICROWAVE</h3>
            <p class="text-gray-600 mb-6">Quality microwave repair and servicing for your kitchen appliances.</p>
            <ul class="space-y-2 mb-6 text-gray-700">
                <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Heating element check</li>
                <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Door & seal inspection</li>
                <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Control panel servicing</li>
            </ul>
            <div class="w-full text-center bg-gray-200 text-gray-700 font-bold py-3 px-4 rounded-lg cursor-not-allowed">
                COMING SOON
            </div>
        </div>
    </div>

    <!-- LED TV Card -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300">
        <div class="h-64 overflow-hidden relative">
            <img src="https://repairguru.in/wp-content/uploads/2022/06/3940852.jpeg" alt="LED TV" class="w-full h-full object-cover transition duration-500 hover:scale-110">
            <div class="absolute bottom-0 left-0 bg-yellow-100 text-yellow-800 px-4 py-1 text-sm font-bold">COMING SOON</div>
        </div>
        <div class="p-8">
            <h3 class="text-2xl font-bold mb-4">LED TV</h3>
            <p class="text-gray-600 mb-6">Reliable LED TV repair and installation services for your home entertainment.</p>
            <ul class="space-y-2 mb-6 text-gray-700">
                <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Screen & display check</li>
                <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Speaker & sound check</li>
                <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Connectivity & ports servicing</li>
            </ul>
            <div class="w-full text-center bg-gray-200 text-gray-700 font-bold py-3 px-4 rounded-lg cursor-not-allowed">
                COMING SOON
            </div>
        </div>
    </div>

    <!-- Laptop Card -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300">
        <div class="h-64 overflow-hidden relative">
            <img src="https://5.imimg.com/data5/SELLER/Default/2024/11/464980000/NK/EN/SZ/219634358/laptop-repairing-services-500x500.png" alt="Laptop" class="w-full h-full object-cover transition duration-500 hover:scale-110">
            <div class="absolute bottom-0 left-0 bg-yellow-100 text-yellow-800 px-4 py-1 text-sm font-bold">COMING SOON</div>
        </div>
        <div class="p-8">
            <h3 class="text-2xl font-bold mb-4">LAPTOP</h3>
            <p class="text-gray-600 mb-6">Comprehensive laptop repair and maintenance services for all brands.</p>
            <ul class="space-y-2 mb-6 text-gray-700">
                <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Battery & charger servicing</li>
                <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Hardware & software diagnostics</li>
                <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Keyboard & screen repair</li>
            </ul>
            <div class="w-full text-center bg-gray-200 text-gray-700 font-bold py-3 px-4 rounded-lg cursor-not-allowed">
                COMING SOON
            </div>
        </div>
    </div>

    <!-- Air Purifier Card -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300">
        <div class="h-64 overflow-hidden relative">
            <img src="https://serviceable.co.in/wp-content/uploads/2025/08/ChatGPT-Image-Aug-31-2025-04_23_25-PM.webp" alt="Air Purifier" class="w-full h-full object-cover transition duration-500 hover:scale-110">
            <div class="absolute bottom-0 left-0 bg-yellow-100 text-yellow-800 px-4 py-1 text-sm font-bold">COMING SOON</div>
        </div>
        <div class="p-8">
            <h3 class="text-2xl font-bold mb-4">AIR PURIFIER</h3>
            <p class="text-gray-600 mb-6">Air purifier repair and maintenance for a cleaner and healthier environment.</p>
            <ul class="space-y-2 mb-6 text-gray-700">
                <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Filter replacement & cleaning</li>
                <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>UV lamp check & servicing</li>
                <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Airflow & fan maintenance</li>
            </ul>
            <div class="w-full text-center bg-gray-200 text-gray-700 font-bold py-3 px-4 rounded-lg cursor-not-allowed">
                COMING SOON
            </div>
        </div>
    </div>
                

            </div>
        </div>
    </section>

<!-- Get In Touch Section -->
<section class="relative py-24 bg-cover bg-center mt-8"
    style="background-image: url('https://images.pexels.com/photos/7006674/pexels-photo-7006674.jpeg');">

    <!-- Gradient Overlay (Hero Style) -->
    <div class="absolute inset-0 
        bg-gradient-to-r 
        from-[#0b132b]/110 
        via-[#0f1c3f]/90 
        to-[#0b132b]/85">
    </div>

    <!-- CONTENT -->
    <div class="relative z-10 max-w-7xl mx-auto px-4">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">

            <!-- LEFT SIDE IMAGE -->
            <div class="flex justify-center">
                <img 
                    src="https://images.pexels.com/photos/8528744/pexels-photo-8528744.jpeg"
                    alt="Support Agent"
                    class="rounded-xl w-full max-w-md object-cover shadow-2xl"
                >
            </div>

            <!-- RIGHT SIDE CONTENT + FORM -->
            <div>

                <!-- Heading -->
                <span class="text-orange-400 font-semibold uppercase tracking-wide mb-3 inline-flex items-center gap-2">
                    <span class="w-2 h-2 bg-orange-400 rounded-full"></span>
                    Get in Touch
                </span>

                <h2 class="text-4xl font-bold text-white mb-10 leading-snug">
                    Have any question or <br> free consultancy?
                </h2>

                <!-- FORM (UNCHANGED DESIGN) -->
                <div class="w-full max-w-md -mt-4
                            bg-gradient-to-b from-gray-900/90 to-gray-800/90 
                            backdrop-blur-sm 
                            rounded-xl p-7 shadow-xl 
                            border border-white/40">

                    <h3 class="text-2xl font-bold text-white mb-6">
                        Request a Quote
                    </h3>

                    <form id="getInTouchWhatsappForm" class="space-y-5">

                        <div>
                            <label class="block text-sm text-white mb-2">Full Name</label>
                            <input type="text" id="get_name" placeholder="Enter your name"
                                class="w-full bg-[#6b7f96] text-white placeholder-gray-200 
                                       rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                        </div>

                        <div>
                            <label class="block text-sm text-white mb-2">Email</label>
                            <input type="email" id="get_email" placeholder="Enter your email"
                                class="w-full bg-[#6b7f96] text-white placeholder-gray-200 
                                       rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                        </div>

                        <div>
                            <label class="block text-sm text-white mb-2">Message</label>
                            <textarea rows="4" id="get_message" placeholder="Write your message..."
                                class="w-full bg-[#6b7f96] text-white placeholder-gray-200 
                                       rounded-lg px-4 py-3 resize-none 
                                       focus:outline-none focus:ring-2 focus:ring-yellow-400"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-[#7a8ea5] hover:bg-[#ff5e14] 
                                   text-white font-semibold py-3 rounded-lg transition">
                            SEND MESSAGE
                        </button>

                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- WhatsApp Script -->
<script>
    document.getElementById('getInTouchWhatsappForm').addEventListener('submit', function(e) {
        e.preventDefault();

        let name = document.getElementById('get_name').value;
        let email = document.getElementById('get_email').value;
        let message = document.getElementById('get_message').value;

        let whatsappMessage =
            `*New Service Query (Get In Touch)*%0A%0A` +
            `*Name:* ${name}%0A` +
            `*Email:* ${email}%0A` +
            `*Message:* ${message}`;

        let whatsappURL = `https://wa.me/918882600406?text=${whatsappMessage}`;

        window.open(whatsappURL, '_blank');
    });
</script>


<!-- Call to Action -->
<section class="py-20 bg-blue-50/60 text-center">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-6">Not Sure What You Need?</h2>
        <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">Our experts are happy to inspect your system and recommend the best solution.</p>
        <a href="{{ route('contact') }}" class="bg-blue-700 text-white font-bold py-4 px-10 rounded-full hover:bg-[#153152] transition shadow-lg inline-block">Get a Free Consultation</a>
    </div>
</section>

<script>
function openWhatsappModal(serviceName, servicePrice) {
    document.getElementById('serviceName').value = serviceName;
    document.getElementById('servicePrice').value = servicePrice;
    document.getElementById('modalServiceName').textContent = serviceName;
    document.getElementById('modalServicePrice').textContent = servicePrice;
    document.getElementById('whatsappModal').classList.remove('hidden');
    document.getElementById('whatsappModal').classList.add('flex');
    document.body.style.overflow = 'hidden';
}

function closeWhatsappModal() {
    document.getElementById('whatsappModal').classList.add('hidden');
    document.getElementById('whatsappModal').classList.remove('flex');
    document.body.style.overflow = 'auto';
}

document.getElementById('whatsappForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const data = Object.fromEntries(formData);
    
    // Format the message for WhatsApp
    const whatsappMessage = `*New Service Booking Request*%0A%0A` +
                           `*Service:* ${data.service_name}%0A` +
                           `*Price:* ${data.service_price}%0A` +
                           `*Name:* ${data.name}%0A` +
                           `*Phone:* ${data.phone}%0A` +
                           `*Email:* ${data.email || 'Not provided'}%0A` +
                           `*Address:* ${data.address}%0A%0A` +
                           `*Request Time:* ${new Date().toLocaleString()}`;
    
    // WhatsApp number
    const whatsappNumber = '8882600406';
    
    // Create WhatsApp URL
    const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${whatsappMessage}`;
    
    // Open WhatsApp in new tab
    window.open(whatsappUrl, '_blank');
    
    // Close modal
    closeWhatsappModal();
    
    // Reset form
    this.reset();
    
    // Show success message
    alert('Opening WhatsApp... Please send the pre-filled message to complete your booking.');
});

// Close modal when clicking outside
document.getElementById('whatsappModal').addEventListener('click', function(e) {
    if (e.target.id === 'whatsappModal') {
        closeWhatsappModal();
    }
});

// Close modal with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && !document.getElementById('whatsappModal').classList.contains('hidden')) {
        closeWhatsappModal();
    }
});
</script>

<style>
#whatsappModal {
    backdrop-filter: blur(5px);
    animation: fadeIn 0.3s ease-out;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

#whatsappModal > div {
    animation: slideUp 0.3s ease-out;
}

@keyframes slideUp {
    from {
        transform: translateY(20px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}
</style>

<!-- Add Font Awesome for WhatsApp icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

@endsection