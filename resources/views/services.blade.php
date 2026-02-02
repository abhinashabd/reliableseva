@extends('layouts.app')

@section('title', 'Our Services - Airvice')

@section('content')
   <!-- WhatsApp Contact Modal -->
<div id="whatsappModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center p-4">
    <div class="bg-white rounded-xl shadow-2xl max-w-md w-full transform transition-all max-h-screen overflow-y-auto">
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
                           placeholder="91XXXXXXXXXX">
                </div>

                <!-- ✅ Pin Code Field Added -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Pin Code *</label>
                    <input type="text" name="pincode" required maxlength="6"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           placeholder="Enter Pin Code">
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
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Preferred Service Date *</label>
                    <input type="date" id="bookingDate" name="booking_date" required min="{{ date('Y-m-d') }}"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Preferred Time *</label>
                    <select id="preferredTime" name="time_slot" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Select time (8:00 AM – 8:00 PM)</option>
                    </select>
                    <p class="text-xs text-gray-500 mt-1">Service booking time: 8:00 AM to 8:00 PM</p>
                </div>
                
                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-sm text-gray-600 mb-1">
                        Selected Service: <span id="modalServiceName" class="font-semibold"></span>
                    </p>
                    <p class="text-sm text-gray-600">
                        Price: <span id="modalServicePrice" class="font-bold text-green-600"></span>
                    </p>
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
       <div class="absolute inset-0 bg-cover bg-center opacity-30"
     style="background-image: url('/asset/images/ourservicestopimg.png');">
