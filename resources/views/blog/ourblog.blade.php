@extends('layouts.app')

@section('title', 'Blog - Airvice')

@section('content')

@include('blog.herosection')

<!--Content for blog-->
<div class="p-5">
    <h3 class="text-lg font-bold mb-2 uppercase leading-snug text-center">
        Welcome to the Official Blog of ReliableSeva Technologies Pvt. Ltd.
    </h3>
    <p class="text-gray-600 leading-relaxed text-center ">
        Your trusted partner for professional AC repair and servicing solutions. 
        Here, we share expert tips, maintenance guides, seasonal advice, and industry insights 
        to help you keep your air conditioners running efficiently and reliably.
    </p>
</div>


<!--Our Blog Section -->
<section class="blog-section py-16 mb-10 px-6 md:px-12 lg:px-20 bg-blue-50/60">
    
    <!-- Blog Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Blog Card 1 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 blog-card" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
            <img src="/asset/images/blog1image.jpg" alt="Tips for First-Time Home Builders in Gurgaon" class="w-full h-56 object-cover">
            <div class="p-5">
                <h3 class="text-lg font-bold mb-2 uppercase leading-snug">Why Regular AC Deep Service Is Important for Better Cooling & Longer AC Life</h3>
                <p class="text-sm text-gray-500 mb-4">Posted: January 1, 2026</p>
                <a href="{{ route('blog.blog1') }}" class="text-yellow-500 font-semibold flex items-center gap-1 hover:gap-2 transition-all">
                    Read More
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-[1px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Blog Card 2 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 blog-card" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
            <img src="/asset/images/blog2image.jpeg" alt="Offering Special Discounts for Home Renovation During Navratri" class="w-full h-56 object-cover">
            <div class="p-5">
                <h3 class="text-lg font-bold mb-2 uppercase leading-snug">What Is Advance Deep Cleaning + Double Coating Protection and How Does It Prevent Gas Leakage with Warranty?</h3>
                <p class="text-sm text-gray-500 mb-4">Posted: January 1, 2026</p>
                  <a href="{{ route('blog.blog2') }}" class="text-yellow-500 font-semibold flex items-center gap-1 hover:gap-2 transition-all">
                    Read More
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-[1px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Blog Card 3 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 blog-card" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
            <img src="/asset/images/blog3image.jpeg" alt="Building Renovation vs Rebuilding: Which is More Cost-Effective?" class="w-full h-56 object-cover">
            <div class="p-5">
                <h3 class="text-lg font-bold mb-2 uppercase leading-snug">Top Reasons for AC Gas Leakage and When You Need Professional Repair</h3>
                <p class="text-sm text-gray-500 mb-4">Posted: January 1, 2026</p>
                  <a href="{{ route('blog.blog3') }}" class="text-yellow-500 font-semibold flex items-center gap-1 hover:gap-2 transition-all">
                    Read More
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-[1px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Blog Card 4 -->
                
         <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 blog-card" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
            <img src="/asset/images/blog4image.jpeg" alt="Building Renovation vs Rebuilding: Which is More Cost-Effective?" class="w-full h-56 object-cover">
            <div class="p-5">
                <h3 class="text-lg font-bold mb-2 uppercase leading-snug">Split AC vs Window AC: Which Is Better for Indian Homes?</h3>
                <p class="text-sm text-gray-500 mb-4">Posted: January 1, 2026</p>
                <a href="{{ route('blog.blog4') }}" class="text-yellow-500 font-semibold flex items-center gap-1 hover:gap-2 transition-all">
                    Read More
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-[1px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Blog Card 5 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 blog-card" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
            <img src="/asset/images/blog5image.jpeg" alt="Offering Special Discounts for Home Renovation During Navratri" class="w-full h-56 object-cover">
            <div class="p-5">
                <h3 class="text-lg font-bold mb-2 uppercase leading-snug">Clear Signs Your AC Needs Immediate Service or Repair</h3>
                <p class="text-sm text-gray-500 mb-4">Posted: January 1, 2026</p>
                <a href="{{ route('blog.blog5') }}" class="text-yellow-500 font-semibold flex items-center gap-1 hover:gap-2 transition-all">
                    Read More
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-[1px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
        
         <!-- Blog Card 6 -->
                {{-- <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 blog-card" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
            <img src="https://images.pexels.com/photos/1115804/pexels-photo-1115804.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=900" alt="Tips for First-Time Home Builders in Gurgaon" class="w-full h-56 object-cover">
            <div class="p-5">
                <h3 class="text-lg font-bold mb-2 uppercase leading-snug">Tips for First-Time Home Builders in Gurgaon</h3>
                <p class="text-sm text-gray-500 mb-4">Posted: January 1, 2026</p>
                <a href="{{ route('blog.blog3') }}" class="text-yellow-500 font-semibold flex items-center gap-1 hover:gap-2 transition-all">
                    Read More
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-[1px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div> --}}

        
            </div>
            
</section>
@endsection