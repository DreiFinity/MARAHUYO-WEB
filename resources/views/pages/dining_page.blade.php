


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body class="mr-6 ml-6">
@extends('pages.navbar')
    <section class="relative">
        <img class="h-84 w-full" src="/images/image 17.png" alt="bgimage">
        <div class="absolute inset-0 flex flex-col items-center justify-center">
            <h1 class="text-white text-lg md:text-5xl">Experience Exquisite Dining</h1>
            <h1 class="text-white text-sm md:text-2xl ">Explore gourmet cruisine crafted by our world class chefs</h1>
            <!-- <button class="">View Menus</button> no idea pa -->
        </div>
    </section>

    <section class="pt-10 px-6">
        <h1 class="text-base md:text-lg lg:text-5xl">On-Site Restaurant & Bars</h1>
        <div class="pt-14 flex flex-col md:flex md:flex-row gap-10">
            <div class="flex flex-col gap-1">
                <img src="/images/Frame 84.png" alt="image">
                <h1 class="text-base md:text-lg lg:text-3xl font-medium">The Loft Bar</h1>
                <h1 class="text-sm md:text-base">A cozy, upscale spot to unwind with curated drinks and light music.</h1>
            </div>
            <div class="flex flex-col gap-1">
                <img src="/images/Frame 85.png" alt="image">
                <h1 class="text-base md:text-lg lg:text-3xl font-medium">The Pavilion Table</h1>
                <h1 class="text-sm md:text-base">Elegant dishes, artful presentation — a perfect spot for every occasion.</h1>
            </div>
        </div>
    </section> 

    <section class="pt-10 px-6">
        <h1 class="text-base md:text-lg lg:text-5xl">Menus</h1>
        <div class="pt-14 flex flex-col md:flex md:flex-row gap-5 justify-center h-auto w-auto">
            <div class="h-full w-full bg-[#C5D6DB] px-4 py-4 text-center">
                <h1 class="text-base md:text-2xl">Breakfast</h1>
                <div class="flex justify-between">
                    <span class="text-sm md:text-lg">Sunrise Platter</span>
                    <span class="text-sm md:text-lg">$180</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-sm md:text-lg">Golden Flapjacks</span>
                    <span class="text-sm md:text-lg">$150</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-sm md:text-lg">Garden Omelet</span>
                    <span class="text-sm md:text-lg">$160</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-sm md:text-lg">Baker’s Basket</span>
                    <span class="text-sm md:text-lg">$160</span>
                </div>
                <div class="flex justify-between">
                    <span class="">Classic Continental</span>
                    <span class="">$160</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-sm md:text-lg">Fruit Harmony</span>
                    <span class="text-sm md:text-lg">$160</span>
                </div>                           
            </div>
            <div class="h-full w-full bg-[#C5D6DB] px-4 py-4 text-center">
                <h1 class="text-base md:text-2xl">Lunch</h1>
                <div class="flex justify-between">
                    <span class="text-sm md:text-lg">Savory Grilled</span>
                    <span class="text-sm md:text-lg">$180</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-sm md:text-lg">Chicken Salad</span>
                    <span class="text-sm md:text-lg">$150</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-sm md:text-lg">Club Sandwich</span>
                    <span class="text-sm md:text-lg">$160</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-sm md:text-lg">Primavera Delight</span>
                    <span class="text-sm md:text-lg">$160</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-sm md:text-lg">Teriyaki Glazed Bowl</span>
                    <span class="text-sm md:text-lg">$160</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-sm md:text-lg">FCrispy Chicken</span>
                    <span class="text-sm md:text-lg">$160</span>
                </div>                           
            </div>
            <div class="h-full w-full bg-[#C5D6DB] px-4 py-4 text-center">
                <h1 class="text-base md:text-2xl">Dinner</h1>
                <div class="flex justify-between">
                    <span class="text-sm md:text-lg">Crusted Ribeye</span>
                    <span class="text-sm md:text-lg">$180</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-sm md:text-lg">Prawn Skillet</span>
                    <span class="text-sm md:text-lg">$150</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-sm md:text-lg">Mushroom Risotto</span>
                    <span class="text-sm md:text-lg">$160</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-sm md:text-lg">Salmon Royale</span>
                    <span class="text-sm md:text-lg">$160</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-sm md:text-lg">Rosemary Chicken</span>
                    <span class="text-sm md:text-lg">$160</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-sm md:text-lg">Beef Medallions</span>
                    <span class="text-sm md:text-lg">$160</span>
                </div>                           
            </div>
        </div>
    </section>

    <section class="pt-10 px-6">
        <h1 class="text-base md:text-lg lg:text-5xl">Meet Our Chefs</h1>
        <div class="pt-14 flex flex-col md:flex md:flex-row gap-10 h-auto w-auto">
            <div class="h-full w-full bg-[#F1E0E0] px-4 py-5">
                <div class="flex flex-col md:flex md:flex-row items-center gap-5 ">
                    <img src="/images/Frame 88.png" alt="">
                    <div class="flex flex-col">
                        <h1 class="text-2xl font-medium">Chef Mateo Rivera</h1>
                        <span class="">Title: Executive Chef</span>
                        <span class="">Specialties: <br>
                        •Signature Herb-Crusted Lamb <br>
                        •Truffle Wild Mushroom Risotto <br>
                        •International fusion cuisine with a fine-dining twist
                        </span>
                    </div>
                </div>
            </div>
            <div class="h-full w-full bg-[#F1E0E0] px-4 py-5">
                <div class="flex flex-col md:flex md:flex-row items-center gap-5 ">
                    <img src="images/Frame 89.png" alt="">
                    <div class="flex flex-col">
                        <h1 class="text-2xl font-medium">Chef Julian Cruz</h1>
                        <span class="">Title: Pastry & Dessert Chef</span>
                        <span class="">Specialties: <br>
                        •Molten Chocolate Soufflé <br>
                        •Mango Crème Brûlée <br>
                        •Artisan breads and seasonal pastries
                        </span>
                    </div>
                </div>
            </div>
        </div>                       
    </section>
</body>
</html>

@extends('pages.footer')