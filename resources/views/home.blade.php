@extends('layouts.app')

@section('title', 'ReliableSeva - Professional AC Repair & Services')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gray-900 text-white py-16 md:py-24 min-h-screen flex items-center">

    <!-- Background Image -->
    <div class="absolute inset-0 bg-cover bg-center opacity-40"
        style="background-image: url('asset/images/banner.jpeg');">
    </div>

    <!-- Dark Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-gray-900/80 to-transparent"></div>

    <!-- Content Container -->
    <div class="container mx-auto px-4 relative z-10">

        <!-- Grid for Left Content + Right Form -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center lg:items-start">

            <!-- LEFT SIDE CONTENT -->
            <div class="sticky top-32 max-w-3xl text-center lg:text-left mx-auto lg:mx-0">
                <span class="text-primary font-bold text-base md:text-lg mb-4 block uppercase tracking-wider">
                  ReliableSeva Technologies Private Limited
                </span>

                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold mb-6 leading-tight">
                    Professional <span class="text-primary">AC Repair</span> &
                    Maintenance Services
                </h1>

                <p class="text-lg md:text-xl text-gray-300 mb-8 leading-relaxed">
                    We provide top-notch air conditioning services to keep your home cool and comfortable.
                    From emergency repairs to routine maintenance, our experts are here to help.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="{{ route('services') }}"
                        class="bg-blue-700 hover:bg-white text-gray-100 hover:text-gray-900 font-bold py-4 px-8 rounded-full transition shadow-lg text-center">
                        Our Services
                    </a>

                    <a href="{{ route('contact') }}"
                        class="border-2 border-white hover:bg-white hover:text-gray-900 text-white font-bold py-4 px-8 rounded-full transition text-center">
                        Contact Us
                    </a>
                </div>
            </div>

            <!-- RIGHT SIDE FORM -->
            <div class="w-full max-w-md mx-auto lg:ml-auto lg:mr-0 mt-8 lg:-mt-12
                        bg-gradient-to-b from-gray-900/90 to-gray-800/90 
                        backdrop-blur-sm 
                        rounded-xl p-6 md:p-7 shadow-xl 
                        border border-white/50 ">

                <h3 class="text-2xl font-bold text-white mb-6 text-center lg:text-left">
                    Request a Booking Service
                </h3>

                <form id="heroWhatsappForm" class="space-y-5">
                    <input type="hidden" id="hero_service_name">
                    <input type="hidden" id="hero_service_price">

                    <div>
                        <label class="block text-sm text-white mb-2">Select Service</label>
                        <select id="hero_service_select"
                            class="w-full bg-[#6b7f96] text-white placeholder-gray-200 
                                   rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                            <option value="">Choose a service</option>
                        </select>
                        <p id="hero_service_select_error" class="text-red-300 text-xs mt-1 hidden"></p>
                    </div>

                    <div>
                        <label class="block text-sm text-white mb-2">Service Quantity *</label>
                        <select id="hero_quantity"
                            class="w-full bg-[#6b7f96] text-white placeholder-gray-200 
                                   rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                            <option value="">Select quantity (max 5)</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <p id="hero_quantity_error" class="text-red-300 text-xs mt-1 hidden"></p>
                    </div>

                    <div>
                        <label class="block text-sm text-white mb-2">Full Name *</label>
                        <input type="text" id="hero_name" placeholder="Enter your name"
                            class="w-full bg-[#6b7f96] text-white placeholder-gray-200 
                                   rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                        <p id="hero_name_error" class="text-red-300 text-xs mt-1 hidden"></p>
                    </div>

                    <div>
                        <label class="block text-sm text-white mb-2">Mobile Number *</label>
                        <input type="tel" id="hero_phone" maxlength="10" placeholder="Enter 10-digit mobile number"
                            class="w-full bg-[#6b7f96] text-white placeholder-gray-200 
                                   rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                        <p id="hero_phone_error" class="text-red-300 text-xs mt-1 hidden"></p>
                    </div>

                    <div>
                        <label class="block text-sm text-white mb-2">Pin Code *</label>
                        <input type="text" id="hero_pincode" maxlength="6" placeholder="Enter Pin Code"
                            class="w-full bg-[#6b7f96] text-white placeholder-gray-200 
                                   rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                        <p id="hero_pincode_error" class="text-red-300 text-xs mt-1 hidden"></p>
                    </div>

                    <div>
                        <label class="block text-sm text-white mb-2">Email Address</label>
                        <input type="email" id="hero_email" placeholder="Enter your email"
                            class="w-full bg-[#6b7f96] text-white placeholder-gray-200 
                                   rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                        <p id="hero_email_error" class="text-red-300 text-xs mt-1 hidden"></p>
                    </div>

                    <div>
                        <label class="block text-sm text-white mb-2">Address *</label>
                        <textarea rows="3" id="hero_address" placeholder="Write your address..."
                            class="w-full bg-[#6b7f96] text-white placeholder-gray-200 
                                   rounded-lg px-4 py-3 resize-none 
                                   focus:outline-none focus:ring-2 focus:ring-yellow-400"></textarea>
                        <p id="hero_address_error" class="text-red-300 text-xs mt-1 hidden"></p>
                    </div>

                    <div>
                        <label class="block text-sm text-white mb-2">Preferred Service Date *</label>
                        <input type="date" id="hero_booking_date" min="{{ date('Y-m-d') }}"
                            class="w-full bg-[#6b7f96] text-white placeholder-gray-200 
                                   rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                        <p id="hero_booking_date_error" class="text-red-300 text-xs mt-1 hidden"></p>
                    </div>

                    <div>
                        <label class="block text-sm text-white mb-2">Preferred Time *</label>
                        <select id="hero_preferredTime"
                            class="w-full bg-[#6b7f96] text-white placeholder-gray-200 
                                   rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                            <option value="">Select time (8:00 AM – 8:00 PM)</option>
                        </select>
                        <p class="text-xs text-gray-300 mt-1">Service booking time: 8:00 AM to 8:00 PM</p>
                        <p id="hero_preferredTime_error" class="text-red-300 text-xs mt-1 hidden"></p>
                    </div>

                    <div class="bg-white/10 p-4 rounded-lg">
                        <p class="text-sm text-gray-200 mb-1">
                            Selected Service: <span id="hero_selected_service" class="font-semibold"></span>
                        </p>
                        <p class="text-sm text-gray-200">
                            Price: <span id="hero_selected_price" class="font-bold text-green-300"></span>
                        </p>
                    </div>

                    <button type="submit"
                        class="w-full bg-[#7a8ea5] hover:bg-[#ff5e14] 
                               text-white font-bold py-3 rounded-lg transition">
                        Book Now
                    </button>

                </form>
            </div>

        </div>
    </div>
