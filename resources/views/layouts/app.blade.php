<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARAHUYO</title>
    
    
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC&display=swap" rel="stylesheet">
</head>
<body class="flex flex-col min-h-screen">

    {{-- Navbar --}}
    @include('pages.navbar')

    {{-- Main Content --}}
    <main class="flex-1">
        @yield('content')
    </main>

    @include('pages.footer')

</body>
</html>