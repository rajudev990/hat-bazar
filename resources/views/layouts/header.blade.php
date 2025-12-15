<!-- Main Navbar -->
<!-- Header -->
<header id="navbar" class="sticky top-0 z-50 bg-white navbar-transition">
    <div class="container mx-auto px-2 xl:px-0 py-3">
        <div class="flex items-center justify-between gap-8">
            <div class="flex items-center gap-2">
                <!-- Mobile Menu Button -->
                <button onclick="toggleSidebar()" class="text-gray-700">
                    <i class="fas fa-bars text-2xl text-gray-500"></i>
                </button>
                <span class="uppercase lg:hidden text-gray-700"> Menu </span>
            </div>

            <div class="">
                <a href="">
                    <img
                        id="logo"
                        class="w-16 lg:w-32 logo-transition"
                        src="{{ Storage::url($setting->header_logo) }}"
                        alt="{{ $setting->company_name }}" />
                </a>
            </div>

            <div class="relative flex-1 hidden lg:block">
                <input
                    type="text"
                    placeholder="Search our products..."
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none" />
                <button class="absolute right-0 top-0 text-gray-500">
                    <i
                        class="fas fa-search bg-primary px-4 py-3 text-white text-[18px] rounded-r-lg"></i>
                </button>
            </div>

            <!-- Minimalist Design -->
            <div class="">
                <div class="flex items-center justify-between">
                    <div class="relative group">
                        <!-- Left: Login -->
                        <button
                            class="flex items-center space-x-2 hover:text-gray-500 transition-colors hidden lg:flex">
                            <span
                                class="font-medium text-sm uppercase tracking-wider text-gray-700">Login / Register</span>
                        </button>

                        <!-- Login Form Dropdown (appears on hover) -->
                        <div
                            class="absolute -left-[250px] top-full mt-4 w-96 bg-white rounded-lg shadow-2xl border border-gray-200 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="p-8">
                                    <!-- Header -->
                                    <div class="flex items-center justify-between mb-6">
                                        <h2 class="text-2xl font-bold text-gray-800">Sign in</h2>
                                        <a
                                            href="{{ route('register') }}"
                                            class="text-primary text-sm font-medium hover:underline">Create an Account</a>
                                    </div>

                                    <!-- Username Field -->
                                    <div class="mb-5">
                                        <label class="block text-sm text-gray-700 mb-2">
                                            Username or email address
                                            <span class="text-primary">*</span>
                                        </label>
                                        <input
                                            name="email"
                                            type="text"
                                            class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors"
                                            placeholder="" />
                                    </div>

                                    <!-- Password Field -->
                                    <div class="mb-6">
                                        <label class="block text-sm text-gray-700 mb-2">
                                            Password <span class="text-primary">*</span>
                                        </label>
                                        <div class="relative">
                                            <input
                                                name="password"
                                                type="password"
                                                id="password"
                                                class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors"
                                                placeholder="" />
                                            <button
                                                type="button"
                                                onclick="togglePassword()"
                                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700">
                                                <svg
                                                    class="w-5 h-5"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Login Button -->
                                    <button
                                        type="submit"
                                        class="w-full bg-primary text-white font-bold py-3 rounded hover:bg-red-700 transition-colors mb-4">
                                        LOG IN
                                    </button>

                                    <!-- Remember Me & Lost Password -->
                                    <div class="flex items-center justify-between text-sm">
                                        <label class="flex items-center cursor-pointer">
                                            <input
                                                type="checkbox"
                                                class="w-4 h-4 border-2 border-gray-300 rounded mr-2 cursor-pointer accent-primary" />
                                            <span class="text-gray-700">Remember me</span>
                                        </label>
                                        <a
                                            href="#"
                                            class="text-primary hover:underline font-medium">Lost your password?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Right: Cart -->
                    <!-- Cart Button (Right Side) -->
                    <button class="flex items-center space-x-3 hover:opacity-80 transition-opacity" onclick="toggleCart()">
                        <div class="relative flex items-center border-r pr-3 ml-2">
                            <svg class="w-6 h-6 text-gray-700 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                        <div class="text-left">
                            <div class="text-red-500 font-bold text-sm" id="cartTotal">৳ 0.00</div>
                            <div class="text-gray-500 text-xs flex items-center justify-center">
                                <span id="cartItemCount">0</span> <span>items</span>
                            </div>
                        </div>
                    </button>


                </div>
            </div>
        </div>
    </div>
