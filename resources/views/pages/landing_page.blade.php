<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MARAHUYO</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="resouces/css/fonts.css" rel="stylesheet">
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

  <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'marahuyo-blue': '#1e40af',
                        'marahuyo-gold': '#f59e0b',
                    },
                    fontFamily: {
                        'serif': ['Georgia', 'serif'],
                    }
                }
            }
        }
    </script>


</head>
<body class="bg-gray-100 ">
<!-- filepath: c:\MARAHUYO\marahuyo-jca-copy\resources\views\pages\landing_page.blade.php -->
<!-- filepath: c:\MARAHUYO\marahuyo-jca-copy\resources\views\pages\landing_page.blade.php -->
<nav class="bg-white shadow-md fixed top-0 left-0 w-full z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-50">
    <div class="flex items-center h-16">
      <!-- Logo -->
      <div class="flex-shrink-0 mr-6">
        <a href="/">
          <img class="h-10 w-auto" src="images/main-logo.svg" alt="Logo" />
        </a>
      </div>

      <!-- Nav Links (Desktop) -->
      <div class="hidden md:flex space-x-20 ml-40">
        <a href="/" class="text-gray-700 hover:text-blue-600">Home</a>
        <a href="#about" class="text-gray-700 hover:text-blue-600">About</a>
        <a href="/rooms" class="text-gray-700 hover:text-blue-600">Rooms</a>
        <a href="/dining" class="text-gray-700 hover:text-blue-600">Services</a>
        <a href="/contacts" class="text-gray-700 hover:text-blue-600">Contact</a>
      </div>

      <!-- Right: Login/Signup/Profile -->
      <div class="ml-auto flex items-center space-x-2 mr-2">
        @guest
          <!-- User icon as placeholder -->
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-200 border-2 border-gray-300">
            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5.121 17.804A9 9 0 1112 21a9 9 0 01-6.879-3.196z"/>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
          </span>
          <button id="openLogin"
            class="flex items-center justify-center text-sm font-semibold border px-4 py-2 rounded-lg hover:bg-[#CCCCCC] transition h-10 min-w-[90px]">
            <span>Log In</span>
          </button>
          <button type="button" onclick="openSignUpModal()"
            class="text-sm font-semibold px-4 py-2 bg-[#056594] text-white border rounded-lg hover:bg-[#04547C] ml-2 flex items-center justify-center transition h-10 min-w-[90px]">
            Sign Up
          </button>
        @endguest
        @auth
          <div class="relative" id="profileDropdownWrapper">
            <button id="profileDropdownBtn" type="button" class="flex items-center focus:outline-none">
              <img src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('images/default-avatar.png') }}"
                alt="Profile"
                class="w-10 h-10 rounded-full border-2 border-gray-300 object-cover" />
              <span class="ml-2 text-gray-800 font-semibold hidden md:inline">{{ Auth::user()->name }}</span>
              <svg class="w-4 h-4 ml-1 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div id="profileDropdownMenu" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 z-50 hidden">
              <a href="/profile" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
              <a href="/bookings" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">My Bookings</a>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</button>
              </form>
            </div>
          </div>
        @endauth

        <!-- Mobile Menu Button (always last in flex, rightmost) -->
        <div class="md:hidden ml-2">
          <button id="menu-button" class="text-gray-700 focus:outline-none">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="md:hidden hidden px-4 pb-4 flex flex-col space-y-2 bg-white shadow-lg rounded-b-lg">
    <a href="/" class="text-gray-700 hover:text-blue-600 py-2">Home</a>
    <a href="#about" class="text-gray-700 hover:text-blue-600 py-2">About</a>
    <a href="/rooms" class="text-gray-700 hover:text-blue-600 py-2">Rooms</a>
    <a href="/dining" class="text-gray-700 hover:text-blue-600 py-2">Services</a>
    <a href="/contacts" class="text-gray-700 hover:text-blue-600 py-2">Contact</a>
    @guest
      <button id="openLoginMobile" class="text-gray-700 hover:text-blue-600 py-2 text-left">Log In</button>
      <button type="button" onclick="openSignUpModal()" class="text-gray-700 hover:text-blue-600 py-2 text-left">Sign Up</button>
    @else
      <a href="/profile" class="text-gray-700 hover:text-blue-600 py-2">Profile</a>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="text-gray-700 hover:text-blue-600 py-2 text-left w-full">Logout</button>
      </form>
    @endguest
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const button = document.getElementById('menu-button');
      const menu = document.getElementById('mobile-menu');
      if (button && menu) {
        button.addEventListener('click', () => {
          menu.classList.toggle('hidden');
        });
        // Close mobile menu when a link or button is clicked
        menu.querySelectorAll('a, button').forEach(el => {
          el.addEventListener('click', () => {
            menu.classList.add('hidden');
          });
        });
      }
      // Open login modal from mobile menu
      const openLoginMobile = document.getElementById('openLoginMobile');
      if (openLoginMobile) {
        openLoginMobile.addEventListener('click', () => {
          document.getElementById('loginModal').classList.remove('hidden');
          document.body.style.overflow = 'hidden';
        });
      }
    });
  </script>
