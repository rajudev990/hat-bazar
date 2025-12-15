@extends('layouts.app')
@section('title', $item->slug)


@section('content')

<main class="container mx-auto">
    <!-- Product Details Section -->
    <section class="px-4 py-6 md:py-12">
        <div class="flex flex-col lg:flex-row gap-6 lg:gap-8">
            <!-- Left Side - Product Images -->
            <div class="w-full lg:w-1/2">
                <!-- Main Product Image with SALE Badge -->
                <div
                    class="relative bg-white rounded-lg shadow-md overflow-hidden mb-4">
                    <!-- SALE Badge -->
                    <div class="absolute top-4 left-4 z-10">
                        <span
                            class="bg-primary text-white text-xs font-bold px-3 py-1.5 rounded-lg shadow-lg">
                            SALE
                        </span>
                    </div>

                    <!-- CHOWDHURY Watermark -->
                    <div class="absolute top-1/2 right-4 -translate-y-1/2 z-10">
                        <p
                            class="text-gray-200 font-bold text-4xl md:text-5xl tracking-widest opacity-50"
                            style="writing-mode: vertical-rl; text-orientation: mixed">
                            CHOWDHURY
                        </p>
                    </div>

                    <!-- Main Image -->
                    <div
                        class="aspect-square flex items-center justify-center p-8 bg-gradient-to-br from-gray-50 to-white">
                        <img
                            src="./assets/dsfs.png"
                            alt="Organic Health Product"
                            class="w-full h-full object-contain" />
                    </div>
                </div>

                <!-- Thumbnail Images -->
                <div class="flex gap-3">
                    <div
                        class="w-1/3 bg-white rounded-lg shadow-md overflow-hidden cursor-pointer hover:ring-2 hover:ring-primary transition-all">
                        <div class="aspect-square flex items-center justify-center p-4">
                            <img
                                src="./assets/Apple-1-scaled.jpg"
                                alt="Product view 1"
                                class="w-full h-full object-contain" />
                        </div>
                    </div>
                    <div
                        class="w-1/3 bg-white rounded-lg shadow-md overflow-hidden cursor-pointer hover:ring-2 hover:ring-primary transition-all">
                        <div class="aspect-square flex items-center justify-center p-4">
                            <img
                                src="./assets/dsfs.png"
                                alt="Product view 2"
                                class="w-full h-full object-contain" />
                        </div>
                    </div>
                    <div
                        class="w-1/3 bg-white rounded-lg shadow-md overflow-hidden cursor-pointer hover:ring-2 hover:ring-primary transition-all">
                        <div class="aspect-square flex items-center justify-center p-4">
                            <img
                                src="./assets/fsdfsd.png"
                                alt="Product detail"
                                class="w-full h-full object-contain" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Product Details -->
            <div class="w-full lg:w-1/2">
                <!-- Product Title -->
                <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">
                   {{ $item->name }}
                </h1>

                <!-- Product Category Badge -->
                <div class="flex items-center gap-2 mb-4">
                    <span
                        class="inline-flex items-center gap-1 bg-cardBg text-white text-xs font-semibold px-3 py-1 rounded-full">
                        <i class="fas fa-leaf"></i> Organic Certified
                    </span>
                    <span
                        class="inline-flex items-center gap-1 bg-secondary text-gray-800 text-xs font-semibold px-3 py-1 rounded-full">
                        <i class="fas fa-star"></i> Premium Quality
                    </span>
                </div>

                <!-- Price -->

                @php
                    $regularPrice = $item->regular_price;
                    $salePrice = $item->sale_price;
                    $discountPercentage = (($regularPrice - $salePrice) / $regularPrice) * 100;
                @endphp
                <div class="flex items-center gap-3 mb-6">
                    <span class="text-gray-400 line-through text-lg">{{currency() }} {{ $item->regular_price }}</span>
                    <span class="text-3xl font-bold text-primary">{{currency() }} {{ $item->sale_price }}</span>
                    <span
                        class="text-sm text-cardBg font-semibold bg-green-50 px-2 py-1 rounded">Save {{ number_format($discountPercentage, 0) }}%</span>
                </div>

                <!-- Select Package -->
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-gray-700 mb-3">
                        <i class="fas fa-box mr-1"></i> Select Package:
                    </label>
                    @if($item->variants->pluck('size_id')->filter()->count() > 0)
                    <div class="flex flex-wrap gap-3">
                        @foreach($item->variants->whereNotNull('size_id')->unique('size_id') as $variant)
                        <button value="{{ $variant->id }}" data-price="{{ $variant->price }}" data-stock="{{ $variant->stock }}" data-color="{{ $variant->color?->name ?? '' }}" data-size="{{ $variant->size->name }}"
                            class="px-5 py-2.5 border-2 border-gray-300 rounded-lg hover:border-cardBg hover:bg-cardBg hover:text-white transition-all font-medium text-sm">
                            {{ $variant->size->name ?? 'N/A' }}
                        </button>
                         @endforeach
                    </div>
                    @endif
                </div>

                <!-- Quantity & Add to Cart -->
                <div class="flex flex-wrap gap-3 mb-8">
                    <!-- Quantity Selector -->
                    <div
                        class="flex items-center border-2 border-gray-300 rounded-lg overflow-hidden">
                        <button
                            class="px-4 py-2.5 hover:bg-gray-100 transition-colors font-bold text-lg">
                            −
                        </button>
                        <input
                            type="text"
                            value="1"
                            class="w-16 text-center border-x-2 border-gray-300 py-2.5 font-medium focus:outline-none"
                            readonly />
                        <button
                            class="px-4 py-2.5 hover:bg-gray-100 transition-colors font-bold text-lg">
                            +
                        </button>
                    </div>

                    <!-- Add to Cart Button -->
                    <a href="./checkout.html">
                        <button
                            class="flex-1 bg-primary hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-lg transition-all flex items-center justify-center gap-2 shadow-lg hover:shadow-xl">
                            <i class="fas fa-shopping-cart"></i>
                            Add To Cart
                        </button>
                    </a>
                </div>

                <!-- Product Description -->
                <div class="mb-6 pb-6 border-b border-gray-200">
                    <!-- <h3
                        class="text-lg font-semibold text-gray-800 mb-3 flex items-center gap-2">
                        <i class="fas fa-info-circle text-primary"></i>
                        Product Description
                    </h3> -->
                    <p class="text-gray-700 text-sm leading-relaxed">
                        {!! $item->short_description !!}
                    </p>
                </div>

                <!-- Health Benefits -->
                <div class="mb-6 pb-6 border-b border-gray-200">
                   <p> {!! $item->description !!}</p>
                </div>

                <!-- Certifications & Quality -->
                <div class="mb-6 pb-6 border-b border-gray-200">
                    <h3
                        class="text-lg font-semibold text-gray-800 mb-3 flex items-center gap-2">
                        <i class="fas fa-certificate text-primary"></i>
                        Quality Assurance
                    </h3>
                    <div class="flex flex-wrap gap-3">
                        <span
                            class="inline-flex items-center gap-2 bg-green-50 text-cardBg text-xs font-semibold px-3 py-2 rounded-lg border border-green-200">
                            <i class="fas fa-leaf"></i> 100% Organic
                        </span>
                        <span
                            class="inline-flex items-center gap-2 bg-blue-50 text-blue-700 text-xs font-semibold px-3 py-2 rounded-lg border border-blue-200">
                            <i class="fas fa-shield-alt"></i> Pesticide Free
                        </span>
                        <span
                            class="inline-flex items-center gap-2 bg-yellow-50 text-yellow-700 text-xs font-semibold px-3 py-2 rounded-lg border border-yellow-200">
                            <i class="fas fa-check-circle"></i> Lab Tested
                        </span>
                        <span
                            class="inline-flex items-center gap-2 bg-purple-50 text-purple-700 text-xs font-semibold px-3 py-2 rounded-lg border border-purple-200">
                            <i class="fas fa-truck"></i> Fresh Delivery
                        </span>
                    </div>
                </div>

                <!-- Share Section -->
                <div class="pt-4 border-t border-gray-200">
                    <p
                        class="text-sm font-semibold text-gray-700 mb-3 flex items-center gap-2">
                        <i class="fas fa-share-alt text-primary"></i>
                        Share this product:
                    </p>
                    <div class="flex gap-3">
                        <a
                            href="#"
                            class="w-10 h-10 flex items-center justify-center bg-blue-500 hover:bg-blue-600 text-white rounded-lg transition-all hover:scale-110 shadow-md">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a
                            href="#"
                            class="w-10 h-10 flex items-center justify-center bg-green-500 hover:bg-green-600 text-white rounded-lg transition-all hover:scale-110 shadow-md">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a
                            href="#"
                            class="w-10 h-10 flex items-center justify-center bg-pink-600 hover:bg-pink-700 text-white rounded-lg transition-all hover:scale-110 shadow-md">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a
                            href="#"
                            class="w-10 h-10 flex items-center justify-center bg-blue-400 hover:bg-blue-500 text-white rounded-lg transition-all hover:scale-110 shadow-md">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection



