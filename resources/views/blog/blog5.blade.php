@extends('layouts.app')

@section('title', 'Blog - Airvice')

@section('content')

@include('blog.herosection')

<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-12">
            <!-- Main Blog Content -->
            <div class="lg:w-2/3">
                <article class="blog-content">
                    
                    <h1 class="text-3xl md:text-4xl font-bold text-[#0A2540] mb-6">
                        Clear Signs Your AC Needs Immediate Service or Repair
                    </h1>
                    
                    <p class="text-xl text-gray-700 font-medium mb-8">
                        Ignoring AC problems can lead to bigger issues and higher bills. Some clear signs that your AC needs immediate attention are:
                    </p>
                    
                    <ul class="list-disc pl-6 text-gray-700 mb-8 space-y-2">
                        <li>Poor cooling or uneven temperature in the room</li>
                        <li>Strange noises or vibrations from the unit</li>
                        <li>Water leakage or excessive dripping</li>
                        <li>Bad or unusual odour coming from the AC</li>
                        <li>Frequent tripping of electricity or higher power bills</li>
                    </ul>
                    
                    <p class="text-gray-700 mb-8">
                        If you notice any of these, calling a professional technician right away can save money, improve cooling, and extend your AC's life.
                    </p>
                    
                    <h2 class="text-2xl font-bold text-[#0A2540] mb-4">Why Paying Attention to Early Warning Signs Matters</h2>
                    
                    <p class="text-gray-700 mb-6">
                        Air conditioners often show small warning signs before developing major faults. Ignoring these signs can lead to expensive repairs, reduced comfort, and sudden breakdowns during peak summer. Early action helps maintain performance and prevents long-term damage.
                    </p>
                    
                    <div class="my-8">
                        <img src="/asset/images/blog5image.jpeg" alt="AC Warning Signs" class="w-full rounded-2xl shadow-lg">
                        <p class="text-center text-gray-500 text-sm mt-2">Recognizing early AC warning signs can prevent major repairs</p>
                    </div>
                    
                    <h2 class="text-2xl font-bold text-[#0A2540] mb-4">Poor Cooling or Uneven Temperature</h2>
                    
                    <p class="text-gray-700 mb-6">
                        When your AC fails to cool properly or certain areas of the room remain warm, it may indicate low gas levels, dirty coils, or airflow issues. Uneven cooling forces the system to work harder, increasing power consumption and component stress.
                    </p>
                    
                    <h2 class="text-2xl font-bold text-[#0A2540] mb-4">Strange Noises or Vibrations from the Unit</h2>
                    
                    <p class="text-gray-700 mb-6">
                        Unusual sounds such as rattling, buzzing, or grinding should never be ignored. These noises often point to loose parts, fan motor issues, or internal damage. Continuous vibration can further loosen components and worsen the problem.
                    </p>
                    
                    <h2 class="text-2xl font-bold text-[#0A2540] mb-4">Water Leakage or Excessive Dripping</h2>
                    
                    <p class="text-gray-700 mb-6">
                        Water leakage is usually caused by clogged drain pipes, dirty drain trays, or frozen coils. If left unresolved, it can damage walls, furniture, and electrical components. Immediate servicing prevents structural damage and maintains indoor hygiene.
                    </p>
                    
                    <blockquote class="border-l-4 border-[#0A2540] pl-6 py-4 my-8 bg-blue-50 italic text-gray-700">
                        "Your AC always gives signals before failing completely. Recognizing these signs and acting quickly helps you avoid inconvenience, costly repairs, and discomfort during extreme weather."
                    </blockquote>
                    
                    <h2 class="text-2xl font-bold text-[#0A2540] mb-4">Bad or Unusual Odour from the AC</h2>
                    
                    <p class="text-gray-700 mb-6">
                        Foul smells coming from the AC may indicate mould growth, accumulated dirt, or stagnant water inside the unit. Such odours can affect indoor air quality and cause health discomfort. Professional cleaning restores freshness and hygiene.
                    </p>
                    
                    <div class="bg-blue-50 p-6 rounded-2xl my-8 border-l-4 border-[#0A2540]">
                        <h3 class="text-xl font-bold text-[#0A2540] mb-2">Frequent Power Trips and Rising Electricity Bills</h3>
                        <p class="text-gray-700">
                            If your AC trips the power supply frequently or your electricity bills rise unexpectedly, it could be due to electrical faults, compressor stress, or inefficient operation. Timely inspection helps avoid electrical hazards and reduces energy waste.
                        </p>
                    </div>
                    
                    <h2 class="text-2xl font-bold text-[#0A2540] mb-4">Ice Formation on Pipes or Coils</h2>
                    
                    <p class="text-gray-700 mb-6">
                        Ice buildup on indoor or outdoor pipes is a clear sign of gas imbalance, airflow blockage, or dirty filters. Operating the AC in this condition can damage the compressor and lead to complete system failure.
                    </p>
                    
                    <h2 class="text-2xl font-bold text-[#0A2540] mb-4">AC Running Constantly Without Cooling</h2>
                    
                    <p class="text-gray-700 mb-6">
                        When an AC runs continuously but fails to cool, it indicates underlying issues such as low refrigerant, faulty sensors, or poor heat exchange. Immediate service helps restore normal operation and prevents overheating.
                    </p>
                    
                    <h2 class="text-2xl font-bold text-[#0A2540] mb-4">Delayed Start or Frequent Auto Cut-Off</h2>
                    
                    <p class="text-gray-700 mb-6">
                        If your AC takes longer to start or shuts off repeatedly, it may be facing thermostat issues, electrical problems, or internal faults. Such behavior reduces comfort and signals the need for professional repair.
                    </p>
                    
                    <h2 class="text-2xl font-bold text-[#0A2540] mb-4">Increased Humidity Indoors</h2>
                    
                    <p class="text-gray-700 mb-6">
                        An AC that fails to remove humidity effectively may have coil or drainage issues. Excess humidity causes discomfort, sticky air, and potential mould growth inside the home.
                    </p>
                    
                    <h2 class="text-2xl font-bold text-[#0A2540] mb-4">Why Delaying Repairs Is Risky</h2>
                    
                    <p class="text-gray-700 mb-6">
                        Delaying AC repairs allows minor issues to grow into major faults. What could be fixed with simple servicing may turn into compressor damage or part replacement if ignored.
                    </p>
                    
                    <h2 class="text-2xl font-bold text-[#0A2540] mb-4">Benefits of Immediate Professional Servicing</h2>
                    
                    <p class="text-gray-700 mb-6">
                        Prompt servicing restores cooling efficiency, improves air quality, reduces power consumption, and extends the overall lifespan of the AC. It also ensures safe and reliable operation.
                    </p>
                    
                    <h2 class="text-2xl font-bold text-[#0A2540] mb-4">Why DIY Fixes Are Not Recommended</h2>
                    
                    <p class="text-gray-700 mb-6">
                        Attempting DIY repairs without proper tools or knowledge can cause further damage, void warranties, and pose safety risks. Professional technicians diagnose issues accurately and fix them correctly.
                    </p>
                    
                    <h2 class="text-2xl font-bold text-[#0A2540] mb-4">Seasonal Importance of AC Inspection</h2>
                    
                    <p class="text-gray-700 mb-6">
                        Before and during summer, AC systems face heavy load. Regular inspection during this period helps detect early signs of trouble and ensures uninterrupted cooling.
                    </p>
                    
                    <h2 class="text-2xl font-bold text-[#0A2540] mb-4">How Regular Maintenance Prevents Emergencies</h2>
                    
                    <p class="text-gray-700 mb-6">
                        Scheduled maintenance reduces the chances of sudden breakdowns by keeping components clean, lubricated, and properly calibrated.
                    </p>
                    
                    <h2 class="text-2xl font-bold text-[#0A2540] mb-4">When to Call a Technician Immediately</h2>
                    
                    <p class="text-gray-700 mb-6">
                        If you notice water leakage, burning smell, loud noises, ice formation, or electrical issues, stop using the AC and call a professional without delay.
                    </p>
                    
                    <div class="bg-blue-50 p-6 rounded-2xl my-8 border-l-4 border-[#0A2540]">
                        <h3 class="text-xl font-bold text-[#0A2540] mb-2">ReliableSeva's Professional Service Approach</h3>
                        <p class="text-gray-700">
                            ReliableSeva focuses on quick diagnosis, reliable repair, and preventive care. Our trained technicians ensure your AC is serviced efficiently and safely.
                        </p>
                    </div>
                    
                    <h2 class="text-2xl font-bold text-[#0A2540] mb-4">Long-Term Benefits of Timely AC Care</h2>
                    
                    <p class="text-gray-700 mb-6">
                        Timely servicing not only improves cooling performance but also saves money, enhances comfort, and ensures long-lasting AC health.
                    </p>
                    
                    <h2 class="text-2xl font-bold text-[#0A2540] mb-4">Final Thoughts on AC Warning Signs</h2>
                    
                    <p class="text-gray-700 mb-6">
                        Your AC always gives signals before failing completely. Recognizing these signs and acting quickly helps you avoid inconvenience, costly repairs, and discomfort during extreme weather.
                    </p>
                    
                    <!-- Tags -->
                    <div class="mt-12 pt-8 border-t border-gray-200">
                        <div class="flex flex-wrap gap-2">
                            <span class="tag">AC Warning Signs</span>
                            <span class="tag">Immediate Service</span>
                            <span class="tag">AC Repair</span>
                            <span class="tag">Maintenance Tips</span>
                            <span class="tag">Professional Servicing</span>
                            <span class="tag">Cooling Problems</span>
                        </div>
                    </div>
                </article>
                
                <!-- Author Bio -->
                <div class="card p-8 mt-12 bg-gray-50">
                    <div class="flex flex-col md:flex-row items-center md:items-start">
                        <div class="flex-shrink-0 mb-4 md:mb-0 md:mr-6">
                            <div class="w-20 h-20 bg-[#0A2540] rounded-full flex items-center justify-center text-white text-xl font-bold">
                                RS
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-[#0A2540] mb-2">About ReliableSeva</h3>
                            <p class="text-gray-700 mb-4">
                                ReliableSeva Technologies Pvt. Ltd. specializes in professional AC servicing with a focus on early fault detection and preventive maintenance. Our experts help homeowners identify warning signs before they become major problems, ensuring reliable cooling performance year-round.
                            </p>
                            <div class="flex space-x-4">
                                <a href="#" class="text-[#0A2540] hover:text-[#D4AF37] transition-colors">
                                    <i data-lucide="linkedin" class="w-5 h-5"></i>
                                </a>
                                <a href="#" class="text-[#0A2540] hover:text-[#D4AF37] transition-colors">
                                    <i data-lucide="twitter" class="w-5 h-5"></i>
                                </a>
                                <a href="#" class="text-[#0A2540] hover:text-[#D4AF37] transition-colors">
                                    <i data-lucide="mail" class="w-5 h-5"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Share Section -->
                <div class="mt-12 pt-8 border-t border-gray-200">
                    <div class="flex flex-col sm:flex-row items-center justify-between">
                        <h3 class="text-lg font-bold text-[#0A2540] mb-4 sm:mb-0">Share this article</h3>
                        <div class="flex space-x-3">
                            <a href="#" class="share-btn bg-[#3b5998] text-white">
                                <i data-lucide="facebook" class="w-4 h-4"></i>
                            </a>
                            <a href="#" class="share-btn bg-[#1da1f2] text-white">
                                <i data-lucide="twitter" class="w-4 h-4"></i>
                            </a>
                            <a href="#" class="share-btn bg-[#0077b5] text-white">
                                <i data-lucide="linkedin" class="w-4 h-4"></i>
                            </a>
                            <a href="#" class="share-btn bg-[#25d366] text-white">
                                <i data-lucide="message-circle" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Navigation Between Posts -->
                <div class="flex flex-col sm:flex-row justify-between mt-12 pt-8 border-t border-gray-200">
                    <a href="#" class="group flex items-center mb-4 sm:mb-0">
                        <i data-lucide="arrow-left" class="w-5 h-5 mr-2 text-[#0A2540] group-hover:text-[#D4AF37] transition-colors"></i>
                        <div>
                            <p class="text-sm text-gray-500">Previous Article</p>
                            <p class="text-[#0A2540] font-medium group-hover:text-[#D4AF37] transition-colors">Split AC vs Window AC: Which Is Better for Indian Homes?</p>
                        </div>
                    </a>
                    <a href="#" class="group flex items-center text-right sm:text-left ml-auto">
                        <div>
                            <p class="text-sm text-gray-500">Next Article</p>
                            <p class="text-[#0A2540] font-medium group-hover:text-[#D4AF37] transition-colors">Best AC Installation Practices for Optimal Performance</p>
                        </div>
                        <i data-lucide="arrow-right" class="w-5 h-5 ml-2 text-[#0A2540] group-hover:text-[#D4AF37] transition-colors"></i>
                    </a>
                </div>
            </div>
            
            <!-- Sidebar -->
            <div class="lg:w-1/3">
                <!-- Table of Contents -->
                <!--<div class="card p-6 bg-white mb-8 sticky top-8">-->
                <!--    <h3 class="text-xl font-bold text-[#0A2540] mb-4">Table of Contents</h3>-->
                <!--    <ul class="space-y-2">-->
                <!--        <li><a href="#clear-signs" class="text-gray-600 hover:text-[#0A2540] transition-colors flex items-start">-->
                <!--            <i data-lucide="chevron-right" class="w-4 h-4 mt-0.5 mr-2 text-[#D4AF37] flex-shrink-0"></i>-->
                <!--            <span>Clear Signs Your AC Needs Service</span>-->
                <!--        </a></li>-->
                <!--        <li><a href="#early-warning" class="text-gray-600 hover:text-[#0A2540] transition-colors flex items-start">-->
                <!--            <i data-lucide="chevron-right" class="w-4 h-4 mt-0.5 mr-2 text-[#D4AF37] flex-shrink-0"></i>-->
                <!--            <span>Why Early Warning Signs Matter</span>-->
                <!--        </a></li>-->
                <!--        <li><a href="#poor-cooling" class="text-gray-600 hover:text-[#0A2540] transition-colors flex items-start">-->
                <!--            <i data-lucide="chevron-right" class="w-4 h-4 mt-0.5 mr-2 text-[#D4AF37] flex-shrink-0"></i>-->
                <!--            <span>Poor Cooling or Uneven Temperature</span>-->
                <!--        </a></li>-->
                <!--        <li><a href="#strange-noises" class="text-gray-600 hover:text-[#0A2540] transition-colors flex items-start">-->
                <!--            <i data-lucide="chevron-right" class="w-4 h-4 mt-0.5 mr-2 text-[#D4AF37] flex-shrink-0"></i>-->
                <!--            <span>Strange Noises or Vibrations</span>-->
                <!--        </a></li>-->
                <!--        <li><a href="#water-leakage" class="text-gray-600 hover:text-[#0A2540] transition-colors flex items-start">-->
                <!--            <i data-lucide="chevron-right" class="w-4 h-4 mt-0.5 mr-2 text-[#D4AF37] flex-shrink-0"></i>-->
                <!--            <span>Water Leakage or Excessive Dripping</span>-->
                <!--        </a></li>-->
                <!--        <li><a href="#bad-odour" class="text-gray-600 hover:text-[#0A2540] transition-colors flex items-start">-->
                <!--            <i data-lucide="chevron-right" class="w-4 h-4 mt-0.5 mr-2 text-[#D4AF37] flex-shrink-0"></i>-->
                <!--            <span>Bad or Unusual Odour</span>-->
                <!--        </a></li>-->
                <!--        <li><a href="#power-trips" class="text-gray-600 hover:text-[#0A2540] transition-colors flex items-start">-->
                <!--            <i data-lucide="chevron-right" class="w-4 h-4 mt-0.5 mr-2 text-[#D4AF37] flex-shrink-0"></i>-->
                <!--            <span>Frequent Power Trips</span>-->
                <!--        </a></li>-->
                <!--        <li><a href="#professional-approach" class="text-gray-600 hover:text-[#0A2540] transition-colors flex items-start">-->
                <!--            <i data-lucide="chevron-right" class="w-4 h-4 mt-0.5 mr-2 text-[#D4AF37] flex-shrink-0"></i>-->
                <!--            <span>ReliableSeva's Professional Approach</span>-->
                <!--        </a></li>-->
                <!--        <li><a href="#final-thoughts" class="text-gray-600 hover:text-[#0A2540] transition-colors flex items-start">-->
                <!--            <i data-lucide="chevron-right" class="w-4 h-4 mt-0.5 mr-2 text-[#D4AF37] flex-shrink-0"></i>-->
                <!--            <span>Final Thoughts</span>-->
                <!--        </a></li>-->
                <!--    </ul>-->
                <!--</div>-->
                
                <!-- Related Posts -->
                 <div class="card p-6 bg-white mb-8">
                    <h3 class="text-xl font-bold text-[#0A2540] mb-4">Related Articles</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=200" alt="AC Repair" class="w-16 h-16 object-cover rounded-lg mr-4 flex-shrink-0">
                            <div>
                                <a href="#" class="text-[#0A2540] font-medium hover:text-[#D4AF37] transition-colors line-clamp-2">Why Regular AC Deep Service Is Important for Better Cooling & Longer AC Life</a>
                                <p class="text-gray-500 text-sm mt-1">Jan 1, 2026</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=200" alt="Energy Saving" class="w-16 h-16 object-cover rounded-lg mr-4 flex-shrink-0">
                            <div>
                                <a href="#" class="text-[#0A2540] font-medium hover:text-[#D4AF37] transition-colors line-clamp-2">What Is Advance Deep Cleaning + Double Coating Protection and How Does It Prevent Gas Leakage with Warranty?</a>
                                <p class="text-gray-500 text-sm mt-1">Jan 1, 2026</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?w=200" alt="AC Maintenance" class="w-16 h-16 object-cover rounded-lg mr-4 flex-shrink-0">
                            <div>
                                <a href="#" class="text-[#0A2540] font-medium hover:text-[#D4AF37] transition-colors line-clamp-2">Top Reasons for AC Gas Leakage and When You Need Professional Repair</a>
                                <p class="text-gray-500 text-sm mt-1">Jan 1, 2026</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?w=200" alt="AC Maintenance" class="w-16 h-16 object-cover rounded-lg mr-4 flex-shrink-0">
                            <div>
                                <a href="#" class="text-[#0A2540] font-medium hover:text-[#D4AF37] transition-colors line-clamp-2">Split AC vs Window AC: Which Is Better for Indian Homes?</a>
                                <p class="text-gray-500 text-sm mt-1">Jan 1, 2026</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?w=200" alt="AC Maintenance" class="w-16 h-16 object-cover rounded-lg mr-4 flex-shrink-0">
                            <div>
                                <a href="#" class="text-[#0A2540] font-medium hover:text-[#D4AF37] transition-colors line-clamp-2">Clear Signs Your AC Needs Immediate Service or Repair</a>
                                <p class="text-gray-500 text-sm mt-1">Jan 1, 2026</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Newsletter Signup -->
                {{-- <div class="card p-6 bg-[#0A2540] text-white">
                    <h3 class="text-xl font-bold mb-4">Stay Updated</h3>
                    <p class="mb-4 text-gray-300">Get the latest articles and industry insights delivered to your inbox.</p>
                    <form class="space-y-3">
                        <input type="email" placeholder="Your email address" class="w-full px-4 py-2 rounded-lg text-gray-800">
                        <button type="submit" class="w-full bg-[#D4AF37] text-white py-2 rounded-lg font-medium hover:bg-[#c19b2a] transition-colors">Subscribe</button>
                    </form>
                </div> --}}
            </div>
        </div>
    </div>
</section>

@endsection