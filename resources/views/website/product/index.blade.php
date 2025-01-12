@extends('website.master')

@section('title')
    Product Detail Page
@endsection

@section('body')
    <!-- Shop Detail Start -->
    <section class="shop-detail py-40">
        <div class="container-fluid">
            <div class="detail-wrapper">
                <div class="row row-gap-3">

                    <div class="col-xl-6">
                        <div class="product-image-container bg-white">
                            <div class="product-slider-asnav">
                                @foreach ($productImg as $item)
                                    <div class="nav-image">
                                        <img src="{{ asset($item) }}" height="50" width="50" alt="">
                                    </div>
                                @endforeach

                            </div>
                            <div class="product-slider">
                                @foreach ($productImg as $item)
                                    <div class="nav-image">
                                        <img src="{{ asset($item) }}" alt="">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="product-text-container bg-white br-20">
                            <h3 class="fw-700 mb-16">{{ $product->name }}</h3>
                            <div class="d-flex align-items-center flex-wrap gap-16 mb-24">
                                <h5 class="color-sec">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                        class="text-16 fw-400 dark-black">(02 Reviews)</span></h5>
                                <div class="vr-line vr-line-2"></div>
                                <p class="light-gray">Brand: <span
                                        class="color-primary">{{ $product->brand->name ?? 'Unknown' }}</span></p>
                                {{-- <div class="vr-line vr-line-2"></div> --}}
                                {{-- <p class="light-gray">SKU: <span class="light-black">3, 24, 672</span></p> --}}
                            </div>
                            <div class="d-flex align-items-center gap-16 mb-24">
                                <p class="light-gray text-decoration-line-through">TK:{{ $product->regular_price }}</p>
                                <h5>TK:{{ $product->selling_price }}</h5>

                            </div>
                            <p class="light-gray mb-24">
                                {{ $product->short_description }}
                            </p>
                            <form action="{{ route('cart.add', $product->id) }}" method="post">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center gap-24 mb-24">
                                            <h6>Size:</h6>
                                            <div class="drop-container bg-lightest-gray p-8-12 br-5">

                                                <select id="productSizes" class="custom-select" name="size">
                                                    @foreach ($product->productSizes as $size)
                                                        <option value="{{ $size->size->id }}">{{ $size->size->name }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        <div class="content-block mb-24">
                                            <h6 class="mb-24">Color:</h6>
                                            <div class="product-color">
                                                <ul class="unstyled list">
                                                    @foreach ($product->ProductColors as $key => $color)
                                                        <li>
                                                            <label for="muhRadio{{ $key }}"
                                                                class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                                                <input type="radio" id="muhRadio{{ $key }}"
                                                                    name="color" class="radio-1"
                                                                    style="background-color: {{ $color->color->code }}"
                                                                    value="{{ $color->color->id }}"
                                                                    @if ($key == '0') checked @endif>
                                                            </label>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        @if ($product->stock_amount < 1)
                                            <p class="text-center"
                                                style="background-color: #c20707; color: #ffff;  font-size: 20px; padding: 5px; border-radius: 5px;">
                                                out of stock
                                            </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="hr-line mb-24"></div>
                                <div class="function-bar mb-16">
                                    <div class="quantity quantity-wrap">
                                        <div class="input-area quantity-wrap">
                                            <input id="decrement" type="button" value="-" />
                                            <input type="text" id="qty" name="qty" value="1"
                                                maxlength="2" size="1" class="number" />
                                            <input id="increment" type="button" value="+" />
                                        </div>
                                    </div>
                                    <div class="cart-btn w-100">
                                        <input type="hidden" name="" id="stock_amount"
                                            value="{{ $product->stock_amount }}">
                                        @if ($product->stock_amount < 1)
                                            <button disabled class="cus-btn-2 w-100">ADD TO CART</button>
                                        @else
                                            <button type="submit" class="cus-btn-2 w-100">ADD TO CART</button>
                                        @endif
                                    </div>
                                    <div class="side-icons">
                                        <ul class="list-unstyled m-0">
                                            {{-- <li>
                                                <a href="wishlist.html">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22"
                                                        viewBox="0 0 24 22" fill="none">
                                                        <path
                                                            d="M12 21.6648C11.6583 21.6648 11.3289 21.541 11.0722 21.3162C10.1026 20.4684 9.16789 19.6717 8.34318 18.9689L8.33897 18.9653C5.92107 16.9048 3.83312 15.1254 2.38037 13.3725C0.756407 11.4129 0 9.55493 0 7.52521C0 5.55316 0.676207 3.73383 1.90393 2.4021C3.1463 1.05463 4.851 0.3125 6.70458 0.3125C8.08995 0.3125 9.35869 0.750488 10.4754 1.6142C11.039 2.05017 11.5499 2.58374 12 3.20612C12.4502 2.58374 12.9609 2.05017 13.5247 1.6142C14.6415 0.750488 15.9102 0.3125 17.2956 0.3125C19.149 0.3125 20.8538 1.05463 22.0962 2.4021C23.3239 3.73383 24 5.55316 24 7.52521C24 9.55493 23.2437 11.4129 21.6198 13.3723C20.167 15.1254 18.0793 16.9046 15.6617 18.9649C14.8355 19.6688 13.8993 20.4667 12.9276 21.3165C12.6711 21.541 12.3415 21.6648 12 21.6648ZM6.70458 1.71838C5.24834 1.71838 3.91058 2.29956 2.93737 3.35498C1.9497 4.42633 1.4057 5.90729 1.4057 7.52521C1.4057 9.2323 2.04016 10.759 3.4627 12.4755C4.83764 14.1346 6.88274 15.8774 9.25065 17.8954L9.25505 17.899C10.0829 18.6046 11.0213 19.4044 11.998 20.2584C12.9805 19.4027 13.9204 18.6016 14.7498 17.895C17.1176 15.877 19.1625 14.1346 20.5374 12.4755C21.9598 10.759 22.5943 9.2323 22.5943 7.52521C22.5943 5.90729 22.0503 4.42633 21.0626 3.35498C20.0896 2.29956 18.7516 1.71838 17.2956 1.71838C16.2288 1.71838 15.2494 2.0575 14.3846 2.7262C13.6139 3.32239 13.077 4.07605 12.7622 4.60339C12.6004 4.87457 12.3155 5.03644 12 5.03644C11.6845 5.03644 11.3996 4.87457 11.2377 4.60339C10.9231 4.07605 10.3863 3.32239 9.6154 2.7262C8.75059 2.0575 7.77116 1.71838 6.70458 1.71838Z"
                                                            fill="#141516" />
                                                    </svg>
                                                </a>
                                            </li> --}}
                                            {{-- <li>
                                                <a href="#" class="zui-wrapper-button" data-bs-toggle="modal"
                                                    data-bs-target="#comparepopup">
                                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_7951_48348)">
                                                            <g clip-path="url(#clip1_7951_48348)">
                                                                <path
                                                                    d="M19.5508 24.4844C19.3083 24.4844 19.0659 24.3908 18.8823 24.2042C18.5193 23.835 18.5243 23.2414 18.8935 22.8784L22.0446 19.7799C22.2199 19.6043 22.3164 19.3715 22.3164 19.1241C22.3164 18.8774 22.2205 18.6454 22.0462 18.4699L18.897 15.4064C18.0386 14.5069 19.2826 13.2294 20.2045 14.0624L23.3587 17.1309C23.3614 17.1336 23.3642 17.1362 23.3668 17.1389C23.8986 17.6691 24.1914 18.3741 24.1914 19.1242C24.1914 19.8742 23.8985 20.5792 23.3668 21.1093C23.3653 21.1108 23.3637 21.1123 23.3622 21.1139L20.208 24.2154C20.0255 24.3949 19.7881 24.4844 19.5508 24.4844ZM19.5508 19.9844H5.81641C2.71478 19.9844 0.191406 17.461 0.191406 14.3594V11.9688C0.237484 10.7262 2.02075 10.7271 2.06641 11.9688V14.3594C2.06641 16.4271 3.74866 18.1094 5.81641 18.1094H19.5508C20.7933 18.1555 20.7924 19.9387 19.5508 19.9844ZM23.2539 13.9375C22.7361 13.9375 22.3164 13.5178 22.3164 13V10.6094C22.3164 8.54164 20.6342 6.85939 18.5664 6.85939H4.83203C3.58947 6.81331 3.59041 5.03004 4.83203 4.98439H18.5664C21.668 4.98439 24.1914 7.50776 24.1914 10.6094V13C24.1914 13.5178 23.7717 13.9375 23.2539 13.9375ZM4.83194 11.1719C4.59634 11.1719 4.36052 11.0837 4.17831 10.9063L1.02409 7.83785C1.02133 7.83518 1.01861 7.83251 1.01594 7.82979C0.484234 7.29968 0.191406 6.59468 0.191406 5.84464C0.191406 5.09459 0.484234 4.38954 1.01594 3.85948C1.01748 3.85793 1.01898 3.85643 1.02053 3.85493L4.17475 0.7534C4.54394 0.3904 5.13752 0.395369 5.50052 0.764557C5.86352 1.13374 5.85855 1.72732 5.48936 2.09032L2.33823 5.18885C1.97884 5.53432 1.97809 6.15242 2.33655 6.49878L5.48575 9.56239C5.85686 9.92342 5.86502 10.5169 5.50398 10.8881C5.32028 11.077 5.07616 11.1719 4.83194 11.1719Z"
                                                                    fill="#141516" />
                                                            </g>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_7951_48348">
                                                                <rect width="24" height="24" fill="white"
                                                                    transform="translate(0.0820312 0.484375)" />
                                                            </clipPath>
                                                            <clipPath id="clip1_7951_48348">
                                                                <rect width="24" height="24" fill="white"
                                                                    transform="translate(0.191406 0.484375)" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </a>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </form>
                            @if ($product->stock_amount < 1)
                                <button disabled data-id="{{ $product->id }}" class="cus-btn-3 w-100 mb-24">Buy
                                    Now</button>
                            @else
                                <a href="#" id="buyNow" data-id="{{ $product->id }}"
                                    class="cus-btn-3 w-100 mb-24">Buy Now</a>
                            @endif
                            <div class="hr-line mb-24"></div>
                            <div class="d-flex align-items-center gap-16 mb-16">
                                <h6>Category:</h6>
                                <p class="light-gray"> <span
                                        class="color-primary">{{ $product->category->name ?? 'Unknown' }}</span> </p>
                            </div>
                            {{-- <div class="d-flex align-items-center gap-16 mb-16">
                                <h6>Tags:</h6>
                                <p class="light-gray">5G Compatible , <span class="color-primary">256GB Storage , </span>
                                    Student Phone</p>
                            </div> --}}
                            <div class="hr-line mb-24"></div>
                            <div class="d-flex align-items-center gap-16 mb-24">
                                <h6>Share:</h6>
                                <ul class="list-unstyled social-link m-0">
                                    <li>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_7951_48369)">
                                                    <path
                                                        d="M11.75 3.75018C12.0087 3.75018 12.2188 3.54018 12.2188 3.28143V0.468933C12.2188 0.210183 12.0087 0.000183105 11.75 0.000183105H8.9375C7.12812 0.000183105 5.65625 1.47206 5.65625 3.28143V5.62518H4.25C3.99125 5.62518 3.78125 5.83518 3.78125 6.09393V8.90643C3.78125 9.16518 3.99125 9.37518 4.25 9.37518H5.65625V15.5314C5.65625 15.7902 5.86625 16.0002 6.125 16.0002H8.9375C9.19625 16.0002 9.40625 15.7902 9.40625 15.5314V9.37518H11.2812C11.5103 9.37518 11.7059 9.20956 11.7438 8.98362L12.2125 6.17112C12.235 6.03518 12.1969 5.89612 12.1078 5.79081C12.0188 5.68581 11.8878 5.62518 11.75 5.62518H9.40625V3.75018H11.75ZM8.9375 6.56268H11.1966L10.8841 8.43768H8.9375C8.67875 8.43768 8.46875 8.64768 8.46875 8.90643V15.0627H6.59375V8.90643C6.59375 8.64768 6.38375 8.43768 6.125 8.43768H4.71875V6.56268H6.125C6.38375 6.56268 6.59375 6.35268 6.59375 6.09393V3.28143C6.59375 1.98925 7.64531 0.937683 8.9375 0.937683H11.2812V2.81268H8.9375C8.67875 2.81268 8.46875 3.02268 8.46875 3.28143V6.09393C8.46875 6.35268 8.67875 6.56268 8.9375 6.56268Z"
                                                        fill="#FAFAFA" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_7951_48369">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_7951_48371)">
                                                    <path
                                                        d="M9.4932 6.77509L15.3215 0.000183105H13.9404L8.87967 5.88274L4.83771 0.000183105H0.175781L6.28802 8.89565L0.175781 16.0002H1.55698L6.9012 9.788L11.1698 16.0002H15.8317L9.49287 6.77509H9.4932ZM7.60147 8.97402L6.98217 8.08823L2.05464 1.03992H4.17607L8.15265 6.72814L8.77195 7.61392L13.941 15.0077H11.8196L7.60147 8.97436V8.97402Z"
                                                        fill="#006937" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_7951_48371">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_7951_48373)">
                                                    <path
                                                        d="M8.15747 16.0002C8.10449 16.0002 8.05151 16.0002 7.99817 16C6.74402 16.003 5.5852 15.9711 4.45825 15.9025C3.42505 15.8397 2.48193 15.4826 1.73071 14.8701C1.00586 14.279 0.510864 13.4798 0.259521 12.4949C0.0407715 11.6375 0.0291748 10.7959 0.0180664 9.98177C0.0100097 9.39766 0.00170898 8.70552 0 8.00166C0.00170898 7.29488 0.0100097 6.60274 0.0180664 6.01863C0.0291748 5.20467 0.0407715 4.36299 0.259521 3.50545C0.510864 2.52058 1.00586 1.72139 1.73071 1.13033C2.48193 0.517777 3.42505 0.160722 4.45837 0.0978555C5.58533 0.0293741 6.74438 -0.00260836 8.00122 0.000443394C9.25574 -0.00224215 10.4142 0.0293741 11.5411 0.0978555C12.5743 0.160722 13.5175 0.517777 14.2687 1.13033C14.9936 1.72139 15.4885 2.52058 15.7399 3.50545C15.9586 4.36287 15.9702 5.20467 15.9813 6.01863C15.9894 6.60274 15.9978 7.29488 15.9994 7.99873V8.00166C15.9978 8.70552 15.9894 9.39766 15.9813 9.98177C15.9702 10.7957 15.9587 11.6374 15.7399 12.4949C15.4885 13.4798 14.9936 14.279 14.2687 14.8701C13.5175 15.4826 12.5743 15.8397 11.5411 15.9025C10.4619 15.9682 9.35327 16.0002 8.15747 16.0002ZM7.99817 15.009C9.23193 15.0119 10.3647 14.9807 11.4652 14.9138C12.2465 14.8663 13.168 14.3538 13.7229 13.9013C14.2359 13.483 14.5891 12.9058 14.7729 12.1859C14.955 11.4721 14.9655 10.7058 14.9756 9.96468C14.9835 9.38448 14.9918 8.69722 14.9936 8.0002C14.9918 7.30305 14.9835 6.61592 14.9756 6.03572C14.9655 5.29463 14.955 4.52828 14.7729 3.81441C14.5891 3.09444 14.2359 2.51729 13.7229 2.09895C13.168 1.64656 12.2465 1.14912 11.4652 1.10164C10.3647 1.03462 9.23193 1.00373 8.0011 1.00642C6.76758 1.00349 5.63464 1.03829 4.53418 1.1053C3.75293 1.15279 2.91684 1.48784 2.36191 1.94023C1.84897 2.35857 1.4007 3.09444 1.21699 3.81441C1.03486 4.52828 1.02436 5.29451 1.01423 6.03572C1.00629 6.61641 0.997993 7.30403 0.996284 8.00166C0.997993 8.69624 1.00629 9.38399 1.01423 9.96468C1.02436 10.7058 1.03486 11.4721 1.21699 12.1859C1.4007 12.9058 1.75397 13.483 2.26691 13.9013C2.82185 14.3537 3.75293 14.8663 4.53418 14.9138C5.63464 14.9808 6.76782 15.012 7.99817 15.009ZM7.96838 11.9064C5.81457 11.9064 4.06213 10.1541 4.06213 8.0002C4.06213 5.84627 5.81457 4.09395 7.96838 4.09395C10.1223 4.09395 11.8746 5.84627 11.8746 8.0002C11.8746 10.1541 10.1223 11.9064 7.96838 11.9064ZM8.0011 5.0035C6.24478 5.0035 5.00876 6.23953 5.00876 7.99873C5.00876 9.46333 6.11624 11.0089 7.98382 11.0089C9.44854 11.0089 10.9713 9.6213 10.9713 7.99873C10.9713 6.53413 9.85398 5.0035 8.0011 5.0035ZM12.3121 2.84395C11.7944 2.84395 11.3746 3.26363 11.3746 3.78145C11.3746 4.29927 11.7944 4.71895 12.3121 4.71895C12.83 4.71895 13.2496 4.29927 13.2496 3.78145C13.2496 3.26363 12.83 2.84395 12.3121 2.84395Z"
                                                        fill="#006937" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_7951_48373">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_7951_48375)">
                                                    <path
                                                        d="M3.76245 5.02094H0.75C0.491089 5.02094 0.28125 5.2309 0.28125 5.48969V15.5314C0.28125 15.7903 0.491089 16.0002 0.75 16.0002H3.76245C4.02136 16.0002 4.2312 15.7903 4.2312 15.5314V5.48969C4.2312 5.2309 4.02136 5.02094 3.76245 5.02094ZM3.2937 15.0627H1.21875V5.95844H3.2937V15.0627Z"
                                                        fill="#006937" />
                                                    <path
                                                        d="M2.25635 0.000183105C1.16724 0.000183105 0.28125 0.886169 0.28125 1.97504C0.28125 3.06415 1.16724 3.95001 2.25635 3.95001C3.34534 3.95001 4.2312 3.06403 4.2312 1.97504C4.2312 0.886169 3.34534 0.000183105 2.25635 0.000183105ZM2.25635 3.01251C1.6842 3.01251 1.21875 2.54718 1.21875 1.97504C1.21875 1.40302 1.6842 0.937683 2.25635 0.937683C2.82837 0.937683 3.2937 1.40302 3.2937 1.97504C3.2937 2.54718 2.82837 3.01251 2.25635 3.01251Z"
                                                        fill="#006937" />
                                                    <path
                                                        d="M11.2941 4.95465C10.5815 4.95465 9.87927 5.1264 9.25037 5.44769C9.229 5.20856 9.0282 5.02094 8.78345 5.02094H5.77075C5.51196 5.02094 5.302 5.2309 5.302 5.48969V15.5314C5.302 15.7903 5.51196 16.0002 5.77075 16.0002H8.78345C9.04236 16.0002 9.2522 15.7903 9.2522 15.5314V10.0085C9.2522 9.29803 9.83032 8.72003 10.5408 8.72003C11.2512 8.72003 11.8291 9.29803 11.8291 10.0085V15.5314C11.8291 15.7903 12.0391 16.0002 12.2979 16.0002H15.3104C15.5693 16.0002 15.7792 15.7903 15.7792 15.5314V9.43976C15.7792 6.96661 13.7672 4.95465 11.2941 4.95465ZM14.8417 15.0627H12.7667V10.0085C12.7667 8.78107 11.7682 7.78253 10.5409 7.78253C9.31335 7.78253 8.3147 8.78107 8.3147 10.0085V15.0627H6.23962V5.95844H8.3147V6.30475C8.3147 6.48505 8.41809 6.64935 8.58069 6.72736C8.74316 6.80536 8.93604 6.78314 9.07678 6.67047C9.71155 6.16132 10.4784 5.89215 11.2941 5.89215C13.2502 5.89215 14.8417 7.48358 14.8417 9.43976V15.0627Z"
                                                        fill="#006937" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_7951_48375">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hr-line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Detail End -->

    <!-- Product Description Start -->
    <section class="product-description pb-40">
        <div class="container-fluid">
            <div class="row">
                <div class="description-wrapper bg-white br-20">
                    <nav class="mb-32">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            {{-- <button class="nav-link active" id="nav-desc-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-desc" type="button" role="tab" aria-controls="nav-desc"
                                aria-selected="true">Description</button> --}}

                            <button class="nav-link active" id="nav-info-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-info" type="button" role="tab" aria-controls="nav-info"
                                aria-selected="true">Description</button>

                            <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review"
                                aria-selected="false">Reviews (02)</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade " id="nav-desc" role="tabpanel" aria-labelledby="nav-desc-tab">
                            <h5 class="mb-24">Product Description</h5>

                        </div>
                        <div class="tab-pane fade active show" id="nav-info" role="tabpanel"
                            aria-labelledby="nav-info-tab">
                            <h5 class="mb-32">Product Description</h5>
                            <p class="light-gray mb-16">
                                {!! $product->long_description !!}
                            </p>
                        </div>
                        <div class="tab-pane fade show " id="nav-review" role="tabpanel"
                            aria-labelledby="nav-review-tab">
                            <div class="comments-sec mb-48">
                                <h5 class="mb-48">(02) Reviews </h5>
                                <div class="comment-box mb-24">
                                    <img src="{{ asset('/') }}website/assets/media/users/user-4.png" alt=""
                                        class="br-5">
                                    <div class="block">
                                        <div class="top-row mb-16">
                                            <div class="info">
                                                <h5 class="light-black">Ethan Clarke</h5>
                                            </div>
                                            <h5 class="color-sec">★★★★<span class="light-gray">★</span></h5>
                                        </div>
                                        <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Pharetra luctus in
                                            dignissim amet.
                                            Dignissim adipiscing amet praesent nec libero ultrices ac ullamcorper. Enim
                                            mattis faucibus
                                            viverra integer vestibulum in proin. Imperdiet pellentesque nisl cursus arcu
                                            nulla massa pharetra.
                                            Tristique.</p>
                                    </div>
                                </div>
                                <div class="hr-line mb-24"></div>
                                <div class="comment-box">
                                    <img src="{{ asset('/') }}website/assets/media/users/user-5.png" alt=""
                                        class="br-5">
                                    <div class="block">
                                        <div class="top-row mb-16">
                                            <div class="info">
                                                <h5 class="light-black">Sophia Reynolds</h5>
                                            </div>
                                            <h5 class="color-sec">★★★★<span class="light-gray">★</span></h5>
                                        </div>
                                        <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Pharetra luctus in
                                            dignissim amet.
                                            Dignissim adipiscing amet praesent nec libero ultrices ac ullamcorper. Enim
                                            mattis faucibus
                                            viverra
                                            integer vestibulum in proin. Imperdiet pellentesque nisl cursus arcu nulla
                                            massa pharetra.
                                            Tristique.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="review-form">
                                <h5 class="fw-500 mb-8">Write a Review</h5>
                                <p class="light-gray mb-32">Your email address will not be published. Required fields
                                    are marked.</p>

                                <p class="mb-16 fw-500">Your Review</p>
                                <form method="post" action="https://uiparadox.co.uk/templates/gadgetize/shop-detail.html"
                                    class="form-group contact-form">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="input-block mb-24">
                                                <textarea class="form-control" name="message" id="comment" rows="4"
                                                    placeholder="Write Your Review here..."></textarea>

                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-block mb-24">
                                                <input type="text" class="form-control" id="name" name="name"
                                                    required placeholder="Name Example">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <g clip-path="url(#clip0_7949_46233)">
                                                        <path
                                                            d="M10 0.00292969C7.09223 0.00292969 4.72656 2.36859 4.72656 5.27637C4.72656 8.18414 7.09223 10.5498 10 10.5498C12.9078 10.5498 15.2734 8.18414 15.2734 5.27637C15.2734 2.36859 12.9078 0.00292969 10 0.00292969ZM10 9.37793C7.7384 9.37793 5.89844 7.53797 5.89844 5.27637C5.89844 3.01477 7.7384 1.1748 10 1.1748C12.2616 1.1748 14.1016 3.01477 14.1016 5.27637C14.1016 7.53797 12.2616 9.37793 10 9.37793Z"
                                                            fill="#141516" />
                                                        <path
                                                            d="M16.5612 13.9949C15.1174 12.529 13.2035 11.7217 11.1719 11.7217H8.82812C6.79656 11.7217 4.88258 12.529 3.43883 13.9949C2.00215 15.4537 1.21094 17.3792 1.21094 19.417C1.21094 19.7406 1.47328 20.0029 1.79688 20.0029H18.2031C18.5267 20.0029 18.7891 19.7406 18.7891 19.417C18.7891 17.3792 17.9979 15.4537 16.5612 13.9949ZM2.40859 18.8311C2.70215 15.5074 5.46918 12.8936 8.82812 12.8936H11.1719C14.5308 12.8936 17.2979 15.5074 17.5914 18.8311H2.40859Z"
                                                            fill="#141516" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_7949_46233">
                                                            <rect width="20" height="20" fill="white"
                                                                transform="translate(0 0.00292969)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-block mb-24">
                                                <input type="email" class="form-control" id="mail" name="email"
                                                    required placeholder="Your Email">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <path
                                                        d="M18.2422 2.97168H1.75781C0.786602 2.97168 0 3.76316 0 4.72949V15.2764C0 16.2484 0.792383 17.0342 1.75781 17.0342H18.2422C19.2053 17.0342 20 16.2518 20 15.2764V4.72949C20 3.76488 19.2165 2.97168 18.2422 2.97168ZM17.996 4.14355C17.6369 4.50078 11.4564 10.6488 11.243 10.861C10.9109 11.193 10.4695 11.3759 10 11.3759C9.53047 11.3759 9.08906 11.193 8.75594 10.8599C8.61242 10.7171 2.50012 4.63707 2.00398 4.14355H17.996ZM1.17188 15.0379V4.96875L6.23586 10.0061L1.17188 15.0379ZM2.00473 15.8623L7.06672 10.8325L7.9284 11.6896C8.48176 12.243 9.21746 12.5477 10 12.5477C10.7825 12.5477 11.5182 12.243 12.0705 11.6907L12.9333 10.8325L17.9953 15.8623H2.00473ZM18.8281 15.0379L13.7641 10.0061L18.8281 4.96875V15.0379Z"
                                                        fill="#141516" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="cus-btn-3 w-25">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Product Description End -->

    <!-- Recommended Product Start -->
    <section class="recommended-product bg-lightest-gray pb-40">
        <div class="container-fluid">
            <div class="top-bar mb-16">
                <h5>Recommended Products</h5>
                <a href="shop-grid-sidebar-1.html" class="cus-btn-arrow"> Show All
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15"
                        fill="none">
                        <path
                            d="M13.3545 14.7476C13.3545 11.7476 16.1545 7.74756 19.3545 7.74756M19.3545 7.74756C17.5212 7.74756 13.3545 6.74756 13.3545 0.747559M19.3545 7.74756H0.354492"
                            stroke="#0C0C0D" stroke-width="2" />
                    </svg>
                </a>
            </div>
            <div class="row row-gap-4">
                @foreach ($related_products as $product)
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                        <div class="featured-product-card bg-white br-10">
                            <div class="image-box mb-16">
                                <form action="{{ route('cart.add', $product->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="qty" value="1">
                                    <input type="hidden" name="size"
                                        value="{{ $product->productSizes[0]->size->id }}">
                                    <input type="hidden" name="color"
                                        value="{{ $product->productColors[0]->color->id }}">
                                    <a href="{{ route('product-detail', $product->id) }}"><img
                                            src="{{ asset($product->image) }}" height="200" alt="" /></a>
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
                                            ${{ $product->regular_price }}</span>&nbsp;&nbsp;${{ $product->selling_price }}
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
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#buyNow").click(function() {
                // Get values for size, color, qty, and id
                const size = $("#productSizes option:selected").val(); // Product size
                const color = $("input[name='color']:checked").val(); // Selected color
                const qty = $("#qty").val(); // Quantity input value
                const id = $("#buyNow").data("id"); // Product ID, from the button's data-id attribute
                const action = "buyNow"; // Action, if required

                // Perform the AJAX request
                $.ajax({
                    url: "/cart/add/" + id, // Your route for adding the item
                    method: "POST",
                    data: {
                        id: id,
                        size: size,
                        color: color,
                        qty: qty,
                        action: action,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(data) {
                        // Redirect to cart page, as the backend will handle the response
                        window.location.href =
                            "/checkout/index"; // Update the URL as per your cart route
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText); // Log any error response from the server
                    }
                });
            });
        });
        $(document).ready(function() {
            // Replace this with the actual stock amount from your backend
            const stockAmount = $("#stock_amount").val(); // Example: stock amount is 10
            // Handle increment button
            $('#increment').click(function() {
                const qtyInput = $('#qty');
                let currentValue = parseInt(qtyInput.val());

                if (isNaN(currentValue) || currentValue < 1) {
                    currentValue = 1; // Default value if input is invalid
                }

                if (currentValue >= stockAmount) {
                    // alert(`stock limit you can not select more than items.`);
                    Swal.fire({
                        icon: 'error',
                        title: 'Sorry',
                        text: 'Stock limit you can not select more than items.'
                    });
                } else {
                    qtyInput.val(currentValue + 1);
                }
            });

            // Handle decrement button
            $('#decrement').click(function() {
                const qtyInput = $('#qty');
                let currentValue = parseInt(qtyInput.val());

                if (isNaN(currentValue) || currentValue <= 1) {
                    currentValue = 1; // Minimum value is 1
                } else {
                    qtyInput.val(currentValue - 1);
                }
            });

            // Prevent manually entering values greater than stock amount
            $('#qty').on('input', function() {
                let currentValue = parseInt($(this).val());

                if (isNaN(currentValue) || currentValue < 1) {
                    $(this).val(1); // Default to 1 if input is invalid
                } else if (currentValue > stockAmount) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Sorry',
                        text: 'Stock limit you can not select more than items.'
                    });
                    $(this).val(stockAmount); // Reset to stock amount
                }
            });
        });
    </script>
    <!-- Recommended Product End -->
@endsection
