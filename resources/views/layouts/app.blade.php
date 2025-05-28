<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARAHUYO</title>
    
    <!-- Remove the CDN link -->
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    
    <!-- Add Vite assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC&display=swap" rel="stylesheet">
</head>
<body>
    @yield('content')
</body>
</html>