</nav>

<section class="relative h-screen bg-cover bg-center md:mt-20" style="background-image: url('images/hero-image.jpg');">
  <div class="absolute inset-0 bg-black bg-opacity-40"></div>
<div class="relative z-10 max-w-6xl mx-auto px-4 text-center text-white flex flex-col items-center justify-center h-full space-y-6">
    <!-- Headline -->
    <h1 class="playfair text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold tracking-wider leading-tight">
        BE ENCHANTED BY THE SEA
    </h1>

    <!-- Subheadline -->
    <p class="text-4xl ephesis font-light">at Marahuyo Hotel and Resort</p>

    <!-- Description -->
    <p class="max-w-2xl text-base md:text-lg font-light">
      Welcome to Marahuyo Hotel, your serene escape by the sea. Nestled along a pristine beachfront, Marahuyo—meaning "to enchant or bewitch"—is where nature’s beauty meets warm Filipino hospitality.
    </p>



<form action="{{ route('rooms.available') }}" method="GET" id="bookingForm">
  <div class="grid grid-cols-1 md:grid-cols-5 gap-10 mt-6 text-gray-900 border border-white rounded-md bg-opacity-10 p-4 bg-gray-800 relative z-0">

    <!-- Check in -->
    <div class="flex flex-col items-start ">
      <label for="checkinDate" class="text-white font-semibold mb-1">Check in</label>
      <input type="date" id="checkinDate" name="checkin"
        class="custom-date border border-gray-300 rounded-md px-3 py-2 bg-white shadow-md text-gray-900 w-full" required />
    </div>

    <!-- Check out -->
    <div class="flex flex-col items-start  ">
      <label for="checkoutDate" class="text-white font-semibold mb-1">Check out</label>
      <input type="date" id="checkoutDate" name="checkout"
        class="custom-date border border-gray-300 rounded-md px-3 py-2 bg-white shadow-md text-gray-900 w-full" required />
    </div>

    <!-- Rooms & Guests -->
    <div class="  flex flex-col items-start md:col-span-2 mt-2">
    <label class="text-white font-semibold mb-1">Rooms & Guests</label>
    <div class="flex items-center gap-2 w-full">
        <div onclick="toggleGuestModal()" class="flex items-center cursor-pointer gap-2">
        <span id="guestLabel" class="text-sm text-white opacity-70">
            <span id="roomsCount">1</span> Room, <span id="guestsCount">2</span> Guests
        </span>
        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
            <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
        </svg>
        </div>
    </div>

    <!-- Modal -->
    <div id="guestModal" class="absolute mt-2 p-4 bg-white rounded-md shadow-lg hidden z-20 text-sm w-60">
        <div class="flex justify-between items-center mb-3">
        <span class="font-medium text-gray-700">Rooms</span>
        <div class="flex items-center space-x-2">
            <button type="button" onclick="adjustCount('rooms', -1)" class="px-2 py-1 bg-gray-200 rounded hover:bg-gray-300">−</button>
            <span id="roomsCount" class="w-6 text-center">1</span>
            <button type="button" onclick="adjustCount('rooms', 1)" class="px-2 py-1 bg-gray-200 rounded hover:bg-gray-300">+</button>
        </div>
        </div>
        <div class="flex justify-between items-center">
        <span class="font-medium text-gray-700">Guests</span>
        <div class="flex items-center space-x-2">
            <button type="button" onclick="adjustCount('guests', -1)" class="px-2 py-1 bg-gray-200 rounded hover:bg-gray-300">−</button>
            <span id="guestsCount" class="w-6 text-center">2</span>
            <button type="button" onclick="adjustCount('guests', 1)" class="px-2 py-1 bg-gray-200 rounded hover:bg-gray-300">+</button>
        </div>
        </div>
    </div>
    </div>

    <!-- Button -->
    <div class="flex justify-center md:justify-end mt-2">
      <button type="submit" class="bg-black text-white px-4 py-2 rounded-md hover:bg-gray-800 transition">
        Check Rates
      </button>
    </div>
  </div>

  <!-- Hidden Inputs for Rooms & Guests -->
  <input type="hidden" name="rooms" id="roomsInput" value="1">
  <input type="hidden" name="guests" id="guestsInput" value="2">

  @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
  @endif