</div>

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
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-start">
                <!-- Service 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300 min-h-[560px]">
                    <div class="h-64 overflow-hidden relative">
                        <img src="/asset/images/AC Deep Service.jpg" alt="AC Deep Service" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute bottom-0 left-0 bg-green-100 text-green-800 px-4 py-1 text-sm font-bold">Premium</div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">Advance AC Deep Service with Double Coating Protection</h3>
                        <p class="text-gray-600 mb-6">Premium deep cleaning service with double protective coating for enhanced AC performance and longevity.</p>
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex flex-col">
                                <span class="text-2xl font-bold text-gray-800">₹3000</span>
                                {{-- <span class="text-sm text-gray-500 line-through">₹3200</span> --}}
                            </div>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">6 MONTHS WARRANTY</span>
                        </div>
                        <ul id="service1-inclusions" class="space-y-2 mb-6 text-gray-700 hidden">
                             <h4 class="font-bold text-gray-800 mb-2">Inclusions:</h4>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Indoor unit dismantling & deep cleaning at our workshop</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Indoor unit dismantling & deep cleaning at our workshop</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Outdoor unit deep cleaning on-site</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Double coating for indoor leakage protection</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>6-month gas leakage warranty (effective even if gas level is OK)</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Free follow-up checks within 6 months</li>
                        </ul>
                        
                        <!-- Collapsible Content -->
                        <div id="service1-details" class="hidden">
                            <ul class="space-y-2 mb-4 text-gray-700">
                                <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Works even if gas is currently ok</li>
                                <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Ensures longer AC life, better cooling efficiency, and peace of mind</li>
                            </ul>
                            <div class="mb-6 p-4 bg-yellow-50 rounded-lg border border-yellow-200">
                                <h4 class="font-bold text-gray-800 mb-2">Extra Benefits / Add-ons for Warranty:</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Leak testing before coating ensures any minor leaks are fixed before applying the protective layer</li>
                                    <li>• Certified refrigerants will be used for gas charging, if required. Gas charging will be charged extra.</li>
                                    <li>• Inspection is conducted before service, and all identified issues are clearly explained to the customer prior to work initiation.</li>
                                    <li>• Professional inspection report given to customer after service</li>
                                    <li>• Warranty is valid only if one mandatory preventive service is completed during the 6-month period (charged separately)</li>
                                    <li>• Free follow-up checks within 6 months</li>
                                </ul>
                                <h4 class="font-bold text-gray-800 mb-2 mt-3">Exclusions:</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• If multiple leakages are found, parts replacement (Service value  / condenser coil) will be recommended.</li>
                                    <li>• Previously repaired multiple times</li>
                                    <li>• Very old AC units.</li>
                                    <li>• Aluminium condenser coils (not compatible with double coating)</li>
                                    <li>• Heavily rusted or damaged components.</li>
                                    <li>• Any electrical parts such as PCB, motor, capacitor, or electrical wiring</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="flex flex-col gap-3">
                            <button onclick="toggleDetails('service1')" 
                                    class="w-full bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fas fa-chevron-down" id="service1-icon"></i>
                                Read More Details
                            </button>
                            <button onclick="openWhatsappModal('Advance AC Deep Service + Double Coating Protection', '₹3000')" 
                                    class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fab fa-whatsapp"></i>
                                Contact for Service
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300 min-h-[560px]">
                    <div class="h-64 overflow-hidden relative">
                        <img src="/asset/images/Fresh Air AC Service.jpeg" alt="Fresh Air AC Service" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute bottom-0 left-0 bg-green-100 text-green-800 px-4 py-1 text-sm font-bold">Cleaning</div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">Fresh Air AC Service</h3>
                        <p class="text-gray-600 mb-6">Indoor unit deep cleaning with jet pump for fresh airflow improvement and basic AC health check.</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-3xl font-bold text-gray-800">₹499</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">30 DAYS WARRANTY</span>
                        </div>
                        <ul id="service2-inclusions" class="space-y-2 mb-6 text-gray-700 hidden">
                            <h4 class="font-bold text-gray-800 mb-2 mt-3">Inclusions:</h4>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Indoor unit deep cleaning with jet pump</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Air filter, blower & coil cleaning</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Drain tray & drain pipe flushing</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Dust removal & fresh airflow improvement</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Basic AC health check: cooling, gas status (inspection), noise, electrical & leakage check</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>30 Days Service Warranty (service workmanship)</li>
                        </ul>
                        
                        <!-- Collapsible Content -->
                        <div id="service2-details" class="hidden">
                            <div class="mb-6 p-4 bg-yellow-50 rounded-lg border border-yellow-200">
                                {{-- <h4 class="font-bold text-gray-800 mb-2">What's Included</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Indoor unit deep cleaning with jet pump</li>
                                    <li>• Air filter, blower & coil cleaning</li>
                                    <li>• Drain tray & drain pipe flushing</li>
                                    <li>• Dust removal & fresh airflow improvement</li>
                                    <li>• Basic AC health check: cooling, gas status (inspection), noise, electrical & leakage check</li>
                                    <li>• 30 Days Service Warranty (service workmanship)</li>
                                </ul> --}}
                                <h4 class="font-bold text-gray-800 mb-2 mt-3">Exclusions:</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Gas refill or leakage repair</li>
                                    <li>• Electrical repair or part replacement</li>
                                    <li>• Dismantling or spare parts</li>
                                </ul>
                                <p class="text-sm text-gray-700 mt-2"><strong>Note:</strong> This is a basic maintenance service. If any issue is found, a separate estimate will be shared after customer approval.</p>
                            </div>
                        </div>
                        
                        <div class="flex flex-col gap-3">
                            <button onclick="toggleDetails('service2')" 
                                    class="w-full bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fas fa-chevron-down" id="service2-icon"></i>
                                Read More Details
                            </button>
                            <button onclick="openWhatsappModal('Fresh Air AC Service', '₹499')" 
                                    class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fab fa-whatsapp"></i>
                                Contact for Service
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300 min-h-[560px]">
                    <div class="h-64 overflow-hidden relative">
                        <img src="/asset/images/Water Leakage Repair .jpg" alt="Water Leakage" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute bottom-0 left-0 bg-green-100 text-green-800 px-4 py-1 text-sm font-bold">Repair</div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">Water Leakage Repair</h3>
                        <p class="text-gray-600 mb-6">Professional repair service for AC water leakage issues with thorough diagnosis and permanent solutions.</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-3xl font-bold text-gray-800">₹599</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">30 DAYS WARRANTY</span>
                        </div>
                        <ul id="service3-inclusions" class="space-y-2 mb-6 text-gray-700 hidden">
                            <h4 class="font-bold text-gray-800 mb-2 mt-3">Inclusions:</h4>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Indoor AC water leakage issue diagnosis & repair</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Drain tray & drain pipe cleaning / flushing</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Proper water flow & leakage test</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>30 Days Service Warranty</li>
                        </ul>
                        
                        <!-- Collapsible Content -->
                        <div id="service3-details" class="hidden">
                            <div class="mb-6 p-4 bg-yellow-50 rounded-lg border border-yellow-200">
                                <h4 class="font-bold text-gray-800 mb-2">Exclusions:</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Gas work, electrical repair, spare parts, or outdoor unit repair.</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="flex flex-col gap-3">
                            <button onclick="toggleDetails('service3')" 
                                    class="w-full bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fas fa-chevron-down" id="service3-icon"></i>
                                Read More Details
                            </button>
                            <button onclick="openWhatsappModal('Water Leakage Repair', '₹599')" 
                                    class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fab fa-whatsapp"></i>
                                Contact for Service
                            </button>
                        </div>
                    </div>
                </div>

                 <!-- Service 4 -->
                 <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300 min-h-[560px]">
                    <div class="h-64 overflow-hidden relative">
                        <img src="/asset/images/acrepair accheckup.png" alt="AC Checkup" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute bottom-0 left-0 bg-green-100 text-green-800 px-4 py-1 text-sm font-bold">Checkup</div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">AC Repair / AC Checkup</h3>
                        <p class="text-gray-600 mb-6">Complete AC inspection & fault diagnosis with issue report and repair recommendation.</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-3xl font-bold text-gray-800">₹249</span>
                            <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-medium">DEPENDS ON WORK</span>
                        </div>
                        
                        
                        <!-- Collapsible Content -->
                        <div id="service4-details" class="hidden">
                            <h4 class="font-bold text-gray-800 mb-2 mt-3">Inclusions:</h4>
                            <ul class="text-sm text-gray-700 space-y-1">
                                <li>• Complete AC inspection & fault diagnosis</li>
                                <li>• Cooling, gas status (inspection), noise & electrical check</li>
                                <li>• Issue report with repair recommendation</li>
                            </ul>
                            <div class="mb-6 p-4 bg-yellow-50 rounded-lg border border-yellow-200">
                                <h4 class="font-bold text-gray-800 mb-2">Warranty:</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li class="text-green-600">✔️ Warranty actual repair work par depend karegi</li>
                                    <li class="text-red-600">❌ Inspection/diagnosis par warranty applicable nahi</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="flex flex-col gap-3">
                            <button onclick="toggleDetails('service4')" 
                                    class="w-full bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fas fa-chevron-down" id="service4-icon"></i>
                                Read More Details
                            </button>
                            <button onclick="openWhatsappModal('AC Repair / AC Checkup', '₹249')" 
                                    class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fab fa-whatsapp"></i>
                                Contact for Service
                            </button>
                        </div>
                    </div>
                </div>

                 <!-- Service 5 -->
                 <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300 min-h-[560px]">
                    <div class="h-64 overflow-hidden relative">
                        <img src="/asset/images/ac gas charging.jpg" alt="Gas Charging" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute bottom-0 left-0 bg-green-100 text-green-800 px-4 py-1 text-sm font-bold">Refill</div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">AC Gas Charging</h3>
                        <p class="text-gray-600 mb-6">Professional refrigerant gas charging service with leakage testing and cooling check.</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-3xl font-bold text-gray-800">₹2500</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">60 DAYS WARRANTY</span>
                        </div>
                        <ul id="service5-inclusions" class="space-y-2 mb-6 text-gray-700 hidden">
                            <h4 class="font-bold text-gray-800 mb-2 mt-3">Inclusions:</h4>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Check working condition of other AC parts</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Identify minor gas leakage through pressure testing</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Remove rust from the leakage point </li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Check working condition of other AC parts</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Gas charging with proper vacuuming</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Final AC unit working & cooling check</li>
                            
                        </ul>
                        
                        <!-- Collapsible Content -->
                        <div id="service5-details" class="hidden">
                            <div class="mb-6 p-4 bg-yellow-50 rounded-lg border border-yellow-200">
                                {{-- <h4 class="font-bold text-gray-800 mb-2">Inclusions</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Fresh gas charging</li>
                                    <li>• Proper leakage testing</li>
                                    <li>• AC unit working & cooling check</li>
                                    <li>• Gas warranty coverage</li>
                                </ul> --}}
                                <h4 class="font-bold text-gray-800 mb-2 mt-3">Warranty:</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li class="text-green-600">✔️ 60 Days Warranty (Gas only)</li>
                                </ul>
                                <h4 class="font-bold text-gray-800 mb-2 mt-3">Exclusions:</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Damaged parts / coil damage</li>
                                    <li>• Electrical faults</li>
                                    <li>• Noise / vibration issues</li>
                                </ul>
                                 <p class="text-sm text-gray-700 mt-2"><strong>Important Note:</strong> •If the leakage is major or multiple, coil replacement will be required and will be charged separately.</p>
                            </div>
                        </div>
                        
                        <div class="flex flex-col gap-3">
                            <button onclick="toggleDetails('service5')" 
                                    class="w-full bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fas fa-chevron-down" id="service5-icon"></i>
                                Read More Details
                            </button>
                            <button onclick="openWhatsappModal('AC Gas Charging', '₹2500')" 
                                    class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fab fa-whatsapp"></i>
                                Contact for Service
                            </button>
                        </div>
                    </div>
                </div>

                 <!-- Service 6 -->
                 <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300 min-h-[560px]">
                    <div class="h-64 overflow-hidden relative">
                        <img src="/asset/images/AC No Power Issue.jpg" alt="No Power Issue" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute bottom-0 left-0 bg-green-100 text-green-800 px-4 py-1 text-sm font-bold">Electrical</div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">AC No Power Issue</h3>
                        <p class="text-gray-600 mb-6">Expert diagnosis and repair service for AC power issues and electrical faults.</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-3xl font-bold text-gray-800">₹249</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">10-60 DAYS WARRANTY</span>
                        </div>
                        
                        
                        <!-- Collapsible Content -->
                        <div id="service6-details" class="hidden">
                            <h4 class="font-bold text-gray-800 mb-2 mt-3">Inclusions:</h4>
                            <ul class="text-sm text-gray-700 space-y-1">
                                <li>• AC no power / not turning ON issue diagnosis</li>
                                <li>• Basic electrical inspection</li>
                            </ul>
                            <div class="mb-6 p-4 bg-yellow-50 rounded-lg border border-yellow-200">
                                <h4 class="font-bold text-gray-800 mb-2">Warranty:</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li class="text-green-600">✔️ 10–60 Days Warranty (actual repair work par depend karegi)</li>
                                </ul>
                                <p class="text-sm text-gray-700 mt-2"><strong>Note:</strong> Spare parts, major electrical faults aur additional repairs extra chargeable hain (customer approval ke baad)</p>
                            </div>
                        </div>
                        
                        <div class="flex flex-col gap-3">
                            <button onclick="toggleDetails('service6')" 
                                    class="w-full bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fas fa-chevron-down" id="service6-icon"></i>
                                Read More Details
                            </button>
                            <button onclick="openWhatsappModal('AC No Power Issue', '₹249')" 
                                    class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fab fa-whatsapp"></i>
                                Contact for Service
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Service 7 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300 min-h-[560px]">
                    <div class="h-64 overflow-hidden relative">
                        <img src="/asset/images/Split AC Uninstallation.jpg" alt="AC Uninstallation" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute bottom-0 left-0 bg-green-100 text-green-800 px-4 py-1 text-sm font-bold">Uninstall</div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">Split AC Uninstallation</h3>
                        <p class="text-gray-600 mb-6">Professional uninstallation service for split AC units with careful handling and proper disconnection.</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-3xl font-bold text-gray-800">₹699</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">10 DAYS WARRANTY</span>
                        </div>
                        <ul id="service7-inclusions" class="space-y-2 mb-6 text-gray-700 hidden">
                            <h4 class="font-bold text-gray-800 mb-2 mt-3">Inclusions:</h4>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>AC working condition check before uninstallation</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Gas level inspection before removal</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Proper gas locking in the outdoor unit.</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Safe & professional dismantling of indoor & outdoor unit</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Copper pipe handling with extra care</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>10 Days Service Warranty on uninstallation work</li>
                        </ul>
                        
                        <!-- Collapsible Content -->
                        <div id="service7-details" class="hidden">
                            <div class="mb-6 p-4 bg-yellow-50 rounded-lg border border-yellow-200">
                                <h4 class="font-bold text-gray-800 mb-2">Warranty:</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li class="text-green-600">✔️ 10 Days Service Warranty (workmanship only)</li>
                                </ul>
                                <p class="text-sm text-gray-700 mt-2"><strong>Note:</strong> Wall repair, gas refill, shifting or re-installation not included</p>
                            </div>
                        </div>
                        
                        <div class="flex flex-col gap-3">
                            <button onclick="toggleDetails('service7')" 
                                    class="w-full bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fas fa-chevron-down" id="service7-icon"></i>
                                Read More Details
                            </button>
                            <button onclick="openWhatsappModal('Split AC Uninstallation', '₹699')" 
                                    class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fab fa-whatsapp"></i>
                                Contact for Service
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Service 8 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300 min-h-[560px]">
                    <div class="h-64 overflow-hidden relative">
                        <img src="/asset/images/split ac installation.jpg" alt="AC Installation" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute bottom-0 left-0 bg-green-100 text-green-800 px-4 py-1 text-sm font-bold">Install</div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">Split AC Installation</h3>
                        <p class="text-gray-600 mb-6">Professional installation service for split AC units with proper mounting and electrical work.</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-3xl font-bold text-gray-800">₹1499</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">30 DAYS WARRANTY</span>
                        </div>
                        <ul id="service8-inclusions" class="space-y-2 mb-6 text-gray-700 hidden">
                            <h4 class="font-bold text-gray-800 mb-2 mt-3">Inclusions:</h4>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Standard split AC installation</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Indoor & outdoor unit mounting</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Basic piping connection & unit testing</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Power supply connection up to existing power point only</li>
                        </ul>
                        
                        <!-- Collapsible Content -->
                        <div id="service8-details" class="hidden">
                            <div class="mb-6 p-4 bg-yellow-50 rounded-lg border border-yellow-200">
                                <h4 class="font-bold text-gray-800 mb-2">Warranty :</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li class="text-green-600">✔️ 30 Days Warranty covering installation-related gas charging, noise & water leakage issues</li>
                                </ul>
                                <h4 class="font-bold text-gray-800 mb-2 mt-3">Exclusion:</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Another electrical fault diagnosis/repair to be handled by electrician</li>
                                    <li>• Concrete drilling not included</li>
                                    <li>• Copper pipe, stand, wiring, spare parts & major electrical work extra chargeable</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="flex flex-col gap-3">
                            <button onclick="toggleDetails('service8')" 
                                    class="w-full bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fas fa-chevron-down" id="service8-icon"></i>
                                Read More Details
                            </button>
                            <button onclick="openWhatsappModal('Split AC Installation', '₹1499')" 
                                    class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fab fa-whatsapp"></i>
                                Contact for Service
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Service 9 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300 min-h-[560px]">
                    <div class="h-64 overflow-hidden relative">
                        <img src="/asset/images/windowacuninstallation.jpeg" alt="Window AC Uninstallation" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute bottom-0 left-0 bg-green-100 text-green-800 px-4 py-1 text-sm font-bold">Uninstall</div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">Window AC Uninstallation</h3>
                        <p class="text-gray-600 mb-6">Professional uninstallation service for window AC units with careful removal and sealing.</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-3xl font-bold text-gray-800">₹399</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">10 DAYS WARRANTY</span>
                        </div>
                        <ul id="service9-inclusions" class="space-y-2 mb-6 text-gray-700 hidden">
                            <h4 class="font-bold text-gray-800 mb-2 mt-3">Inclusions:</h4>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Check AC working condition</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Inform customer of any issues found in the AC</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Safe uninstallation of the window AC unit</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Proper unit removal</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Electrical disconnection</li>
                        </ul>
                        
                        <!-- Collapsible Content -->
                        <div id="service9-details" class="hidden">
                            <div class="mb-6 p-4 bg-yellow-50 rounded-lg border border-yellow-200">
                                <h4 class="font-bold text-gray-800 mb-2">Warranty:</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>✔️ 10-day service warranty (covers installation-related issues only)</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="flex flex-col gap-3">
                            <button onclick="toggleDetails('service9')" 
                                    class="w-full bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fas fa-chevron-down" id="service9-icon"></i>
                                Read More Details
                            </button>
                            <button onclick="openWhatsappModal('Window AC Uninstallation', '₹399')" 
                                    class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fab fa-whatsapp"></i>
                                Contact for Service
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Service 10 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300 min-h-[560px]">
                    <div class="h-64 overflow-hidden relative">
                        <img src="/asset/images/windows ac installation.jpg" alt="Window AC Installation" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute bottom-0 left-0 bg-green-100 text-green-800 px-4 py-1 text-sm font-bold">Install</div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">Window AC Installation</h3>
                        <p class="text-gray-600 mb-6">Professional installation service for window AC units with secure mounting and proper sealing.</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-3xl font-bold text-gray-800">₹699</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">10 DAYS WARRANTY</span>
                        </div>
                        <ul id="service10-inclusions" class="space-y-2 mb-6 text-gray-700 hidden">
                            <h4 class="font-bold text-gray-800 mb-2 mt-3">Inclusions:</h4>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Check AC working condition</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Inform customer of any issues found in the AC.</li>  
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Window AC standard installation</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Proper unit fitting & levelling</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Basic testing after installation</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Power connection up to existing power point only</li>
                        </ul>
                        
                        <!-- Collapsible Content -->
                        <div id="service10-details" class="hidden">
                            <div class="mb-6 p-4 bg-yellow-50 rounded-lg border border-yellow-200">
                                {{-- <h4 class="font-bold text-gray-800 mb-2">Inclusions</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Window AC standard installation</li>
                                    <li>• Proper unit fitting & levelling</li>
                                    <li>• Basic testing after installation</li>
                                    <li>• Power connection up to existing power point only</li>
                                </ul> --}}
                                <h4 class="font-bold text-gray-800 mb-2 mt-3">Exclusions:</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Core cutting / concrete or masonry work</li>
                                    <li>• Major electrical faults or wiring work</li>
                                    <li>• Power point creation or shifting</li>
                                    <li>• Spare parts, frame, grill modification</li>
                                </ul>
                                <h4 class="font-bold text-gray-800 mb-2 mt-3">Warranty:</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>✔️ 10 Days Service Warranty (installation workmanship only)</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="flex flex-col gap-3">
                            <button onclick="toggleDetails('service10')" 
                                    class="w-full bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fas fa-chevron-down" id="service10-icon"></i>
                                Read More Details
                            </button>
                            <button onclick="openWhatsappModal('Window AC Installation', '₹699')" 
                                    class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fab fa-whatsapp"></i>
                                Contact for Service
                            </button>
                        </div>
                    </div>
                </div>


          <!-- Service 11A : Non-Comprehensive AMC -->
