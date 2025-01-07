@extends('website.master')
@section('title')
Shopping Cart Page
@endsection

@section('body')
<!-- Title Banner Start -->
<section class="title-banner" style="background-image: url({{ asset($pageTitleBanner->image) }});">
    <div class="container-fluid">
        <div class="banner-wrapper">
            {{-- <img src="{{ asset('/') }}website/assets/media/banner/left-image.png" alt="" class="banner-image1"> --}}
            <h1 class="dark-black fw-600">Shopping Cart</h1>
            {{-- <img src="{{ asset('/') }}website/assets/media/banner/right-image.png" alt="" class="banner-image2"> --}}
        </div>
    </div>
</section>
<!-- Title Banner End -->

<!-- Cart Area Start -->
<section class="cart py-40">
    <div class="container-fluid">
        <div class="row">
            <!-- Cart Items Section -->
            <div class="col-xl-8">

                <div class="d-lg-block d-none card card-body">
                    <!-- Cart Table Header -->
                    <table class="cart-table mb-16">
                        <thead>
                            <tr>
                                <th>Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                    </table>
                    @php
                    $sum = 0;
                    @endphp
                    @foreach ($cart_products as $product)
                    <!-- Cart Table Items -->
                    <table class="cart-table">
                        <tbody>
                            <tr class="table-row">
                                <td class="pd">
                                    <div class="product-detail-box">
                                        <div class="cus-checkBox">
                                            <input type="checkbox" id="box1">
                                            <label for="box1" class="light-gray"></label>
                                        </div>
                                        <a href="{{ route('cart.remove', $product->rowId) }}"
                                            class="h5 dark-black"><i class="fal fa-times"></i></a>
                                        <div class="img-block">
                                            <a href="#"><img height="100" width="100"
                                                    src="{{ asset($product->options->image) }}" alt=""></a>
                                        </div>
                                        <div class="d-block text-start">
                                            <h6><a href="shop-grid-2.html">{{ $product->name }}</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="fw-500"> TK:{{ $product->price }}</p>
                                </td>
                                <td>
                                    <div class="quantity-controller quantity-wrap">
                                        <input class="decrement addToCart_dec" type="button" value="-">
                                        <input type="text" name="quantity" value="{{ $product->qty }}"
                                            size="1" class="number" data-row-id="{{ $product->rowId }}">
                                        <input class="increment addToCart_inc" type="button" value="+">
                                    </div>
                                </td>
                                <td>
                                    <p class="fw-500">TK:{{ $product->price * $product->qty }}</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @php
                    $sum += $product->price * $product->qty;
                    @endphp
                    @endforeach
                </div>


                <!-- Mobile View Cart -->
                <div class="d-lg-none d-block">
                    <div class="row">
                        @foreach ($cart_products as $product)
                        <div class="col-md-6">
                            <div class="cart-item-block mb-32">
                                <div class="img-block mb-16">
                                    <a href="{{ route('product-detail', $product->id) }}"><img
                                            src="{{ asset($product->options->image) }}" height="50"
                                            width="50" alt=""></a>
                                    <a href="{{ route('cart.remove', $product->rowId) }}" class="cross"><i
                                            class="fal fa-times"></i></a>
                                </div>
                                <h6 class="mb-24">{{ $product->name }}</h6>
                                <form action="{{ route('cart.update', ['rowId' => $product->rowId]) }}"
                                    method="post">
                                    @csrf
                                    <ul class="unstyled detail">
                                        <li>
                                            <h6 class="">Price</h6>
                                            <h6 class="">TK:{{ $product->price }}</h6>
                                        </li>

                                        <li>
                                            <h6 class="">Quantity</h6>
                                            <div class="quantity-controller quantity-wrap">
                                                <input class="decrement" type="button" value="-">
                                                <input type="text" name="qty" value="{{ $product->qty }}"
                                                    size="1" class="number">
                                                <input class="increment" type="button" value="+">
                                            </div>
                                        </li>
                                        <li>
                                            <h6 class="">Subtotal</h6>
                                            <h6 class="">{{ $product->price * $product->qty }}</h6>
                                        </li>
                                        <li>
                                            <button type="submit" class="cus-btn active-btn">Update Cart</button>
                                        </li>
                                </form>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Cart Actions: Continue Shopping & Coupon -->
                <div class="table-bottom-row bg-white">
                    <a href="shop-list-1.html" class="cus-btn">Continue Shopping</a>
                    <form action="#" method="post" class="contact-form d-flex align-items-center gap-16">
                        <input type="number" class="form-control" placeholder="Coupon Code" name="code"
                            id="cpCode">
                        <button type="submit" class="cus-btn">Apply Now</button>
                    </form>
                </div>
            </div>

            <!-- Cart Total Section -->
            <div class="col-xl-4">
                <div class="checkout-box bg-semi-white mt-xl-0 mt-48">
                    <div class="checkout-title text-center mb-16">
                        <h5>Cart Total</h5>
                    </div>
                    <div class="bottom-box">
                        <div class="title-price mb-16">
                            <h6>Subtotal</h6>
                            <h6 class="light-gray">TK:{{ $sum }}</h6>
                        </div>
                        <div class="hr-line mb-16"></div>
                        <div class="title-price mb-16">
                            <h6>Standard Delivery</h6>
                            <h6 class="light-gray">TK:{{ $shipping_amount = 100 }}</h6>
                        </div>
                        <div class="hr-line mb-16"></div>
                        <div class="title-price mb-16">
                            <h6>Tax Amount (5%)</h6>
                            @php
                            $tax = ($sum * 5) / 100;
                            @endphp
                            <h6 class="light-gray">TK: {{ $tax }}</h6>
                        </div>
                        {{-- <div class="title-price mb-16">
                                <h6>Coupon Discount</h6>
                                <h6 class="light-gray">$-5.00</h6>
                            </div> --}}
                        <div class="hr-line mb-80"></div>
                        <div class="hr-line mb-16"></div>
                        <div class="title-price mb-16">
                            <h5 class="color-primary">TOTAL</h5>
                            <h5 class="color-primary">TK:{{ $sum + $shipping_amount + $tax }}</h5>
                        </div>
                        <div class="hr-line mb-16"></div>
                        <div class="text-end">
                            <a href="checkout.html" class="cus-btn active-btn">PROCEED TO CHECKOUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Cart Area End -->


@endsection