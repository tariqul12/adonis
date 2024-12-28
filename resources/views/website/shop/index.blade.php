@extends('website.master')

@section('title')
    About Us Page
@endsection

@section('body')
    <!-- Title Banner Start -->
    <section class="title-banner" style="background-image: url({{ asset($pageTitleBanner->image) }});">
        <h1 class="dark-black fw-600">Shop</h1>
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
            <div class="shop-grid-topbar-container mb-16">
                <div class="shop-grid-topbar v-2 mb-12 p-0">
                    <div class="first-block">
                        <div class="visual-btns v-2">
                            <a href="javascript:;" class="visual-box shop-filter">
                                <img src="{{ asset('/') }}website/assets/media/icons/filter-icon.png" alt="">
                                <span>Filter</span>
                            </a>
                            <a href="shop-grid-4.html" class="visual-box active">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_7819_28489)">
                                        <path
                                            d="M8.28713 0H2.77537C1.24505 0 0 1.24505 0 2.77538V8.28712C0 9.81745 1.24505 11.0625 2.77537 11.0625H8.28713C9.81745 11.0625 11.0625 9.81745 11.0625 8.28712V2.77538C11.0625 1.24505 9.81745 0 8.28713 0ZM9.57841 8.28712C9.57841 9.12359 9.06189 9.55049 8.28713 9.55049H2.77537C1.97667 9.55049 1.51201 9.03237 1.51201 8.28712V2.77538C1.51201 2.05357 1.88548 1.5539 2.77537 1.5539H8.3007C9.21393 1.5539 9.57841 1.87112 9.57841 2.77538V8.28712Z"
                                            fill="#92949F" />
                                        <path
                                            d="M21.2246 0H15.7129C14.1825 0 12.9375 1.24505 12.9375 2.77538V8.28712C12.9375 9.81745 14.1825 11.0625 15.7129 11.0625H21.2246C22.755 11.0625 24 9.81745 24 8.28712V2.77538C24 1.24505 22.755 0 21.2246 0ZM22.5159 8.28712C22.5159 9.12359 21.9994 9.55049 21.2246 9.55049H15.7129C14.9142 9.55049 14.4495 9.03237 14.4495 8.28712V2.77538C14.4495 2.05357 14.823 1.5539 15.7129 1.5539H21.2382C22.1514 1.5539 22.5159 1.87112 22.5159 2.77538V8.28712Z"
                                            fill="#92949F" />
                                        <path
                                            d="M8.28713 12.9375H2.77537C1.24505 12.9375 0 14.1825 0 15.7129V21.2246C0 22.755 1.24505 24 2.77537 24H8.28713C9.81745 24 11.0625 22.755 11.0625 21.2246V15.7129C11.0625 14.1825 9.81745 12.9375 8.28713 12.9375ZM9.57841 21.2246C9.57841 22.0611 9.06189 22.488 8.28713 22.488H2.77537C1.97667 22.488 1.51201 21.9699 1.51201 21.2246V15.7129C1.51201 14.9911 1.88548 14.4914 2.77537 14.4914H8.3007C9.21393 14.4914 9.57841 14.8086 9.57841 15.7129V21.2246Z"
                                            fill="#92949F" />
                                        <path
                                            d="M21.2246 12.9375H15.7129C14.1825 12.9375 12.9375 14.1825 12.9375 15.7129V21.2246C12.9375 22.755 14.1825 24 15.7129 24H21.2246C22.755 24 24 22.755 24 21.2246V15.7129C24 14.1825 22.755 12.9375 21.2246 12.9375ZM22.5159 21.2246C22.5159 22.0611 21.9994 22.488 21.2246 22.488H15.7129C14.9142 22.488 14.4495 21.9699 14.4495 21.2246V15.7129C14.4495 14.9911 14.823 14.4914 15.7129 14.4914H21.2382C22.1514 14.4914 22.5159 14.8086 22.5159 15.7129V21.2246Z"
                                            fill="#92949F" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_7819_28489">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <a href="shop-list-1.html" class="visual-box">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_7819_28490)">
                                        <path
                                            d="M1.5 4.5C2.32837 4.5 3 3.82844 3 3C3 2.17156 2.32837 1.5 1.5 1.5C0.671631 1.5 0 2.17156 0 3C0 3.82844 0.671631 4.5 1.5 4.5Z"
                                            fill="#92949F" />
                                        <path
                                            d="M6.75 2.25C6.33545 2.25 6 2.58579 6 3C6 3.41421 6.33545 3.75 6.75 3.75H23.25C23.6646 3.75 24 3.41421 24 3C24 2.58579 23.6646 2.25 23.25 2.25H6.75Z"
                                            fill="#92949F" />
                                        <path
                                            d="M1.5 13.5C2.32843 13.5 3 12.8284 3 12C3 11.1716 2.32843 10.5 1.5 10.5C0.671573 10.5 0 11.1716 0 12C0 12.8284 0.671573 13.5 1.5 13.5Z"
                                            fill="#92949F" />
                                        <path
                                            d="M6.75 11.25C6.33579 11.25 6 11.5858 6 12C6 12.4142 6.33579 12.75 6.75 12.75H23.25C23.6642 12.75 24 12.4142 24 12C24 11.5858 23.6642 11.25 23.25 11.25H6.75Z"
                                            fill="#92949F" />
                                        <path
                                            d="M3 21C3 21.8284 2.32843 22.5 1.5 22.5C0.671573 22.5 0 21.8284 0 21C0 20.1716 0.671573 19.5 1.5 19.5C2.32843 19.5 3 20.1716 3 21Z"
                                            fill="#92949F" />
                                        <path
                                            d="M6 21C6 20.5858 6.33579 20.25 6.75 20.25H23.25C23.6642 20.25 24 20.5858 24 21C24 21.4142 23.6642 21.75 23.25 21.75H6.75C6.33579 21.75 6 21.4142 6 21Z"
                                            fill="#92949F" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_7819_28490">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="results d-xl-block d-none">
                            <p class="dark-gray">Showing 01 - 09 of 30 Results</p>
                        </div>
                    </div>
                    
                    <div class="last-block v-2">
                        <div class="d-lg-flex d-none align-items-center gap-8">
                            <p class="dark-gray">Short by:</p>
                            <div class="drop-container">
                                <div class="wrapper-dropdown dark-black" id="dropdown12">
                                    <span class="selected-display" id="destination12">Price:</span>
                                    <svg id="drp-arrow1" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="arrow transition-all ml-auto rotate-180">
                                        <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <ul class="topbar-dropdown bg-light-gray">
                                        <li class="item dark-black">Price: low to high</li>
                                        <li class="item dark-black">high to low</li>
                                        <li class="item dark-black">Average Rating</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="drop-container v-2">
                            <div class="wrapper-dropdown dark-black v-2" id="dropdown21">
                                <span class="selected-display" id="destination21">Show:</span>
                                <svg id="drp-arrow-002" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                    class="arrow transition-all ml-auto rotate-180">
                                    <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <ul class="topbar-dropdown bg-light-gray">
                                    <li class="item dark-black">Show: 9</li>
                                    <li class="item dark-black">Show: 5</li>
                                    <li class="item dark-black">Show: 4</li>
                                    <li class="item dark-black">Show: 3</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hr-line mb-sm-12 mb-24"></div>
                <div class="shop-grid-bottombar">
                    <p class="light-gray">Selected filters:</p>
                    <a href="#" class="filter-tag">
                        <span>Wireless Headphones</span>
                        <i class="fa-thin fa-xmark"></i>
                    </a>
                    <a href="#" class="filter-tag">
                        <span>Min $30 - Max $300</span>
                        <i class="fa-thin fa-xmark"></i>
                    </a>
                    <a href="#" class="text-decoration-underline fw-500">
                        Clear All
                    </a>
                </div>

            </div>
            <div class="row row-gap-3">
                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4">
                    <div class="featured-product-card bg-white br-10">
                        <div class="image-box mb-16">
                            <span class="sale-label">-12%</span>
                            <a href="shop-detail.html"><img
                                    src="{{ asset('/') }}website/assets/media/products/product-1.png"
                                    class="product-image" alt=""></a>
                            <div class="side-icons">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="wishlist.html">
                                            <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#productQuickView">
                                            <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                            data-bs-target="#comparepopup">
                                            <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-desc">
                            <h6 class="product-title mb-8"><a href="shop-detail.html">Elite Audio Gear</a></h6>
                            <div class="text mb-16">
                                <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus
                                    mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a
                                    consectetur ac lobortis.</p>
                            </div>
                            <div class="rating-star mb-16 bg-white">
                                <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                        class="text-16 fw-400 dark-black">(80)</span></h5>
                                <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00
                                </h6>
                            </div>
                            <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4">
                    <div class="featured-product-card bg-white br-10">
                        <div class="image-box mb-16">
                            <span class="sale-label">-12%</span>
                            <a href="shop-detail.html"><img
                                    src="{{ asset('/') }}website/assets/media/products/product-2.png"
                                    class="product-image" alt=""></a>
                            <div class="side-icons">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="wishlist.html">
                                            <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#productQuickView">
                                            <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                            data-bs-target="#comparepopup">
                                            <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-desc">
                            <h6 class="product-title mb-8"><a href="shop-detail.html">Ultra Bright LCD</a></h6>
                            <div class="text mb-16">
                                <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus
                                    mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a
                                    consectetur ac lobortis.</p>
                            </div>
                            <div class="rating-star mb-16 bg-white">
                                <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                        class="text-16 fw-400 dark-black">(80)</span></h5>
                                <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00
                                </h6>
                            </div>
                            <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4">
                    <div class="featured-product-card bg-white br-10">
                        <div class="image-box mb-16">
                            <span class="sale-label">-12%</span>
                            <a href="shop-detail.html"><img
                                    src="{{ asset('/') }}website/assets/media/products/product-4.png"
                                    class="product-image" alt=""></a>
                            <div class="side-icons">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="wishlist.html">
                                            <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#productQuickView">
                                            <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                            data-bs-target="#comparepopup">
                                            <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-desc">
                            <h6 class="product-title mb-8"><a href="shop-detail.html">Nexus Mobile Pro 256GB</a></h6>
                            <div class="text mb-16">
                                <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus
                                    mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a
                                    consectetur ac lobortis.</p>
                            </div>
                            <div class="rating-star mb-16 bg-white">
                                <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                        class="text-16 fw-400 dark-black">(80)</span></h5>
                                <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00
                                </h6>
                            </div>
                            <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4">
                    <div class="featured-product-card bg-white br-10">
                        <div class="image-box mb-16">
                            <span class="sale-label">-12%</span>
                            <a href="shop-detail.html"><img
                                    src="{{ asset('/') }}website/assets/media/products/product-10.png"
                                    class="product-image" alt=""></a>
                            <div class="side-icons">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="wishlist.html">
                                            <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#productQuickView">
                                            <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                            data-bs-target="#comparepopup">
                                            <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-desc">
                            <h6 class="product-title mb-8"><a href="shop-detail.html">Aero Pro Joysticks</a></h6>
                            <div class="text mb-16">
                                <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus
                                    mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a
                                    consectetur ac lobortis.</p>
                            </div>
                            <div class="rating-star mb-16 bg-white">
                                <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                        class="text-16 fw-400 dark-black">(80)</span></h5>
                                <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00
                                </h6>
                            </div>
                            <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4">
                    <div class="featured-product-card bg-white br-10">
                        <div class="image-box mb-16">
                            <span class="sale-label">-12%</span>
                            <a href="shop-detail.html"><img
                                    src="{{ asset('/') }}website/assets/media/products/product-3.png"
                                    class="product-image" alt=""></a>
                            <div class="side-icons">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="wishlist.html">
                                            <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#productQuickView">
                                            <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                            data-bs-target="#comparepopup">
                                            <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-desc">
                            <h6 class="product-title mb-8"><a href="shop-detail.html">Hyper Glide Mouse</a></h6>
                            <div class="text mb-16">
                                <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus
                                    mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a
                                    consectetur ac lobortis.</p>
                            </div>
                            <div class="rating-star mb-16 bg-white">
                                <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                        class="text-16 fw-400 dark-black">(80)</span></h5>
                                <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00
                                </h6>
                            </div>
                            <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4">
                    <div class="featured-product-card bg-white br-10">
                        <div class="image-box mb-16">
                            <span class="sale-label">-12%</span>
                            <a href="shop-detail.html"><img
                                    src="{{ asset('/') }}website/assets/media/products/product-5.png"
                                    class="product-image" alt=""></a>
                            <div class="side-icons">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="wishlist.html">
                                            <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#productQuickView">
                                            <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                            data-bs-target="#comparepopup">
                                            <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-desc">
                            <h6 class="product-title mb-8"><a href="shop-detail.html">Silent Touch Pro</a></h6>
                            <div class="text mb-16">
                                <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus
                                    mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a
                                    consectetur ac lobortis.</p>
                            </div>
                            <div class="rating-star mb-16 bg-white">
                                <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                        class="text-16 fw-400 dark-black">(80)</span></h5>
                                <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00
                                </h6>
                            </div>
                            <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4">
                    <div class="featured-product-card bg-white br-10">
                        <div class="image-box mb-16">
                            <span class="sale-label">-12%</span>
                            <a href="shop-detail.html"><img
                                    src="{{ asset('/') }}website/assets/media/products/product-1b.png"
                                    class="product-image" alt=""></a>
                            <div class="side-icons">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="wishlist.html">
                                            <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#productQuickView">
                                            <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                            data-bs-target="#comparepopup">
                                            <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-desc">
                            <h6 class="product-title mb-8"><a href="shop-detail.html">Radiant View LCD</a></h6>
                            <div class="text mb-16">
                                <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus
                                    mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a
                                    consectetur ac lobortis.</p>
                            </div>
                            <div class="rating-star mb-16 bg-white">
                                <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                        class="text-16 fw-400 dark-black">(80)</span></h5>
                                <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00
                                </h6>
                            </div>
                            <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4">
                    <div class="featured-product-card bg-white br-10">
                        <div class="image-box mb-16">
                            <span class="sale-label">-12%</span>
                            <a href="shop-detail.html"><img
                                    src="{{ asset('/') }}website/assets/media/products/product-2b.png"
                                    class="product-image" alt=""></a>
                            <div class="side-icons">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="wishlist.html">
                                            <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#productQuickView">
                                            <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                            data-bs-target="#comparepopup">
                                            <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-desc">
                            <h6 class="product-title mb-8"><a href="shop-detail.html">Pure Bass Headphones</a></h6>
                            <div class="text mb-16">
                                <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus
                                    mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a
                                    consectetur ac lobortis.</p>
                            </div>
                            <div class="rating-star mb-16 bg-white">
                                <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                        class="text-16 fw-400 dark-black">(80)</span></h5>
                                <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00
                                </h6>
                            </div>
                            <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4">
                    <div class="featured-product-card bg-white br-10">
                        <div class="image-box mb-16">
                            <span class="sale-label">-12%</span>
                            <a href="shop-detail.html"><img
                                    src="{{ asset('/') }}website/assets/media/products/product-3b.png"
                                    class="product-image" alt=""></a>
                            <div class="side-icons">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="wishlist.html">
                                            <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#productQuickView">
                                            <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                            data-bs-target="#comparepopup">
                                            <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-desc">
                            <h6 class="product-title mb-8"><a href="shop-detail.html">Supreme Tech Phone</a></h6>
                            <div class="text mb-16">
                                <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus
                                    mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a
                                    consectetur ac lobortis.</p>
                            </div>
                            <div class="rating-star mb-16 bg-white">
                                <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                        class="text-16 fw-400 dark-black">(80)</span></h5>
                                <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00
                                </h6>
                            </div>
                            <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4">
                    <div class="featured-product-card bg-white br-10">
                        <div class="image-box mb-16">
                            <span class="sale-label">-12%</span>
                            <a href="shop-detail.html"><img
                                    src="{{ asset('/') }}website/assets/media/products/product-4b.png"
                                    class="product-image" alt=""></a>
                            <div class="side-icons">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="wishlist.html">
                                            <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#productQuickView">
                                            <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                            data-bs-target="#comparepopup">
                                            <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-desc">
                            <h6 class="product-title mb-8"><a href="shop-detail.html">iPad Standard Plus</a></h6>
                            <div class="text mb-16">
                                <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus
                                    mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a
                                    consectetur ac lobortis.</p>
                            </div>
                            <div class="rating-star mb-16 bg-white">
                                <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                        class="text-16 fw-400 dark-black">(80)</span></h5>
                                <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00
                                </h6>
                            </div>
                            <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4">
                    <div class="featured-product-card bg-white br-10">
                        <div class="image-box mb-16">
                            <span class="sale-label">-12%</span>
                            <a href="shop-detail.html"><img
                                    src="{{ asset('/') }}website/assets/media/products/product-5b.png"
                                    class="product-image" alt=""></a>
                            <div class="side-icons">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="wishlist.html">
                                            <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#productQuickView">
                                            <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                            data-bs-target="#comparepopup">
                                            <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-desc">
                            <h6 class="product-title mb-8"><a href="shop-detail.html">Ultra Tech Book Plus</a></h6>
                            <div class="text mb-16">
                                <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus
                                    mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a
                                    consectetur ac lobortis.</p>
                            </div>
                            <div class="rating-star mb-16 bg-white">
                                <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                        class="text-16 fw-400 dark-black">(80)</span></h5>
                                <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00
                                </h6>
                            </div>
                            <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4">
                    <div class="featured-product-card bg-white br-10">
                        <div class="image-box mb-16">
                            <span class="sale-label">-12%</span>
                            <a href="shop-detail.html"><img
                                    src="{{ asset('/') }}website/assets/media/products/rec-1.png"
                                    class="product-image" alt=""></a>
                            <div class="side-icons">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="wishlist.html">
                                            <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#productQuickView">
                                            <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                            data-bs-target="#comparepopup">
                                            <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-desc">
                            <h6 class="product-title mb-8"><a href="shop-detail.html">White Earbuds</a></h6>
                            <div class="text mb-16">
                                <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus
                                    mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a
                                    consectetur ac lobortis.</p>
                            </div>
                            <div class="rating-star mb-16 bg-white">
                                <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                        class="text-16 fw-400 dark-black">(80)</span></h5>
                                <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00
                                </h6>
                            </div>
                            <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4">
                    <div class="featured-product-card bg-white br-10">
                        <div class="image-box mb-16">
                            <span class="sale-label">-12%</span>
                            <a href="shop-detail.html"><img
                                    src="{{ asset('/') }}website/assets/media/products/product-2.png"
                                    class="product-image" alt=""></a>
                            <div class="side-icons">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="wishlist.html">
                                            <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#productQuickView">
                                            <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                            data-bs-target="#comparepopup">
                                            <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-desc">
                            <h6 class="product-title mb-8"><a href="shop-detail.html">Ultra Bright LCD</a></h6>
                            <div class="text mb-16">
                                <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus
                                    mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a
                                    consectetur ac lobortis.</p>
                            </div>
                            <div class="rating-star mb-16 bg-white">
                                <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                        class="text-16 fw-400 dark-black">(80)</span></h5>
                                <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00
                                </h6>
                            </div>
                            <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4">
                    <div class="featured-product-card bg-white br-10">
                        <div class="image-box mb-16">
                            <span class="sale-label">-12%</span>
                            <a href="shop-detail.html"><img
                                    src="{{ asset('/') }}website/assets/media/products/rec-2.png"
                                    class="product-image" alt=""></a>
                            <div class="side-icons">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="wishlist.html">
                                            <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#productQuickView">
                                            <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                            data-bs-target="#comparepopup">
                                            <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-desc">
                            <h6 class="product-title mb-8"><a href="shop-detail.html">Gaming RBG Mouse</a></h6>
                            <div class="text mb-16">
                                <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus
                                    mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a
                                    consectetur ac lobortis.</p>
                            </div>
                            <div class="rating-star mb-16 bg-white">
                                <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                        class="text-16 fw-400 dark-black">(80)</span></h5>
                                <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00
                                </h6>
                            </div>
                            <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4">
                    <div class="featured-product-card bg-white br-10">
                        <div class="image-box mb-16">
                            <span class="sale-label">-12%</span>
                            <a href="shop-detail.html"><img
                                    src="{{ asset('/') }}website/assets/media/products/rec-3.png"
                                    class="product-image" alt=""></a>
                            <div class="side-icons">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="wishlist.html">
                                            <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#productQuickView">
                                            <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                            data-bs-target="#comparepopup">
                                            <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-desc">
                            <h6 class="product-title mb-8"><a href="shop-detail.html">Key Master Elite</a></h6>
                            <div class="text mb-16">
                                <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus
                                    mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a
                                    consectetur ac lobortis.</p>
                            </div>
                            <div class="rating-star mb-16 bg-white">
                                <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                        class="text-16 fw-400 dark-black">(80)</span></h5>
                                <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00
                                </h6>
                            </div>
                            <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4">
                    <div class="featured-product-card bg-white br-10">
                        <div class="image-box mb-16">
                            <span class="sale-label">-12%</span>
                            <a href="shop-detail.html"><img
                                    src="{{ asset('/') }}website/assets/media/products/rec-4.png"
                                    class="product-image" alt=""></a>
                            <div class="side-icons">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="wishlist.html">
                                            <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#productQuickView">
                                            <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                            data-bs-target="#comparepopup">
                                            <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-desc">
                            <h6 class="product-title mb-8"><a href="shop-detail.html">Ultra Sport Watch</a></h6>
                            <div class="text mb-16">
                                <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus
                                    mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a
                                    consectetur ac lobortis.</p>
                            </div>
                            <div class="rating-star mb-16 bg-white">
                                <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                        class="text-16 fw-400 dark-black">(80)</span></h5>
                                <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00
                                </h6>
                            </div>
                            <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4">
                    <div class="featured-product-card bg-white br-10">
                        <div class="image-box mb-16">
                            <span class="sale-label">-12%</span>
                            <a href="shop-detail.html"><img
                                    src="{{ asset('/') }}website/assets/media/products/rec-5.png"
                                    class="product-image" alt=""></a>
                            <div class="side-icons">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="wishlist.html">
                                            <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#productQuickView">
                                            <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                            data-bs-target="#comparepopup">
                                            <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-desc">
                            <h6 class="product-title mb-8"><a href="shop-detail.html">Radiant View LCD</a></h6>
                            <div class="text mb-16">
                                <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus
                                    mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a
                                    consectetur ac lobortis.</p>
                            </div>
                            <div class="rating-star mb-16 bg-white">
                                <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                        class="text-16 fw-400 dark-black">(80)</span></h5>
                                <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00
                                </h6>
                            </div>
                            <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4">
                    <div class="featured-product-card bg-white br-10">
                        <div class="image-box mb-16">
                            <span class="sale-label">-12%</span>
                            <a href="shop-detail.html"><img
                                    src="{{ asset('/') }}website/assets/media/products/rec-6.png"
                                    class="product-image" alt=""></a>
                            <div class="side-icons">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="wishlist.html">
                                            <img src="{{ asset('/') }}website/assets/media/icons/heart.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#productQuickView">
                                            <img src="{{ asset('/') }}website/assets/media/icons/eye.png"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                            data-bs-target="#comparepopup">
                                            <img src="{{ asset('/') }}website/assets/media/icons/compare.png"
                                                alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-desc">
                            <h6 class="product-title mb-8"><a href="shop-detail.html">Wired Head Free</a></h6>
                            <div class="text mb-16">
                                <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus
                                    mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a
                                    consectetur ac lobortis.</p>
                            </div>
                            <div class="rating-star mb-16 bg-white">
                                <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                        class="text-16 fw-400 dark-black">(80)</span></h5>
                                <h6><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00
                                </h6>
                            </div>
                            <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination pt-40">
                <ul id="border-pagination">
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32"
                                fill="none">
                                <path
                                    d="M20.1953 22.9995C20.1953 19.9995 22.9953 15.9995 26.1953 15.9995M26.1953 15.9995C24.362 15.9995 20.1953 14.9995 20.1953 8.99951M26.1953 15.9995H7.19531"
                                    stroke="#282525" stroke-width="2" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Featured Product End -->
@endsection