<div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300">

    <!-- Image Section -->
    <div class="h-64 overflow-hidden relative">
        <img src="/asset/images/Non-Comprehensive AMC .jpg"
             alt="Non-Comprehensive AMC"
             class="w-full h-full object-cover  transition duration-500 hover:scale-110">
        <div class="absolute bottom-0 left-0 bg-yellow-100 text-yellow-800 px-4 py-1 text-sm font-bold">
            NON-COMPREHENSIVE AMC
        </div>
    </div>

    <div class="p-8">
        <h3 class="text-2xl font-bold mb-4">
            Non-Comprehensive AMC (Preventive Care Plan)
        </h3>

        <p class="text-gray-600 mb-6">
            Preventive maintenance plan designed to keep your AC clean, efficient, and healthy with priority service support.
        </p>

        <div class="flex justify-between items-center mb-4">
            <span class="text-3xl font-bold text-gray-800">₹1,499</span>
            <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-medium">
                PER YEAR / PER AC
            </span>
        </div>

        <ul id="service11a-inclusions" class="space-y-2 mb-6 text-gray-700 hidden">
            <h4 class="font-bold text-gray-800 mb-2">Inclusions:</h4>
            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>2 preventive AC services per year</li>
            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Indoor unit deep cleaning with high-pressure jet pump</li>
            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Air filter, blower & cooling coil cleaning</li>
            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Drain tray & drain pipe flushing</li>
            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Cooling performance & basic AC health check</li>
            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Breakdown support during AMC period</li>
            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Priority service support</li>
        </ul>

        <!-- Collapsible Content -->
        <div id="service11a-details" class="hidden">
            <div class="mb-6 p-4 bg-yellow-50 rounded-lg border border-yellow-200">
                {{-- <h4 class="font-bold text-gray-800 mb-2">✔ What’s Included</h4>
                <ul class="text-sm text-gray-700 space-y-1">
                    <li>• 2 preventive AC services per year</li>
                    <li>• Indoor unit deep cleaning with high-pressure jet pump</li>
                    <li>• Air filter, blower & cooling coil cleaning</li>
                    <li>• Drain tray & drain pipe flushing</li>
                    <li>• Cooling performance & basic AC health check</li>
                    <li>• Breakdown support during AMC period</li>
                    <li>• Priority service support</li>
                </ul> --}}

                <h4 class="font-bold text-gray-800 mt-3 mb-2">Exclusions:</h4>
                <ul class="text-sm text-gray-700 space-y-1">
                    <li>• Gas charging or leakage repair</li>
                    <li>• Spare parts or component replacement</li>
                    <li>• Electrical accessories or stabilizer</li>
                    <li>• Physical or accidental damage</li>
                </ul>
            </div>
        </div>

        <div class="flex flex-col gap-3">
            <button onclick="toggleDetails('service11a')"
                    class="w-full bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                <i class="fas fa-chevron-down" id="service11a-icon"></i>
                Read More Details
            </button>

            <button onclick="openWhatsappModal('Non-Comprehensive AMC', '₹1,499')"
                    class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                <i class="fab fa-whatsapp"></i>
                Contact for Service
            </button>
        </div>
    </div>
