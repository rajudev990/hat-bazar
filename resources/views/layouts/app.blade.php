@php
$setting = \App\Models\Setting::first();
$categories = \App\Models\Category::where('status',1)->get();
@endphp

<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="icon" href="{{ Storage::url($setting->favicon) }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- daisy Ui cdn -->
    <link
        href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css"
        rel="stylesheet" />

    <!-- Font Awesome (for arrow icons) -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Slick Carousel CSS -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <link rel="stylesheet" href="{{ asset('assets') }}/css/main.css" />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#F10808",
                        secondary: "#FFD942",
                        cardBg: "#097536",
                    },
                },
            },
        };
    </script>
</head>

<body class="">

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')



    <!-- jQuery (Load ONLY ONCE!) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Slick Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- Js connection -->

    <script src="{{ asset('assets') }}/js/script.js"></script>
    
    <script>
    var currencySymbol = "{{ currency() }}"; // Laravel Blade to JavaScript

    // Function to update the cart display (total items, total amount)
    function updateCartDisplay() {
        var cart = JSON.parse(localStorage.getItem('cart')) || [];
        var totalItems = 0;
        var totalAmount = 0;

        // Calculate total items and total amount
        cart.forEach(function(item) {
            totalItems += item.quantity;
            totalAmount += item.price * item.quantity; // Total price for this item
        });

        // Update the cart button display
        document.getElementById('cartTotal').textContent = currencySymbol + totalAmount.toFixed(2); // Total amount
        document.getElementById('cartItemCount').textContent = totalItems; // Total items

        // Update the sidebar
        updateCartSidebar();
    }

    // Function to update the cart sidebar
    function updateCartSidebar() {
        var cart = JSON.parse(localStorage.getItem('cart')) || [];
        var cartItemsHtml = '';
        var subtotal = 0;

        cart.forEach(function(item) {
            var totalPrice = item.price * item.quantity; // Calculate price * quantity for each item
            subtotal += totalPrice; // Calculate subtotal

            cartItemsHtml += `
            <div class="cart-item mb-3 p-3 bg-white rounded-lg border border-gray-200">
                <div class="flex gap-3">
                    <div class="relative">
                        <img src="${item.image}" alt="Product" class="w-16 h-16 object-cover rounded" />
                        <button onclick="removeItem(${item.productId})" class="absolute -top-2 -right-2 w-5 h-5 bg-gray-800 text-white rounded-full flex items-center justify-center text-xs hover:bg-gray-900 transition-colors">×</button>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-medium text-gray-800 text-sm mb-1">${item.name}</h3>
                        <p class="text-sm text-gray-500">${item.color} - ${item.size}</p>
                        <div class="flex items-center gap-2 mt-2">
                            <button class="w-6 h-6 rounded border border-gray-300 flex items-center justify-center hover:bg-gray-100 transition-colors text-gray-600" onclick="updateQuantity(${item.productId}, 'decrease')">-</button>
                            <span class="font-medium w-8 text-center text-sm">${item.quantity}</span>
                            <button class="w-6 h-6 rounded border border-gray-300 flex items-center justify-center hover:bg-gray-100 transition-colors text-gray-600" onclick="updateQuantity(${item.productId}, 'increase')">+</button>
                        </div>
                        <p class="text-red-600 font-bold mt-2 text-sm">${currencySymbol} ${item.price.toFixed(2)}</p>
                    </div>
                </div>
            </div>
            `;
        });

        $('#cartItems').html(cartItemsHtml);
        $('#subtotal').text(currencySymbol + subtotal.toFixed(2)); // Subtotal
    }

    // Function to add item to the cart
    function addToCart(event) {
        event.preventDefault();

        var button = $(event.target);
        var productId = button.data('id');
        var name = button.data('name');
        var image = button.data('image');
        var price = parseFloat(button.data('price'));
        var quantity = parseInt($('#quantity-' + productId).val()) || 1;

        // Get selected variant values (color and size)
        var color = $('#variant-color-' + productId + ' option:selected').text();
        var size = $('#variant-size-' + productId + ' option:selected').text();

        var cart = JSON.parse(localStorage.getItem('cart')) || [];
        var existingProduct = cart.find(item => item.productId === productId && item.color === color && item.size === size);

        if (existingProduct) {
            existingProduct.quantity += quantity;
        } else {
            cart.push({
                productId: productId,
                name: name,
                image: image,
                price: price,
                quantity: quantity,
                color: color,
                size: size,
            });
        }

        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartDisplay(); // Update cart display and sidebar
    }

    // Function to update quantity in the cart
    function updateQuantity(productId, action) {
        var cart = JSON.parse(localStorage.getItem('cart')) || [];
        var item = cart.find(x => x.productId === productId);

        if (item) {
            if (action === 'increase') {
                item.quantity++;
            } else if (action === 'decrease' && item.quantity > 1) {
                item.quantity--;
            }
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartDisplay(); // Update cart totals and sidebar
        }
    }

    // Function to remove item from the cart
    function removeItem(productId) {
        var cart = JSON.parse(localStorage.getItem('cart')) || [];
        cart = cart.filter(item => item.productId !== productId);
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartDisplay(); // Update cart totals and sidebar
    }

    // Function to toggle the cart sidebar
    function toggleCart() {
        $('#cartSidebar').toggleClass('translate-x-full');
    }

    // Initialize the cart on page load
    $(document).ready(function() {
        updateCartDisplay(); // Initialize cart totals and sidebar
    });
</script>



    @yield('script')
</body>

</html>