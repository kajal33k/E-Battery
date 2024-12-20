<nav class="bg-gradient-to-l from-blue-500 to-black  p-4">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <!-- Left side: logo and menu -->
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0">
                    <a href="#" class="text-white font-semibold text-xl">
                        Σ-BΛƬƬΣЯY
                    </a>
                </div>
                <div class="hidden sm:block sm:ml-6 ml-12">
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-[#BEDCFE] px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        <a href="#about" class="text-gray-300 hover:text-[#BEDCFE] px-3 py-2 rounded-md text-sm font-medium">About</a>
                        <a href="#" class="text-gray-300 hover:text-[#BEDCFE] px-3 py-2 rounded-md text-sm font-medium">Services</a>
                        
                        <!-- Dropdown -->
                        <div class="relative">
                            <button class="text-gray-300 hover:text-[#BEDCFE] px-3 py-2 rounded-md text-sm font-medium">
                                Products
                            </button>
                            <div class="absolute hidden bg-gray-700 text-white text-sm rounded-md shadow-lg w-48 mt-1 right-0 z-10 group-hover:block">
                                <a href="#" class="block px-4 py-2">Lithium Batteries</a>
                                <a href="#" class="block px-4 py-2">Lead Acid Batteries</a>
                                <a href="#" class="block px-4 py-2">Solar Batteries</a>
                            </div>
                        </div>

                        <a href="#" class="text-gray-300 hover:text-[#BEDCFE] px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                    </div>
                </div>
            </div>

            <!-- Right side: Icons -->
            <div class="flex items-center space-x-4">
                <a href="#" class="text-gray-300 hover:text-[#BEDCFE]">
                    <i class="ri-search-line text-xl"></i>
                </a>
                <a href="#" class="text-gray-300 hover:text-[#BEDCFE]">
                    <i class="ri-shopping-cart-2-line text-xl"></i>
                </a>
                <a href="#" class="text-gray-300 hover:text-[#BEDCFE]">
                    <i class="ri-shopping-bag-line text-xl"></i>
                </a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <div class="sm:hidden">
                <button id="mobile-menu-button" class="text-gray-300 hover:text-[#BEDCFE] focus:outline-none">
                    <i class="ri-menu-3-line text-2xl"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, initially hidden -->
    <div class="sm:hidden hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#" class="text-gray-300 hover:text-[#BEDCFE] block px-3 py-2 rounded-md text-base font-medium">Home</a>
            <a href="#" class="text-gray-300 hover:text-[#BEDCFE] block px-3 py-2 rounded-md text-base font-medium">About</a>
            <a href="#" class="text-gray-300 hover:text-[#BEDCFE] block px-3 py-2 rounded-md text-base font-medium">Services</a>
            <a href="#" class="text-gray-300 hover:text-[#BEDCFE] block px-3 py-2 rounded-md text-base font-medium">Contact</a>
            
            <!-- Mobile Dropdown -->
            <div class="relative">
                <button class="text-gray-300 hover:text-[#BEDCFE] px-3 py-2 rounded-md text-base font-medium w-full text-left">
                    Products
                </button>
                <div class="hidden bg-gray-700 text-white text-sm rounded-md shadow-lg w-full mt-1 z-10 group-hover:block">
                    <a href="#" class="block px-4 py-2">Lithium Batteries</a>
                    <a href="#" class="block px-4 py-2">Lead Acid Batteries</a>
                    <a href="#" class="block px-4 py-2">Solar Batteries</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    // Toggle mobile menu visibility
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const dropdowns = document.querySelectorAll('.relative');

        // Toggle the mobile menu when the button is clicked
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });

        // Toggle the dropdown visibility when clicked
        dropdowns.forEach(dropdown => {
            dropdown.addEventListener('click', function() {
                const menu = dropdown.querySelector('.group-hover\\:block');
                if (menu) {
                    menu.classList.toggle('hidden');
                }
            });
        });
    });
</script>
