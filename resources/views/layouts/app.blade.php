<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Reliable Seva – Trusted Home & Professional Services Near You</title>

    <meta name="description" content="Reliable Seva provides trusted home and professional services including cleaning, repair, maintenance, and support solutions with verified experts at your doorstep." />

    <meta name="keywords" content="Reliable Seva, home services near me, professional services India, trusted service provider, home cleaning services, repair services, maintenance services, doorstep services, ac service, ac technician, ac repair, verified service professionals" />

    <meta name="robots" content="INDEX,FOLLOW" />
    
   
    
    <link rel="icon" type="image/png" href="{{ asset('asset/images/logo.png') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN (Added) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-roboto antialiased text-gray-800 bg-gray-50 flex flex-col min-h-screen">
    @include('partials.header')

    <main class="flex-grow">
        @yield('content')
    </main>

    @include('partials.footer')


  
</body>
</html>