</div>

<!-- Service 11B : Comprehensive AMC -->
<div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300">

    <!-- Image Section -->
    <div class="h-64 overflow-hidden relative">
        <img src="/asset/images/Comprehensive AMC.jpeg"
             alt="Comprehensive AMC"
             class="w-full h-full object-cover transition duration-500 hover:scale-110">
        <div class="absolute bottom-0 left-0 bg-green-100 text-green-800 px-4 py-1 text-sm font-bold">
            COMPREHENSIVE AMC
        </div>
    </div>

    <div class="p-8">
        <h3 class="text-2xl font-bold mb-4">
            Comprehensive AMC (Complete Protection Plan)
        </h3>

        <p class="text-gray-600 mb-6">
            Complete AC protection plan covering servicing, gas charging, repairs, and fast-track priority support.
        </p>

        <div class="flex justify-between items-center mb-4">
            <span class="text-3xl font-bold text-gray-800">₹3,999</span>
            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">
                PER YEAR / PER AC
            </span>
        </div>

        <ul id="service11b-inclusions" class="space-y-2 mb-6 text-gray-700 hidden">
            <h4 class="font-bold text-gray-800 mb-2">Inclusions:</h4>
            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>2 preventive AC services per year</li>
            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Gas leakage inspection & gas charging</li>
            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Minor electrical & mechanical repairs</li>
            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Jet pump cleaning with FreshCoil Care Spray</li>
            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Breakdown support throughout AMC period</li>
            <li class="flex items-center"><span class="w-2 h-2 bg-primary rounded-full mr-2"></span>Priority & fast-track service support</li>
        </ul>

        

        <!-- Collapsible Content -->
        <div id="service11b-details" class="hidden">
            <div class="mb-6 p-4 bg-green-50 rounded-lg border border-green-200">
                {{-- <h4 class="font-bold text-gray-800 mb-2">✔ What’s Included</h4>
                <ul class="text-sm text-gray-700 space-y-1">
                    <li>• 2 preventive AC services per year</li>
                    <li>• Jet pump cleaning with FreshCoil Care Spray</li>
                    <li>• Breakdown support throughout AMC period</li>
                    <li>• Minor electrical & mechanical repairs</li>
                    <li>• Gas leakage inspection & gas charging</li>
                    <li>• Priority & fast-track service support</li>
                </ul> --}}

                <h4 class="font-bold text-gray-800 mt-3 mb-2">Exclusions:</h4>
                <ul class="text-sm text-gray-700 space-y-1">
                    <li>• Compressor replacement</li>
                    <li>• PCB replacement (burnt/damaged)</li>
                    <li>• Remote, stabilizer & plastic parts</li>
                    <li>• Physical damage or misuse</li>
                </ul>
            </div>
        </div>

        <div class="flex flex-col gap-3">
            <button onclick="toggleDetails('service11b')"
                    class="w-full bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                <i class="fas fa-chevron-down" id="service11b-icon"></i>
                Read More Details
            </button>

            <button onclick="openWhatsappModal('Comprehensive AMC', '₹3,999')"
                    class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                <i class="fab fa-whatsapp"></i>
                Contact for Service
            </button>
        </div>
    </div>
