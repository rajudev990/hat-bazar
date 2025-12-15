@extends('layouts.app')

@section('title','Home')

@section('content')
<main class="container mx-auto">
    <!-- Banner Slider Section -->
    <section class="container mx-auto px-2 md:px-0">
        <div class="banner-slider">
            @foreach($banners as $banner)
            <div class="">
                <img
                    class="w-full md:h-full object-cover"
                    src="{{ Storage::url($banner->image) }}"
                    alt="{{ $banner->title}}" />
            </div>
            @endforeach

           
        </div>
    </section>
    <!-- Categories Section -->
    <section class="container mx-auto">
        <h2 class="text-3xl font-bold text-primary mb-8 text-center">
            Browse Categories
        </h2>

        <!-- Responsive Grid Layout -->
        <div
            class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-8 gap-4 md:gap-6 px-2">
            @foreach($categories as $category)
            <a
                href="{{ route('products') }}?category={{ $category->id }}"
                class="bg-secondary rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden group">
                <div
                    class="aspect-square p-6 flex flex-col items-center justify-center">
                    <div class="w-full h-32 mb-4 flex items-center justify-center">
                        <img
                            src="{{ Storage::url($category->image) }}"
                            alt="{{ $category->name}}"
                            class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-300" />
                    </div>
                    <h3
                        class="text-center text-sm md:text-base font-bold text-gray-800">
                        {{ $category->name}}
                    </h3>
                </div>
            </a>
            @endforeach

        </div>
    </section>

    <!-- Vegetables products slider section -->
    @foreach($categories as $category)
    <section
        class="my-12 shadow-2xl flex flex-col lg:flex-row lg:items-center px-8 py-12">
        <!-- Categroy Card -->
        <div
            class="w-full  lg:w-[30%]  bg-white  mb-12 lg:mb-20 lg:h-[450px] ">
            <!-- Card Content -->
            <div class="text-center flex flex-col justify-between h-full">
                <!-- Title -->
                <h2 class="text-3xl font-bold text-primary mb-4">{{ $category->name }}</h2>

                <!-- Image -->
                <div class="mb-4 ">
                    <img
                        src="{{ Storage::url($category->image) }}"
                        alt="{{ $category->name }}"
                        class="w-full h-64 object-contain" />
                </div>

                <!-- Button -->
                <a
                    href="{{ route('products') }}?category={{ $category->id }}"
                    class="inline-flex items-center justify-center gap-3 bg-primary hover:bg-cardBg text-white font-bold px-8 py-4 rounded-lg transition-colors duration-300 text-sm uppercase ">
                    <span>SEE ALL PRODUCTS</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
        <!-- End Categroy Card-->

        <!-- Category wise Product Cards Grid -->
        <div class="w-full  lg:w-[80%] vegetablesSlider">
            <!-- Product Card 1 -->
             @foreach($category->products as $product)
            <div
                class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col group relative border border-gray-200 hover:shadow-xl transition-shadow duration-300 mx-2">
                
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
                           
                            class="w-8 h-8 flex items-center justify-center border-2 border-gray-300 rounded text-gray-700 hover:border-primary hover:text-primary transition-colors">
                            <i class="fas fa-minus text-xs"></i>
                        </button>
                        <input
                            type="text"
                            value="1"
                            readonly
                            class="w-12 h-8 text-center border-2 border-gray-300 rounded font-medium text-gray-800" />
                        <button
                            
                            class="w-8 h-8 flex items-center justify-center border-2 border-gray-300 rounded text-gray-700 hover:border-primary hover:text-primary transition-colors">
                            <i class="fas fa-plus text-xs"></i>
                        </button>
                    </div>

                    <!-- Add to Cart Button -->
                    <button
                        class="order-now w-full bg-primary text-white font-bold py-2 px-4 rounded hover:bg-red-700 transition-colors text-sm uppercase"

                        data-id="{{ $product->id }}"
                        data-name="{{ $product->name }}"
                        data-slug="{{ $product->slug }}"
                        data-image="{{ Storage::url($product->featured_image_1) }}"
                        data-price="{{ $product->sale_price }}"
                        data-variant-color-id="variant-color-{{ $product->id }}"
                        data-variant-size-id="variant-size-{{ $product->id }}"
                        onclick="addToCart(event)">
                        ADD TO CART
                    </button>
                </div>
            </div>
            @endforeach
            <!-- Product Card 1 -->
        </div>
        <!-- Category wise Product Cards Grid -->


    </section>
    @endforeach

    <!-- Fish products slider section -->


</main>
@endsection