</form>

<script>
// Form handling
document.addEventListener('DOMContentLoaded', function() {
    // Form validation
    const bookingForm = document.getElementById('bookingForm');
    
    if (bookingForm) {
        bookingForm.addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent default submission
            
            // Get form elements
            const checkin = document.getElementById('checkinDate');
            const checkout = document.getElementById('checkoutDate');
            
            // Validate dates only if both elements exist
            if (checkin && checkout) {
                if (validateDates(checkin.value, checkout.value)) {
                    this.submit(); // Submit form if validation passes
                }
            } else {
                console.error('Check-in or check-out input not found');
            }
        });
    }

    // Initialize guest counter handlers
    initGuestHandlers();
});

function validateDates(checkin, checkout) {
    if (!checkin || !checkout) {
        alert('Please select both check-in and check-out dates');
        return false;
    }

    const checkinDate = new Date(checkin);
    const checkoutDate = new Date(checkout);
    const today = new Date();
    today.setHours(0, 0, 0, 0);

    if (checkinDate < today) {
        alert('Check-in date cannot be in the past');
        return false;
    }

    if (checkoutDate <= checkinDate) {
        alert('Check-out date must be after check-in date');
        return false;
    }

    return true;
}

function initGuestHandlers() {
    // Guest Modal Toggle
    const guestModalTrigger = document.querySelector('[onclick="toggleGuestModal()"]');
    const guestModal = document.getElementById('guestModal');
    
    if (guestModalTrigger && guestModal) {
        guestModalTrigger.addEventListener('click', function() {
            guestModal.classList.toggle('hidden');
        });
    }

    // Close modal when clicking outside
    document.addEventListener('click', function(event) {
        if (guestModal && !guestModal.contains(event.target) && 
            !event.target.closest('[onclick="toggleGuestModal()"]')) {
            guestModal.classList.add('hidden');
        }
    });
}

function adjustCount(type, delta) {
    const countElements = document.querySelectorAll(`#${type}Count`);
    const inputElement = document.getElementById(`${type}Input`);
    const labelElement = document.getElementById('guestLabel');

    if (!countElements.length || !inputElement || !labelElement) return;

    let count = parseInt(countElements[0].textContent);
    
    // Apply limits
    if (type === 'rooms') {
        count = Math.max(1, Math.min(5, count + delta));
    } else if (type === 'guests') {
        count = Math.max(1, Math.min(10, count + delta));
    }

    // Update all elements with same ID
    countElements.forEach(el => el.textContent = count);
    inputElement.value = count;
    updateGuestLabel();
}

function updateGuestLabel() {
    const rooms = document.querySelector('#roomsCount')?.textContent || '1';
    const guests = document.querySelector('#guestsCount')?.textContent || '2';
    const label = document.getElementById('guestLabel');
    
    if (label) {
        label.textContent = `${rooms} Room${rooms > 1 ? 's' : ''}, ${guests} Guest${guests > 1 ? 's' : ''}`;
    }
}
</script>



</div>
</section>


<section class="mt-32 mx-5 md:mx-20   gap-5">
 
<div class="dm-sans flex flex-col gap-12" id="room-sample">
    <div class="flex flex-col md:flex-row gap-8 mb-20 items-center md:items-start">
        <!-- Image -->
        <div class="w-full md:w-1/2 flex justify-center md:justify-start mb-6 md:mb-0">
            <img class="w-full max-w-xs md:max-w-full h-64 md:h-100 object-cover transition-all duration-300 transform shadow-md hover:shadow-lg hover:scale-110 rounded-lg" src="images/hero2.png" alt="Classic Room">
        </div>
        <!-- Text -->
        <div class="w-full md:w-1/2 flex flex-col justify-center md:justify-center px-2 md:ml-24 h-full">
            <div class="mt-4 md:mt-28 flex flex-col justify-center h-full">
                <h2 class="text-2xl md:text-3xl font-semibold dm-sans-bold text-center md:text-left">
                    Make Waves of <span><br class="hidden md:block">Memories Together</span>
                </h2>
                <p class="text-base md:text-lg mt-4 mb-8 md:mb-32 text-center md:text-left">
                    Experience the spellbinding embrace of our <span><br class="hidden md:block">cozy accommodations-your sanctuary by the <span><br class="hidden md:block">sea, where sunlit rooms and ocean whispers <span></span> <br class="hidden md:block">create a haven of tranquility.</span></span>
                </p>
                <div class="flex justify-center md:justify-start">
                    <a href="/rooms" class="relative inline-block w-full md:w-auto">
                        <button class="w-full md:w-auto bg-[#056594] text-white py-3 px-6 rounded-lg font-semibold hover:bg-[#004364] transition-colors duration-200">Book Now</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
 