</div>





     <!-- Washing Machine Card -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300">
        <div class="h-64 overflow-hidden relative">
            <img src="/asset/images/Washing Mashine.jpg" alt="Washing Machine" class="w-full h-full object-cover transition duration-500 hover:scale-110">
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
            <img src="/asset/images/RO.jpg" alt="RO" class="w-full h-full object-cover transition duration-500 hover:scale-110">
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
            <img src="/asset/images/REFRIGERATOR.jpg" alt="Refrigerator" class="w-full h-full object-cover transition duration-500 hover:scale-110">
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
            <img src="/asset/images/GEYSER.jpg" alt="Geyser" class="w-full h-full object-cover transition duration-500 hover:scale-110">
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
            <img src="/asset/images/microwave.jpg" alt="Microwave" class="w-full h-full object-cover transition duration-500 hover:scale-110">
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
            <img src="/asset/images/LED TV.jpg" alt="LED TV" class="w-full h-full object-cover transition duration-500 hover:scale-110">
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
            <img src="/asset/images/LAPTOP.jpg" alt="Laptop" class="w-full h-full object-cover transition duration-500 hover:scale-110">
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
            <img src="/asset/images/airpurifier.jpg" alt="Air Purifier" class="w-full h-full object-cover transition duration-500 hover:scale-110">
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
                    src="/asset/images/getintouch.jpeg"
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
    const overlay = document.getElementById('whatsappModal');
    overlay.classList.remove('hidden');
    overlay.classList.add('flex');
}

