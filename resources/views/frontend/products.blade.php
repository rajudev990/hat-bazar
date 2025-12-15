@extends('layouts.app')

@section('title','All Products')

@section('content')

<section
    class="my-12 shadow-2xl flex flex-col lg:flex-row lg:items-center px-8 py-12">

    <!-- Category wise Product Cards Grid -->
    <div class="flex flex-col lg:flex-row lg:items-center">
        <!-- Product Card 1 -->
        @foreach($products as $product)
        <div
            class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col group relative border border-gray-200 hover:shadow-xl transition-shadow duration-300 mx-2">
            <!-- Hover Icons -->
            <div
                class="absolute top-4 right-4 z-10 flex flex-col gap-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">

                <button
                    onclick="openQuickView()"
                    class="w-10 h-10 bg-white rounded-full shadow-md flex items-center justify-center hover:bg-gray-100 transition-colors">
                    <i class="fas fa-search text-gray-700 text-sm"></i>
                </button>
            </div>

            <!-- Image Container -->
            <div
                class="relative p-4 flex items-center justify-center bg-white h-48">
                <img
                    src="{{ Storage::url($product->featured_image_1) }}"
                    alt="{{ $product->name }}"
                    class="w-full h-full object-contain" />
            </div>

            <!-- Product Info -->
            <div class="p-4 flex flex-col flex-grow">
                <!-- Title -->
                <h3
                    class="text-sm font-medium text-gray-800 text-center mb-2 line-clamp-2 min-h-[2.5rem]">
                    <a href="{{ route('product.single',$product->slug) }}">{{ $product->name }} - ({{ $product->unit }})</a>
                </h3>

                <!-- Price -->
                <p class="text-lg font-bold text-primary text-center mb-4">
                    {{currency()}} {{ number_format($product->sale_price, 2) }}
                </p>

                <!-- Quantity Controls -->
                <div class="flex items-center justify-center gap-3 mb-3">
                    <button
                        onclick="decrementQuantity(this)"
                        class="w-8 h-8 flex items-center justify-center border-2 border-gray-300 rounded text-gray-700 hover:border-primary hover:text-primary transition-colors">
                        <i class="fas fa-minus text-xs"></i>
                    </button>
                    <input
                        type="text"
                        value="1"
                        readonly
                        class="w-12 h-8 text-center border-2 border-gray-300 rounded font-medium text-gray-800" />
                    <button
                        onclick="incrementQuantity(this)"
                        class="w-8 h-8 flex items-center justify-center border-2 border-gray-300 rounded text-gray-700 hover:border-primary hover:text-primary transition-colors">
                        <i class="fas fa-plus text-xs"></i>
                    </button>
                </div>

                <!-- Add to Cart Button -->
                <button

                    data-id="{{ $product->id }}"
                    data-name="{{ $product->name }}"
                    data-slug="{{ $product->slug }}"
                    data-image="{{ Storage::url($product->featured_image_1) }}"
                    data-price="{{ $product->sale_price }}"
                    data-has-variant="{{ $product->variants->count() > 0 ? '1' : '0' }}"

                    class="order-now w-full bg-primary text-white font-bold py-2 px-4 rounded hover:bg-red-700 transition-colors text-sm uppercase">
                    ADD TO CART
                </button>
            </div>
        </div>
        @endforeach
        <!-- Product Card 1 -->
    </div>
    <!-- Category wise Product Cards Grid -->
</section>

@endsection