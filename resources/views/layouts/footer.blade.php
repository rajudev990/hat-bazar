<!-- Footer -->
<!-- Footer -->
<footer class="w-full bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 relative overflow-hidden">
    <!-- Decorative Background Elements -->

    <div class="container mx-auto px-4 pt-12 pb-6 relative z-10">
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 lg:gap-6">

            <!-- Company Info & Social Media -->
            <div class="space-y-6 flex flex-col justify-start items-center md:items-start">
                <!-- Logo -->
                <div class="w-32 bg-white p-3 rounded-xl shadow-lg">
                    <img src="{{Storage::url($setting->footer_logo)}}" alt="{{$setting->company_name}}" class="w-full h-auto" />
                </div>

                <!-- Social Media Icons -->
                <div>
                    <h4 class="text-white text-sm font-semibold mb-3 text-center md:text-left">Follow Us</h4>
                    <div class="flex flex-wrap gap-3 justify-center md:justify-start">
                        <a
                            href="{{$setting->facebook}}"
                            class="bg-blue-600 hover:bg-blue-700 w-10 h-10 flex items-center justify-center rounded-lg transition-all duration-300 hover:scale-110 shadow-lg"
                            aria-label="Facebook">
                            <i class="fab fa-facebook-f text-white"></i>
                        </a>
                        <a
                            href="{{$setting->email_one}}"
                            class="bg-secondary hover:bg-yellow-500 w-10 h-10 flex items-center justify-center rounded-lg transition-all duration-300 hover:scale-110 shadow-lg"
                            aria-label="Email">
                            <i class="fas fa-envelope text-gray-800"></i>
                        </a>
                        <a
                            href="{{$setting->youtube}}"
                            class="bg-primary hover:bg-red-700 w-10 h-10 flex items-center justify-center rounded-lg transition-all duration-300 hover:scale-110 shadow-lg"
                            aria-label="YouTube">
                            <i class="fab fa-youtube text-white"></i>
                        </a>
                        <a
                            href="{{$setting->linkedin}}"
                            class="bg-blue-700 hover:bg-blue-800 w-10 h-10 flex items-center justify-center rounded-lg transition-all duration-300 hover:scale-110 shadow-lg"
                            aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in text-white"></i>
                        </a>
                        <a
                            href="{{$setting->phone_one}}"
                            class="bg-cardBg hover:bg-green-600 w-10 h-10 flex items-center justify-center rounded-lg transition-all duration-300 hover:scale-110 shadow-lg"
                            aria-label="WhatsApp">
                            <i class="fab fa-whatsapp text-white"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Customer Service -->
            <div class="space-y-4 text-center md:text-left">
                <h3 class="text-lg font-bold text-white mb-4 pb-2 border-b-2 border-primary inline-block">
                    Customer Service
                </h3>
                <ul class="space-y-3 text-sm">
                    <li>
                        <a href="#" class="text-gray-300 hover:text-secondary transition-colors duration-300 flex items-center justify-center md:justify-start gap-2 group">
                            <i class="fas fa-angle-right text-primary group-hover:translate-x-1 transition-transform"></i>
                            <span>About Us</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-300 hover:text-secondary transition-colors duration-300 flex items-center justify-center md:justify-start gap-2 group">
                            <i class="fas fa-angle-right text-primary group-hover:translate-x-1 transition-transform"></i>
                            <span>How to Buy</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-300 hover:text-secondary transition-colors duration-300 flex items-center justify-center md:justify-start gap-2 group">
                            <i class="fas fa-angle-right text-primary group-hover:translate-x-1 transition-transform"></i>
                            <span>Affiliate Program</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-300 hover:text-secondary transition-colors duration-300 flex items-center justify-center md:justify-start gap-2 group">
                            <i class="fas fa-angle-right text-primary group-hover:translate-x-1 transition-transform"></i>
                            <span>Customer Reviews</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-300 hover:text-secondary transition-colors duration-300 flex items-center justify-center md:justify-start gap-2 group">
                            <i class="fas fa-angle-right text-primary group-hover:translate-x-1 transition-transform"></i>
                            <span>Submit a Complaint</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Quick Navigation -->
            <div class="space-y-4 text-center md:text-left">
                <h3 class="text-lg font-bold text-white mb-4 pb-2 border-b-2 border-primary inline-block">
                    Quick Navigation
                </h3>
                <ul class="space-y-3 text-sm">
                    <li>
                        <a href="#" class="text-gray-300 hover:text-secondary transition-colors duration-300 flex items-center justify-center md:justify-start gap-2 group">
                            <i class="fas fa-angle-right text-primary group-hover:translate-x-1 transition-transform"></i>
                            <span>My Account</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-300 hover:text-secondary transition-colors duration-300 flex items-center justify-center md:justify-start gap-2 group">
                            <i class="fas fa-angle-right text-primary group-hover:translate-x-1 transition-transform"></i>
                            <span>All Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-300 hover:text-secondary transition-colors duration-300 flex items-center justify-center md:justify-start gap-2 group">
                            <i class="fas fa-angle-right text-primary group-hover:translate-x-1 transition-transform"></i>
                            <span>Track Order</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-300 hover:text-secondary transition-colors duration-300 flex items-center justify-center md:justify-start gap-2 group">
                            <i class="fas fa-angle-right text-primary group-hover:translate-x-1 transition-transform"></i>
                            <span>Cart</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-300 hover:text-secondary transition-colors duration-300 flex items-center justify-center md:justify-start gap-2 group">
                            <i class="fas fa-angle-right text-primary group-hover:translate-x-1 transition-transform"></i>
                            <span>Checkout</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Legal Policy -->
            <div class="space-y-4 text-center md:text-left">
                <h3 class="text-lg font-bold text-white mb-4 pb-2 border-b-2 border-primary inline-block">
                    Legal & Policy
                </h3>
                <ul class="space-y-3 text-sm">
                    <li>
                        <a href="#" class="text-gray-300 hover:text-secondary transition-colors duration-300 flex items-center justify-center md:justify-start gap-2 group">
                            <i class="fas fa-angle-right text-primary group-hover:translate-x-1 transition-transform"></i>
                            <span>Delivery Policy</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-300 hover:text-secondary transition-colors duration-300 flex items-center justify-center md:justify-start gap-2 group">
                            <i class="fas fa-angle-right text-primary group-hover:translate-x-1 transition-transform"></i>
                            <span>Return Policy</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-300 hover:text-secondary transition-colors duration-300 flex items-center justify-center md:justify-start gap-2 group">
                            <i class="fas fa-angle-right text-primary group-hover:translate-x-1 transition-transform"></i>
                            <span>Refund Policy</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-300 hover:text-secondary transition-colors duration-300 flex items-center justify-center md:justify-start gap-2 group">
                            <i class="fas fa-angle-right text-primary group-hover:translate-x-1 transition-transform"></i>
                            <span>Warranty Policy</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-300 hover:text-secondary transition-colors duration-300 flex items-center justify-center md:justify-start gap-2 group">
                            <i class="fas fa-angle-right text-primary group-hover:translate-x-1 transition-transform"></i>
                            <span>Privacy Policy</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div class="space-y-5 text-center md:text-left">
                <h3 class="text-lg font-bold text-white mb-4 pb-2 border-b-2 border-primary inline-block">
                    Contact Information
                </h3>

                <!-- Phone -->
                <a
                    href="tel:01774801737"
                    class="text-gray-300 hover:text-secondary transition-colors duration-300 flex items-center justify-center md:justify-start gap-3 group">
                    <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fas fa-phone text-white text-sm"></i>
                    </div>
                    <span class="text-sm font-medium">{{$setting->phone_one}}</span>
                </a>

                <!-- Email -->
                <a
                    href="mailto:email2cits@gmail.com"
                    class="text-gray-300 hover:text-secondary transition-colors duration-300 flex items-center justify-center md:justify-start gap-3 group">
                    <div class="w-10 h-10 bg-secondary rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fas fa-envelope text-gray-800 text-sm"></i>
                    </div>
                    <span class="text-sm break-all">{{$setting->email_one}}</span>
                </a>

                <!-- Address -->
                <div class="flex items-start justify-center md:justify-start gap-3">
                    <div class="w-10 h-10 bg-cardBg rounded-lg flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-map-marker-alt text-white text-sm"></i>
                    </div>
                    <div class="text-sm text-gray-300">
                        <p>{{$setting->address}}</p>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="mt-12 pt-6 border-t border-gray-700">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-sm text-gray-400">
                    Chowdhury It Solutions ©Copyright 2025
                </p>
                <div class="flex items-center gap-4 text-xs text-gray-500">
                    <span>Made with <i class="fas fa-heart text-primary animate-pulse"></i> in Bangladesh</span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer -->
