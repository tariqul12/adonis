@extends('website.master')
@section('title')
    Checkout Page
@endsection

@section('body')
    <!-- Title Banner Start -->
    <section class="title-banner" style="background-image: url({{ asset($pageTitleBanner->image) }});">
        <div class="container-fluid">
            <div class="banner-wrapper">
                {{-- <img src="{{ asset('/') }}website/assets/media/banner/left-image.png" alt="" class="banner-image1"> --}}
                <h1 class="dark-black fw-600">Checkout</h1>
                {{-- <img src="{{ asset('/') }}website/assets/media/banner/right-image.png" alt="" class="banner-image2"> --}}
            </div>
        </div>
    </section>
    <!-- Title Banner End -->

    <!-- Customer Container Start -->
    {{-- <div class="customer-container py-40">
        <div class="container-fluid">
            <div class="customer-wrapper">
                <div class="title-box">
                    <p class="fw-500">Returning Customer? <a href="javascript:;"
                            class="color-primary text-decoration-underline signin-button">Click here to login</a></p>
                </div>
                <div class="sign-form mt-48">
                    <p class="fw-500 mb-16">If you’ve shopped with us before, enter your information below. New customers,
                        please continue to the Billing section.</p>
                    <form action="#" method="post">
                        <div class="row row-gap-3">
                            <div class="col-lg-6">
                                <div class="input-block">
                                    <input type="text" name="name" id="firstname" class="form-control"
                                        placeholder="Username or email address">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none">
                                        <path
                                            d="M18.2422 2.96875H1.75781C0.786602 2.96875 0 3.76023 0 4.72656V15.2734C0 16.2455 0.792383 17.0312 1.75781 17.0312H18.2422C19.2053 17.0312 20 16.2488 20 15.2734V4.72656C20 3.76195 19.2165 2.96875 18.2422 2.96875ZM17.996 4.14062C17.6369 4.49785 11.4564 10.6458 11.243 10.8581C10.9109 11.1901 10.4695 11.3729 10 11.3729C9.53047 11.3729 9.08906 11.1901 8.75594 10.857C8.61242 10.7142 2.50012 4.63414 2.00398 4.14062H17.996ZM1.17188 15.0349V4.96582L6.23586 10.0031L1.17188 15.0349ZM2.00473 15.8594L7.06672 10.8296L7.9284 11.6867C8.48176 12.2401 9.21746 12.5448 10 12.5448C10.7825 12.5448 11.5182 12.2401 12.0705 11.6878L12.9333 10.8296L17.9953 15.8594H2.00473ZM18.8281 15.0349L13.7641 10.0031L18.8281 4.96582V15.0349Z"
                                            fill    ="#141516" />
                                    </svg>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-block">
                                    <input type="password" name="password" id="passWord" class="form-control"
                                        placeholder="Password">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none">
                                        <g clip-path="url(#clip0_7968_54246)">
                                            <path
                                                d="M19.8898 10.3421C20.0368 10.1378 20.0368 9.86227 19.8898 9.65785C19.8451 9.5957 18.7753 8.11922 17.0388 6.62602L19.8898 10.3421ZM19.8898 10.3421C19.8451 10.4043 18.7753 11.8808 17.0388 13.374C16.0117 14.2571 14.9628 14.9625 13.9213 15.4705M19.8898 10.3421L6.33476 14.9827M2.96124 13.374L3.31779 12.9593L0.110303 10.3421C0.15499 10.4043 1.22472 11.8808 2.96124 13.374ZM2.96124 13.374L3.31781 12.9593M2.96124 13.374L3.31781 12.9593M3.31781 12.9593C3.32463 12.9652 3.33146 12.971 3.3383 12.9769C3.78259 13.3578 4.30002 13.7615 4.87535 14.1434C4.94379 14.1888 5.01304 14.2339 5.08309 14.2787L5.09608 14.287L5.10946 14.2946L5.99122 14.7983L6.16418 14.8971L6.17856 14.9054L6.19335 14.9128C6.23538 14.9339 6.27765 14.9549 6.32015 14.9756L6.07878 15.4705M3.31781 12.9593L5.73444 15.2904C5.83141 15.341 5.9444 15.3999 6.07878 15.4705M6.07878 15.4705L6.33476 14.9827M6.07878 15.4705C7.40507 16.1173 8.72437 16.4453 10 16.4453C11.2757 16.4453 12.595 16.1173 13.9213 15.4705M6.33476 14.9827C7.43018 15.5147 8.67705 15.8984 10 15.8984C11.3151 15.8984 12.56 15.5261 13.6814 14.9787L13.9213 15.4705M6.33476 14.9827L13.6814 14.9787L13.9213 15.4705M13.5053 9.93776C13.5053 11.8737 11.936 13.443 10 13.443C8.06414 13.443 6.49478 11.8737 6.49478 9.93776C6.49478 8.00186 8.06414 6.4325 10 6.4325C11.936 6.4325 13.5053 8.00186 13.5053 9.93776ZM13.9212 4.52961L13.9212 4.52972L13.9212 4.52961Z"
                                                stroke="#141516" stroke-width="1.25" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_7968_54246">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="cus-checkBox mb-8">
                                    <input type="checkbox" id="remember3">
                                    <label for="remember3" class="light-gray">Remember me</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <button type="submit" class="cus-btn-3 sign-submit-btn">Sign In</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Customer Container End -->

    <!-- Billing Details Start -->
    <section class="billing-detail pb-40">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('checkout.new-order') }}" method="post">
            @csrf
            <div class="container-fluid">
                <div class="row row-gap-4">
                    <div class="col-xl-8">
                        <div class="title-row title-row-2 bg-white mb-16">
                            <h5>Shipping Details</h5>
                        </div>
                        <div class="billing-wrapper p-24 bg-white br-10 mb-40">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-block mb-16">
                                        <input type="text" name="first_name" id="name" class="form-control"
                                            placeholder="First Name">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20"
                                            viewBox="0 0 21 20" fill="none">
                                            <path
                                                d="M10.5 0C7.59223 0 5.22656 2.36566 5.22656 5.27344C5.22656 8.18121 7.59223 10.5469 10.5 10.5469C13.4078 10.5469 15.7734 8.18121 15.7734 5.27344C15.7734 2.36566 13.4078 0 10.5 0ZM10.5 9.375C8.2384 9.375 6.39844 7.53504 6.39844 5.27344C6.39844 3.01184 8.2384 1.17188 10.5 1.17188C12.7616 1.17188 14.6016 3.01184 14.6016 5.27344C14.6016 7.53504 12.7616 9.375 10.5 9.375Z"
                                                fill="#141516" />
                                            <path
                                                d="M17.0612  13.992C15.6174 12.5261 13.7035 11.7188 11.6719 11.7188H9.32812C7.29656 11.7188 5.38258 12.5261 3.93883 13.992C2.50215 15.4507 1.71094 17.3763 1.71094 19.4141C1.71094 19.7377 1.97328 20 2.29688 20H18.7031C19.0267 20 19.2891 19.7377 19.2891 19.4141C19.2891 17.3763 18.4979 15.4507 17.0612 13.992ZM2.90859 18.8281C3.20215 15.5045 5.96918 12.8906 9.32812 12.8906H11.6719C15.0308 12.8906 17.7979 15.5045 18.0914 18.8281H2.90859Z"
                                                fill="#141516" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-block mb-16">
                                        <input type="text" name="last_name" id="lastName" class="form-control"
                                            placeholder="Last Name">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20"
                                            viewBox="0 0 21 20" fill="none">
                                            <path
                                                d="M10.5 0C7.59223 0 5.22656 2.36566 5.22656 5.27344C5.22656 8.18121 7.59223 10.5469 10.5 10.5469C13.4078 10.5469 15.7734 8.18121 15.7734 5.27344C15.7734 2.36566 13.4078 0 10.5 0ZM10.5 9.375C8.2384 9.375 6.39844 7.53504 6.39844 5.27344C6.39844 3.01184 8.2384 1.17188 10.5 1.17188C12.7616 1.17188 14.6016 3.01184 14.6016 5.27344C14.6016 7.53504 12.7616 9.375 10.5 9.375Z"
                                                fill="#141516" />
                                            <path
                                                d="M17.0612  13.992C15.6174 12.5261 13.7035 11.7188 11.6719 11.7188H9.32812C7.29656 11.7188 5.38258 12.5261 3.93883 13.992C2.50215 15.4507 1.71094 17.3763 1.71094 19.4141C1.71094 19.7377 1.97328 20 2.29688 20H18.7031C19.0267 20 19.2891 19.7377 19.2891 19.4141C19.2891 17.3763 18.4979 15.4507 17.0612 13.992ZM2.90859 18.8281C3.20215 15.5045 5.96918 12.8906 9.32812 12.8906H11.6719C15.0308 12.8906 17.7979 15.5045 18.0914 18.8281H2.90859Z"
                                                fill="#141516" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-block mb-16">
                                        <input type="email" name="email" id="e-mail" class="form-control"
                                            placeholder="Email Address">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20"
                                            viewBox="0 0 21 20" fill="none">
                                            <g clip-path="url(#clip0_7968_53870)">
                                                <path
                                                    d="M18.7422 2.96875H2.25781C1.2866 2.96875 0.5 3.76023 0.5 4.72656V15.2734C0.5 16.2455 1.29238 17.0312 2.25781 17.0312H18.7422C19.7053 17.0312 20.5 16.2488 20.5 15.2734V4.72656C20.5 3.76195 19.7165 2.96875 18.7422 2.96875ZM18.496 4.14062C18.1369 4.49785 11.9564 10.6458 11.743 10.8581C11.4109 11.1901 10.9695 11.3729 10.5 11.3729C10.0305 11.3729 9.58906 11.1901 9.25594 10.857C9.11242 10.7142 3.00012 4.63414 2.50398 4.14062H18.496ZM1.67188 15.0349V4.96582L6.73586 10.0031L1.67188 15.0349ZM2.50473 15.8594L7.56672 10.8296L8.4284 11.6867C8.98176 12.2401 9.71746 12.5448 10.5 12.5448C11.2825 12.5448 12.0182 12.2401 12.5705 11.6878L13.4333 10.8296L18.4953 15.8594H2.50473ZM19.3281 15.0349L14.2641 10.0031L19.3281 4.96582V15.0349Z"
                                                    fill="#141516" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_7968_53870">
                                                    <rect width="20" height="20" fill="white"
                                                        transform="translate(0.5)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-block mb-16">
                                        <input type="tel" name="mobile" id="phoneNumber" class="form-control"
                                            placeholder="Phone Number">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M16.2509 15.5304L15.8338 14.8339C15.0836 13.5971 14.0484 12.1776 12.6904 12.1776C12.4389 12.1776 12.1897 12.2282 11.9431 12.3307L11.2142 12.6432C11.1477 12.6708 11.083 12.7022 11.0145 12.7355C10.828 12.8262 10.6165 12.929 10.3989 12.929C9.86217 12.929 9.2403 12.2305 8.64811 10.9623C8.06692 9.71762 8.10399 9.06508 8.23741 8.73673C8.38462 8.37447 8.72695 8.21959 9.09471 8.08041C9.14585 8.06101 9.19204 8.04342 9.23696 8.02493L9.97501 7.71418C11.8978 6.9101 11.1825 4.10014 10.948 3.17889L10.7491 2.3868C10.579 1.734 10.1282 0 8.63277 0C8.35594 0 8.06061 0.064496 7.75527 0.191774C7.55492 0.271334 4.79792 1.39672 3.79909 3.37382C2.60532 5.72716 2.82605 8.88296 4.45451 12.7515C6.07079 16.625 8.16669 18.9942 10.684 19.7933C11.1158 19.9305 11.6038 19.9999 12.1346 19.9999H12.1349C13.8721 19.9999 15.587 19.2608 15.7262 19.1994C16.3251 18.9457 16.7123 18.5601 16.8768 18.0532C17.1557 17.1937 16.6878 16.2519 16.2509 15.5304ZM15.5897 17.6356C15.5514 17.7534 15.4185 17.8609 15.1948 17.9551C15.1911 17.9567 15.1866 17.9586 15.1828 17.9603C15.1673 17.9672 13.615 18.647 12.1345 18.6469C11.7428 18.6469 11.3926 18.5988 11.0935 18.5037C8.97266 17.8305 7.1592 15.72 5.70231 12.2286C4.23459 8.7416 4.00006 5.96837 5.0062 3.98495C5.78746 2.43858 8.23335 1.45761 8.25734 1.44823C8.26221 1.44625 8.26699 1.44435 8.27177 1.44237C8.41105 1.38391 8.53589 1.35306 8.63277 1.35306C8.9309 1.35306 9.20223 1.81545 9.43803 2.72173L9.63602 3.51048C10.0632 5.18828 9.99819 6.23772 9.45129 6.46647L8.71675 6.77587C8.68753 6.78796 8.65334 6.80068 8.61563 6.81502C8.20989 6.96864 7.36558 7.28814 6.98375 8.22735C6.63727 9.0796 6.7807 10.1615 7.42178 11.535C8.28521 13.3835 9.25897 14.2821 10.3987 14.2821C10.9277 14.2821 11.3523 14.0757 11.6059 13.9525C11.6526 13.9298 11.6944 13.909 11.7393 13.8904L12.4693 13.5774C12.5446 13.546 12.6169 13.5307 12.6903 13.5307C13.0417 13.5307 13.6717 13.8786 14.6749 15.5325L15.0918 16.2285C15.6055 17.0767 15.6461 17.4618 15.5897 17.6356Z"
                                                fill="#141516" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-block mb-16">
                                        <input type="text" name="address" id="location" class="form-control"
                                            placeholder="Your Address House or Street Name">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M9.51246 19.7391C9.62113 19.9021 9.8041 20 10 20C10.1959 20 10.3789 19.9021 10.4875 19.7391C11.8742 17.6591 13.9167 15.0903 15.34 12.4778C16.478 10.3889 17.0312 8.60727 17.0312 7.03125C17.0312 3.15422 13.877 0 10 0C6.12297 0 2.96875 3.15422 2.96875 7.03125C2.96875 8.60727 3.52199 10.3889 4.66004 12.4778C6.08227 15.0883 8.12863 17.6634 9.51246 19.7391ZM10 1.17188C13.2309 1.17188 15.8594 3.80039 15.8594 7.03125C15.8594 8.40641 15.3529 10.0046 14.3109 11.9171C13.0841 14.1691 11.3334 16.4534 10 18.3738C8.66684 16.4537 6.91602 14.1692 5.6891 11.9171C4.64715 10.0046 4.14062 8.40641 4.14062 7.03125C4.14062 3.80039 6.76914 1.17188 10 1.17188Z"
                                                fill="#141516" />
                                            <path
                                                d="M10 10.5469C11.9385 10.5469 13.5156 8.96977 13.5156 7.03125C13.5156 5.09273 11.9385 3.51562 10 3.51562C8.06148 3.51562 6.48438 5.09273 6.48438 7.03125C6.48438 8.96977 8.06148 10.5469 10 10.5469ZM10 4.6875C11.2923 4.6875 12.3438 5.73891 12.3438 7.03125C12.3438 8.32359 11.2923 9.375 10 9.375C8.70766 9.375 7.65625 8.32359 7.65625 7.03125C7.65625 5.73891 8.70766 4.6875 10 4.6875Z"
                                                fill="#141516" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-block mb-16">
                                        <input type="text" name="city" id="city" class="form-control"
                                            placeholder="Town / City">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M9.51246 19.7391C9.62113 19.9021 9.8041 20 10 20C10.1959 20 10.3789 19.9021 10.4875 19.7391C11.8742 17.6591 13.9167 15.0903 15.34 12.4778C16.478 10.3889 17.0312 8.60727 17.0312 7.03125C17.0312 3.15422 13.877 0 10 0C6.12297 0 2.96875 3.15422 2.96875 7.03125C2.96875 8.60727 3.52199 10.3889 4.66004 12.4778C6.08227 15.0883 8.12863 17.6634 9.51246 19.7391ZM10 1.17188C13.2309 1.17188 15.8594 3.80039 15.8594 7.03125C15.8594 8.40641 15.3529 10.0046 14.3109 11.9171C13.0841 14.1691 11.3334 16.4534 10 18.3738C8.66684 16.4537 6.91602 14.1692 5.6891 11.9171C4.64715 10.0046 4.14062 8.40641 4.14062 7.03125C4.14062 3.80039 6.76914 1.17188 10 1.17188Z"
                                                fill="#141516" />
                                            <path
                                                d="M10 10.5469C11.9385 10.5469 13.5156 8.96977 13.5156 7.03125C13.5156 5.09273 11.9385 3.51562 10 3.51562C8.06148 3.51562 6.48438 5.09273 6.48438 7.03125C6.48438 8.96977 8.06148 10.5469 10 10.5469ZM10 4.6875C11.2923 4.6875 12.3438 5.73891 12.3438 7.03125C12.3438 8.32359 11.2923 9.375 10 9.375C8.70766 9.375 7.65625 8.32359 7.65625 7.03125C7.65625 5.73891 8.70766 4.6875 10 4.6875Z"
                                                fill="#141516" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-block mb-16">
                                        <input type="text" name="country" id="region" class="form-control"
                                            placeholder="Country / Region">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M9.51246 19.7391C9.62113 19.9021 9.8041 20 10 20C10.1959 20 10.3789 19.9021 10.4875 19.7391C11.8742 17.6591 13.9167 15.0903 15.34 12.4778C16.478 10.3889 17.0312 8.60727 17.0312 7.03125C17.0312 3.15422 13.877 0 10 0C6.12297 0 2.96875 3.15422 2.96875 7.03125C2.96875 8.60727 3.52199 10.3889 4.66004 12.4778C6.08227 15.0883 8.12863 17.6634 9.51246 19.7391ZM10 1.17188C13.2309 1.17188 15.8594 3.80039 15.8594 7.03125C15.8594 8.40641 15.3529 10.0046 14.3109 11.9171C13.0841 14.1691 11.3334 16.4534 10 18.3738C8.66684 16.4537 6.91602 14.1692 5.6891 11.9171C4.64715 10.0046 4.14062 8.40641 4.14062 7.03125C4.14062 3.80039 6.76914 1.17188 10 1.17188Z"
                                                fill="#141516" />
                                            <path
                                                d="M10 10.5469C11.9385 10.5469 13.5156 8.96977 13.5156 7.03125C13.5156 5.09273 11.9385 3.51562 10 3.51562C8.06148 3.51562 6.48438 5.09273 6.48438 7.03125C6.48438 8.96977 8.06148 10.5469 10 10.5469ZM10 4.6875C11.2923 4.6875 12.3438 5.73891 12.3438 7.03125C12.3438 8.32359 11.2923 9.375 10 9.375C8.70766 9.375 7.65625 8.32359 7.65625 7.03125C7.65625 5.73891 8.70766 4.6875 10 4.6875Z"
                                                fill="#141516" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-block mb-16">
                                        <input type="text" name="state" id="states" class="form-control"
                                            placeholder="State">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M9.51246 19.7391C9.62113 19.9021 9.8041 20 10 20C10.1959 20 10.3789 19.9021 10.4875 19.7391C11.8742 17.6591 13.9167 15.0903 15.34 12.4778C16.478 10.3889 17.0312 8.60727 17.0312 7.03125C17.0312 3.15422 13.877 0 10 0C6.12297 0 2.96875 3.15422 2.96875 7.03125C2.96875 8.60727 3.52199 10.3889 4.66004 12.4778C6.08227 15.0883 8.12863 17.6634 9.51246 19.7391ZM10 1.17188C13.2309 1.17188 15.8594 3.80039 15.8594 7.03125C15.8594 8.40641 15.3529 10.0046 14.3109 11.9171C13.0841 14.1691 11.3334 16.4534 10 18.3738C8.66684 16.4537 6.91602 14.1692 5.6891 11.9171C4.64715 10.0046 4.14062 8.40641 4.14062 7.03125C4.14062 3.80039 6.76914 1.17188 10 1.17188Z"
                                                fill="#141516" />
                                            <path
                                                d="M10 10.5469C11.9385 10.5469 13.5156 8.96977 13.5156 7.03125C13.5156 5.09273 11.9385 3.51562 10 3.51562C8.06148 3.51562 6.48438 5.09273 6.48438 7.03125C6.48438 8.96977 8.06148 10.5469 10 10.5469ZM10 4.6875C11.2923 4.6875 12.3438 5.73891 12.3438 7.03125C12.3438 8.32359 11.2923 9.375 10 9.375C8.70766 9.375 7.65625 8.32359 7.65625 7.03125C7.65625 5.73891 8.70766 4.6875 10 4.6875Z"
                                                fill="#141516" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-block">
                                        <label for="textbox" class="fw-500 mb-16">Order notes (optional)</label>
                                        <textarea name="note" id="textbox" cols="8" rows="5" class="form-control"
                                            placeholder="Note About Your Order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Shipping Method -->
                        <div class="title-row title-row-2 bg-white mb-16">
                            <h5>Shipping Methods</h5>
                        </div>
                        <div class="shipping-radio-container bg-white mb-40">
                            <div class="plans mb-16">
                                @foreach ($shippings as $key => $shipping)
                                    <label class="plan basic-plan" for="basic{{ $key }}">
                                        <input @if ($key == 0) checked @endif type="radio"
                                            name="shipping" id="basic{{ $key }}">
                                        <span class="plan-content">
                                            <input type="hidden" id="shipping_id" value="{{ $shipping->cost }}">
                                            <span class="plan-details">
                                                <span class="h6 fw-500 dark-black">{{ $shipping->title }}</span>
                                                <span class="light-gray d-block">Delivery</span>
                                            </span>
                                            <span class="fw-500 dark-black">${{ $shipping->cost }}</span>
                                        </span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                        <!-- Shipping Method -->

                        <!-- Payment Method -->
                        <div class="title-row title-row-2 bg-white mb-16">
                            <h5>Payments Methods</h5>
                        </div>
                        <div class="shipping-radio-container bg-white">
                            <form action="" method="post">
                                <div class="plans mb-40">
                                    <label class="plan basic-plan" for="bank">
                                        <input type="radio" name="payment_method" value="ssl_commerz" id="bank">
                                        <span class="plan-content content-2">
                                            <img width="60px"
                                                src="{{ asset('/') }}website/assets/media/icons/sslcsommerz1.png"
                                                alt="">
                                            <span class="plan-details">
                                                <span class="h6 fw-500 dark-black"> SSL Commerz Payment </span>
                                            </span>
                                        </span>
                                    </label>
                                    <label class="plan basic-plan" for="cod">
                                        <input checked type="radio" name="payment_method" value="cash"
                                            id="cod">
                                        <span class="plan-content content-2">
                                            <img src="{{ asset('/') }}website/assets/media/icons/payment-card-4.png"
                                                alt="">
                                            <span class="plan-details">
                                                <span class="h6 fw-500 dark-black">Cash on Delivery</span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                            </form>
                        </div>
                        <!-- Payment Method -->
                    </div>
                    <div class="col-xl-4">
                        <div class="title-row title-row-2 mb-16">
                            <h5>Order Summary</h5>
                        </div>
                        <div class="summary-container bg-white">
                            @php
                                $sum = 0;
                            @endphp
                            @foreach (Cart::content() as $item)
                                <div class="item-container mb-16">
                                    <div class="left-box d-flex align-items-center gap-16">
                                        <div class="icon-box">
                                            <img src="{{ asset($item->options->image) }}" alt="">
                                        </div>
                                        <a href="#" class="h6">{{ Str::limit($item->name, 20) }} x
                                            {{ $item->qty }}</a>
                                    </div>
                                    <div class="right-box">
                                        <h6 class="light-gray">TK:{{ $item->price * $item->qty }}</h6>
                                    </div>
                                </div>
                                <div class="hr-line mb-16"></div>
                                @php
                                    $sum += $item->price * $item->qty;
                                @endphp
                            @endforeach

                            <div class="input-block d-flex justify-content-between py-32">
                                <input type="text" name="copon_code" class="form-control" id="codeCp"
                                    placeholder="Coupon Code">
                                <button type="button" class="cus-btn">Apply Now</button>
                            </div>

                            <div class="d-flex align-items-center justify-content-between mb-16">
                                <h6>Subtotal</h6>
                                <h6 class="light-gray">TK:{{ $sum }}</h6>
                            </div>

                            <div class="hr-line mb-16"></div>
                            <div class="d-flex align-items-center justify-content-between mb-16">
                                <h6>Delivery Charge</h6>
                                <h6 class="light-gray" id="shipping-cost"></h6>
                            </div>
                            <div class="hr-line mb-16"></div>
                            <div class="d-flex align-items-center justify-content-between mb-16">
                                <h6>Tax Amount (5%)</h6>
                                @php
                                    $tax = ($sum * 5) / 100;
                                @endphp
                                <h6 class="light-gray">${{ $tax }}</h6>
                            </div>
                            <div class="hr-line mb-16"></div>
                            <div class="d-flex align-items-center justify-content-between mb-16">
                                <h6>Coupon Discount</h6>
                                <h6 class="light-gray">{{ $coupon_discount = 0 }}</h6>
                            </div>
                            <div class="hr-line mb-16"></div>
                            <div class="d-flex align-items-center justify-content-between mb-16">
                                <h5 class="color-primary">TOTAL</h5>
                                <h5 class="color-primary" id="total-cost"></h5>
                            </div>

                            <div class="col-md-12">
                                <div class="cus-checkBox mb-32">
                                    <input type="checkbox" id="terms">
                                    <label for="terms">I have read and agree to the website terms and conditions</label>
                                </div>
                            </div>
                            <input type="hidden" name="subtotal" value="{{ $sum }}">
                            <input type="hidden" name="shipping_amount" id="delivery-cost" value="0">
                            <input type="hidden" name="tax" value="{{ $tax }}">
                            <input type="hidden" name="coupon_discount" value="{{ $coupon_discount }}">
                            <input type="hidden" name="total" id="total"
                                value="{{ $sum + $tax + $coupon_discount }}">

                            <button type="submit" class="cus-btn active-btn">Proceed to Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- Billing Details End -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to handle the selected shipping option
            function handleShippingSelection(shippingId, shippingCost) {
                // Get the required DOM elements
                const shippingCostElement = document.getElementById('shipping-cost');
                const deliveryCostElement = document.getElementById('delivery-cost');
                const totalElement = document.getElementById('total');
                const totalCostElement = document.getElementById('total-cost');

                // Update the shipping cost displayed
                shippingCostElement.textContent = shippingCost;

                // Set the delivery cost value
                deliveryCostElement.value = shippingCost;

                // Parse total and delivery cost values
                const tCost = parseInt(totalElement.value) || 0; // Default to 0 if NaN
                const dCost = parseInt(shippingCost) || 0; // Default to 0 if NaN

                // Calculate total
                const total = tCost + dCost;

                // Update total value and displayed cost
                totalElement.value = total;
                totalCostElement.textContent = total;
            }

            // Trigger selection handling for the default checked radio button
            var defaultSelected = document.querySelector('input[name="shipping"]:checked');
            if (defaultSelected) {
                var shippingId = defaultSelected.value;
                var shippingCost = defaultSelected.closest('label').querySelector('#shipping_id').value;
                parseInt(shippingCost);
                handleShippingSelection(shippingId, shippingCost);
            }

            // Listen for changes on radio buttons and handle selection
            var radioButtons = document.querySelectorAll('input[name="shipping"]');
            radioButtons.forEach(function(radio) {
                radio.addEventListener('change', function() {
                    var selectedShippingId = radio.value;
                    var selectedShippingCost = radio.closest('label').querySelector('#shipping_id')
                        .value;
                    parseInt(selectedShippingCost);
                    handleShippingSelection(selectedShippingId, selectedShippingCost);
                });
            });
        });
    </script>
@endsection
