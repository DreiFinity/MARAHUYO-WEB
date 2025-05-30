<nav class="bg-[#056594] shadow-md fixed top-0 left-0 w-full z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-50">
    <div class="flex justify-start items-center h-16"> <!-- Changed justify-between to justify-start -->
      <!-- Logo -->
      <div class="flex-shrink-0 mr-6">
        <a href="#">
          <img class="h-10 w-auto" src="\images\logo-white.png" alt="Logo" />
        </a>
      </div>

      <!-- Nav Links -->
      <div class="hidden md:flex space-x-20  ml-52"> <!-- Reduced space-x-6 to space-x-4 and added ml-4 to add a little margin -->
        <a href="/" class="text-white hover:text-blue-600">Home</a>
        <a href="#" class="text-white hover:text-blue-600">About</a>
        <a href="/rooms" class="text-white hover:text-blue-600">Rooms</a>
        <a href="/dining" class="text-white hover:text-blue-600">Services</a>
        <a href="#" class="text-white hover:text-blue-600">Contact</a>
      </div>






      <!-- Mobile Menu Button -->
      <div class="md:hidden">
        <button id="menu-button" class="text-gray-700 focus:outline-none">
          <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="md:hidden hidden px-4 pb-4 flex flex-col space-y-2">
    <a href="#" class="text-gray-700 hover:text-blue-600">Home</a>
    <a href="#" class="text-gray-700 hover:text-blue-600">About</a>
    <a href="#" class="text-gray-700 hover:text-blue-600">Rooms</a>
    <a href="#" class="text-gray-700 hover:text-blue-600">Services</a>
    <a href="#" class="text-gray-700 hover:text-blue-600">Contact</a>
  </div>



  <script>
    const button = document.getElementById('menu-button');
    const menu = document.getElementById('mobile-menu');

    button.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  </script>
</nav>