function closeWhatsappModal() {
    const overlay = document.getElementById('whatsappModal');
    overlay.classList.add('hidden');
    overlay.classList.remove('flex');
}

function toggleDetails(serviceId) {
    const detailsElement = document.getElementById(`${serviceId}-details`);
    const iconElement = document.getElementById(`${serviceId}-icon`);
    const inclusionsElement = document.getElementById(`${serviceId}-inclusions`);

    const willShow = detailsElement && detailsElement.classList.contains('hidden');

    if (detailsElement) {
        detailsElement.classList.toggle('hidden');
    }
    if (inclusionsElement) {
        inclusionsElement.classList.toggle('hidden');
    }
    if (iconElement) {
        if (willShow) {
            iconElement.classList.remove('fa-chevron-down');
            iconElement.classList.add('fa-chevron-up');
        } else {
            iconElement.classList.remove('fa-chevron-up');
            iconElement.classList.add('fa-chevron-down');
        }
    }
}

document.getElementById('whatsappForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const data = Object.fromEntries(formData);
    const t12 = (data.time_slot || '').trim();
    const match = t12.match(/^(\d{1,2}):(\d{2})\s?(AM|PM)$/i);
    if (!match) {
        alert('Please select a valid time in 12-hour format (e.g., 8:30 AM)');
        return;
    }
    let h12 = parseInt(match[1], 10);
    const min = parseInt(match[2], 10);
    const ampmSel = match[3].toUpperCase();
    if (h12 < 1 || h12 > 12 || min < 0 || min > 59) {
        alert('Please select a valid time');
        return;
    }
    const h24 = ampmSel === 'PM' ? (h12 % 12) + 12 : (h12 % 12);
    const totalMinutes = h24 * 60 + min;
    if (totalMinutes < 8 * 60 || totalMinutes > 20 * 60) {
        alert('Please select a time between 8:00 AM and 8:00 PM');
        return;
    }
    const displayTime = `${h12}:${String(min).padStart(2, '0')} ${ampmSel}`;
    
    // Format the message for WhatsApp
    const whatsappMessage = `*New Service Booking Request*%0A%0A` +
                           `*Service:* ${data.service_name}%0A` +
                           `*Price:* ${data.service_price}%0A` +
                           `*Name:* ${data.name}%0A` +
                           `*Phone:* ${data.phone}%0A` +
                           `*Pin Code:* ${data.pincode}%0A` +
                           `*Email:* ${data.email || 'Not provided'}%0A` +
                           `*Address:* ${data.address}%0A` +
                           `*Preferred Date:* ${data.booking_date}%0A` +
                           `*Preferred Time:* ${displayTime}%0A%0A` +
                           `*Request Time:* ${new Date().toLocaleString()}`;
    
    // WhatsApp number
    const whatsappNumber = '918882600406';

    
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
</style>

<script>
function generateTimeOptions() {
    const select = document.getElementById('preferredTime');
    if (!select) return;
    const start = 8 * 60;
    const end = 20 * 60;
    const step = 60;
    for (let m = start; m <= end; m += step) {
        const h24 = Math.floor(m / 60);
        const min = m % 60;
        const ampm = h24 >= 12 ? 'PM' : 'AM';
        const h12 = h24 % 12 === 0 ? 12 : h24 % 12;
        const label = `${h12}:${String(min).padStart(2, '0')} ${ampm}`;
        const opt = document.createElement('option');
        opt.value = label;
        opt.textContent = label;
        opt.dataset.minutes = String(m);
        select.appendChild(opt);
    }
}
function updateTimeOptionsForDate() {
    const select = document.getElementById('preferredTime');
    const bookingDate = document.getElementById('bookingDate');
    if (!select || !bookingDate) return;
    const today = new Date();
    const yyyy = today.getFullYear();
    const mm = String(today.getMonth() + 1).padStart(2, '0');
    const dd = String(today.getDate()).padStart(2, '0');
    const todayStr = `${yyyy}-${mm}-${dd}`;
    const isToday = bookingDate.value === todayStr;
    const nowMinutes = today.getHours() * 60 + today.getMinutes();
    Array.from(select.options).forEach(opt => {
        const m = parseInt(opt.dataset.minutes || '0', 10);
        opt.disabled = isToday ? m <= nowMinutes : false;
    });
    if (select.selectedOptions.length && select.selectedOptions[0].disabled) {
        select.value = '';
    }
}
document.addEventListener('DOMContentLoaded', () => {
    generateTimeOptions();
    updateTimeOptionsForDate();
    const bookingDate = document.getElementById('bookingDate');
    if (bookingDate) {
        bookingDate.addEventListener('change', updateTimeOptionsForDate);
    }
});
</script>
<!-- Add Font Awesome for WhatsApp icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

@endsection