<div class="dm-sans flex flex-col gap-12" id="about">
 
  <div class="flex flex-col md:flex-row gap-8 mb-20">
 
    <div class="md:hidden mb-4">
      <h2 class="text-2xl font-semibold">Deluxe</h2>
    </div>
    <div class="md:hidden">
      <img class="w-auto h-100" src="images/about.png" alt="">
    </div>
 
    <!-- Room Details -->
    <div class="md:w-1/2 flex flex-col justify-between">
 

<!-- Description & Features -->
<div class="ml-0 md:ml-32 w-full">
    <div class="mb-4 mt-8 md:mt-28">
        <h2 class="text-3xl md:text-4xl font-normal playfair text-center md:text-left">ABOUT US</h2>
    </div>
    <div>
        <p class="text-base md:text-lg mb-8 md:mb-32 text-center md:text-left">
            Marahuyo Hotel offers a serene retreat<br class="hidden md:block" />
            with sun-kissed shores, gentle sea<br class="hidden md:block" />
            breezes, and breathtaking sunsets, perfect<br class="hidden md:block" />
            for relaxation, adventure, or romantic<br class="hidden md:block" />
            getaways, blending comfort, charm, and<br class="hidden md:block" />
            coastal elegance.
        </p>
    </div>
</div>
 
      
    </div>
    <div class="md:w-1/2">
      <img class="hidden md:block w-full transition-all duration-300 transform shadow-md hover:shadow-lg hover:scale-110 rounded-lg" src="/images/deluxe.png" alt="">
    </div>
 
  </div>
 
</div>
 
 
  
</section>


