@extends('website.master')

@section('title')
    Popular Ecommerce Website in Bangladesh.
@endsection

@section('body')
    <!-- HERO BANNER START -->
    <section class="hero-banner py-24">
        <div class="container-fluid">
            <div class="row row-gap-3">
                <div class="col-xl-8 col-lg-12">
                    <div id="bannerSlider" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Slider 1 -->
                            @foreach ($bannerSlider as $slider)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <div class="banner-right">
                                        <div class="banner-content-right"
                                            style="background-image: url({{ asset($slider->image) }});">
                                            <div class="text-box ms-5">
                                                {{-- <h2 class="white fw-600 mb-8">
                                                    {{ $slider->title }}
                                        </h2>
                                        <h6 class="white mb-32">
                                            {{ $slider->sub_title }}
                                        </h6>

                                        <a href="#" class="cus-btn-3 sec">Shop Now</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Carousel Controls -->
                        <a class="carousel-control-prev" href="#bannerSlider" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#bannerSlider" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="d-xl-block d-sm-flex gap-16">
                        @foreach ($bannerSides as $slider)
                            <div class="banner-right {{ $loop->first ? 'mb-16' : '' }}">
                                <div class="banner-content-right v-2"
                                    style="background-image: url({{ asset($slider->image) }});">
                                    <div class="text-box">
                                        <h5 class="fw-500 mb-16">
                                            <a href="#" class="text-dark">{{ $slider->title }}</a>
                                        </h5>
                                        <p class="text-dark fw-500">{{ $slider->sub_title }}</p>
                                        <a href="{{ route('product-detail', $slider->product_id) }}"
                                            class="cus-btn-3 sec mt-2">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HERO BANNER END -->

    <!-- Product Categories Start -->
    <div class="categories-sec py-24">
        <div class="container-fluid">
            <div class="row">
                <div class="categories-wrapper">
                    @foreach ($homeCategory as $category)
                        <a href="{{ route('category', $category->id) }}">
                            <div class="image-box mb-12">
                                <img src="{{ asset($category->image) }}" alt="" class="img-fluid rounded-circle"
                                    width="150" height="150">
                            </div>
                            <p class="fw-500 mb-4p">{{ $category->name }}</p>
                            <p class="dark-gray">8 Product</p>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Product Categories End -->

    <!-- Featured Product Start -->
    <section class="featured-product-sec py-40 bg-lightest-gray">
        <div class="container-fluid">
            <div class="row row-gap-3">
                <div class="col-xl-3">
                    <div class="featured-item text-center">
                        <div class="background-image"
                            style="background-image: url('{{ asset($featuredSlider->image) }}');">
                        </div>
                        {{-- <div class="content">
                            <h4 class="fw-500 text-dark mb-32">Special Offer</h4> 
                            <h5 class="fw-500 text-dark mb-20 text-center">Aero Control Pro Joysticks</h5>
                            <a href="#" class="cus-btn-3 sec mt-2">Buy Now</a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="top-bar mb-16">
                        <h5>Feature Products</h5>

                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                            <div class="row row-gap-3">
                                @foreach ($featureProducts as $product)
                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                        <div class="featured-product-card bg-white br-10">
                                            <form action="{{ route('cart.add', $product->id) }}" method="post">
                                                @csrf
                                                <input type="hidden" name="qty" value="1">
                                                <input type="hidden" name="size"
                                                    value="{{ $product->productSizes[0]->size->id }}">
                                                <input type="hidden" name="color"
                                                    value="{{ $product->productColors[0]->color->id }}">
                                                <div class="image-box mb-16">
                                                    <a href="{{ route('product-detail', $product->id) }}"><img
                                                            src="{{ asset($product->image) }}" class="product-image"
                                                            height="200" alt="" /></a>
                                                    <div class="side-icons">
                                                        {{-- <ul class="list-unstyled">
                                                        <li>
                                                            <a href="#">
                                                                <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                                    alt="" />
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="btn quick-view-btn"
                                                                data-id="{{ $product->id }}"
                                                                data-name="{{ $product->name }}"
                                                                data-brand="{{ $product->brand->name ?? 'Unknown' }}"
                                                                data-reviews="02 Reviews"
                                                                data-regular-price="{{ $product->regular_price }}"
                                                                data-selling-price="{{ $product->selling_price }}"
                                                                data-discount="-12%"
                                                                data-description="{{ strlen($product->short_description) > 150 ? substr($product->short_description, 0, 150) . ' ...' : $product->short_description }}"
                                                                data-category={{ $product->category->name ?? 'Unknown' }}
                                                                data-image="{{ asset($product->image) }}"
                                                                data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                                <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                                    alt="Quick View" />
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="zui-wrapper-button"
                                                                data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                                <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                                    alt="" />
                                                            </a>
                                                        </li>
                                                    </ul> --}}
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <h6 class="product-title mb-8">
                                                        <a
                                                            href="{{ route('product-detail', $product->id) }}">{{ strlen($product->name) > 10 ? substr($product->name, 0, 14) . ' ...' : $product->name }}</a>
                                                    </h6>
                                                    <div class="text mb-12">
                                                        <p class="light-gray">
                                                            {{ substr($product->short_description, 0, 30) }}
                                                        </p>
                                                    </div>
                                                    <div class="rating-star mb-16 bg-white">
                                                        <h6>
                                                            <span class="text-decoration-line-through light-gray">
                                                                TK:{{ $product->regular_price }}</span>&nbsp;&nbsp;TK:{{ $product->selling_price }}
                                                        </h6>
                                                    </div>
                                                    <button type="submit" class="cus-btn-2 w-100">Add to Cart</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Product End -->

    <!-- Popular Product Start -->
    <section class="popular-product bg-lightest-gray pt-24 pb-40">
        <div class="container-fluid">
            <div class="top-bar mb-16">
                <h5>Popular Products</h5>
                <ul class="nav nav-tabs" id="myProduct" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="all-product-tab" data-bs-toggle="tab"
                            data-bs-target="#all-product" type="button" role="tab" aria-controls="all-product"
                            aria-selected="true">
                            All Products
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="laptop-pro-tab" data-bs-toggle="tab" data-bs-target="#laptop-pro"
                            type="button" role="tab" aria-controls="laptop-pro" aria-selected="false">
                            Laptop
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="keyboard-pro-tab" data-bs-toggle="tab"
                            data-bs-target="#keyboard-pro" type="button" role="tab" aria-controls="keyboard-pro"
                            aria-selected="false">
                            Keyboard
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="mouse-pro-tab" data-bs-toggle="tab" data-bs-target="#mouse-pro"
                            type="button" role="tab" aria-controls="mouse-pro" aria-selected="false">
                            Mouse
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="headphone-pro-tab" data-bs-toggle="tab"
                            data-bs-target="#headphone-pro" type="button" role="tab" aria-controls="headphone-pro"
                            aria-selected="false">
                            Headphone
                        </button>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="myProductContent">
                <div class="tab-pane fa de show active" id="all-product" role="tabpanel"
                    aria-labelledby="all-product-tab">
                    <div class="row row-gap-3">
                        @foreach ($popularProducts as $product)
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                                <div class="featured-product-card bg-white br-10">
                                    <form action="{{ route('cart.add', $product->id) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="qty" value="1">
                                        <input type="hidden" name="size"
                                            value="{{ $product->productSizes[0]->size->id }}">
                                        <input type="hidden" name="color"
                                            value="{{ $product->productColors[0]->color->id }}">
                                        <div class="image-box mb-16">

                                            <a href="{{ route('product-detail', $product->id) }}"><img
                                                    src="{{ asset($product->image) }}" class="product-image"
                                                    height="200" alt="" /></a>
                                            <div class="side-icons">
                                                {{-- <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                            alt="" />
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn quick-view-btn"
                                                        data-id="{{ $product->id }}" data-name="{{ $product->name }}"
                                                        data-brand="{{ $product->brand->name ?? 'Unknown' }}"
                                                        data-reviews="02 Reviews"
                                                        data-regular-price="{{ $product->regular_price }}"
                                                        data-selling-price="{{ $product->selling_price }}"
                                                        data-discount="-12%"
                                                        data-description="{{ strlen($product->short_description) > 150 ? substr($product->short_description, 0, 150) . ' ...' : $product->short_description }}"
                                                        data-category={{ $product->category->name ?? 'Unknown' }}
                                                        data-image="{{ asset($product->image) }}" data-bs-toggle="modal"
                                                        data-bs-target="#productQuickView">
                                                        <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                            alt="Quick View" />
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                        data-bs-target="#comparepopup">
                                                        <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                            alt="" />
                                                    </a>
                                                </li>
                                            </ul> --}}
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <h6 class="product-title mb-8">
                                                <a
                                                    href="{{ route('product-detail', $product->id) }}">{{ strlen($product->name) > 10 ? substr($product->name, 0, 14) . ' ...' : $product->name }}</a>
                                            </h6>
                                            <div class="text mb-12">
                                                <p class="light-gray">
                                                    {{ substr($product->short_description, 0, 30) }}
                                                </p>
                                            </div>
                                            <div class="rating-star mb-16 bg-white">
                                                <h6>
                                                    <span class="text-decoration-line-through light-gray">
                                                        TK:{{ $product->regular_price }}</span>&nbsp;&nbsp;TK:{{ $product->selling_price }}
                                                </h6>
                                            </div>
                                            <button type="submit" class="cus-btn-2 w-100">Add to Cart</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="laptop-pro" role="tabpanel" aria-labelledby="laptop-pro-tab">
                    <div class="row row-gap-3">
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">

                                    <a href="#"><img src="{{ asset('/') }}website/assets/media/products/13.png"
                                            class="product-image" alt="" /></a>
                                    <div class="side-icons">
                                        {{-- {{-- <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#productQuickView">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                    data-bs-target="#comparepopup">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                        </ul> --}} --}}
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <h6 class="product-title mb-8">
                                        <a href="#">Radiant View LCD</a>
                                    </h6>
                                    <div class="text mb-12">
                                        <p class="light-gray">
                                            Lorem ipsum dolor sit amet consectetur. Id viverra
                                            cursus enim risus mattis urnanullam quis magna.
                                            Ligula maecenas integer diam risus rhoncus at.
                                            Viverra a consectetur ac lobortis.
                                        </p>
                                    </div>
                                    <div class="rating-star mb-16 bg-white">
                                        <h5 class="color-sec mb-24">
                                            ★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                class="text-16 fw-400 dark-black">(80)</span>
                                        </h5>
                                        <h6>
                                            <span class="text-decoration-line-through light-gray">
                                                $12.00</span>&nbsp;&nbsp;$10.00
                                        </h6>
                                    </div>
                                    <a href="#" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">

                                    <a href="#"><img
                                            src="{{ asset('/') }}website/assets/media/products/saree.png"
                                            class="product-image" alt="" /></a>
                                    <div class="side-icons">
                                        {{-- <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#productQuickView">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                    data-bs-target="#comparepopup">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <h6 class="product-title mb-8">
                                        <a href="#">Pure Bass Headphones</a>
                                    </h6>
                                    <div class="text mb-12">
                                        <p class="light-gray">
                                            Lorem ipsum dolor sit amet consectetur. Id viverra
                                            cursus enim risus mattis urnanullam quis magna.
                                            Ligula maecenas integer diam risus rhoncus at.
                                            Viverra a consectetur ac lobortis.
                                        </p>
                                    </div>
                                    <div class="rating-star mb-16 bg-white">
                                        <h5 class="color-sec mb-24">
                                            ★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                class="text-16 fw-400 dark-black">(80)</span>
                                        </h5>
                                        <h6>
                                            <span class="text-decoration-line-through light-gray">
                                                $12.00</span>&nbsp;&nbsp;$10.00
                                        </h6>
                                    </div>
                                    <a href="#" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">

                                    <a href="#"><img
                                            src="{{ asset('/') }}website/assets/media/products/watch.png"
                                            class="product-image" alt="" /></a>
                                    <div class="side-icons">
                                        {{-- <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#productQuickView">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                    data-bs-target="#comparepopup">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <h6 class="product-title mb-8">
                                        <a href="#">Supreme Tech Phone</a>
                                    </h6>
                                    <div class="text mb-12">
                                        <p class="light-gray">
                                            Lorem ipsum dolor sit amet consectetur. Id viverra
                                            cursus enim risus mattis urnanullam quis magna.
                                            Ligula maecenas integer diam risus rhoncus at.
                                            Viverra a consectetur ac lobortis.
                                        </p>
                                    </div>
                                    <div class="rating-star mb-16 bg-white">
                                        <h5 class="color-sec mb-24">
                                            ★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                class="text-16 fw-400 dark-black">(80)</span>
                                        </h5>
                                        <h6>
                                            <span class="text-decoration-line-through light-gray">
                                                $12.00</span>&nbsp;&nbsp;$10.00
                                        </h6>
                                    </div>
                                    <a href="#" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">

                                    <a href="#"><img src="{{ asset('/') }}website/assets/media/products/13.png"
                                            class="product-image" alt="" /></a>
                                    <div class="side-icons">
                                        {{-- <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#productQuickView">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                    data-bs-target="#comparepopup">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <h6 class="product-title mb-8">
                                        <a href="#">Aero Pro Joysticks</a>
                                    </h6>
                                    <div class="text mb-12">
                                        <p class="light-gray">
                                            Lorem ipsum dolor sit amet consectetur. Id viverra
                                            cursus enim risus mattis urnanullam quis magna.
                                            Ligula maecenas integer diam risus rhoncus at.
                                            Viverra a consectetur ac lobortis.
                                        </p>
                                    </div>
                                    <div class="rating-star mb-16 bg-white">
                                        <h5 class="color-sec mb-24">
                                            ★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                class="text-16 fw-400 dark-black">(80)</span>
                                        </h5>
                                        <h6>
                                            <span class="text-decoration-line-through light-gray">
                                                $12.00</span>&nbsp;&nbsp;$10.00
                                        </h6>
                                    </div>
                                    <a href="#" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">

                                    <a href="#"><img
                                            src="{{ asset('/') }}website/assets/media/products/saree.png"
                                            class="product-image" alt="" /></a>
                                    <div class="side-icons">
                                        {{-- <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#productQuickView">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                    data-bs-target="#comparepopup">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <h6 class="product-title mb-8">
                                        <a href="#">Hyper Glide Mouse</a>
                                    </h6>
                                    <div class="text mb-12">
                                        <p class="light-gray">
                                            Lorem ipsum dolor sit amet consectetur. Id viverra
                                            cursus enim risus mattis urnanullam quis magna.
                                            Ligula maecenas integer diam risus rhoncus at.
                                            Viverra a consectetur ac lobortis.
                                        </p>
                                    </div>
                                    <div class="rating-star mb-16 bg-white">
                                        <h5 class="color-sec mb-24">
                                            ★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                class="text-16 fw-400 dark-black">(80)</span>
                                        </h5>
                                        <h6>
                                            <span class="text-decoration-line-through light-gray">
                                                $12.00</span>&nbsp;&nbsp;$10.00
                                        </h6>
                                    </div>
                                    <a href="#" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">

                                    <a href="#"><img src="{{ asset('/') }}website/assets/media/products/bag.png"
                                            class="product-image" alt="" /></a>
                                    <div class="side-icons">
                                        {{-- <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#productQuickView">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                    data-bs-target="#comparepopup">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <h6 class="product-title mb-8">
                                        <a href="#">iPad Standard Plus</a>
                                    </h6>
                                    <div class="text mb-12">
                                        <p class="light-gray">
                                            Lorem ipsum dolor sit amet consectetur. Id viverra
                                            cursus enim risus mattis urnanullam quis magna.
                                            Ligula maecenas integer diam risus rhoncus at.
                                            Viverra a consectetur ac lobortis.
                                        </p>
                                    </div>
                                    <div class="rating-star mb-16 bg-white">
                                        <h5 class="color-sec mb-24">
                                            ★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                class="text-16 fw-400 dark-black">(80)</span>
                                        </h5>
                                        <h6>
                                            <span class="text-decoration-line-through light-gray">
                                                $12.00</span>&nbsp;&nbsp;$10.00
                                        </h6>
                                    </div>
                                    <a href="#" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="keyboard-pro" role="tabpanel" aria-labelledby="keyboard-pro-tab">
                    <div class="row row-gap-3">
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">

                                    <a href="#"><img src="{{ asset('/') }}website/assets/media/products/13.png"
                                            class="product-image" alt="" /></a>
                                    <div class="side-icons">
                                        {{-- <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#productQuickView">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                    data-bs-target="#comparepopup">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <h6 class="product-title mb-8">
                                        <a href="#">Radiant View LCD</a>
                                    </h6>
                                    <div class="text mb-12">
                                        <p class="light-gray">
                                            Lorem ipsum dolor sit amet consectetur. Id viverra
                                            cursus enim risus mattis urnanullam quis magna.
                                            Ligula maecenas integer diam risus rhoncus at.
                                            Viverra a consectetur ac lobortis.
                                        </p>
                                    </div>
                                    <div class="rating-star mb-16 bg-white">
                                        <h5 class="color-sec mb-24">
                                            ★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                class="text-16 fw-400 dark-black">(80)</span>
                                        </h5>
                                        <h6>
                                            <span class="text-decoration-line-through light-gray">
                                                $12.00</span>&nbsp;&nbsp;$10.00
                                        </h6>
                                    </div>
                                    <a href="#" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">

                                    <a href="#"><img
                                            src="{{ asset('/') }}website/assets/media/products/saree.png"
                                            class="product-image" alt="" /></a>
                                    <div class="side-icons">
                                        {{-- <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#productQuickView">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                    data-bs-target="#comparepopup">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <h6 class="product-title mb-8">
                                        <a href="#">Pure Bass Headphones</a>
                                    </h6>
                                    <div class="text mb-12">
                                        <p class="light-gray">
                                            Lorem ipsum dolor sit amet consectetur. Id viverra
                                            cursus enim risus mattis urnanullam quis magna.
                                            Ligula maecenas integer diam risus rhoncus at.
                                            Viverra a consectetur ac lobortis.
                                        </p>
                                    </div>
                                    <div class="rating-star mb-16 bg-white">
                                        <h5 class="color-sec mb-24">
                                            ★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                class="text-16 fw-400 dark-black">(80)</span>
                                        </h5>
                                        <h6>
                                            <span class="text-decoration-line-through light-gray">
                                                $12.00</span>&nbsp;&nbsp;$10.00
                                        </h6>
                                    </div>
                                    <a href="#" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">

                                    <a href="#"><img
                                            src="{{ asset('/') }}website/assets/media/products/watch.png"
                                            class="product-image" alt="" /></a>
                                    <div class="side-icons">
                                        {{-- <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#productQuickView">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                    data-bs-target="#comparepopup">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <h6 class="product-title mb-8">
                                        <a href="#">Supreme Tech Phone</a>
                                    </h6>
                                    <div class="text mb-12">
                                        <p class="light-gray">
                                            Lorem ipsum dolor sit amet consectetur. Id viverra
                                            cursus enim risus mattis urnanullam quis magna.
                                            Ligula maecenas integer diam risus rhoncus at.
                                            Viverra a consectetur ac lobortis.
                                        </p>
                                    </div>
                                    <div class="rating-star mb-16 bg-white">
                                        <h5 class="color-sec mb-24">
                                            ★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                class="text-16 fw-400 dark-black">(80)</span>
                                        </h5>
                                        <h6>
                                            <span class="text-decoration-line-through light-gray">
                                                $12.00</span>&nbsp;&nbsp;$10.00
                                        </h6>
                                    </div>
                                    <a href="#" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">

                                    <a href="#"><img src="{{ asset('/') }}website/assets/media/products/13.png"
                                            class="product-image" alt="" /></a>
                                    <div class="side-icons">
                                        {{-- <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#productQuickView">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                    data-bs-target="#comparepopup">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <h6 class="product-title mb-8">
                                        <a href="#">Aero Pro Joysticks</a>
                                    </h6>
                                    <div class="text mb-12">
                                        <p class="light-gray">
                                            Lorem ipsum dolor sit amet consectetur. Id viverra
                                            cursus enim risus mattis urnanullam quis magna.
                                            Ligula maecenas integer diam risus rhoncus at.
                                            Viverra a consectetur ac lobortis.
                                        </p>
                                    </div>
                                    <div class="rating-star mb-16 bg-white">
                                        <h5 class="color-sec mb-24">
                                            ★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                class="text-16 fw-400 dark-black">(80)</span>
                                        </h5>
                                        <h6>
                                            <span class="text-decoration-line-through light-gray">
                                                $12.00</span>&nbsp;&nbsp;$10.00
                                        </h6>
                                    </div>
                                    <a href="#" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">

                                    <a href="#"><img
                                            src="{{ asset('/') }}website/assets/media/products/saree.png"
                                            class="product-image" alt="" /></a>
                                    <div class="side-icons">
                                        {{-- <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#productQuickView">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                    data-bs-target="#comparepopup">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <h6 class="product-title mb-8">
                                        <a href="#">Hyper Glide Mouse</a>
                                    </h6>
                                    <div class="text mb-12">
                                        <p class="light-gray">
                                            Lorem ipsum dolor sit amet consectetur. Id viverra
                                            cursus enim risus mattis urnanullam quis magna.
                                            Ligula maecenas integer diam risus rhoncus at.
                                            Viverra a consectetur ac lobortis.
                                        </p>
                                    </div>
                                    <div class="rating-star mb-16 bg-white">
                                        <h5 class="color-sec mb-24">
                                            ★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                class="text-16 fw-400 dark-black">(80)</span>
                                        </h5>
                                        <h6>
                                            <span class="text-decoration-line-through light-gray">
                                                $12.00</span>&nbsp;&nbsp;$10.00
                                        </h6>
                                    </div>
                                    <a href="#" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">

                                    <a href="#"><img src="{{ asset('/') }}website/assets/media/products/bag.png"
                                            class="product-image" alt="" /></a>
                                    <div class="side-icons">
                                        {{-- <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#productQuickView">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                    data-bs-target="#comparepopup">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <h6 class="product-title mb-8">
                                        <a href="#">iPad Standard Plus</a>
                                    </h6>
                                    <div class="text mb-12">
                                        <p class="light-gray">
                                            Lorem ipsum dolor sit amet consectetur. Id viverra
                                            cursus enim risus mattis urnanullam quis magna.
                                            Ligula maecenas integer diam risus rhoncus at.
                                            Viverra a consectetur ac lobortis.
                                        </p>
                                    </div>
                                    <div class="rating-star mb-16 bg-white">
                                        <h5 class="color-sec mb-24">
                                            ★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                class="text-16 fw-400 dark-black">(80)</span>
                                        </h5>
                                        <h6>
                                            <span class="text-decoration-line-through light-gray">
                                                $12.00</span>&nbsp;&nbsp;$10.00
                                        </h6>
                                    </div>
                                    <a href="#" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="mouse-pro" role="tabpanel" aria-labelledby="mouse-pro-tab">
                    <div class="row row-gap-3">
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">

                                    <a href="#"><img src="{{ asset('/') }}website/assets/media/products/13.png"
                                            class="product-image" alt="" /></a>
                                    <div class="side-icons">
                                        {{-- <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#productQuickView">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                    data-bs-target="#comparepopup">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <h6 class="product-title mb-8">
                                        <a href="#">Radiant View LCD</a>
                                    </h6>
                                    <div class="text mb-12">
                                        <p class="light-gray">
                                            Lorem ipsum dolor sit amet consectetur. Id viverra
                                            cursus enim risus mattis urnanullam quis magna.
                                            Ligula maecenas integer diam risus rhoncus at.
                                            Viverra a consectetur ac lobortis.
                                        </p>
                                    </div>
                                    <div class="rating-star mb-16 bg-white">
                                        <h5 class="color-sec mb-24">
                                            ★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                class="text-16 fw-400 dark-black">(80)</span>
                                        </h5>
                                        <h6>
                                            <span class="text-decoration-line-through light-gray">
                                                $12.00</span>&nbsp;&nbsp;$10.00
                                        </h6>
                                    </div>
                                    <a href="#" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">

                                    <a href="#"><img
                                            src="{{ asset('/') }}website/assets/media/products/saree.png"
                                            class="product-image" alt="" /></a>
                                    <div class="side-icons">
                                        {{-- <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#productQuickView">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                    data-bs-target="#comparepopup">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <h6 class="product-title mb-8">
                                        <a href="#">Pure Bass Headphones</a>
                                    </h6>
                                    <div class="text mb-12">
                                        <p class="light-gray">
                                            Lorem ipsum dolor sit amet consectetur. Id viverra
                                            cursus enim risus mattis urnanullam quis magna.
                                            Ligula maecenas integer diam risus rhoncus at.
                                            Viverra a consectetur ac lobortis.
                                        </p>
                                    </div>
                                    <div class="rating-star mb-16 bg-white">
                                        <h5 class="color-sec mb-24">
                                            ★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                class="text-16 fw-400 dark-black">(80)</span>
                                        </h5>
                                        <h6>
                                            <span class="text-decoration-line-through light-gray">
                                                $12.00</span>&nbsp;&nbsp;$10.00
                                        </h6>
                                    </div>
                                    <a href="#" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">

                                    <a href="#"><img
                                            src="{{ asset('/') }}website/assets/media/products/watch.png"
                                            class="product-image" alt="" /></a>
                                    <div class="side-icons">
                                        {{-- <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#productQuickView">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                    data-bs-target="#comparepopup">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <h6 class="product-title mb-8">
                                        <a href="#">Supreme Tech Phone</a>
                                    </h6>
                                    <div class="text mb-12">
                                        <p class="light-gray">
                                            Lorem ipsum dolor sit amet consectetur. Id viverra
                                            cursus enim risus mattis urnanullam quis magna.
                                            Ligula maecenas integer diam risus rhoncus at.
                                            Viverra a consectetur ac lobortis.
                                        </p>
                                    </div>
                                    <div class="rating-star mb-16 bg-white">
                                        <h5 class="color-sec mb-24">
                                            ★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                class="text-16 fw-400 dark-black">(80)</span>
                                        </h5>
                                        <h6>
                                            <span class="text-decoration-line-through light-gray">
                                                $12.00</span>&nbsp;&nbsp;$10.00
                                        </h6>
                                    </div>
                                    <a href="#" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">

                                    <a href="#"><img src="{{ asset('/') }}website/assets/media/products/13.png"
                                            class="product-image" alt="" /></a>
                                    <div class="side-icons">
                                        {{-- <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#productQuickView">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                    data-bs-target="#comparepopup">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <h6 class="product-title mb-8">
                                        <a href="#">Aero Pro Joysticks</a>
                                    </h6>
                                    <div class="text mb-12">
                                        <p class="light-gray">
                                            Lorem ipsum dolor sit amet consectetur. Id viverra
                                            cursus enim risus mattis urnanullam quis magna.
                                            Ligula maecenas integer diam risus rhoncus at.
                                            Viverra a consectetur ac lobortis.
                                        </p>
                                    </div>
                                    <div class="rating-star mb-16 bg-white">
                                        <h5 class="color-sec mb-24">
                                            ★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                class="text-16 fw-400 dark-black">(80)</span>
                                        </h5>
                                        <h6>
                                            <span class="text-decoration-line-through light-gray">
                                                $12.00</span>&nbsp;&nbsp;$10.00
                                        </h6>
                                    </div>
                                    <a href="#" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">

                                    <a href="#"><img
                                            src="{{ asset('/') }}website/assets/media/products/saree.png"
                                            class="product-image" alt="" /></a>
                                    <div class="side-icons">
                                        {{-- <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#productQuickView">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                    data-bs-target="#comparepopup">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <h6 class="product-title mb-8">
                                        <a href="#">Hyper Glide Mouse</a>
                                    </h6>
                                    <div class="text mb-12">
                                        <p class="light-gray">
                                            Lorem ipsum dolor sit amet consectetur. Id viverra
                                            cursus enim risus mattis urnanullam quis magna.
                                            Ligula maecenas integer diam risus rhoncus at.
                                            Viverra a consectetur ac lobortis.
                                        </p>
                                    </div>
                                    <div class="rating-star mb-16 bg-white">
                                        <h5 class="color-sec mb-24">
                                            ★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                class="text-16 fw-400 dark-black">(80)</span>
                                        </h5>
                                        <h6>
                                            <span class="text-decoration-line-through light-gray">
                                                $12.00</span>&nbsp;&nbsp;$10.00
                                        </h6>
                                    </div>
                                    <a href="#" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">

                                    <a href="#"><img src="{{ asset('/') }}website/assets/media/products/bag.png"
                                            class="product-image" alt="" /></a>
                                    <div class="side-icons">
                                        {{-- <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#productQuickView">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                    data-bs-target="#comparepopup">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <h6 class="product-title mb-8">
                                        <a href="#">iPad Standard Plus</a>
                                    </h6>
                                    <div class="text mb-12">
                                        <p class="light-gray">
                                            Lorem ipsum dolor sit amet consectetur. Id viverra
                                            cursus enim risus mattis urnanullam quis magna.
                                            Ligula maecenas integer diam risus rhoncus at.
                                            Viverra a consectetur ac lobortis.
                                        </p>
                                    </div>
                                    <div class="rating-star mb-16 bg-white">
                                        <h5 class="color-sec mb-24">
                                            ★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                class="text-16 fw-400 dark-black">(80)</span>
                                        </h5>
                                        <h6>
                                            <span class="text-decoration-line-through light-gray">
                                                $12.00</span>&nbsp;&nbsp;$10.00
                                        </h6>
                                    </div>
                                    <a href="#" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="headphone-pro" role="tabpanel" aria-labelledby="headphone-pro-tab">
                    <div class="row row-gap-3">
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">

                                    <a href="#"><img src="{{ asset('/') }}website/assets/media/products/13.png"
                                            class="product-image" alt="" /></a>
                                    <div class="side-icons">
                                        {{-- <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#productQuickView">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                    data-bs-target="#comparepopup">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <h6 class="product-title mb-8">
                                        <a href="#">Radiant View LCD</a>
                                    </h6>
                                    <div class="text mb-12">
                                        <p class="light-gray">
                                            Lorem ipsum dolor sit amet consectetur. Id viverra
                                            cursus enim risus mattis urnanullam quis magna.
                                            Ligula maecenas integer diam risus rhoncus at.
                                            Viverra a consectetur ac lobortis.
                                        </p>
                                    </div>
                                    <div class="rating-star mb-16 bg-white">
                                        <h5 class="color-sec mb-24">
                                            ★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                class="text-16 fw-400 dark-black">(80)</span>
                                        </h5>
                                        <h6>
                                            <span class="text-decoration-line-through light-gray">
                                                $12.00</span>&nbsp;&nbsp;$10.00
                                        </h6>
                                    </div>
                                    <a href="#" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">

                                    <a href="#"><img
                                            src="{{ asset('/') }}website/assets/media/products/saree.png"
                                            class="product-image" alt="" /></a>
                                    <div class="side-icons">
                                        {{-- <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#productQuickView">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                    data-bs-target="#comparepopup">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <h6 class="product-title mb-8">
                                        <a href="#">Pure Bass Headphones</a>
                                    </h6>
                                    <div class="text mb-12">
                                        <p class="light-gray">
                                            Lorem ipsum dolor sit amet consectetur. Id viverra
                                            cursus enim risus mattis urnanullam quis magna.
                                            Ligula maecenas integer diam risus rhoncus at.
                                            Viverra a consectetur ac lobortis.
                                        </p>
                                    </div>
                                    <div class="rating-star mb-16 bg-white">
                                        <h5 class="color-sec mb-24">
                                            ★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                class="text-16 fw-400 dark-black">(80)</span>
                                        </h5>
                                        <h6>
                                            <span class="text-decoration-line-through light-gray">
                                                $12.00</span>&nbsp;&nbsp;$10.00
                                        </h6>
                                    </div>
                                    <a href="#" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">

                                    <a href="#"><img
                                            src="{{ asset('/') }}website/assets/media/products/watch.png"
                                            class="product-image" alt="" /></a>
                                    <div class="side-icons">
                                        {{-- <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#productQuickView">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                    data-bs-target="#comparepopup">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <h6 class="product-title mb-8">
                                        <a href="#">Supreme Tech Phone</a>
                                    </h6>
                                    <div class="text mb-12">
                                        <p class="light-gray">
                                            Lorem ipsum dolor sit amet consectetur. Id viverra
                                            cursus enim risus mattis urnanullam quis magna.
                                            Ligula maecenas integer diam risus rhoncus at.
                                            Viverra a consectetur ac lobortis.
                                        </p>
                                    </div>
                                    <div class="rating-star mb-16 bg-white">
                                        <h5 class="color-sec mb-24">
                                            ★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                class="text-16 fw-400 dark-black">(80)</span>
                                        </h5>
                                        <h6>
                                            <span class="text-decoration-line-through light-gray">
                                                $12.00</span>&nbsp;&nbsp;$10.00
                                        </h6>
                                    </div>
                                    <a href="#" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">

                                    <a href="#"><img src="{{ asset('/') }}website/assets/media/products/13.png"
                                            class="product-image" alt="" /></a>
                                    <div class="side-icons">
                                        {{-- <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#productQuickView">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                    data-bs-target="#comparepopup">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <h6 class="product-title mb-8">
                                        <a href="#">Aero Pro Joysticks</a>
                                    </h6>
                                    <div class="text mb-12">
                                        <p class="light-gray">
                                            Lorem ipsum dolor sit amet consectetur. Id viverra
                                            cursus enim risus mattis urnanullam quis magna.
                                            Ligula maecenas integer diam risus rhoncus at.
                                            Viverra a consectetur ac lobortis.
                                        </p>
                                    </div>
                                    <div class="rating-star mb-16 bg-white">
                                        <h5 class="color-sec mb-24">
                                            ★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                class="text-16 fw-400 dark-black">(80)</span>
                                        </h5>
                                        <h6>
                                            <span class="text-decoration-line-through light-gray">
                                                $12.00</span>&nbsp;&nbsp;$10.00
                                        </h6>
                                    </div>
                                    <a href="#" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">

                                    <a href="#"><img
                                            src="{{ asset('/') }}website/assets/media/products/saree.png"
                                            class="product-image" alt="" /></a>
                                    <div class="side-icons">
                                        {{-- <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#productQuickView">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                    data-bs-target="#comparepopup">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <h6 class="product-title mb-8">
                                        <a href="#">Hyper Glide Mouse</a>
                                    </h6>
                                    <div class="text mb-12">
                                        <p class="light-gray">
                                            Lorem ipsum dolor sit amet consectetur. Id viverra
                                            cursus enim risus mattis urnanullam quis magna.
                                            Ligula maecenas integer diam risus rhoncus at.
                                            Viverra a consectetur ac lobortis.
                                        </p>
                                    </div>
                                    <div class="rating-star mb-16 bg-white">
                                        <h5 class="color-sec mb-24">
                                            ★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                class="text-16 fw-400 dark-black">(80)</span>
                                        </h5>
                                        <h6>
                                            <span class="text-decoration-line-through light-gray">
                                                $12.00</span>&nbsp;&nbsp;$10.00
                                        </h6>
                                    </div>
                                    <a href="#" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">

                                    <a href="#"><img src="{{ asset('/') }}website/assets/media/products/bag.png"
                                            class="product-image" alt="" /></a>
                                    <div class="side-icons">
                                        {{-- <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#productQuickView">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                    data-bs-target="#comparepopup">
                                                    <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                        alt="" />
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <h6 class="product-title mb-8">
                                        <a href="#">iPad Standard Plus</a>
                                    </h6>
                                    <div class="text mb-12">
                                        <p class="light-gray">
                                            Lorem ipsum dolor sit amet consectetur. Id viverra
                                            cursus enim risus mattis urnanullam quis magna.
                                            Ligula maecenas integer diam risus rhoncus at.
                                            Viverra a consectetur ac lobortis.
                                        </p>
                                    </div>
                                    <div class="rating-star mb-16 bg-white">
                                        <h5 class="color-sec mb-24">
                                            ★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                class="text-16 fw-400 dark-black">(80)</span>
                                        </h5>
                                        <h6>
                                            <span class="text-decoration-line-through light-gray">
                                                $12.00</span>&nbsp;&nbsp;$10.00
                                        </h6>
                                    </div>
                                    <a href="#" class="cus-btn-2 w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Product End -->

    <!-- Inner Banner Start -->
    <section class="inner-banner" style="background-image: url({{ asset($popularSlider->image) }})">
        {{-- <div class="container-fluid">
            <div class="inner-content">
                <div class="inner-text">
                    <h2 class="white">
                        Big Saving Await! <br />
                        <span class="color-ter">Shop Now</span>&nbsp;for Unbeatable
                        Deals!
                    </h2>
                </div>
                <div class="inner-image">
                    <img height="200" width="200" src="{{ asset('/') }}website/assets/media/images/bag.png"
    alt="" />
    </div>
    <div class="inner-image-2">
        <img src="{{ asset('/') }}website/assets/media/images/banner-image-2.png" alt="" />
    </div>
    </div>
    </div> --}}
    </section>
    <!-- Inner Banner End -->

    <!-- Recommended Product Start -->
    <section class="recommended-product bg-lightest-gray py-40">
        <div class="container-fluid">
            <div class="top-bar mb-16">
                <h5>New Arrivals Products</h5>
                <a href="{{ route('shop') }}" class="cus-btn-arrow">
                    Show All
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15"
                        fill="none">
                        <path
                            d="M13.3545 14.7476C13.3545 11.7476 16.1545 7.74756 19.3545 7.74756M19.3545 7.74756C17.5212 7.74756 13.3545 6.74756 13.3545 0.747559M19.3545 7.74756H0.354492"
                            stroke="#0C0C0D" stroke-width="2" />
                    </svg>
                </a>
            </div>
            <div class="row row-gap-3">
                @foreach ($newarrivalsProducts as $product)
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <form action="{{ route('cart.add', $product->id) }}" method="post">
                                @csrf
                                <input type="hidden" name="qty" value="1">
                                <input type="hidden" name="size" value="{{ $product->productSizes[0]->size->id }}">
                                <input type="hidden" name="color"
                                    value="{{ $product->productColors[0]->color->id }}">
                                <div class="image-box mb-16">

                                    <a href="{{ route('product-detail', $product->id) }}"><img
                                            src="{{ asset($product->image) }}" class="product-image" height="200"
                                            alt="" /></a>
                                    <div class="side-icons">
                                        {{-- <ul class="list-unstyled">
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                    alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn quick-view-btn" data-id="{{ $product->id }}"
                                                data-name="{{ $product->name }}"
                                                data-brand="{{ $product->brand->name ?? 'Unknown' }}"
                                                data-reviews="02 Reviews"
                                                data-regular-price="{{ $product->regular_price }}"
                                                data-selling-price="{{ $product->selling_price }}" data-discount="-12%"
                                                data-description="{{ strlen($product->short_description) > 150 ? substr($product->short_description, 0, 150) . ' ...' : $product->short_description }}"
                                                data-category={{ $product->category->name ?? 'Unknown' }}
                                                data-image="{{ asset($product->image) }}" data-bs-toggle="modal"
                                                data-bs-target="#productQuickView">
                                                <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                    alt="Quick View" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                data-bs-target="#comparepopup">
                                                <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                    alt="" />
                                            </a>
                                        </li>
                                    </ul> --}}
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <h6 class="product-title mb-8">
                                        <a
                                            href="{{ route('product-detail', $product->id) }}">{{ strlen($product->name) > 10 ? substr($product->name, 0, 14) . ' ...' : $product->name }}</a>
                                    </h6>
                                    <div class="text mb-12">
                                        <p class="light-gray">
                                            {{ substr($product->short_description, 0, 30) }}
                                        </p>
                                    </div>
                                    <div class="rating-star mb-16 bg-white">
                                        <h6>
                                            <span class="text-decoration-line-through light-gray">
                                                TK:{{ $product->regular_price }}</span>&nbsp;&nbsp;TK:{{ $product->selling_price }}
                                        </h6>
                                    </div>
                                    <button type="submit" class="cus-btn-2 w-100">Add to Cart</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Recommended Product End -->

    <!-- Brand Slider Start -->
    <div class="brand-sec">
        <div class="brand-slider">
            <div class="brand-block">
                <img src="{{ asset('/') }}website/assets/media/icons/logo-1.png" alt="" />
            </div>
            <div class="brand-block">
                <img src="{{ asset('/') }}website/assets/media/icons/logo-2.png" alt="" />
            </div>
            <div class="brand-block">
                <img src="{{ asset('/') }}website/assets/media/icons/logo-3.png" alt="" />
            </div>
            <div class="brand-block">
                <img src="{{ asset('/') }}website/assets/media/icons/logo-4.png" alt="" />
            </div>
            <div class="brand-block">
                <img src="{{ asset('/') }}website/assets/media/icons/logo-5.png" alt="" />
            </div>
            <div class="brand-block">
                <img src="{{ asset('/') }}website/assets/media/icons/logo-6.png" alt="" />
            </div>
            <div class="brand-block">
                <img src="{{ asset('/') }}website/assets/media/icons/logo-1.png" alt="" />
            </div>
            <div class="brand-block">
                <img src="{{ asset('/') }}website/assets/media/icons/logo-2.png" alt="" />
            </div>
            <div class="brand-block">
                <img src="{{ asset('/') }}website/assets/media/icons/logo-3.png" alt="" />
            </div>
            <div class="brand-block">
                <img src="{{ asset('/') }}website/assets/media/icons/logo-4.png" alt="" />
            </div>
            <div class="brand-block">
                <img src="{{ asset('/') }}website/assets/media/icons/logo-5.png" alt="" />
            </div>
            <div class="brand-block">
                <img src="{{ asset('/') }}website/assets/media/icons/logo-6.png" alt="" />
            </div>
        </div>
    </div>
    <!-- Brand Slider End -->

    <!-- Blog Section Start -->
    <section class="blog-section bg-lightest-gray py-40">
        <div class="container-fluid">
            <div class="top-bar mb-16">
                <h5>Latest Blogs</h5>
                <div class="slider-arrow">
                    <button class="arrow btn-prev" data-slide="blog-slider">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32"
                            fill="none">
                            <path
                                d="M12.8057 23C12.8057 20 10.0057 16 6.80566 16M6.80566 16C8.639 16 12.8057 15 12.8057 9M6.80566 16H25.8057"
                                stroke="#1B1918" stroke-width="2"></path>
                        </svg>
                    </button>
                    <button class="arrow btn-next" data-slide="blog-slider">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                            fill="none">
                            <path
                                d="M19.3545 23C19.3545 20 22.1545 16 25.3545 16M25.3545 16C23.5212 16 19.3545 15 19.3545 9M25.3545 16H6.35449"
                                stroke="#1B1918" stroke-width="2"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="blog-slider" data-parent="blog-slider">
                <a href="#" class="blog-block bg-white">
                    <div class="blog-image">
                        <img src="{{ asset('/') }}website/assets/media/blogs/blog-1.png" alt="" />
                    </div>
                    <div class="blog-content">
                        <p class="mb-16 fw-500 dark-black">24 June, 2024</p>
                        <h6 class="mb-16 fw-600">
                            Headphone Heroes: Elevating Your Experience Quality Sound
                        </h6>
                        <div class="d-flex align-items-center justify-content-between mb-16">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('/') }}website/assets/media/users/user-1.png" alt="" />
                                <p class="light-gray">
                                    By <span class="color-primary">Emily</span>
                                </p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('/') }}website/assets/media/icons/icon-1.png" alt="" />
                                <p class="light-gray">Comments</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('/') }}website/assets/media/icons/icon-2.png" alt="" />
                                <p class="light-gray">Views</p>
                            </div>
                        </div>
                        <p class="light-gray mb-32">
                            Lorem ipsum dolor sit amet consectetur. Vitae vel sit
                            convallis aliquet amet vestibulum maecenas ac.
                        </p>
                        <div class="cus-btn-arrow">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15"
                                fill="none">
                                <path
                                    d="M13.3545 14.7476C13.3545 11.7476 16.1545 7.74756 19.3545 7.74756M19.3545 7.74756C17.5212 7.74756 13.3545 6.74756 13.3545 0.747559M19.3545 7.74756H0.354492"
                                    stroke="#0C0C0D" stroke-width="2" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a href="#" class="blog-block bg-white">
                    <div class="blog-image">
                        <img src="{{ asset('/') }}website/assets/media/blogs/blog-2.png" alt="" />
                    </div>
                    <div class="blog-content">
                        <p class="mb-16 fw-500 dark-black">24 June, 2024</p>
                        <h6 class="mb-16 fw-600">
                            Gizmo Galore: Exploring the Coolest Gadgets on the Market
                        </h6>
                        <div class="d-flex align-items-center justify-content-between mb-16">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('/') }}website/assets/media/users/user-1.png" alt="" />
                                <p class="light-gray">
                                    By <span class="color-primary">Emily</span>
                                </p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('/') }}website/assets/media/icons/icon-1.png" alt="" />
                                <p class="light-gray">Comments</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('/') }}website/assets/media/icons/icon-2.png" alt="" />
                                <p class="light-gray">Views</p>
                            </div>
                        </div>
                        <p class="light-gray mb-32">
                            Lorem ipsum dolor sit amet consectetur. Vitae vel sit
                            convallis aliquet amet vestibulum maecenas ac.
                        </p>
                        <div class="cus-btn-arrow">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15"
                                fill="none">
                                <path
                                    d="M13.3545 14.7476C13.3545 11.7476 16.1545 7.74756 19.3545 7.74756M19.3545 7.74756C17.5212 7.74756 13.3545 6.74756 13.3545 0.747559M19.3545 7.74756H0.354492"
                                    stroke="#0C0C0D" stroke-width="2" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a href="#" class="blog-block bg-white">
                    <div class="blog-image">
                        <img src="{{ asset('/') }}website/assets/media/blogs/blog-3.png" alt="" />
                    </div>
                    <div class="blog-content">
                        <p class="mb-16 fw-500 dark-black">24 June, 2024</p>
                        <h6 class="mb-16 fw-600">
                            The 4K Perspective: Gaining Insights into Ultra HD
                            Entertainment
                        </h6>
                        <div class="d-flex align-items-center justify-content-between mb-16">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('/') }}website/assets/media/users/user-1.png" alt="" />
                                <p class="light-gray">
                                    By <span class="color-primary">Emily</span>
                                </p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('/') }}website/assets/media/icons/icon-1.png" alt="" />
                                <p class="light-gray">Comments</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('/') }}website/assets/media/icons/icon-2.png" alt="" />
                                <p class="light-gray">Views</p>
                            </div>
                        </div>
                        <p class="light-gray mb-32">
                            Lorem ipsum dolor sit amet consectetur. Vitae vel sit
                            convallis aliquet amet vestibulum maecenas ac.
                        </p>
                        <div class="cus-btn-arrow">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15"
                                fill="none">
                                <path
                                    d="M13.3545 14.7476C13.3545 11.7476 16.1545 7.74756 19.3545 7.74756M19.3545 7.74756C17.5212 7.74756 13.3545 6.74756 13.3545 0.747559M19.3545 7.74756H0.354492"
                                    stroke="#0C0C0D" stroke-width="2" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a href="#" class="blog-block bg-white">
                    <div class="blog-image">
                        <img src="{{ asset('/') }}website/assets/media/blogs/blog-4.png" alt="" />
                    </div>
                    <div class="blog-content">
                        <p class="mb-16 fw-500 dark-black">24 June, 2024</p>
                        <h6 class="mb-16 fw-600">
                            Gaming Grasp: Navigating the World of Game Controllers
                        </h6>
                        <div class="d-flex align-items-center justify-content-between mb-16">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('/') }}website/assets/media/users/user-1.png" alt="" />
                                <p class="light-gray">
                                    By <span class="color-primary">Emily</span>
                                </p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('/') }}website/assets/media/icons/icon-1.png" alt="" />
                                <p class="light-gray">Comments</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('/') }}website/assets/media/icons/icon-2.png" alt="" />
                                <p class="light-gray">Views</p>
                            </div>
                        </div>
                        <p class="light-gray mb-32">
                            Lorem ipsum dolor sit amet consectetur. Vitae vel sit
                            convallis aliquet amet vestibulum maecenas ac.
                        </p>
                        <div class="cus-btn-arrow">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15"
                                fill="none">
                                <path
                                    d="M13.3545 14.7476C13.3545 11.7476 16.1545 7.74756 19.3545 7.74756M19.3545 7.74756C17.5212 7.74756 13.3545 6.74756 13.3545 0.747559M19.3545 7.74756H0.354492"
                                    stroke="#0C0C0D" stroke-width="2" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a href="#" class="blog-block bg-white">
                    <div class="blog-image">
                        <img src="{{ asset('/') }}website/assets/media/blogs/blog-1.png" alt="" />
                    </div>
                    <div class="blog-content">
                        <p class="mb-16 fw-500 dark-black">24 June, 2024</p>
                        <h6 class="mb-16 fw-600">
                            Headphone Heroes: Elevating Your Experience Quality Sound
                        </h6>
                        <div class="d-flex align-items-center justify-content-between mb-16">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('/') }}website/assets/media/users/user-1.png" alt="" />
                                <p class="light-gray">
                                    By <span class="color-primary">Emily</span>
                                </p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('/') }}website/assets/media/icons/icon-1.png" alt="" />
                                <p class="light-gray">Comments</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('/') }}website/assets/media/icons/icon-2.png" alt="" />
                                <p class="light-gray">Views</p>
                            </div>
                        </div>
                        <p class="light-gray mb-32">
                            Lorem ipsum dolor sit amet consectetur. Vitae vel sit
                            convallis aliquet amet vestibulum maecenas ac.
                        </p>
                        <div class="cus-btn-arrow">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15"
                                fill="none">
                                <path
                                    d="M13.3545 14.7476C13.3545 11.7476 16.1545 7.74756 19.3545 7.74756M19.3545 7.74756C17.5212 7.74756 13.3545 6.74756 13.3545 0.747559M19.3545 7.74756H0.354492"
                                    stroke="#0C0C0D" stroke-width="2" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a href="#" class="blog-block bg-white">
                    <div class="blog-image">
                        <img src="{{ asset('/') }}website/assets/media/blogs/blog-2.png" alt="" />
                    </div>
                    <div class="blog-content">
                        <p class="mb-16 fw-500 dark-black">24 June, 2024</p>
                        <h6 class="mb-16 fw-600">
                            Gizmo Galore: Exploring the Coolest Gadgets on the Market
                        </h6>
                        <div class="d-flex align-items-center justify-content-between mb-16">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('/') }}website/assets/media/users/user-1.png" alt="" />
                                <p class="light-gray">
                                    By <span class="color-primary">Emily</span>
                                </p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('/') }}website/assets/media/icons/icon-1.png" alt="" />
                                <p class="light-gray">Comments</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('/') }}website/assets/media/icons/icon-2.png" alt="" />
                                <p class="light-gray">Views</p>
                            </div>
                        </div>
                        <p class="light-gray mb-32">
                            Lorem ipsum dolor sit amet consectetur. Vitae vel sit
                            convallis aliquet amet vestibulum maecenas ac.
                        </p>
                        <div class="cus-btn-arrow">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15"
                                fill="none">
                                <path
                                    d="M13.3545 14.7476C13.3545 11.7476 16.1545 7.74756 19.3545 7.74756M19.3545 7.74756C17.5212 7.74756 13.3545 6.74756 13.3545 0.747559M19.3545 7.74756H0.354492"
                                    stroke="#0C0C0D" stroke-width="2" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a href="#" class="blog-block bg-white">
                    <div class="blog-image">
                        <img src="{{ asset('/') }}website/assets/media/blogs/blog-3.png" alt="" />
                    </div>
                    <div class="blog-content">
                        <p class="mb-16 fw-500 dark-black">24 June, 2024</p>
                        <h6 class="mb-16 fw-600">
                            The 4K Perspective: Gaining Insights into Ultra HD
                            Entertainment
                        </h6>
                        <div class="d-flex align-items-center justify-content-between mb-16">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('/') }}website/assets/media/users/user-1.png" alt="" />
                                <p class="light-gray">
                                    By <span class="color-primary">Emily</span>
                                </p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('/') }}website/assets/media/icons/icon-1.png" alt="" />
                                <p class="light-gray">Comments</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('/') }}website/assets/media/icons/icon-2.png" alt="" />
                                <p class="light-gray">Views</p>
                            </div>
                        </div>
                        <p class="light-gray mb-32">
                            Lorem ipsum dolor sit amet consectetur. Vitae vel sit
                            convallis aliquet amet vestibulum maecenas ac.
                        </p>
                        <div class="cus-btn-arrow">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15"
                                viewBox="0 0 20 15" fill="none">
                                <path
                                    d="M13.3545 14.7476C13.3545 11.7476 16.1545 7.74756 19.3545 7.74756M19.3545 7.74756C17.5212 7.74756 13.3545 6.74756 13.3545 0.747559M19.3545 7.74756H0.354492"
                                    stroke="#0C0C0D" stroke-width="2" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a href="#" class="blog-block bg-white">
                    <div class="blog-image">
                        <img src="{{ asset('/') }}website/assets/media/blogs/blog-4.png" alt="" />
                    </div>
                    <div class="blog-content">
                        <p class="mb-16 fw-500 dark-black">24 June, 2024</p>
                        <h6 class="mb-16 fw-600">
                            Gaming Grasp: Navigating the World of Game Controllers
                        </h6>
                        <div class="d-flex align-items-center justify-content-between mb-16">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('/') }}website/assets/media/users/user-1.png" alt="" />
                                <p class="light-gray">
                                    By <span class="color-primary">Emily</span>
                                </p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('/') }}website/assets/media/icons/icon-1.png" alt="" />
                                <p class="light-gray">Comments</p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('/') }}website/assets/media/icons/icon-2.png" alt="" />
                                <p class="light-gray">Views</p>
                            </div>
                        </div>
                        <p class="light-gray mb-32">
                            Lorem ipsum dolor sit amet consectetur. Vitae vel sit
                            convallis aliquet amet vestibulum maecenas ac.
                        </p>
                        <div class="cus-btn-arrow">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15"
                                viewBox="0 0 20 15" fill="none">
                                <path
                                    d="M13.3545 14.7476C13.3545 11.7476 16.1545 7.74756 19.3545 7.74756M19.3545 7.74756C17.5212 7.74756 13.3545 6.74756 13.3545 0.747559M19.3545 7.74756H0.354492"
                                    stroke="#0C0C0D" stroke-width="2" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Inner Banner Start -->
    <section class="inner-banner" style="background-image: url({{ asset($footerSlider->image) }});">
        {{-- <div class="container-fluid">
            <div class="inner-content v-2">
                <div class="inner-text">
                    <h2 class="white">
                        <span class="color-ter">Hurry up!</span>&nbsp;Offer ends in
                    </h2>
                </div>
                <div class="coming-soon-cd">
                    <ul class="unstyled countdown">
                        <li>
                            <h2 class="h5">365</h2>
                            <h6 class="fw-500">Days</h6>
                        </li>
                        <li>
                            <h2 class="h5">24</h2>
                            <h6 class="fw-500">Hrs</h6>
                        </li>
                        <li>
                            <h2 class="h5">60</h2>
                            <h6 class="fw-500">Min</h6>
                        </li>
                        <li>
                            <h2 class="h5">60</h2>
                            <h6 class="fw-500">Secs</h6>
                        </li>
                    </ul>
                </div>
                <div class="inner-image-2">
                    <img height="200" width="200"
                        src="{{ asset('/') }}website/assets/media/images/watch.png" alt="" />
    </div>
    </div>
    </div> --}}
    </section>
    <!-- Inner Banner End -->
@endsection