</header>

<!-- Sidebar Overlay -->
<div
    id="sidebarOverlay"
    class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden transition-opacity duration-300"
    onclick="toggleSidebar()"></div>

<!-- Sidebar -->
<div
    id="sidebar"
    class="fixed top-0 left-0 h-full w-72 bg-white z-50 transform -translate-x-full transition-transform duration-300 shadow-2xl overflow-y-auto">
    <div class="pt-2">
        <!-- Search Bar with Close Button -->
        <div class="mb-6 px-4">
            <div class="relative">
                <input
                    type="text"
                    placeholder="Search for products"
                    class="w-full px-4 py-3 pr-12 border border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors text-sm text-gray-700" />
                <button
                    class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-primary transition-colors">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>

        <!-- Menu Tabs -->
        <div class="flex border-b border-gray-200 mb-4">
            <button
                id="menuTab"
                onclick="switchTab('menu')"
                class="flex-1 py-4 px-3 text-sm font-bold text-black border-b-2 border-primary bg-[#E9E9E9] transition-all">
                MENU
            </button>
            <button
                id="categoriesTab"
                onclick="switchTab('categories')"
                class="flex-1 py-4 px-3 text-sm font-bold text-gray-400 bg-[#F5F5F5] transition-all">
                CATEGORIES
            </button>
        </div>

        <!-- Menu Content -->
        <div id="menuContent" class="block">
            <nav class="space-y-1">
                <a
                    href="/"
                    class="block py-3 px-4 text-sm font-bold text-primary border-b border-gray-100 transition-colors">
                    HOME
                </a>

                <a
                    href="{{ route('products') }}"
                    class="block py-3 px-4 text-sm font-bold text-gray-700 hover:text-primary border-b border-gray-100 transition-colors">
                    SHOP
                </a>

                <a
                    href="#"
                    class="block py-3 px-4 text-sm font-bold text-gray-700 hover:text-primary border-b border-gray-100 transition-colors">
                    DAILY DEALS
                </a>

                <a
                    href="#"
                    class="block py-3 px-4 text-sm font-bold text-gray-700 hover:text-primary border-b border-gray-100 transition-colors">
                    CAMPAIGNS
                </a>

                <a
                    href="#"
                    class="flex items-center py-3 px-4 text-sm font-bold text-gray-700 hover:text-primary border-b border-gray-100 transition-colors">
                    <i class="fas fa-shuffle mr-3 text-base"></i>
                    COMPARE
                </a>

                <a
                    href="{{ route('login') }}"
                    class="flex items-center py-3 px-4 text-sm font-bold text-primary transition-colors">
                    <i class="fas fa-user mr-3 text-base"></i>
                    LOGIN / REGISTER
                </a>
            </nav>
        </div>

        <!-- Categories Content -->
        <div id="categoriesContent" class="hidden">
            <nav class="space-y-1">

                @foreach($categories as $category)
                <!-- FRESH VEGETABLES -->
                <a
                    href="{{ route('products') }}?category={{ $category->id }}"
                    class="block py-3 px-4 text-sm font-bold text-gray-700 hover:text-primary border-b border-gray-100 transition-colors">
                    {{ $category->name }}
                </a>
                @endforeach

            </nav>
        </div>
    </div>
</div>

