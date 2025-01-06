@extends('website.master')
@section('title')
    Login Page
@endsection

@section('body')
    <!-- Title Banner Start -->
    <section class="title-banner" style="background-image: url({{ asset($pageTitleBanner->image) }});">
        <h1 class="dark-black fw-600">Login</h1>
        {{-- <div class="container-fluid">
        <div class="banner-wrapper">
            <img src="{{ asset('/') }}website/assets/media/images/bag.png" alt="" class="banner-image1">
            <img src="{{ asset('/') }}website/assets/media/images/saree-2.png" alt="" class="banner-image2">
        </div>
    </div> --}}
    </section>
    <!-- Title Banner End -->

    <section class="my-account py-40">
        <div class="container-fluid">
            <div class="row row-gap-4">
                <div class="col-md-8 m-auto">
                    <div class="account account-1">
                        <h4 class="mb-12">Login</h4>
                        <p class="mb-32 text-danger">{{ Session('message') }}</p>
                        <form action="{{ route('customer.login') }}" method="post">
                            @csrf
                            <input type="hidden" name="check_page" value="dashboard">
                            <div class="row">
                                {{-- <div class="col-sm-6">
                                    <a href="#" class="link-btn fw-500"><img
                                            src="{{ asset('/') }}website/assets/media/icons/google-icon.png"
                                            alt=""> Login with Google</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#" class="link-btn fw-500 mt-sm-0 mt-16"><img
                                            src="{{ asset('/') }}website/assets/media/icons/fb-icon.png" alt="">
                                        Login with Facebook</a>
                                </div>

                                <div class="col-sm-12">
                                    <p class="or mb-12">Or</p>
                                </div> --}}
                                <div class="col-sm-12">
                                    <div class="input-block mb-16">
                                        <input type="email" name="email" autocomplete="off" class="form-control"
                                            placeholder="Your Email">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M18.2422 2.96875H1.75781C0.786602 2.96875 0 3.76023 0 4.72656V15.2734C0 16.2455 0.792383 17.0312 1.75781 17.0312H18.2422C19.2053 17.0312 20 16.2488 20 15.2734V4.72656C20 3.76195 19.2165 2.96875 18.2422 2.96875ZM17.996 4.14062C17.6369 4.49785 11.4564 10.6458 11.243 10.8581C10.9109 11.1901 10.4695 11.3729 10 11.3729C9.53047 11.3729 9.08906 11.1901 8.75594 10.857C8.61242 10.7142 2.50012 4.63414 2.00398 4.14062H17.996ZM1.17188 15.0349V4.96582L6.23586 10.0031L1.17188 15.0349ZM2.00473 15.8594L7.06672 10.8296L7.9284 11.6867C8.48176 12.2401 9.21746 12.5448 10 12.5448C10.7825 12.5448 11.5182 12.2401 12.0705 11.6878L12.9333 10.8296L17.9953 15.8594H2.00473ZM18.8281 15.0349L13.7641 10.0031L18.8281 4.96582V15.0349Z"
                                                fill="#141516" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-block mb-16">
                                        <input type="password" name="password" autocomplete="off" class="form-control"
                                            placeholder="Password">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_7949_46264)">
                                                <path
                                                    d="M19.8898 10.3421C20.0368 10.1378 20.0368 9.86227 19.8898 9.65785C19.8451 9.5957 18.7753 8.11922 17.0388 6.62602L19.8898 10.3421ZM19.8898 10.3421C19.8451 10.4043 18.7753 11.8808 17.0388 13.374C16.0117 14.2571 14.9628 14.9625 13.9213 15.4705M19.8898 10.3421L6.33476 14.9827M2.96124 13.374L3.31779 12.9593L0.110303 10.3421C0.15499 10.4043 1.22472 11.8808 2.96124 13.374ZM2.96124 13.374L3.31781 12.9593M2.96124 13.374L3.31781 12.9593M3.31781 12.9593C3.32463 12.9652 3.33146 12.971 3.3383 12.9769C3.78259 13.3578 4.30002 13.7615 4.87535 14.1434C4.94379 14.1888 5.01304 14.2339 5.08309 14.2787L5.09608 14.287L5.10946 14.2946L5.99122 14.7983L6.16418 14.8971L6.17856 14.9054L6.19335 14.9128C6.23538 14.9339 6.27765 14.9549 6.32015 14.9756L6.07878 15.4705M3.31781 12.9593L5.73444 15.2904C5.83141 15.341 5.9444 15.3999 6.07878 15.4705M6.07878 15.4705L6.33476 14.9827M6.07878 15.4705C7.40507 16.1173 8.72437 16.4453 10 16.4453C11.2757 16.4453 12.595 16.1173 13.9213 15.4705M6.33476 14.9827C7.43018 15.5147 8.67705 15.8984 10 15.8984C11.3151 15.8984 12.56 15.5261 13.6814 14.9787L13.9213 15.4705M6.33476 14.9827L13.6814 14.9787L13.9213 15.4705M13.5053 9.93776C13.5053 11.8737 11.936 13.443 10 13.443C8.06414 13.443 6.49478 11.8737 6.49478 9.93776C6.49478 8.00186 8.06414 6.4325 10 6.4325C11.936 6.4325 13.5053 8.00186 13.5053 9.93776ZM13.9212 4.52961L13.9212 4.52972L13.9212 4.52961Z"
                                                    stroke="#141516" stroke-width="1.25" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_7949_46264">
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <button type="submit" class="cus-btn-3 mb-16 sign-submit-btn"> Sign In</button>
                                </div>
                            </div>
                            <p class="fw-500 mb-16">
                                Don't have an account? <a href="{{ route('customer.register') }}">Sign Up</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
