<!DOCTYPE html>
<html lang="en">

<head>
    @include('website.includes.meta')

    <title>Adonis | {{ $companyInfo->title }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset($companyInfo->favicon) }}">

    @include('website.includes.style')
</head>

<body class="tt-smooth-scroll">
    <!-- Main Wrapper Start -->
    <div id="scroll-container" class="main-wrapper">
        @include('website.includes.header')

        <!-- Main Sections -->
        <main class="main-wrapper">
            @yield('body')
            @include('website.includes.footer')
        </main>
        <!-- Main Sections -->
    </div>
    <!-- Main Wrapper End -->

    <!-- Back To Top Start -->
    <a href="#main-wrapper" id="backto-top" class="back-to-top"><i class="fas fa-angle-up"></i></a>

    <!-- Mobile Menu Start -->
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="{{ route('home') }}" aria-label="logo image"><img src="{{ asset($companyInfo->logo_jpg) }}"
                        alt="" /></a>
            </div>
            <div class="mobile-nav__container"></div>
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:example@company.com">{{ $companyInfo->contact_email }}</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="#">{{ $companyInfo->contact_phone }}</a>
                </li>
            </ul>
            <div class="mobile-nav__social">
                <a target="_blank" href="{{ $companyInfo->twitter_link }}"><i class="fa-brands fa-x-twitter"></i></a>
                <a target="_blank" href="{{ $companyInfo->facebook_link }}"><i class="fab fa-facebook"></i></a>
                <a target="_blank" href="{{ $companyInfo->instagram_link }}"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <!-- Mobile Menu End -->

    <!-- Modal -->
    <div class="modal fade" id="productQuickView" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="shop-detail">
                        <div class="detail-wrapper">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="quick-image-box">
                                        <img src="" alt="Product Image" id="modalProductImage" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="product-text-container bg-white br-20">
                                        <div class="close-content text-end">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <h4 class="fw-600 mb-16" id="modalProductName"></h4>
                                        <div class="d-flex align-items-center flex-wrap gap-16 mb-24">
                                            <p class="light-gray">Category: <span class="color-primary"
                                                    id="modalProductCategory"></span></p>
                                            <div class="vr-line vr-line-2"></div>
                                            <p class="light-gray">Brand: <span class="color-primary"
                                                    id="modalProductBrand"></span></p>
                                        </div>
                                        <div class="d-flex align-items-center gap-16 mb-24">
                                            <p class="light-gray text-decoration-line-through" id="modalRegularPrice">
                                            </p>
                                            <h5 id="modalSellingPrice"></h5>
                                            <span class="label white" id="modalDiscount"></span>
                                        </div>
                                        <p class="light-gray mb-24" id="modalProductDescription"></p>
                                        <div class="hr-line mb-24"></div>
                                        <div class="function-bar mb-16">
                                            <div class="quantity quantity-wrap">
                                                <div class="input-area quantity-wrap">
                                                    <input class="decrement" type="button" value="-" />
                                                    <input type="text" name="quantity" value="1" maxlength="2"
                                                        size="1" class="number" />
                                                    <input class="increment" type="button" value="+" />
                                                </div>
                                            </div>
                                            <div class="cart-btn w-100">
                                                <a href="cart.html" class="cus-btn-2 w-100">ADD TO CART</a>
                                            </div>
                                        </div>
                                        <div class="hr-line mb-24"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->

    <!-- Shopping Cart Popup Start -->
    <aside id="sidebar-cart">
        <div class="title-cart-block mb-32 bg-lightest-gray">
            <h6>Shopping Cart ({{ Cart::content()->count() }})</h6>
            <a href="#" class="close-button close-popup"><span class="close-icon">X</span></a>
        </div>
        <ul class="product-list p-24" style="height: calc(100vh - 500px) !important;">
            @php
            $sum = 0;
            @endphp

            @foreach (Cart::content() as $item)
            <li class="product-item mb-24">
                <span class="item-image">
                    <img src="{{ asset($item->options->image) }}" alt="Product Photo" />
                </span>
                <div class="product-text">
                    <div class="prod-title mb-16">
                        <h6><a
                                href="{{ route('product-detail', $item->id) }}">{{ Str::limit($item->name, 15) }}</a>
                        </h6>
                        <a href="{{ route('cart.remove', $item->rowId) }}" class="cancel">
                            <img src="{{ asset('/') }}website/assets/media/images/cancel.png"
                                alt="" />
                        </a>
                    </div>
                    <div class="prod-desc">
                        <div>
                            <p class="fw-500 mb-8">Quantity: {{ $item->qty }}</p>
                            <p class="fw-500">Price: {{ $item->price }} Taka</p>
                        </div>
                        <div class="quantity quantity-wrap d-inline-flex" id="quantity-wrap-{{ $item->id }}">
                            <div class="input-area quantity-wrap" id="addToCart">
                                <input class="decrement addToCart_dec" type="button" value="-" />
                                <input type="text" name="quantity" value="{{ $item->qty }}"
                                    maxlength="2" size="1" class="number"
                                    data-row-id="{{ $item->rowId }}" />
                                <input class="increment addToCart_inc" type="button" value="+" />
                            </div>
                        </div>

                    </div>
                </div>
            </li>
            <li class="hr-line mb-24"></li>
            @php
            $sum += $item->price * $item->qty;
            @endphp
            @endforeach
        </ul>
        <div class="hr-line mb-16"></div>
        <div class="price-total p-24">
            <h6>Sub Total</h6>

            <h6 class="light-gray">TK: {{ $sum }}</h6>
        </div>
        <div class="hr-line mb-16"></div>
        <div class="price-total p-24">
            <h6>Tax Amount (5%)</h6>
            @php
            $tax = ($sum * 5) / 100;
            @endphp
            <h6 class="light-gray">TK: {{ $tax }}</h6>
        </div>
        <div class="price-total p-24">
            <span class="h5">TOTAL</span>
            <span class="h5">TK:{{ $sum+$tax }}</span>
        </div>
        <div class=" hr-line mb-24">
        </div>
        <div class="action-buttons p-24">
            <a href="{{ route('cart.index') }}" class="cus-btn-2">VIEW CART</a>
            <a href="{{ route('checkout') }}" class="cus-btn active-btn">CHECKOUT</a>
        </div>
    </aside>
    <div id="sidebar-cart-curtain" class="close-popup"></div>
    <!-- Shopping Cart Popup End -->

    <!-- Modal -->
    <div class="modal fade" id="comparepopup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog compare-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="zui-wrapper">
                        <div class="close-content text-end">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div id="container" class="zui-scroller">
                            <table class="zui-table">
                                <thead>
                                    <tr>
                                        <th class="zui-sticky-col">&nbsp;</th>
                                        <th id="product-col" class="table-col">
                                            <img class="product-img mb-16"
                                                src="{{ asset('/') }}website/assets/media/products/list-1.png"
                                                alt="" />
                                            <span class="h6">
                                                <a href="#" class="product-link">Gaming Headphones
                                                </a>
                                            </span>
                                        </th>
                                        <th class="table-col">
                                            <img class="product-img mb-16"
                                                src="{{ asset('/') }}website/assets/media/products/list-2.png"
                                                alt="" />
                                            <span class="h6">
                                                <a href="#" class="product-link">Ultra Bright LCD </a>
                                            </span>
                                        </th>
                                        <th class="table-col">
                                            <img class="product-img mb-16"
                                                src="{{ asset('/') }}website/assets/media/products/list-3.png"
                                                alt="" />
                                            <span class="h6">
                                                <a href="#" class="product-link">Hyper Glide Mouse
                                                </a>
                                            </span>
                                        </th>
                                        <th class="table-col">
                                            <img class="product-img mb-16"
                                                src="{{ asset('/') }}website/assets/media/products/list-4.png"
                                                alt="" />
                                            <span class="h6">
                                                <a href="#" class="product-link">Nexus Mobile Pro 256GB
                                                </a>
                                            </span>
                                        </th>
                                        <th class="table-col">
                                            <img class="product-img mb-16"
                                                src="{{ asset('/') }}website/assets/media/products/list-5.png"
                                                alt="" />
                                            <span class="h6">
                                                <a href="#" class="product-link">Silent Touch Pro</a>
                                            </span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="zui-sticky-col">Price</td>
                                        <td class="text-center"><strong>$85.00</strong></td>
                                        <td class="text-center"><strong>$700.00</strong></td>
                                        <td class="text-center"><strong>$50.00</strong></td>
                                        <td class="text-center"><strong>$500.00</strong></td>
                                        <td class="text-center"><strong>$150.00</strong></td>
                                    </tr>
                                    <tr>
                                        <td class="zui-sticky-col zui-stripe-row">Description</td>
                                        <td>AS4500</td>
                                        <td>AS8500</td>
                                        <td>AS6000</td>
                                        <td>AS4600</td>
                                        <td>AS1000</td>
                                    </tr>
                                    <tr>
                                        <td class="zui-sticky-col">Storage</td>
                                        <td>up to 16 samples</td>
                                        <td>up to 48 samples</td>
                                        <td>up to 16 samples</td>
                                        <td>up to 16 samples</td>
                                        <td>up to 32 samples</td>
                                    </tr>
                                    <tr>
                                        <td class="zui-sticky-col zui-stripe-row">SKU</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-plus-circle"></i>Optional</td>
                                        <td><i class="far fa-times-circle"></i>Not Available</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                    </tr>
                                    <tr>
                                        <td class="zui-sticky-col">Availablity</td>
                                        <td><i class="far fa-plus-circle"></i>Optional</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                    </tr>
                                    <tr>
                                        <td class="zui-sticky-col zui-stripe-row">Weight</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                    </tr>
                                    <tr>
                                        <td class="zui-sticky-col">Dimensions</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                    </tr>
                                    <tr>
                                        <td class="zui-sticky-col zui-stripe-row">Colors</td>
                                        <td><i class="far fa-times-circle"></i>Not Available</td>
                                        <td><i class="far fa-check-circle"></i>Included</td>
                                        <td><i class="far fa-times-circle"></i>Not Available</td>
                                        <td><i class="far fa-times-circle"></i>Not Available</td>
                                        <td><i class="far fa-times-circle"></i>Not Available</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('website.includes.script')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const quickViewButtons = document.querySelectorAll('.quick-view-btn');

            quickViewButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Fetch data from the button
                    const productName = button.getAttribute('data-name');
                    const productBrand = button.getAttribute('data-brand');
                    const productReviews = button.getAttribute('data-reviews');
                    const regularPrice = button.getAttribute('data-regular-price');
                    const sellingPrice = button.getAttribute('data-selling-price');
                    const discount = button.getAttribute('data-discount');
                    const productDescription = button.getAttribute('data-description');
                    const productCategory = button.getAttribute('data-category');
                    const productTags = button.getAttribute('data-tags');
                    const productImage = button.getAttribute('data-image');

                    // Populate modal fields
                    document.getElementById('modalProductImage').src = productImage;
                    document.getElementById('modalProductName').textContent = productName;
                    document.getElementById('modalProductBrand').textContent = productBrand;
                    // document.getElementById('modalProductReviews').innerHTML =
                    //     `★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(${productReviews})</span>`;
                    document.getElementById('modalRegularPrice').textContent = `TK:${regularPrice}`;
                    document.getElementById('modalSellingPrice').textContent = `TK:${sellingPrice}`;
                    document.getElementById('modalDiscount').textContent = discount;
                    document.getElementById('modalProductDescription').textContent =
                        productDescription;
                    document.getElementById('modalProductCategory').textContent = productCategory;
                });
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Decrement quantity
            $('.addToCart_dec').click(function(e) {
                e.preventDefault();
                var quantityInput = $(this).siblings('input[name="quantity"]');
                var currentQuantity = parseInt(quantityInput.val()) || 0;
                var rowId = quantityInput.data('row-id'); // Get the row ID


                // Send AJAX request to update quantity
                updateQuantity(rowId, currentQuantity);

            });

            // Increment quantity
            $('.addToCart_inc').click(function(e) {
                e.preventDefault();
                var quantityInput = $(this).siblings('input[name="quantity"]');
                var currentQuantity = parseInt(quantityInput.val()) || 0;
                var rowId = quantityInput.data('row-id'); // Get the row ID

                updateQuantity(rowId, currentQuantity);
            });

            // Function to send AJAX request to update quantity
            function updateQuantity(rowId, newQuantity) {
                // alert(rowId);
                $.ajax({
                    url: '/cart/update-qty/' + rowId, // The route for updating the quantity
                    method: 'POST',
                    data: {
                        newQuantity: newQuantity,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            console.log('Quantity updated successfully');
                            location.reload();
                        } else {
                            console.log('Failed to update quantity');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('An error occurred: ', error);
                    }
                });
            }
        });
    </script>


</body>

</html>