@section('script')


<script>
    // Optional: Activate the first tab if not already active
    document.addEventListener('DOMContentLoaded', function() {
        var firstTab = new bootstrap.Tab(document.querySelector('#productTabs .nav-link.active'));
        firstTab.show();
    });
</script>



<script>
    // ✅ Product View Tracking (fires on page load)
    window.dataLayer = window.dataLayer || [];
    dataLayer.push({
        event: "view_item",
        ecommerce: {
            items: [{
                item_name: "{{ $item->name }}",
                item_id: "{{ $item->id }}",
                price: "{{ $item->sale_price ?? $item->regular_price }}",
                item_brand: "{{ $item->brand->name ?? '' }}",
                item_category: "{{ $item->category->name ?? '' }}",
                item_variant: "{{ $item->variants->count() > 0 ? 'Has Variant' : 'Single' }}",
                currency: "BDT"
            }]
        }
    });

    // ✅ Add to Cart / Order Now button tracking
    document.getElementById('add-to-cart').addEventListener('click', function() {
        const productName = this.dataset.name;
        const productId = this.dataset.productId;
        const productPrice = this.dataset.price;
        const productImage = this.dataset.image;

        dataLayer.push({
            event: "add_to_cart",
            ecommerce: {
                items: [{
                    item_name: productName,
                    item_id: productId,
                    price: productPrice,
                    item_image: productImage,
                    quantity: document.getElementById('qty').value,
                    currency: "BDT"
                }]
            }
        });
        console.log("✅ DataLayer event pushed: add_to_cart");
    });
</script>

@endsection