</section>

<script>
const GOOGLE_SHEET_API_URL =
"https://script.google.com/macros/s/AKfycbxRn5uMeYPTzkysYwhkCYJIEmoKkIuxN4oxYG8oRY7ex_ptu0lvXcxAGP6ogSN3ed4Y/exec";

function sendToGoogleSheet(data) {
    fetch(GOOGLE_SHEET_API_URL, {
        method: "POST",
        mode: "no-cors",   // 🔥 THIS IS THE KEY
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(data)
    });
}
</script>



<!-- Booking Service – Services & WhatsApp Script -->
<script>
    const SERVICES = [
        { name: 'Advance AC Deep Service + Double Coating Protection', price: '₹3000' },
        { name: 'Fresh Air AC Service', price: '₹499' },
        { name: 'Water Leakage Repair', price: '₹599' },
        { name: 'AC Repair / AC Checkup', price: '₹249' },
        { name: 'AC Gas Charging', price: '₹2500' },
        { name: 'AC No Power Issue', price: '₹249' },
        { name: 'Split AC Uninstallation', price: '₹699' },
        { name: 'Split AC Installation', price: '₹1499' },
        { name: 'Window AC Uninstallation', price: '₹399' },
        { name: 'Window AC Installation', price: '₹699' },
        { name: 'Non-Comprehensive AMC', price: '₹1,499' },
        { name: 'Comprehensive AMC', price: '₹3,999' },
    ];

    function parseINR(str) {
        const s = String(str || '').replace(/[^\d.]/g, '');
        const num = parseFloat(s || '0');
        return isNaN(num) ? 0 : num;
    }
    function formatINR(num) {
        return `₹${Math.round(num).toLocaleString('en-IN')}`;
    }
    function updateTotalPrice() {
        const unitStr = document.getElementById('hero_service_price')?.value || '';
        const qtyStr = document.getElementById('hero_quantity')?.value || '';
        const unit = parseINR(unitStr);
        const qty = parseInt(qtyStr || '1', 10);
        const total = unit * (qty >= 1 ? qty : 1);
        const displayEl = document.getElementById('hero_selected_price');
        if (!unitStr) {
            if (displayEl) displayEl.textContent = '';
            return;
        }
        if (displayEl) displayEl.textContent = formatINR(total);
    }

    function populateServices() {
        const select = document.getElementById('hero_service_select');
        if (!select) return;
        SERVICES.forEach(s => {
            const opt = document.createElement('option');
            opt.value = `${s.name}|||${s.price}`;
            opt.textContent = `${s.name} — ${s.price}`;
            select.appendChild(opt);
        });
        select.addEventListener('change', () => {
            const val = select.value;
            if (!val) {
                document.getElementById('hero_service_name').value = '';
                document.getElementById('hero_service_price').value = '';
                document.getElementById('hero_selected_service').textContent = '';
                document.getElementById('hero_selected_price').textContent = '';
                return;
            }
            const [name, price] = val.split('|||');
            document.getElementById('hero_service_name').value = name;
            document.getElementById('hero_service_price').value = price;
            document.getElementById('hero_selected_service').textContent = name;
            updateTotalPrice();
        });
    }

    function generateTimeOptionsHome() {
        const select = document.getElementById('hero_preferredTime');
        if (!select) return;
        const start = 8 * 60, end = 20 * 60, step = 60;
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

    function updateTimeOptionsForDateHome() {
        const select = document.getElementById('hero_preferredTime');
        const bookingDate = document.getElementById('hero_booking_date');
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
        populateServices();
        generateTimeOptionsHome();
        updateTimeOptionsForDateHome();
        const bd = document.getElementById('hero_booking_date');
        if (bd) bd.addEventListener('change', updateTimeOptionsForDateHome);
        const enforceDigits = (el, max) => {
            if (!el) return;
            el.addEventListener('input', () => {
                el.value = el.value.replace(/\D/g, '').slice(0, max);
            });
        };
        enforceDigits(document.getElementById('hero_phone'), 10);
        enforceDigits(document.getElementById('hero_pincode'), 6);
        const clearOnValid = (id, validator) => {
            const el = document.getElementById(id);
            if (!el) return;
            el.addEventListener('input', () => {
                const v = el.value.trim();
                if (validator(v)) clearError(id);
            });
        };
        const clearOnChangeSelected = (id) => {
            const el = document.getElementById(id);
            if (!el) return;
            el.addEventListener('change', () => {
                if (el.value) clearError(id);
            });
        };
        clearOnValid('hero_name', v => !!v);
        clearOnValid('hero_phone', v => /^\d{10}$/.test(v));
        clearOnValid('hero_pincode', v => /^\d{6}$/.test(v));
        clearOnValid('hero_address', v => !!v);
        // Email field is optional; no validation listeners needed
        clearOnChangeSelected('hero_service_select');
        clearOnChangeSelected('hero_quantity');
        clearOnChangeSelected('hero_booking_date');
        clearOnChangeSelected('hero_preferredTime');
        const qtyEl = document.getElementById('hero_quantity');
        if (qtyEl) qtyEl.addEventListener('change', updateTotalPrice);
    });

    function downloadExcelBooking(data) {
        const headers = [
            'Service', 'Service Quantity', 'Price', 'Name', 'Phone', 'Pin Code',
            'Email', 'Address', 'Preferred Date', 'Preferred Time', 'Request Time'
        ];
        const values = [
            data.service, data.quantity, data.price, data.name, data.phone, data.pincode,
            data.email, data.address, data.date, data.time, data.requestTime
        ];
        const escape = (s) => String(s ?? '').replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;');
        const table =
            '<html><head><meta charset="UTF-8"></head><body>' +
            '<table border="1" cellspacing="0" cellpadding="4">' +
            '<thead><tr>' + headers.map(h => `<th>${escape(h)}</th>`).join('') + '</tr></thead>' +
            '<tbody><tr>' + values.map(v => `<td>${escape(v)}</td>`).join('') + '</tr></tbody>' +
            '</table></body></html>';
        const blob = new Blob([table], { type: 'application/vnd.ms-excel' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        const ts = new Date().toISOString().replace(/[:.]/g,'-');
        a.href = url;
        a.download = `booking-${ts}.xls`;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
    }

    function setError(id, message) {
        const input = document.getElementById(id);
        const err = document.getElementById(id + '_error');
        if (input) input.classList.add('ring-2','ring-red-500','border-red-500');
        if (err) { err.textContent = message; err.classList.remove('hidden'); }
    }
    function clearError(id) {
        const input = document.getElementById(id);
        const err = document.getElementById(id + '_error');
        if (input) input.classList.remove('ring-2','ring-red-500','border-red-500');
        if (err) { err.textContent = ''; err.classList.add('hidden'); }
    }
    document.getElementById('heroWhatsappForm').addEventListener('submit', async function(e) {
        e.preventDefault();
        const name = document.getElementById('hero_name').value.trim();
        const phone = document.getElementById('hero_phone').value.trim();
        const pincode = document.getElementById('hero_pincode').value.trim();
        const email = document.getElementById('hero_email').value.trim();
        const address = document.getElementById('hero_address').value.trim();
        const bookingDate = document.getElementById('hero_booking_date').value;
        const preferredTime = document.getElementById('hero_preferredTime').value;
        const quantityStr = document.getElementById('hero_quantity').value;
        const quantity = parseInt(quantityStr || '0', 10);
        const serviceName = document.getElementById('hero_service_name').value;
        const servicePrice = document.getElementById('hero_service_price').value;
        const unitPriceNumber = parseINR(servicePrice);
        const totalPriceNumber = unitPriceNumber * (quantity || 1);
        const totalPriceFormatted = formatINR(totalPriceNumber);
        clearError('hero_service_select');
        clearError('hero_quantity');
        clearError('hero_name');
        clearError('hero_phone');
        clearError('hero_pincode');
        clearError('hero_email');
        clearError('hero_address');
        clearError('hero_booking_date');
        clearError('hero_preferredTime');
        let hasError = false;
        if (!serviceName || !servicePrice) {
            setError('hero_service_select','Please select a service');
            hasError = true;
        }
        if (!quantity || quantity < 1 || quantity > 5) {
            setError('hero_quantity','Please select quantity up to 5');
            hasError = true;
        }
        if (!name) {
            setError('hero_name','Please enter your name');
            hasError = true;
        }
        if (!phone || !/^\d{10}$/.test(phone)) {
            setError('hero_phone','Please enter a valid 10-digit mobile number');
            hasError = true;
        }
        if (!pincode || !/^\d{6}$/.test(pincode)) {
            setError('hero_pincode','Please enter a valid 6-digit pin code');
            hasError = true;
        }
        if (!address) {
            setError('hero_address','Please enter your address');
            hasError = true;
        }
        // Email is optional; no validation performed
        if (!bookingDate) {
            setError('hero_booking_date','Please select a service date');
            hasError = true;
        }
        if (!preferredTime) {
            setError('hero_preferredTime','Please select a preferred time');
            hasError = true;
        }
        if (hasError) return;
        const requestTime = new Date().toLocaleString();
        await sendToGoogleSheet({
            service: serviceName,
            price: totalPriceFormatted,
            quantity: quantity,
            total_price: totalPriceFormatted,
            name: name,
            phone: phone,
            pincode: pincode,
            email: email || "Not provided",
            address: address,
            preferred_date: bookingDate,
            preferred_time: preferredTime,
            request_time: requestTime
        });
        const whatsappMessage =
            `*New Service Booking Request (Home Page)*%0A%0A` +
            `*Service:* ${serviceName}%0A` +
            `*Price:* ${servicePrice}%0A` +
            `*Quantity:* ${quantity}%0A` +
            `*Total Price:* ${totalPriceFormatted}%0A` +
            `*Name:* ${name}%0A` +
            `*Phone:* ${phone}%0A` +
            `*Pin Code:* ${pincode}%0A` +
            `*Email:* ${email || 'Not provided'}%0A` +
            `*Address:* ${address}%0A` +
            `*Preferred Date:* ${bookingDate}%0A` +
            `*Preferred Time:* ${preferredTime}%0A%0A` +
            `*Request Time:* ${requestTime}`;
        window.open(`https://wa.me/918882600406?text=${whatsappMessage}`, '_blank');
        const formEl = document.getElementById('heroWhatsappForm');
        formEl.reset();
        document.getElementById('hero_preferredTime').value = '';
        document.getElementById('hero_quantity').value = '';
        document.getElementById('hero_service_name').value = '';
        document.getElementById('hero_service_price').value = '';
        document.getElementById('hero_selected_service').textContent = '';
        document.getElementById('hero_selected_price').textContent = '';
        ['hero_service_select','hero_quantity','hero_name','hero_phone','hero_pincode','hero_email','hero_address','hero_booking_date','hero_preferredTime']
          .forEach(clearError);
    });
</script>






<!-- Stats Section -->
<section class="py-10 md:py-12 bg-[#e0f2fe]">
    <div class="max-w-7xl mx-auto px-4">

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">

            <!-- Card 1 -->
            <div class="bg-white rounded-2xl md:rounded-3xl shadow-[0_20px_60px_rgba(0,0,0,0.08)] 
                        py-4 md:py-10 text-center">
                <div class="w-12 h-12 md:w-14 md:h-14 mx-auto mb-4 md:mb-5 
                            rounded-full bg-sky-100 flex items-center justify-center">
                    <svg class="w-5 h-5 md:w-6 md:h-6 text-[#1f3b63]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                              d="M12 3l6 3v6c0 4.5-3 7.5-6 9-3-1.5-6-4.5-6-9V6l6-3z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                              d="M9.5 12.5l1.8 1.8 3.7-3.7"/>
                    </svg>
                </div>

                <h3 class="text-2xl md:text-3xl font-bold text-[#1f3b63] counter" data-target="16" data-suffix="">0</h3>
                <p class="text-gray-500 text-[10px] md:text-xs tracking-widest mt-1 md:mt-2 uppercase">
                    Specialists
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl md:rounded-3xl shadow-[0_20px_60px_rgba(0,0,0,0.08)] 
                        py-4 md:py-10 text-center">
                <div class="w-12 h-12 md:w-14 md:h-14 mx-auto mb-4 md:mb-5 
                            rounded-full bg-sky-100 flex items-center justify-center">
                    <svg class="w-5 h-5 md:w-6 md:h-6 text-[#1f3b63]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="9" stroke-width="1.8"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                              d="M8.5 14.5s1.5 2 3.5 2 3.5-2 3.5-2"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                              d="M9 10h.01M15 10h.01"/>
                    </svg>
                </div>

                <h3 class="text-2xl md:text-3xl font-bold text-[#1f3b63] counter" data-target="215" data-suffix="">0</h3>
                <p class="text-gray-500 text-[10px] md:text-xs tracking-widest mt-1 md:mt-2 uppercase">
                    Happy Clients
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-2xl md:rounded-3xl shadow-[0_20px_60px_rgba(0,0,0,0.08)] 
                        py-4 md:py-10 text-center">
                <div class="w-12 h-12 md:w-14 md:h-14 mx-auto mb-4 md:mb-5 
                            rounded-full bg-sky-100 flex items-center justify-center">
                    <svg class="w-5 h-5 md:w-6 md:h-6 text-[#1f3b63]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>

                <h3 class="text-2xl md:text-3xl font-bold text-[#1f3b63] counter" data-target="275" data-suffix="">0</h3>
                <p class="text-gray-500 text-[10px] md:text-xs tracking-widest mt-1 md:mt-2 uppercase">
                    Successful Cases
                </p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-2xl md:rounded-3xl shadow-[0_20px_60px_rgba(0,0,0,0.08)] 
                        py-4 md:py-10 text-center">
                <div class="w-12 h-12 md:w-14 md:h-14 mx-auto mb-4 md:mb-5 
                            rounded-full bg-sky-100 flex items-center justify-center">
                    <svg class="w-5 h-5 md:w-6 md:h-6 text-[#1f3b63]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.965a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.376 2.454a1 1 0 00-.364 1.118l1.286 3.965c.3.921-.755 1.688-1.538 1.118l-3.376-2.454a1 1 0 00-1.175 0l-3.376 2.454c-.783.57-1.838-.197-1.538-1.118l1.286-3.965a1 1 0 00-.364-1.118L2.049 9.392c-.783-.57-.38-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.965z"/>
                    </svg>
                </div>

                <h3 class="text-2xl md:text-3xl font-bold text-[#1f3b63] counter" data-target="23" data-suffix="">0</h3>
                <p class="text-gray-500 text-[10px] md:text-xs tracking-widest mt-1 md:mt-2 uppercase">
                    Awards
                </p>
            </div>

        </div>
    </div>
</section>




<!-- Counter Animation Script for Our Journey Section -->

<script>
document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");

    const animateCounter = (counter) => {
        const target = +counter.dataset.target;
        const suffix = counter.dataset.suffix || "";
        const duration = 1200;
        const startTime = performance.now();

        const update = (time) => {
            const progress = Math.min((time - startTime) / duration, 1);
            const value = Math.floor(progress * target);
            counter.innerText = value + suffix;

            if (progress < 1) {
                requestAnimationFrame(update);
            } else {
                counter.innerText = target + suffix;
            }
        };

        requestAnimationFrame(update);
    };

    const observer = new IntersectionObserver(
        (entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    obs.unobserve(entry.target); // run only once
                }
            });
        },
        { threshold: 0.6 }
    );

    counters.forEach(counter => observer.observe(counter));
});
</script>


    <!-- Team Section -->

    {{-- <section class="relative py-24 bg-[#1f2b4d] overflow-hidden">
    <div class="max-w-7xl mx-auto px-4"> --}}

        <!-- Small Label -->
        {{-- <div class="flex justify-center mb-4">
            <span class="flex items-center text-orange-500 font-semibold text-sm">
                <span class="w-2 h-2 bg-orange-500 rounded-full mr-2"></span>
                Technician Team
            </span>
        </div> --}}

        <!-- Heading -->
        {{-- <h2 class="text-center text-white text-3xl md:text-4xl font-bold mb-16">
            Our dedicated & expert<br>team member
        </h2> --}}

        <!-- Team Grid -->
        {{-- <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8"> --}}

            <!-- Card 1 -->
            {{-- <div class="relative">
                <div class="overflow-hidden rounded-md">
                    <img src="https://images.pexels.com/photos/1681010/pexels-photo-1681010.jpeg"
                         class="w-full h-[320px] object-cover">
                </div>

                <div class="bg-[#24345f] py-6 text-center -mt-10 mx-4 rounded-md relative z-10">
                    <span class="block text-gray-400 text-sm">Technician</span>
                    <h3 class="text-white font-semibold text-lg">Demica Master</h3>
                </div>
            </div> --}}

            <!-- Card 2 -->
            {{-- <div class="relative">
                <div class="overflow-hidden rounded-md relative">
                    <img src="https://images.pexels.com/photos/834863/pexels-photo-834863.jpeg"
                         class="w-full h-[320px] object-cover">

                </div> --}}
{{-- 
                <div class="bg-[#24345f] py-6 text-center -mt-10 mx-4 rounded-md relative z-10">
                    <span class="block text-gray-400 text-sm">Senior Technician</span>
                    <h3 class="text-white font-semibold text-lg">Margie Burman</h3>
                </div>
            </div> --}}

            <!-- Card 3 -->
            {{-- <div class="relative">
                <div class="overflow-hidden rounded-md">
                    <img src="https://images.pexels.com/photos/91227/pexels-photo-91227.jpeg"
                         class="w-full h-[320px] object-cover">
                </div>

                <div class="bg-[#24345f] py-6 text-center -mt-10 mx-4 rounded-md relative z-10">
                    <span class="block text-gray-400 text-sm">Founder Of Pixa</span>
                    <h3 class="text-white font-semibold text-lg">Gorrien Hyrick</h3>
                </div>
            </div> --}}

            <!-- Card 4 (FIXED) -->
            {{-- <div class="relative">
                <div class="overflow-hidden rounded-md">
                    <img src="https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg"
                         class="w-full h-[320px] object-cover">
                </div>

                <div class="bg-[#24345f] py-6 text-center -mt-10 mx-4 rounded-md relative z-10">
                    <span class="block text-gray-400 text-sm">Support Engineer</span>
                    <h3 class="text-white font-semibold text-lg">Jonson Pierce</h3>
                </div>
            </div>

        </div>
    </div>
</section> --}}

<!-- Why Choose Us Section -->
<section class="relative py-4 md:py-8 bg-blue-50/60 overflow-hidden">


    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">

            <!-- Left Image -->
            <div class="lg:w-1/2 w-full">
                <img 
                    src="/asset/images/whychoose.png"
                    alt="AC Technician"
                    class="w-full h-64 sm:h-96 lg:h-[520px] object-cover rounded-2xl shadow-lg"
                >
            </div>

            <!-- Right Content -->
            <div class="lg:w-1/2 w-full relative bg-gray-50 rounded-2xl p-6 md:p-12 shadow-lg lg:shadow-none">

                <!-- Pattern Background -->
                <div class="absolute inset-0 bg-[linear-gradient(45deg,rgba(0,0,0,0.03)_25%,transparent_25%,transparent_50%,rgba(0,0,0,0.03)_50%,rgba(0,0,0,0.03)_75%,transparent_75%,transparent)] bg-[length:6px_6px] rounded-2xl"></div>

                <div class="relative">

                    <!-- Label -->
                    <div class="flex items-center mb-4">
                        <span class="w-2 h-2 bg-orange-500 rounded-full mr-2"></span>
                        <span class="text-orange-500 font-semibold text-sm">
                            Why Choose Us
                        </span>
                    </div>

                    <!-- Heading -->
                    <h2 class="text-2xl md:text-3xl font-bold text-[#0b132b] mb-6 leading-tight">
                        Reliable Service for <br class="hidden md:block">
                     Better Living
                    </h2>

                    <!-- Description -->
                    <p class="text-gray-600 mb-10 max-w-xl">
                        ReliableSeva Technologies Private Limited is committed to delivering reliable, affordable, and timely home appliance repair solutions.
                         With a strong focus on transparency and customer satisfaction, we make appliance repair simple, stress-free, and dependable for every household.
                    </p>

                    <!-- Feature 1 -->
                    <div class="flex gap-4 md:gap-6 mb-8">
                        <div class="w-14 h-14 md:w-16 md:h-16 rounded-full bg-blue-500 flex items-center justify-center text-white shrink-0">
                            <svg class="w-6 h-6 md:w-8 md:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-[#0b132b] mb-1">
                                Expert Repairman
                            </h4>
                            <p class="text-gray-600 text-sm">
                                Our trained and skilled technicians specialize in Air Conditioner repair and servicing, including installation, 
                                maintenance, gas refilling, and fault diagnosis. Every service is carried out with professionalism, accuracy, and attention to detail.
                            </p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="flex gap-4 md:gap-6">
                        <div class="w-14 h-14 md:w-16 md:h-16 rounded-full bg-orange-500 flex items-center justify-center text-white shrink-0">
                            <svg class="w-6 h-6 md:w-8 md:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 9l3 3-3 3M5 15V9a4 4 0 014-4h6"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-[#0b132b] mb-1">
                                Satisfied Services
                            </h4>
                            <p class="text-gray-600 text-sm">
                                We believe in building long-term relationships through honest communication, consistent service quality, and efficient resolution. As we grow, 
                                we continue expanding our services to offer complete home appliance care under one trusted name
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- About Section -->
<section class="relative cover bg-center mt-8 py-16 md:py-24 overflow-hidden"
    style="background-image: url('https://images.pexels.com/photos/4488639/pexels-photo-4488639.jpeg');">

    <!-- Gradient Overlay -->
    <div class="absolute inset-0 
    bg-gradient-to-r 
    from-[#0b132b]/95 
    via-[#0f1c3f]/90 
    to-[#0b132b]/85">
    </div>

    <div class="relative max-w-7xl mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">

            <!-- Image Side -->
            <div class="lg:w-1/2 relative">
                <!-- Decorative Elements (Hidden on mobile) -->
                <div class="hidden lg:block absolute -top-6 -left-6 w-28 h-28 bg-orange-500/20 rounded-full blur-xl"></div>
                <div class="hidden lg:block absolute -bottom-6 -right-6 w-36 h-36 bg-blue-500/20 rounded-full blur-xl"></div>

                <img 
                    src="asset/images/aboutourcom.jpeg" 
                    alt="AC Technician"
                    class="relative z-10 w-full h-[300px] md:h-[400px] lg:h-[500px] object-cover rounded-xl shadow-2xl"
                >
            </div>

            <!-- Content Side (UNCHANGED) -->
            <div class="lg:w-1/2 text-white">
                <span class="text-orange-500 font-semibold text-sm uppercase tracking-wider mb-3 block">
                    About Our Company
                </span>

                <h2 class="text-3xl md:text-4xl font-bold mb-6 leading-tight">
                    We Are A Trusted Name In <br>
                    Home Appliance Repair & AC Services
                </h2>

                <p class="text-gray-300 mb-6 leading-relaxed">
                   ReliableSeva Technologies Private Limited is a professionally managed home appliance repair service company, committed to providing reliable, affordable, and timely repair solutions for households. We focus on quality service through transparency, skilled technicians, and a strong customer-first approach, ensuring every customer receives dependable doorstep support.
                </p>

                <p class="text-gray-300 mb-8 leading-relaxed">
                   Specializing in Air Conditioner repair and servicing, we handle installation, uninstallation, routine maintenance, gas refilling, and technical fault diagnosis with care and professionalism. As we grow, ReliableSeva is expanding its services to include refrigerator, washing machine, microwave oven, and other home appliance repairs to offer complete convenience under one roof.
                </p>

                <ul class="space-y-4 mb-10">
                    <li class="flex items-center text-gray-200">
                        <svg class="w-5 h-5 text-orange-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                       Trained & Verified Technicians
                    </li>
                    <li class="flex items-center text-gray-200">
                        <svg class="w-5 h-5 text-orange-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    Transparent Pricing & Quality Service

                    </li>
                    <li class="flex items-center text-gray-200">
                        <svg class="w-5 h-5 text-orange-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                       Reliable Doorstep Support
                    </li>
                </ul>

                <a href="{{ route('about') }}" 
                   class="inline-flex items-center text-orange-500 font-semibold hover:text-orange-400 transition">
                    Learn More About Us
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>


    <!-- Services Section -->
    <section class="py-20 bg-blue-50/60 relative overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-primary font-bold text-sm uppercase tracking-wider mb-2 block">Our Services</span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Quality Services For You</h2>
                <p class="text-gray-600">We offer a comprehensive range of air conditioning services to meet all your needs.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                           <!-- Service 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300">
                    <div class="h-64 overflow-hidden relative">
                        <img src="/asset/images/AC Deep Service.jpg" alt="AC Deep Service" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute bottom-0 left-0 bg-green-100 text-green-800 px-4 py-1 text-sm font-bold">Premium</div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-4">Advance AC Deep Service + Double Coating Protection</h3>
                        <p class="text-gray-600 mb-6">Premium deep cleaning service with double protective coating for enhanced AC performance and longevity.</p>
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex flex-col">
                                <span class="text-2xl font-bold text-gray-800">₹3000</span>
                                {{-- <span class="text-sm text-gray-500 line-through">₹3200</span> --}}
                            </div>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">6 MONTHS WARRANTY</span>
                        </div>
                        <ul class="space-y-2 mb-6 text-gray-700">
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
                            {{-- <button onclick="toggleDetails('service1')" 
                                    class="w-full bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fas fa-chevron-down" id="service1-icon"></i>
                                Read More Details
                            </button>
                            <button onclick="openWhatsappModal('Advance AC Deep Service + Double Coating Protection', '₹2500')" 
                                    class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fab fa-whatsapp"></i>
                                Contact for Service
                            </button> --}}
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300">
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
                        <ul class="space-y-2 mb-6 text-gray-700">
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
                            {{-- <button onclick="toggleDetails('service2')" 
                                    class="w-full bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fas fa-chevron-down" id="service2-icon"></i>
                                Read More Details
                            </button>
                            <button onclick="openWhatsappModal('Fresh Air AC Service', '₹499')" 
                                    class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fab fa-whatsapp"></i>
                                Contact for Service
                            </button> --}}
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300">
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
                        <ul class="space-y-2 mb-6 text-gray-700">
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
                            {{-- <button onclick="toggleDetails('service3')" 
                                    class="w-full bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fas fa-chevron-down" id="service3-icon"></i>
                                Read More Details
                            </button>
                            <button onclick="openWhatsappModal('Water Leakage Repair', '₹599')" 
                                    class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                                <i class="fab fa-whatsapp"></i>
                                Contact for Service
                            </button> --}}
                        </div>
                    </div>
                </div>
 
            </div>
     
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4 mt-6">
                <a href="{{ route('services') }}"  class="bg-blue-700 hover:bg-white text-gray-100 hover:text-gray-900 font-bold py-3 px-14 rounded-full transition shadow-lg text-center">View All Services</a>
               
            </div>


        </div>
    </section>


<!--Our Blog Section -->
<section class="blog-section py-16 mb-10 px-6 md:px-12 lg:px-20 bg-[#1E3A5F]">
    <div class="text-center mb-12">
        <h2 class="text-4xl md:text-5xl font-bold text-white">
            Our <span class="text-yellow-500">Blogs</span>
        </h2>
        <div class="w-24 h-1 bg-yellow-500 mx-auto mt-3"></div>
    </div>
    
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

            </div>
</section>




    <!-- Call to Action -->
    <section class="py-20 bg-[#1f2b4d] relative overflow-hidden">
        <div class="absolute inset-0 bg-[#1f2b4d] opacity-50"></div>
        <div class="container mx-auto px-4 relative z-10 text-center text-white">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Need Immediate AC Service?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">Contact us today for a free quote or to schedule a service visit. We are available 24/7 for emergency repairs.</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="{{ route('contact') }}" class="bg-[#ff5e14] border-2 border-white text-primary font-bold py-4 px-10 rounded-full hover:bg-[#153152] transition shadow-lg">Contact Us Now</a>
                <a href="tel:+918882600406" class="flex items-center justify-center bg-transparent border-2 border-white text-white font-bold py-4 px-10 rounded-full hover:bg-[#153152] hover:text-primary transition">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    +91 8882600406
                </a>
            </div>
        </div>
    </section>
@endsection
