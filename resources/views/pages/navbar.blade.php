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
        <a href="#about" class="text-white hover:text-blue-600">About</a>
        <a href="/rooms" class="text-white hover:text-blue-600">Rooms</a>
        <a href="/dining" class="text-white hover:text-blue-600">Services</a>
        <a href="/contacts" class="text-white hover:text-blue-600">Contact</a>
      </div>

      <!-- Right: Login/Signup/Profile -->
        <div class="ml-auto flex items-center space-x-2 mr-6">
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
                    class="text-sm font-semibold px-4 py-2 bg-[#056594] text-white border rounded-lg hover:bg-[#04547C] ml-2 flex items-center justify-center transition h-10 min-w-[90p]">
                    <span>Log In</span>
                </button>
                <button type="button" onclick="openSignUpModal()"
                    class="text-sm font-semibold px-4 py-2 bg-[#056594] text-white border rounded-lg hover:bg-[#04547C] ml-2 flex items-center justify-center transition h-10 min-w-[90p]">
                    Sign Up
                </button>
            @endguest
            @auth
                <div class="relative" id="profileDropdownWrapper">
                    <button id="profileDropdownBtn" type="button" class="flex items-center focus:outline-none">
                        <img src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('images/default-avatar.png') }}"
                            alt="Profile"
                            class="w-10 h-10 rounded-full border-2 border-gray-300 object-cover" />
                        <span class="ml-2 text-white font-semibold hidden md:inline">{{ Auth::user()->name }}</span>
                        <svg class="w-4 h-4 ml-1 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
        </div>









      <!-- Mobile Menu Button -->
      <div class="md:hidden">
            <button id="menu-button" class="text-white focus:outline-none">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
       </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="md:hidden hidden px-4 pb-4 flex flex-col space-y-2 bg-white shadow-lg rounded-b-lg">
    <a href="/" class="text-[#056594] font-semibold hover:text-blue-600">Home</a>
    <a href="#about" class="text-[#056594] font-semibold hover:text-blue-600">About</a>
    <a href="/rooms" class="text-[#056594] font-semibold hover:text-blue-600">Rooms</a>
    <a href="/dining" class="text-[#056594] font-semibold hover:text-blue-600">Services</a>
    <a href="/contacts" class="text-[#056594] font-semibold hover:text-blue-600">Contact</a>
</div>



  <script>
    const button = document.getElementById('menu-button');
    const menu = document.getElementById('mobile-menu');

    button.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  </script>
</nav>


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

