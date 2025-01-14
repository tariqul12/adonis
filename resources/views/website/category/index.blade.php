@extends('website.master')

@section('title')
    Product Category Page
@endsection

@section('body')
    <!-- Title Banner Start -->
    <section class="title-banner" style="background-image: url({{ asset($pageTitleBanner->image) }});">
        <h1 class="dark-black fw-600">Category</h1>
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
                        <!-- <form action="#" class="mb-24">
                                                                                                                                                            <input type="text" name="search" id="searchBar" class="form-control"
                                                                                                                                                                placeholder="Search Here...">
                                                                                                                                                            <button>
                                                                                                                                                                <i class="fa-light fa-magnifying-glass"></i>
                                                                                                                                                            </button>
                                                                                                                                                        </form> -->
                        <div class="category-block box-1 mb-24">
                            <div class="title mb-24" data-count="1">
                                <h6>Product Categories</h6>
                                <span>
                                    <i class="far fa-horizontal-rule"></i>
                                </span>
                            </div>
                            <div class="content-block">
                                <ul class="list-unstyled">
                                    @foreach ($categories as $key => $category)
                                        <li class="checkbox-group">
                                            <div
                                                class="arrow-block d-flex align-items-center justify-content-between mb-16">
                                                <div class="">
                                                    <label for="{{ $key }}"><a
                                                            href="{{ route('category', $category->id) }}">{{ $category->name }}</a></label>
                                                </div>
                                                @if ($category->subCategories->count() > 0)
                                                    <i class="fa-thin fa-chevron-down fw-500 light-gray"></i>
                                                @endif
                                            </div>
                                            <ul class="sub-checkboxes pl-16 mb-16">
                                                @foreach ($category->subCategories as $key => $subCategory)
                                                    <li class="d-flex align-items-center gap-2 mb-12">
                                                        <div class="">
                                                            <label for="{{ $key }}"><a
                                                                    href="{{ route('sub-category', $subCategory->id) }}">{{ $subCategory->name }}</a></label>
                                                        </div>
                                                        {{-- <p class="light-gray fw-400">()</p> --}}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>


                        <!-- <div class="hr-line mb-24"> </div>
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
                                                                                                                                                        </div> -->
                        <div class="hr-line mb-24"></div>
                        <div class="category-block box-7 mb-24">
                            <div class="title mb-24" data-count="7">
                                <h6>Feature Products</h6>
                                <span>
                                    <i class="far fa-horizontal-rule"></i>
                                </span>
                            </div>
                            <div class="content-block">
                                @foreach ($featureProducts as $key => $product)
                                    <a href="{{ route('product-detail', $product->id) }}"
                                        class="d-flex gap-24 align-items-center mb-24">
                                        <div class="image-box d-flex flex-shrink-0">
                                            <img height="70" width="70" src="{{ asset($product->image) }}"
                                                alt="">
                                        </div>
                                        <div>
                                            <p class="mb-8">{{ $product->name }}</p>
                                            <p class="color-primary"><span
                                                    class="light-gray text-decoration-line-through">TK:{{ $product->regular_price }}</span>&nbsp;TK:{{ $product->selling_price }}
                                            </p>
                                        </div>
                                    </a>
                                    <div class="hr-line mb-24"></div>
                                @endforeach

                            </div>
                        </div>

                    </div>
                </div>
                @if ($products->count() > 0)
                    <div class="col-xl-9">
                        <div class="shop-grid-topbar mb-16">
                            <div class="last-block">
                                <div class="d-lg-flex d-none align-items-center gap-8">
                                    <p class="dark-gray">Category Product</p>

                                </div>
                            </div>
                        </div>
                        <div class="row row-gap-3">
                            @foreach ($products as $product)
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
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            @if ($product->stock_amount < 1)
                                                                <p class="text-center"
                                                                    style="background-color: #c20707; color: #ffff;  font-size: 20px; padding: 5px; border-radius: 5px;">
                                                                    out of stock
                                                                </p>
                                                            @endif
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
                                                @if ($product->stock_amount < 1)
                                                    <button disabled class="cus-btn-2 w-100">Add to Cart</button>
                                                @else
                                                    <button type="submit" class="cus-btn-2 w-100">Add to Cart</button>
                                                @endif
                                            </div>
                                        </form>
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
                @else
                    <div class="col-xl-9">
                        <div class="shop-grid-topbar mb-16">
                            <div class="last-block">
                                <div class="d-lg-flex d-none align-items-center gap-8">
                                    <p class="dark-gray">Category Product</p>

                                </div>
                            </div>
                        </div>
                        <div class="row row-gap-3">
                            <div class="col-md-12 text-center py-5">
                                <div class="no-product-block">
                                    <h6>No Product Found</h6>

                                </div>
                            </div>
                        </div>

                    </div>
                @endif
            </div>
        </div>
    </section>
    <!-- Featured Product End -->
@endsection