<!-- Modern Footer -->
<!-- Modal Overlay -->
<!-- Modal Overlay -->
<div
    id="modalOverlay"
    class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center p-4 transition-opacity duration-300 overflow-y-auto"
    onclick="closeQuickView(event)">
    <!-- Loading Spinner -->
    <div id="loadingSpinner" class="text-center">
        <div
            class="inline-block w-16 h-16 border-4 border-white border-t-primary rounded-full animate-spin"></div>
        <p class="text-white mt-4 font-semibold">Loading...</p>
    </div>

    <!-- Modal Content -->
    <div
        id="modalContent"
        class="hidden bg-white rounded-2xl shadow-2xl w-full max-w-4xl my-4 mx-auto"
        onclick="event.stopPropagation()">
        <!-- Close Button -->
        <button
            onclick="closeQuickView()"
            class="absolute top-2 right-2 md:top-4 md:right-4 w-8 h-8 md:w-10 md:h-10 bg-white rounded-full shadow-lg flex items-center justify-center hover:bg-gray-100 transition-colors z-10">
            <i class="fas fa-times text-gray-700 text-sm md:text-lg"></i>
        </button>

        <div
            class="flex flex-col md:flex-row p-2 max-h-[90vh] md:max-h-auto overflow-y-auto md:overflow-visible">
            <!-- Left Side - Product Image -->
            <div class="md:w-1/2 bg-gray-50 relative group p-4 md:p-6">
                <div class="relative">
                    <img
                        id="modalImage"
                        src="https://images.unsplash.com/photo-1615485500704-8e990f9900f7?w=600&h=600&fit=crop"
                        alt="Product"
                        class="w-full h-auto object-contain rounded-lg max-h-64 md:max-h-full" />

                    <!-- View Details Button (appears on hover) -->
                    <div
                        class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 mt-2">
                        <button
                            class="w-full bg-primary text-white font-bold px-4 py-2 md:px-6 md:py-3 rounded-lg hover:bg-red-700 transition-colors shadow-lg text-sm md:text-base">
                            <i class="fas fa-eye mr-2"></i>
                            VIEW DETAILS
                        </button>
                    </div>
                </div>
            </div>

            <!-- Right Side - Product Information -->
            <div class="md:w-1/2 p-4 md:p-8">
                <!-- Product Title -->
                <h2
                    id="modalTitle"
                    class="text-xl md:text-2xl lg:text-3xl font-semibold text-gray-800 mb-3 md:mb-4">
                    Begun(Round) - 1 kg
                </h2>

                <!-- Product Price -->
                <div class="mb-4 md:mb-6">
                    <span
                        id="modalPrice"
                        class="text-2xl md:text-3xl font-semibold text-primary">৳ 70</span>
                </div>

                <!-- Quantity Selector -->
                <div class="mb-4 md:mb-6">
                    <h3 class="text-sm font-semibold text-gray-800 mb-2 md:mb-3">
                        Quantity
                    </h3>
                    <div class="flex items-center gap-3 md:gap-4">
                        <button
                            onclick="decrementModalQuantity()"
                            class="w-9 h-9 md:w-10 md:h-10 flex items-center justify-center border-2 border-gray-300 rounded-lg text-gray-700 hover:border-primary hover:text-primary transition-colors">
                            <i class="fas fa-minus text-sm"></i>
                        </button>
                        <input
                            id="modalQuantity"
                            type="text"
                            value="1"
                            readonly
                            class="w-14 h-9 md:w-16 md:h-10 text-center border-2 border-gray-300 rounded-lg font-bold text-gray-800 text-base md:text-lg" />
                        <button
                            onclick="incrementModalQuantity()"
                            class="w-9 h-9 md:w-10 md:h-10 flex items-center justify-center border-2 border-gray-300 rounded-lg text-gray-700 hover:border-primary hover:text-primary transition-colors">
                            <i class="fas fa-plus text-sm"></i>
                        </button>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-2 md:gap-3 mb-4">
                    <button
                        class="flex-1 bg-primary text-white font-semibold py-2 px-3 md:px-4 rounded-lg hover:bg-red-700 transition-colors uppercase text-xs md:text-sm">
                        <i class="fas fa-shopping-cart mr-1 md:mr-2"></i>
                        ADD TO CART
                    </button>
                    <button
                        class="flex-1 bg-gray-800 text-white font-semibold py-2 px-3 md:px-4 rounded-lg hover:bg-gray-900 transition-colors uppercase text-xs md:text-sm">
                        <i class="fas fa-bolt mr-1 md:mr-2"></i>
                        BUY NOW
                    </button>
                </div>

                <!-- Additional Info -->
                <div class="mt-4 md:mt-6 pt-4 md:pt-6 border-t border-gray-200">
                    <div
                        class="flex items-center gap-2 text-xs md:text-sm text-gray-600 mb-2">
                        <i class="fas fa-check-circle text-green-500"></i>
                        <span>In Stock</span>
                    </div>
                    <div
                        class="flex items-center gap-2 text-xs md:text-sm text-gray-600 mb-2">
                        <i class="fas fa-truck text-blue-500"></i>
                        <span>Free Delivery Available</span>
                    </div>
                    <div
                        class="flex items-center gap-2 text-xs md:text-sm text-gray-600">
                        <i class="fas fa-undo text-orange-500"></i>
                        <span>7 Days Return Policy</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>