<!-- Testimonials Section -->
    <div class="bg-white py-16 mt-20 mb-10">
        <div class="container mx-auto px-10 pb-10">
            <h2 class="text-3xl md:text-5xl playfair font-bold text-center text-gray-800 mb-8 md:mb-12 tracking-wide">
                TESTIMONIALS
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Testimonial 1 -->
                <div class="bg-gray-100 rounded-2xl p-8 hover:shadow-lg transition-shadow duration-300">
                    <div class="flex items-center mb-6">
                        <img src="images/testimonials 1.png" 
                             alt="Mariz E. Adlaw" 
                             class="w-12 h-12 rounded-full mr-4 object-cover">
                        <div>
                            <h3 class="font-semibold text-gray-800">Mariz E. Adlaw</h3>
                        </div>
                    </div>
                    <p class="text-gray-700 leading-relaxed">
                        "The view from our room was absolutely breathtaking! Waking up to the sound of the waves was pure bliss. Marahuyo is truly a hidden gem."
                    </p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-gray-100 rounded-2xl p-8 hover:shadow-lg transition-shadow duration-300">
                    <div class="flex items-center mb-6">
                        <img src="images/testimonials 2.png" 
                             alt="Bernadette Hilario" 
                             class="w-12 h-12 rounded-full mr-4 object-cover">
                        <div>
                            <h3 class="font-semibold text-gray-800">Bernadette Hilario</h3>
                        </div>
                    </div>
                    <p class="text-gray-700 leading-relaxed">
                        "From the warm welcome to the beachfront breakfast, everything was perfect. We felt so relaxed and well taken care of. Can't wait to come back!"
                    </p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-gray-100 rounded-2xl p-8 hover:shadow-lg transition-shadow duration-300 md:col-span-2 lg:col-span-1">
                    <div class="flex items-center mb-6">
                        <img src="images/testimonials 3.png" 
                             alt="Ivan Sampan" 
                             class="w-12 h-12 rounded-full mr-4 object-cover">
                        <div>
                            <h3 class="font-semibold text-gray-800">Ivan Sampan</h3>
                        </div>
                    </div>
                    <p class="text-gray-700 leading-relaxed">
                        "Marahuyo Hotel exceeded all our expectations. The staff was incredibly friendly, and the location is unbeatable. A peaceful paradise by the sea."
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Membership Section -->
    <div class="container mx-auto px-4 py-16">
        <div class="text-center mb-12">
            <h1 class="playfair text-5xl font-bold text-gray-800 mb-4 tracking-wide">JOIN MARAHUYO CLUB</h1>
            <p class="text-xl text-gray-600 mb-8">Unlock exclusive perks, save more, and travel smarter.</p>
            <p class="text-lg text-gray-700 max-w-4xl mx-auto leading-relaxed">
                Whether you're a frequent business traveler or a luxury explorer, our tiered membership plans offer unbeatable benefits tailored to your lifestyle.
            </p>
        </div>

        <!-- Membership Cards -->
        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto mb-16">
            <!-- Silver Member -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 p-8 border border-gray-200">
                <div class="flex items-center mb-6">
                    <div class="bg-gray-100 p-3 rounded-full mr-4">
                        <svg class="w-8 h-8 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">Silver Member</h3>
                        <p class="text-lg text-gray-600">₱560/month</p>
                    </div>
                </div>
                <ul class="space-y-3 mb-8 text-gray-700">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>10% off all bookings</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Early check-in (subject to availability)</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Complimentary welcome drink</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Priority customer support</span>
                    </li>
                </ul>
                <button onclick="if(requireLoginForSubscription()) openRegistrationModal('Silver', 560)" class="w-full bg-[#056594] text-white py-3 px-6 rounded-lg font-semibold hover:bg-[#004364] transition-colors duration-200">
                    Join
                </button>
            </div>

            <!-- Gold Member -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 p-8 border-2 border-amber-200 relative">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                    <span class="bg-amber-400 text-amber-900 px-4 py-1 rounded-full text-sm font-semibold">POPULAR</span>
                </div>
                <div class="flex items-center mb-6">
                    <div class="bg-amber-100 p-3 rounded-full mr-4">
                        <svg class="w-8 h-8 text-amber-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">Gold Member</h3>
                        <p class="text-lg text-gray-600">₱1,400/month</p>
                    </div>
                </div>
                <ul class="space-y-3 mb-8 text-gray-700">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>15% off room rates</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Free room upgrades (when available)</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Late checkout</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>₱1,400 dining credit per stay</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7-293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Birthday or anniversary gift</span>
                    </li>
                </ul>
                <button onclick="if(requireLoginForSubscription()) openRegistrationModal('Gold', 1400)"[=p-] class="w-full bg-marahuyo-gold text-white py-3 px-6 rounded-lg font-semibold hover:bg-amber-600 transition-colors duration-200">
                    Join
                </button>
            </div>

            <!-- Platinum Member -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 p-8 border border-gray-300">
                <div class="flex items-center mb-6">
                    <div class="bg-gray-800 p-3 rounded-full mr-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM14 11a1 1 0 011 1v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1h-1a1 1 0 110-2h1v-1a1 1 0 011-1z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">Platinum Member</h3>
                        <p class="text-lg text-gray-600">₱3,360/month</p>
                    </div>
                </div>
                <ul class="space-y-3 mb-8 text-gray-700">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>20% discount on all bookings</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Complimentary suite upgrade once a year</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>VIP airport pickup (JV/year)</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Dedicated booking concierge</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Invite to exclusive networking events</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>1 free night every 12 months</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Digital key + mobile check-in access</span>
                    </li>
                </ul>
                <button onclick="if(requireLoginForSubscription()) openRegistrationModal('Platinum', 3360)" class="w-full bg-[#056594] text-white py-3 px-6 rounded-lg font-semibold hover:bg-[#004364] transition-colors duration-200">
                    Join
                </button>
            </div>
        </div>

        <!-- Additional Perks -->
        <div class="bg-blue-50 rounded-2xl p-8 max-w-4xl mx-auto">
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4">
                    <svg class="w-8 h-8 text-[#056594]" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Additional Perks for All Members</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-8 text-gray-700">
                <div>
                    <h3 class="font-semibold text-lg mb-2">Access to flash deals & seasonal offers</h3>
                    <h3 class="font-semibold text-lg mb-2">Earn loyalty points for every stay</h3>
                </div>
                <div>
                    <h3 class="font-semibold text-lg mb-2">Personalized guest preferences saved to your profile</h3>
                    <h3 class="font-semibold text-lg mb-2">Member-only webinars, events, and wellness retreats</h3>
                </div>
            </div>
        </div>

        <!-- Registration Modal -->
    <div id="registrationModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-8">
                <!-- Modal Header -->
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800">Join Marahuyo Club</h2>
                        <p id="membershipTier" class="text-lg text-gray-600 mt-1"></p>
                    </div>
                    <button onclick="closeRegistrationModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                </div>

                <!-- Registration Form -->
                <form id="registrationForm" class="space-y-6">
                    <!-- Personal Information -->
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                            <input type="text" name="firstName" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                            <input type="text" name="lastName" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                        <input type="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                            <input type="tel" name="phone" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Date of Birth</label>
                            <input type="date" name="birthDate" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>

                    <!-- Address Information -->
                    <div class="border-t pt-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Address Information</h3>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Street Address</label>
                            <input type="text" name="address" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div class="grid md:grid-cols-3 gap-4 mt-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">City</label>
                                <input type="text" name="city" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">State/Province</label>
                                <input type="text" name="state" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">ZIP/Postal Code</label>
                                <input type="text" name="zipCode" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>
                        <div class="mt-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Country</label>
                            <select name="country" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Select Country</option>
                                <option value="Philippines">Philippines</option>
                                <option value="United States">United States</option>
                                <option value="Canada">Canada</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Australia">Australia</option>
                                <option value="Japan">Japan</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <!-- Travel Preferences -->
                    <div class="border-t pt-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Travel Preferences</h3>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Travel Frequency</label>
                                <select name="travelFrequency" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="">Select frequency</option>
                                    <option value="monthly">Monthly</option>
                                    <option value="quarterly">Quarterly</option>
                                    <option value="bi-annually">Bi-annually</option>
                                    <option value="annually">Annually</option>
                                    <option value="rarely">Rarely</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Purpose of Travel</label>
                                <select name="travelPurpose" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="">Select purpose</option>
                                    <option value="business">Business</option>
                                    <option value="leisure">Leisure</option>
                                    <option value="both">Both Business & Leisure</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Special Preferences</label>
                            <div class="grid md:grid-cols-2 gap-2">
                                <label class="flex items-center">
                                    <input type="checkbox" name="preferences" value="oceanView" class="mr-2 text-blue-600">
                                    Ocean view rooms
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="preferences" value="spa" class="mr-2 text-blue-600">
                                    Spa services
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="preferences" value="dining" class="mr-2 text-blue-600">
                                    Fine dining
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="preferences" value="fitness" class="mr-2 text-blue-600">
                                    Fitness facilities
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="preferences" value="activities" class="mr-2 text-blue-600">
                                    Water activities
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="preferences" value="events" class="mr-2 text-blue-600">
                                    Event spaces
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Information -->
                    <div class="border-t pt-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Payment Information</h3>
                        <div class="bg-blue-50 rounded-lg p-4 mb-4">
                            <div class="flex justify-between items-center">
                                <span class="font-medium text-gray-800">Monthly Membership Fee:</span>
                                <span id="membershipPrice" class="text-2xl font-bold text-blue-600"></span>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Card Number *</label>
                            <input type="text" name="cardNumber" required placeholder="1234 5678 9012 3456" maxlength="19" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div class="grid grid-cols-2 gap-4 mt-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Expiry Date *</label>
                                <input type="text" name="expiryDate" required placeholder="MM/YY" maxlength="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">CVV *</label>
                                <input type="text" name="cvv" required placeholder="123" maxlength="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>
                        <div class="mt-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Cardholder Name *</label>
                            <input type="text" name="cardholderName" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="border-t pt-6">
                        <div class="flex items-start">
                            <input type="checkbox" name="terms" required class="mt-1 mr-3 text-blue-600">
                            <label class="text-sm text-gray-700">
                                I agree to the <a href="#" class="text-blue-600 hover:underline">Terms of Service</a> and <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a>. I understand that my membership will auto-renew monthly and I can cancel at any time.
                            </label>
                        </div>
                        <div class="flex items-start mt-3">
                            <input type="checkbox" name="newsletter" class="mt-1 mr-3 text-blue-600">
                            <label class="text-sm text-gray-700">
                                I would like to receive newsletters and promotional offers from Marahuyo Hotel & Resort.
                            </label>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-6">
                        <button type="button" onclick="closeRegistrationModal()" class="flex-1 px-6 py-3 border border-gray-300 text-gray-700 rounded-lg font-medium hover:bg-gray-50 transition-colors">
                            Cancel
                        </button>
                        <button type="submit" class="flex-1 px-6 py-3 bg-[#056594] text-white rounded-lg font-medium hover:bg-blue-700 transition-colors">
                            Complete Registration
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full p-8 text-center">
            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Welcome to Marahuyo Club!</h3>
            <p class="text-gray-600 mb-6">Your membership registration has been completed successfully. You'll receive a confirmation email shortly with your membership details.</p>
            <button onclick="closeSuccessModal()" class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg font-medium hover:bg-blue-700 transition-colors">
                Continue
            </button>
        </div>
    </div>

    <script>
        let selectedMembership = '';
        let selectedPrice = 0;

        // Format card number input
        function formatCardNumber(input) {
            let value = input.value.replace(/\s/g, '').replace(/[^0-9]/gi, '');
            let formattedValue = value.match(/.{1,4}/g)?.join(' ') || value;
            input.value = formattedValue;
        }

        // Format expiry date input
        function formatExpiryDate(input) {
            let value = input.value.replace(/\D/g, '');
            if (value.length >= 2) {
                value = value.substring(0, 2) + '/' + value.substring(2, 4);
            }
            input.value = value;
        }

        // Open registration modal
        function openRegistrationModal(membership, price) {
            selectedMembership = membership;
            selectedPrice = price;
            
            document.getElementById('membershipTier').textContent = `${membership} Member - ${price}/month`;
            document.getElementById('membershipPrice').textContent = `${price}/month`;
            document.getElementById('registrationModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        // Close registration modal
        function closeRegistrationModal() {
            document.getElementById('registrationModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
            document.getElementById('registrationForm').reset();
        }

        // Close success modal
        function closeSuccessModal() {
            document.getElementById('successModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Add event listeners when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Card number formatting
            const cardNumberInput = document.querySelector('input[name="cardNumber"]');
            cardNumberInput.addEventListener('input', function() {
                formatCardNumber(this);
            });

            // Expiry date formatting
            const expiryDateInput = document.querySelector('input[name="expiryDate"]');
            expiryDateInput.addEventListener('input', function() {
                formatExpiryDate(this);
            });

            // CVV numeric only
            const cvvInput = document.querySelector('input[name="cvv"]');
            cvvInput.addEventListener('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });

            // Form submission
            document.getElementById('registrationForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Basic form validation
                const requiredFields = this.querySelectorAll('[required]');
                let isValid = true;
                
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        isValid = false;
                        field.style.borderColor = '#ef4444';
                    } else {
                        field.style.borderColor = '#d1d5db';
                    }
                });

                if (isValid) {
                    // Close registration modal
                    closeRegistrationModal();
                    
                    // Show success modal
                    document.getElementById('successModal').classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                    
                    // In a real application, you would send this data to your server
                    console.log('Registration data:', new FormData(this));
                } else {
                    alert('Please fill in all required fields.');
                }
            });

            // Close modal when clicking outside
            document.getElementById('registrationModal').addEventListener('click', function(e) {
                if (e.target === this) {
                    closeRegistrationModal();
                }
            });

            document.getElementById('successModal').addEventListener('click', function(e) {
                if (e.target === this) {
                    closeSuccessModal();
                }
            });
        });
    </script>
    </div>

    <!-- Modal Overlay -->
    <div id="loginModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
      <!-- Modal Content -->
      <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative">
        
        <!-- Close Button -->
        <button id="closeLogin" class="absolute top-4 right-4 text-gray-500 hover:text-black text-xl font-bold">&times;</button>

        <!-- Logo -->
        <div class="flex justify-center mb-4">
          <img src="images/main-logo.svg" alt="Marahuyo Logo" class="h-16" />
        </div>

        <!-- Title -->
        <h2 class="text-2xl font-bold text-center mb-6 pb-10 pt-3">
          Login to <span class="text-[#056594]">Marahuyo</span>
        </h2>

        @if ($errors->any())
            <div class="mb-4 text-red-600">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-4 px-4 ">
            @csrf
            <input
                type="email"
                name="email"
                placeholder="Email"
                class="w-full px-4 py-2 border border-gray-200 rounded bg-gray-100 focus:outline-none focus:ring-2 focus:ring-navblue focus:ring-opacity-50"
                required
            />
            <input
                type="password"
                name="password"
                placeholder="Password"
                class="w-full px-4 py-2 border border-gray-200 rounded bg-gray-100 focus:outline-none focus:ring-2 focus:ring-navblue focus:ring-opacity-50"
                required
            />
            <div class="flex justify-between items-center text-sm text-gray-600 pb-8">
                <label class="flex items-center space-x-2">
                    <input type="checkbox" name="remember" class="accent-navblue" />
                    <span>Remember me</span>
                </label>
                <a href="#" class="text-navblue hover:underline">Forgot password?</a>
            </div>
            <button
                type="submit"
                class="w-full bg-[#056594] text-white py-2 rounded hover:bg-[#04547C] transition"
            >
                Login
            </button>
        </form>
        <!-- Register Link -->
        <p class="text-center text-sm text-gray-600 mt-4">
          No account yet?
          <a href="#" class="text-[#056594] font-medium hover:underline" onclick="openSignUpFromLogin(event)">Register Now</a>
        </p>
      </div>
    </div>

    <script>
      function openSignUpFromLogin(e) {
        e.preventDefault();
        document.getElementById('loginModal').classList.add('hidden');
        document.getElementById('signUpModal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
      }
    </script>

    <!-- Sign Up Modal -->
    <div id="signUpModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center">
        <div class="relative bg-white rounded-lg shadow-lg w-full max-w-md p-8">
            <!-- Close Button -->
            <button onclick="closeSignUpModal()" class="absolute top-4 right-4 text-gray-500 hover:text-black text-xl font-bold">&times;</button>
            <!-- Logo -->
            <div class="flex justify-center mb-6">
                <img src="images/main-logo.svg" alt="Marahuyo Logo" class="h-20" />
            </div>
            <!-- Title -->
            <h2 class="text-2xl font-bold text-center mb-6">
                Sign up to <span class="text-[#056594]">Marahuyo</span>
            </h2>

            @if ($errors->any())
                <div class="mb-4 text-red-600">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 mb-1" for="signup-name">Name</label>
                    <input id="signup-name" name="name" type="text" class="w-full border border-gray-300 rounded px-4 py-2" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-1" for="signup-email">Email</label>
                    <input id="signup-email" name="email" type="email" class="w-full border border-gray-300 rounded px-4 py-2" required>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 mb-1" for="signup-password">Password</label>
                    <input id="signup-password" name="password" type="password" class="w-full border border-gray-300 rounded px-4 py-2" required>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 mb-1" for="signup-password-confirm">Confirm Password</label>
                    <input id="signup-password-confirm" name="password_confirmation" type="password" class="w-full border border-gray-300 rounded px-4 py-2" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-1" for="signup-profile-picture">Profile Picture</label>
                    <input id="signup-profile-picture" name="profile_picture" type="file" accept="image/*" class="w-full border border-gray-300 rounded px-4 py-2">
                </div>
                <button type="submit" class="w-full bg-[#056594] text-white py-2 rounded hover:bg-[#04547C] transition">Sign Up</button>
            </form>
            <!-- Back to Login Link -->
            <p class="text-center text-sm text-gray-600 mt-4">
                Already have an account?
                <a href="#" onclick="backToLogin(); return false;" class="text-[#056594] font-medium hover:underline">Back to Login</a>
            </p>
        </div>
    </div>
    <script>
        function backToLogin() {
            closeSignUpModal();
            document.getElementById('loginModal').classList.remove('hidden');
            document.body.style.overflow = '';
        }
    </script>


    <script>
      const openModal = document.getElementById('openLogin');
      const closeModal = document.getElementById('closeLogin');
      const modal = document.getElementById('loginModal');
  
      openModal.addEventListener('click', () => {
        modal.classList.remove('hidden');
      });
  
      closeModal.addEventListener('click', () => {
        modal.classList.add('hidden');
      });
  
      // Optional: close modal when clicking outside the modal content
      window.addEventListener('click', (e) => {
        if (e.target === modal) {
          modal.classList.add('hidden');
        }
      });
    </script>
    <script>
    function openSignUpModal() {
        document.getElementById('signUpModal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }
    function closeSignUpModal() {
        document.getElementById('signUpModal').classList.add('hidden');
        document.body.style.overflow = '';
    }
    </script>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const btn = document.getElementById('profileDropdownBtn');
        const menu = document.getElementById('profileDropdownMenu');

        if (btn && menu) {
            btn.addEventListener('click', function (e) {
                e.stopPropagation();
                menu.classList.toggle('hidden');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function () {
                menu.classList.add('hidden');
            });

            // Prevent closing when clicking inside the menu
            menu.addEventListener('click', function (e) {
                e.stopPropagation();
            });
        }
    });
    </script>

    {{-- filepath: resources/views/pages/landing_page.blade.php --}}
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        @if ($errors->any())
            // If the error is from login (check for old('email') and no old('name'))
            @if (old('email') && !old('name'))
                document.getElementById('loginModal').classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            // If the error is from signup (check for old('name'))
            @elseif (old('name'))
                document.getElementById('signUpModal').classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            @endif
        @endif
    });
    </script>

    @if ($errors->any())
    <div class="mb-4 text-red-600">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <script>
    // Function to handle subscription button click
    function requireLoginForSubscription() {
        @guest
            alert('Please log in to subscribe or join the Marahuyo Club.');
            // Optionally, open the login modal automatically:
            document.getElementById('loginModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
            return false;
        @endguest
        @auth
            // If logged in, open the registration modal as usual
            return true;
        @endauth
    }
    </script>

    
    @extends('pages.footer')


</body>
</html>
