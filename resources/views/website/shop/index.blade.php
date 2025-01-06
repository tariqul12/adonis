@extends('website.master')

@section('title')
    Products Page
@endsection

@section('body')
    <!-- Title Banner Start -->
    <section class="title-banner" style="background-image: url({{ asset($pageTitleBanner->image) }});">
        <h1 class="dark-black fw-600">All Products</h1>
        {{-- <div class="container-fluid">
            <div class="banner-wrapper">
                <img src="{{ asset('/') }}website/assets/media/images/bag.png" alt="" class="banner-image1">
                <img src="{{ asset('/') }}website/assets/media/images/saree-2.png" alt="" class="banner-image2">
            </div>
        </div> --}}
    </section>
    <!-- Title Banner End -->

    <!-- Featured Product Start -->
    <section class="featured-product-sec py-40 bg-lightest-gray">
        <div class="container-fluid">
            <div class="row row-gap-3">
                <div class="col-xl-3">
                    <div class="sidebar bg-white">
                        <form action="#" class="mb-24">
                            <input type="text" name="search" id="searchBar" class="form-control"
                                placeholder="Search Here...">
                            <button>
                                <i class="fa-light fa-magnifying-glass"></i>
                            </button>
                        </form>
                        <div class="hr-line mb-24"></div>
                        <div class="category-block box-1 mb-24">
                            <div class="title mb-24" data-count="1">
                                <h6>Product Categories</h6>
                                <span>
                                    <i class="far fa-horizontal-rule"></i>
                                </span>
                            </div>
                            <div class="content-block">
                                <ul class="list-unstyled">
                                    @foreach ($categories as $category)
                                        <li class="checkbox-group">
                                            <div
                                                class="arrow-block d-flex align-items-center justify-content-between mb-16">
                                                <div class="check-block">
                                                    <input type="checkbox" id="cable-check" class="sub-check-box">
                                                    <label for="cable-check"><a
                                                            href="{{ route('category', $category->id) }}">{{ $category->name }}</a></label>
                                                </div>

                                            </div>

                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="hr-line mb-24"> </div>
                        <div class="category-block box-2 mb-24">
                            <div class="title mb-32" data-count="2">
                                <h6>Filter By Price</h6>
                                <span>
                                    <i class="far fa-horizontal-rule"></i>
                                </span>
                            </div>
                            <div class="content-block">
                                <div class="wrapper">
                                    <div class="price-input mb-24">
                                        <div class="field">
                                            <div class="fw-500 mb-4p">Low</div>
                                            <input type="number" class="input-min" value="2500">
                                        </div>
                                        <div class="field">
                                            <div class="fw-500 mb-4p">High</div>
                                            <input type="number" class="input-max" value="7500">
                                        </div>
                                    </div>
                                    <div class="slider">
                                        <div class="progress"></div>
                                    </div>
                                    <div class="range-input">
                                        <input type="range" class="range-min" min="0" max="10000" value="2500"
                                            step="100">
                                        <input type="range" class="range-max" min="0" max="10000" value="7500"
                                            step="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line mb-24"></div>
                        <div class="category-block box-4 mb-24">
                            <div class="title mb-32" data-count="4">
                                <h6>Filter By Colors</h6>
                                <span>
                                    <i class="far fa-horizontal-rule"></i>
                                </span>
                            </div>
                            <div class="content-block">
                                <div class="product-color">
                                    <ul class="unstyled list">
                                        <li>
                                            <label for="muhRadio9"
                                                class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                                <input type="radio" id="muhRadio9" name="muhRadio" class="radio-1"
                                                    value="muhRadio1">
                                            </label>
                                        </li>
                                        <li>
                                            <label for="muhRadio8"
                                                class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                                <input type="radio" id="muhRadio8" name="muhRadio" class="radio-2"
                                                    value="muhRadio2">
                                            </label>
                                        </li>
                                        <li>
                                            <label for="muhRadio7"
                                                class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                                <input type="radio" id="muhRadio7" name="muhRadio" class="radio-3"
                                                    value="muhRadio3">
                                            </label>
                                        </li>
                                        <li>
                                            <label for="muhRadio1"
                                                class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                                <input type="radio" id="muhRadio1" name="muhRadio" class="radio-4"
                                                    value="muhRadio1">
                                            </label>
                                        </li>
                                        <li>
                                            <label for="muhRadio2"
                                                class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                                <input type="radio" id="muhRadio2" name="muhRadio" class="radio-5"
                                                    value="muhRadio2">
                                            </label>
                                        </li>
                                        <li>
                                            <label for="muhRadio3"
                                                class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                                <input type="radio" id="muhRadio3" name="muhRadio" class="radio-6"
                                                    value="muhRadio3">
                                            </label>
                                        </li>
                                        <li>
                                            <label for="muhRadio4"
                                                class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                                <input type="radio" id="muhRadio4" name="muhRadio" class="radio-7"
                                                    value="muhRadio4">
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line mb-24"></div>
                        <div class="category-block box-7 mb-24">
                            <div class="title mb-24" data-count="7">
                                <h6>Feature Products</h6>
                                <span>
                                    <i class="far fa-horizontal-rule"></i>
                                </span>
                            </div>
                            <div class="content-block">
                                <a href="shop-list-1.html" class="d-flex gap-24 align-items-center mb-24">
                                    <div class="image-box d-flex flex-shrink-0">
                                        <img src="{{ asset('/') }}website/assets/media/images/sidebar-1.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <p class="mb-8">Samsung Galaxy S20 FE 8GB/256GB Blue</p>
                                        <p class="color-primary"><span
                                                class="light-gray text-decoration-line-through">$700.00</span>&nbsp;$650.00
                                        </p>
                                    </div>
                                </a>
                                <div class="hr-line mb-24"></div>
                                <a href="shop-list-1.html" class="d-flex gap-24 align-items-center mb-24">
                                    <div class="image-box d-flex flex-shrink-0">
                                        <img src="{{ asset('/') }}website/assets/media/images/sidebar-2.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <p class="mb-8">Beats Studio Wireless Noise Cancelling Over-Ear</p>
                                        <p class="color-primary">$650.00</p>
                                    </div>
                                </a>
                                <div class="hr-line mb-24"></div>
                                <a href="shop-list-1.html" class="d-flex gap-24 align-items-center">
                                    <div class="image-box d-flex flex-shrink-0">
                                        <img src="{{ asset('/') }}website/assets/media/images/sidebar-3.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <p class="mb-8">Logitech F710 Wireless Gamepad - 940-000119</p>
                                        <p class="color-primary"><span
                                                class="light-gray text-decoration-line-through">$700.00</span>&nbsp;$650.00
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="shop-grid-topbar mb-16">
                        <div class="last-block">
                            <div class="d-lg-flex d-none align-items-center gap-8">
                                <p class="dark-gray">All Products</p>

                            </div>
                        </div>
                    </div>
                    <div class="row row-gap-3">
                        @foreach ($products as $product)
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                <div class="featured-product-card bg-white br-10">
                                    <div class="image-box mb-16">
                                        <a href="{{ route('product-detail', $product->id) }}"><img
                                                src="{{ asset($product->image) }}" class="product-image" height="200"
                                                alt="" /></a>
                                        <div class="side-icons">
                                            <ul class="list-unstyled">
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
                                            </ul>
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
                                        <a href="" class="cus-btn-2 w-100">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="pagination pt-40">
                        <ul id="border-pagination">
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32"
                                        viewBox="0 0 33 32" fill="none">
                                        <path
                                            d="M20.1953 22.9995C20.1953 19.9995 22.9953 15.9995 26.1953 15.9995M26.1953 15.9995C24.362 15.9995 20.1953 14.9995 20.1953 8.99951M26.1953 15.9995H7.19531"
                                            stroke="#282525" stroke-width="2" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Product End -->
@endsection
