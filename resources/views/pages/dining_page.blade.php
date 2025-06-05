<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dining Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Playfair Display SC -->
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
    <style>
        h1, .playfair {
            font-family: 'Playfair Display SC', serif;
        }
        .ephesis {
            font-family: 'Ephesis', cursive;
        }
        input[type="date"].custom-date {
            color: black;
            background: transparent;
            background-color: white;
            opacity: 0.5;
        }
    </style>
</head>
<body class="bg-white">
@extends('pages.navbar')
    <section class="relative">
        <div class="relative h-84 w-full">
            <img class="h-84 w-full object-cover" src="/images/dining2.jpg" alt="bgimage">
            <div class="absolute inset-0 bg-black bg-opacity-50 rounded-b-3xl"></div>
        </div>
        <div class="absolute inset-0 flex flex-col items-center justify-center bg-black bg-opacity-20 rounded-b-3xl">
            <h1 class="text-white font- black text-lg sm:text-2xl md:text-4xl lg:text-7xl playfair  drop-shadow-lg text-center mb-3">Experience Exquisite Dining</h1>
            <h2 class="text-white text-xs sm:text-base md:text-xl lg:text-2xl text-center mt-2 drop-shadow">Explore gourmet cuisine crafted by our world class chefs</h2>
        </div>
    </section>

    <section class="pt-10 px-4 sm:px-6 md:ml-10 md:mr-10">
        <h1 class="text-base sm:text-xl md:text-3xl lg:text-5xl font-semibold mb-6">On-Site Restaurant & Bars</h1>
        <div class="pt-8 flex flex-col md:flex-row gap-8">
            <div class="flex flex-col gap-2 bg-white rounded-2xl shadow-md p-4 flex-1">
                <img src="/images/Frame 84.png" alt="image" class="rounded-xl w-full object-cover mb-2">
                <h2 class="text-base sm:text-lg lg:text-2xl font-medium">The Loft Bar</h2>
                <p class="text-xs sm:text-base">A cozy, upscale spot to unwind with curated drinks and light music.</p>
            </div>
            <div class="flex flex-col gap-2 bg-white rounded-2xl shadow-md p-4 flex-1">
                <img src="/images/Frame 85.png" alt="image" class="rounded-xl w-full object-cover mb-2">
                <h2 class="text-base sm:text-lg lg:text-2xl font-medium">The Pavilion Table</h2>
                <p class="text-xs sm:text-base">Elegant dishes, artful presentation — a perfect spot for every occasion.</p>
            </div>
        </div>
    </section> 

    <section class="pt-10 px-4 sm:px-6 md:ml-10 md:mr-10">
        <h1 class="text-base sm:text-xl md:text-3xl lg:text-5xl font-semibold mb-6">Menus</h1>
        <div class="pt-8 flex flex-col md:flex-row gap-6 justify-center">
            <div class="bg-[#C5D6DB] rounded-2xl shadow-md px-4 py-6 text-center flex-1 min-w-[220px]">
                <h2 class="text-base sm:text-lg md:text-2xl font-bold mb-4">Breakfast</h2>
                <div class="space-y-2">
                    <div class="flex justify-between text-xs sm:text-base"><span>Sunrise Platter</span><span>$180</span></div>
                    <div class="flex justify-between text-xs sm:text-base"><span>Golden Flapjacks</span><span>$150</span></div>
                    <div class="flex justify-between text-xs sm:text-base"><span>Garden Omelet</span><span>$160</span></div>
                    <div class="flex justify-between text-xs sm:text-base"><span>Baker’s Basket</span><span>$160</span></div>
                    <div class="flex justify-between text-xs sm:text-base"><span>Classic Continental</span><span>$160</span></div>
                    <div class="flex justify-between text-xs sm:text-base"><span>Fruit Harmony</span><span>$160</span></div>
                </div>
            </div>
            <div class="bg-[#C5D6DB] rounded-2xl shadow-md px-4 py-6 text-center flex-1 min-w-[220px]">
                <h2 class="text-base sm:text-lg md:text-2xl font-bold mb-4">Lunch</h2>
                <div class="space-y-2">
                    <div class="flex justify-between text-xs sm:text-base"><span>Savory Grilled</span><span>$180</span></div>
                    <div class="flex justify-between text-xs sm:text-base"><span>Chicken Salad</span><span>$150</span></div>
                    <div class="flex justify-between text-xs sm:text-base"><span>Club Sandwich</span><span>$160</span></div>
                    <div class="flex justify-between text-xs sm:text-base"><span>Primavera Delight</span><span>$160</span></div>
                    <div class="flex justify-between text-xs sm:text-base"><span>Teriyaki Glazed Bowl</span><span>$160</span></div>
                    <div class="flex justify-between text-xs sm:text-base"><span>Crispy Chicken</span><span>$160</span></div>
                </div>
            </div>
            <div class="bg-[#C5D6DB] rounded-2xl shadow-md px-4 py-6 text-center flex-1 min-w-[220px]">
                <h2 class="text-base sm:text-lg md:text-2xl font-bold mb-4">Dinner</h2>
                <div class="space-y-2">
                    <div class="flex justify-between text-xs sm:text-base"><span>Crusted Ribeye</span><span>$180</span></div>
                    <div class="flex justify-between text-xs sm:text-base"><span>Prawn Skillet</span><span>$150</span></div>
                    <div class="flex justify-between text-xs sm:text-base"><span>Mushroom Risotto</span><span>$160</span></div>
                    <div class="flex justify-between text-xs sm:text-base"><span>Salmon Royale</span><span>$160</span></div>
                    <div class="flex justify-between text-xs sm:text-base"><span>Rosemary Chicken</span><span>$160</span></div>
                    <div class="flex justify-between text-xs sm:text-base"><span>Beef Medallions</span><span>$160</span></div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-10 px-4 sm:px-6 mb-20 md:ml-10 md:mr-10">
        <h1 class="text-base sm:text-xl md:text-3xl lg:text-5xl font-semibold mb-6">Meet Our Chefs</h1>
        <div class="pt-8 flex flex-col md:flex-row gap-8">
            <div class="bg-[#F1E0E0] rounded-2xl shadow-md px-4 py-6 flex-1 flex flex-col justify-center">
                <div class="flex flex-col md:flex-row items-center gap-5">
                    <img src="/images/Frame 88.png" alt="" class="rounded-xl w-32 h-32 object-cover mb-2 md:mb-0">
                    <div class="flex flex-col">
                        <h2 class="text-lg sm:text-2xl font-medium">Chef Mateo Rivera</h2>
                        <span class="text-xs sm:text-base">Title: Executive Chef</span>
                        <span class="text-xs sm:text-base mt-2">Specialties: <br>
                        • Signature Herb-Crusted Lamb <br>
                        • Truffle Wild Mushroom Risotto <br>
                        • International fusion cuisine with a fine-dining twist
                        </span>
                    </div>
                </div>
            </div>
            <div class="bg-[#F1E0E0] rounded-2xl shadow-md px-4 py-6 flex-1 flex flex-col justify-center">
                <div class="flex flex-col md:flex-row items-center gap-5">
                    <img src="/images/Frame 89.png" alt="" class="rounded-xl w-32 h-32 object-cover mb-2 md:mb-0">
                    <div class="flex flex-col">
                        <h2 class="text-lg sm:text-2xl font-medium">Chef Julian Cruz</h2>
                        <span class="text-xs sm:text-base">Title: Pastry & Dessert Chef</span>
                        <span class="text-xs sm:text-base mt-2">Specialties: <br>
                        • Molten Chocolate Soufflé <br>
                        • Mango Crème Brûlée <br>
                        • Artisan breads and seasonal pastries
                        </span>
                    </div>
                </div>
            </div>
        </div>                       
    </section>
</body>
</html>
@extends('pages.footer')
