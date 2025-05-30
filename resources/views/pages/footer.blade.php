<footer class="bg-[#056594] text-white">
        <div class="container mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                
<!-- Brand Section -->
<div class="md:col-span-1">
    <div class="flex items-center mb-4">
        <!-- Palm Tree Icon -->
        <div class="mr-3">
            <img src="images/logo-white.png" alt="Marahuyo Logo">
        </div>
        
    </div>
    <div class="text-sm opacity-80 space-y-1 mb-4">
        <p>Island Garden City of Samal, Davao del Norte, Philippines</p>
        <p>marahuyohotel@gmail.com</p>
    </div>
    <p class="text-sm italic opacity-90 mb-2">Experience paradise, the Marahuyo way.</p>
    <p class="text-sm font-semibold mb-1">Follow us on our social media pages:</p>
    <div class="flex space-x-4">
        <!-- Facebook -->
        <a href="https://www.facebook.com" target="_blank" class="hover:text-blue-200 transition-colors duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 inline-block" fill="currentColor" viewBox="0 0 24 24">
                <path d="M22 12a10 10 0 10-11.5 9.95v-7.05H8v-2.9h2.5V9.5c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.4H15.6c-1.3 0-1.7.8-1.7 1.6v1.9h2.9l-.5 2.9h-2.4v7.05A10 10 0 0022 12z"/>
            </svg>
        </a>
        <!-- Instagram -->
        <a href="https://www.instagram.com" target="_blank" class="hover:text-blue-200 transition-colors duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 inline-block" fill="currentColor" viewBox="0 0 24 24">
                <path d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm10 1.5a1 1 0 110 2 1 1 0 010-2zM12 7a5 5 0 110 10 5 5 0 010-10zm0 1.8a3.2 3.2 0 100 6.4 3.2 3.2 0 000-6.4zM4.5 7c0-1.4 1.1-2.5 2.5-2.5h10c1.4 0 2.5 1.1 2.5 2.5v10c0 1.4-1.1 2.5-2.5 2.5H7c-1.4 0-2.5-1.1-2.5-2.5V7z"/>
            </svg>
        </a>
        <!-- Twitter -->
        <a href="https://www.twitter.com" target="_blank" class="hover:text-blue-200 transition-colors duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 inline-block" fill="currentColor" viewBox="0 0 24 24">
                <path d="M19.6 7.1c.01.15.01.3.01.46 0 4.67-3.55 10.06-10.06 10.06-2 0-3.86-.59-5.43-1.6a7.14 7.14 0 005.26-1.47A3.54 3.54 0 014.6 12v-.04c.58.32 1.25.51 1.95.53a3.54 3.54 0 01-1.58-2.95c0-.65.17-1.25.48-1.77a10.06 10.06 0 007.3 3.7 3.99 3.99 0 01-.09-.81 3.54 3.54 0 016.12-2.42 6.92 6.92 0 002.25-.86 3.53 3.53 0 01-1.56 1.95 7.07 7.07 0 002.02-.55 7.65 7.65 0 01-1.76 1.83z"/>
            </svg>
        </a>
    </div>
</div>


                <!-- Find and Book Section -->
                <div class="md:col-span-1">
                    <h3 class="text-lg font-semibold mb-4">Find and Book</h3>
                    <ul class="space-y-2 text-sm opacity-90">
                        <li><a href="{{url('/rooms')}}" class="hover:text-blue-200 transition-colors duration-200">Rooms</a></li>
                        <li><a href="{{url('/rooms#suites')}}" class="hover:text-blue-200 transition-colors duration-200">Suites</a></li>
                        <li><a href="{{url('/dining')}}" class="hover:text-blue-200 transition-colors duration-200">Dining</a></li>
                    </ul>
                </div>

                <!-- About Us Section -->
                <div class="md:col-span-1">
                    <h3 class="text-lg font-semibold mb-4 text-white">About Us</h3>
                    <ul class="space-y-2 text-sm opacity-90 text-white">
                        <li>
                        <button onclick="toggleModal()" class="hover:text-blue-200 transition-colors duration-200 cursor-pointer">
                            Vision & Mission
                        </button>
                        </li>
                    </ul>
                </div>

                <!-- Modal Overlay -->
                <div id="modalOverlay" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
                    <!-- Modal Box -->
                    <div class="bg-[#056594] w-11/12 max-w-lg rounded-xl shadow-lg p-6 relative text-white">
                        <!-- Close Button -->
                        <button onclick="toggleModal()" class="absolute top-3 right-3 text-white hover:text-red-300 text-xl font-bold">&times;</button>
                        
                        <h2 class="text-2xl font-bold mb-4">🌟 Vision</h2>
                        <p class="mb-6">
                        To become the most enchanting and trusted hotel booking platform in the Philippines and beyond —
                        where every journey begins with ease, authenticity, and unforgettable experiences.
                        </p>

                        <h2 class="text-2xl font-bold mb-4">🎯 Mission</h2>
                        <p>
                        At Marahuyo, we are dedicated to connecting travelers with the perfect stay by offering a seamless, secure, and personalized hotel booking experience.
                        We empower hospitality partners and delight customers through intuitive technology, exceptional service, and a deep appreciation for local culture and charm.
                        </p>
                    </div>
                </div>

                <!-- Script to Toggle Modal -->
                <script>
                    function toggleModal() {
                        const modal = document.getElementById('modalOverlay');
                        modal.classList.toggle('hidden');
                        modal.classList.toggle('flex');
                    }
                </script>

                

                <!-- Contact Us Section -->
                <div class="md:col-span-1">
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <form class="space-y-3" onsubmit="sendEmail(event)">
                        <div>
                            <input 
                                id="userEmail"
                                type="email" 
                                placeholder="Your email" 
                                class="w-full px-3 py-2 bg-white bg-opacity-90 text-gray-800 rounded focus:outline-none focus:ring-2 focus:ring-blue-300 text-sm"
                                required
                            >
                        </div>
                        <div>
                            <textarea 
                                id="userMessage"
                                placeholder="Your message" 
                                rows="4" 
                                class="w-full px-3 py-2 bg-white bg-opacity-90 text-gray-800 rounded focus:outline-none focus:ring-2 focus:ring-blue-300 text-sm resize-none"
                                required
                            ></textarea>
                        </div>
                        <div>
                            <button 
                                type="submit" 
                                class="bg-white text-marahuyo-blue px-4 py-2 rounded text-sm font-medium hover:bg-blue-50 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-300 text-gray-500">
                                Submit
                            </button>
                        </div>
                    </form>

                </div>
            </div>

            <!-- Bottom Border Line -->
            <div class="border-t border-white border-opacity-20 mt-8 pt-6">
                <div class="text-center text-sm opacity-75">
                    <p>&copy; 2025 Marahuyo Hotel & Resort. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
    function sendEmail(e) {
        e.preventDefault();
        const email = document.getElementById('userEmail').value;
        const message = document.getElementById('userMessage').value;

        if (!email || !message) {
            alert('Please fill in all fields.');
            return;
        }

        const subject = encodeURIComponent("Customer Inquiry from " + email);
        const body = encodeURIComponent(message);

        // Open Gmail compose window in new tab
        window.open(
        `https://mail.google.com/mail/?view=cm&fs=1&to=marahuyohotel@gmail.com&su=${subject}&body=${body}`,
        '_blank'
        );
    }
    </script>