<!-- ⭐ Cart Sidebar (Right Side) -->
<!-- Cart Sidebar -->
<div id="cartSidebar" class="fixed top-0 right-0 h-full w-full sm:w-96 bg-white z-50 transform translate-x-full transition-transform duration-300 ease-in-out shadow-xl flex flex-col">
    <div class="p-4 border-b border-gray-200 flex items-center justify-between bg-white">
        <h2 class="text-lg font-bold text-gray-800">Shopping Cart</h2>
        <button onclick="toggleCart()" class="text-gray-600 hover:text-gray-800 transition-colors flex items-center gap-1 text-sm">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
            Close
        </button>
    </div>

    <!-- Cart Items Container (Scrollable) -->
    <div id="cartItems" class="flex-1 overflow-y-auto p-4 bg-gray-50">
        <!-- Cart items will be populated here dynamically -->
    </div>

    <!-- Cart Footer (Totals & Checkout) -->
    <div class="border-t border-gray-200 p-4 bg-white">
        <div class="flex justify-between items-center mb-4 pb-4 border-b border-gray-200">
            <span class="text-gray-900 font-bold text-base">Subtotal:</span>
            <span id="subtotal" class="font-bold text-red-600 text-lg">৳ 0.00</span>
        </div>
        <button class="w-full bg-red-600 text-white py-3 rounded-lg font-bold hover:bg-red-700 transition-colors mb-2 text-sm uppercase tracking-wide" onclick="window.location.href='{{ route('checkout') }}'">
            VIEW CART
        </button>
        <button class="w-full bg-red-600 text-white py-3 rounded-lg font-bold hover:bg-red-700 transition-colors text-sm uppercase tracking-wide" onclick="window.location.href='{{ route('checkout') }}'">
            CHECKOUT
        </button>
    </div>
</div>

<!-- Mobile Sidebar -->
<!-- Desktop Navigation Bar -->
<nav class="bg-[#F2F2F2] hidden lg:block">
    <div class="container mx-auto">
        <div class="flex items-center justify-between">
            <!-- Left: Browse Categories Button -->
            <div class="relative group">
                <button
                    class="flex items-center justify-between gap-8 bg-primary text-white font-bold px-4 py-2.5 hover:bg-red-700 transition-colors duration-200 w-72">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-bars text-lg"></i>
                        <span class="text-sm">BROWSE CATEGORIES</span>
                    </div>
                    <i
                        id="categoryArrow"
                        class="fas fa-chevron-down text-sm transition-transform duration-200"></i>
                </button>

                <!-- Dropdown Categories (Shows on Hover) -->
                <div
                    class="hidden group-hover:block absolute top-full left-0 w-72 bg-white shadow-lg z-50 border-t-2 border-primary">
                    @foreach($categories as $category)
                    <!-- Groceries -->
                    <a
                        href="{{ route('products') }}?category={{ $category->id }}"
                        class="block px-6 py-3 text-sm font-semibold text-gray-700 hover:bg-[#F2F2F2] hover:text-primary border-b border-gray-200 transition-colors">
                        {{ $category->name }}
                    </a>
                    @endforeach

                </div>
            </div>

            <!-- Center: Navigation Menu -->
            <div class="flex items-center gap-8 flex-1 ml-8">
                <a
                    href="/"
                    class="text-sm font-bold text-gray-700 hover:text-primary transition-colors duration-200 py-3 border-b-2 border-primary">
                    HOME
                </a>
                <a
                    href="{{ route('products') }}"
                    class="text-sm font-bold text-gray-700 hover:text-primary transition-colors duration-200 py-3 border-b-2 border-transparent hover:border-primary">
                    SHOP
                </a>
                <a
                    href="#"
                    class="text-sm font-bold text-gray-700 hover:text-primary transition-colors duration-200 py-3 border-b-2 border-transparent hover:border-primary">
                    DAILY DEALS
                </a>
                <a
                    href="#"
                    class="text-sm font-bold text-gray-700 hover:text-primary transition-colors duration-200 py-3 border-b-2 border-transparent hover:border-primary">
                    CAMPAIGNS
                </a>
            </div>

            <!-- Right: Helpline Button -->
            <div>
                <a
                    href="tel:01725477977"
                    class="bg-primary text-white font-bold px-4 py-2 text-sm hover:bg-red-700 transition-colors duration-200 inline-block whitespace-nowrap rounded-md">
                    HELPLINE: {{ $setting->phone_one }}
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- End  Mobile sidebar  -->
<!-- Navbar End  -->