<!-- Footer -->
    <footer class="bg-[#056594] text-white">
        <div class="container mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                
                <!-- Brand Section -->
                <div class="md:col-span-1">
                    <div class="flex items-center mb-4">
                        <!-- Palm Tree Icon -->
                        <div class="mr-3">
                            <img src="images/logo-white.png" alt="">
                        </div>
                    
                    </div>
                    <div class="text-sm opacity-80 space-y-1">
                        <p>Island Garden City of Samal, Davao del Norte, Philippines</p>
                        <p>marahuyohotel@gmail.com</p>
                    </div>
                </div>

                <!-- Find and Book Section -->
                <div class="md:col-span-1">
                    <h3 class="text-lg font-semibold mb-4">Find and Book</h3>
                    <ul class="space-y-2 text-sm opacity-90">
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Rooms</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Suites</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Dining</a></li>
                    </ul>
                </div>

                <!-- About Us Section -->
                <div class="md:col-span-1">
                    <h3 class="text-lg font-semibold mb-4">About Us</h3>
                    <ul class="space-y-2 text-sm opacity-90">
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Mission</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-200">Vision</a></li>
                    </ul>
                </div>

                <!-- Contact Us Section -->
                <div class="md:col-span-1">
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <form class="space-y-3">
                        <div>
                            <input 
                                type="email" 
                                placeholder="Your email" 
                                class="w-full px-3 py-2 bg-white bg-opacity-90 text-gray-800 rounded focus:outline-none focus:ring-2 focus:ring-blue-300 text-sm"
                                required
                            >
                        </div>
                        <div>
                            <textarea 
                                placeholder="Your message" 
                                rows="4" 
                                class="w-full px-3 py-2 bg-white bg-opacity-90 text-gray-800 rounded focus:outline-none focus:ring-2 focus:ring-blue-300 text-sm resize-none"
                                required
                            ></textarea>
                        </div>
                        <div>
                            <button 
                                type="submit" 
                                class="bg-white text-marahuyo-blue px-4 py-2 rounded text-sm font-medium hover:bg-blue-50 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-300"
                            >
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
        // Simple form submission handler
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            const message = this.querySelector('textarea').value;
            
            if (email && message) {
                alert('Thank you for your message! We will get back to you soon.');
                this.reset();
            } else {
                alert('Please fill in all fields.');
            }
        });
    </script>


