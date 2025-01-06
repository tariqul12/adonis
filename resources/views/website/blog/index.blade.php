@extends('website.master')

@section('title')
    About Us Page
@endsection

@section('body')
    <!-- Title Banner Start -->
    <section class="title-banner" style="background-image: url({{ asset($pageTitleBanner->image) }});">
        <h1 class="dark-black fw-600">Blog</h1>
        {{-- <div class="container-fluid">
            <div class="banner-wrapper">
                <img src="{{ asset('/') }}website/assets/media/images/bag.png" alt="" class="banner-image1">
                <img src="{{ asset('/') }}website/assets/media/images/saree-2.png" alt="" class="banner-image2">
            </div>
        </div> --}}
    </section>
    <!-- Title Banner End -->

    <!-- Blog Section Start -->
    <section class="blog-section bg-lightest-gray py-40">
        <div class="container-fluid">
            <div class="row row-gap-3">
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                    <a href="blog-detail.html" class="blog-block bg-white m-0">
                        <div class="blog-image">
                            <img src="{{ asset('/') }}website/assets/media/blogs/blog-1.png" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="d-flex align-items-center gap-16 mb-16">
                                <img src="{{ asset('/') }}website/assets/media/icons/calender.png" alt="">
                                <p class="fw-500 dark-black">24 June, 2024</p>
                            </div>
                            <h6 class="mb-16 fw-600">Headphone Heroes: Elevating Your Experience Quality Sound</h6>
                            <div class="d-flex align-items-center justify-content-between mb-16">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/users/user-1.png" alt="">
                                    <p class="dark-black">By <span class="color-primary">Emily</span></p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/icons/icon-1.png" alt="">
                                    <p class="dark-black">Comments</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/icons/icon-2.png" alt="">
                                    <p class="dark-black">Views</p>
                                </div>
                            </div>
                            <p class="light-gray mb-32">Lorem ipsum dolor sit amet consectetur. Vitae vel sit convallis
                                aliquet amet vestibulum maecenas ac.</p>
                            <div class="cus-btn-arrow">Read More
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15"
                                    fill="none">
                                    <path
                                        d="M13.3545 14.7476C13.3545 11.7476 16.1545 7.74756 19.3545 7.74756M19.3545 7.74756C17.5212 7.74756 13.3545 6.74756 13.3545 0.747559M19.3545 7.74756H0.354492"
                                        stroke="#0C0C0D" stroke-width="2" />
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                    <a href="blog-detail.html" class="blog-block bg-white m-0">
                        <div class="blog-image">
                            <img src="{{ asset('/') }}website/assets/media/blogs/blog-2.png" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="d-flex align-items-center gap-16 mb-16">
                                <img src="{{ asset('/') }}website/assets/media/icons/calender.png" alt="">
                                <p class="fw-500 dark-black">24 June, 2024</p>
                            </div>
                            <h6 class="mb-16 fw-600">Gizmo Galore: Exploring the Coolest Gadgets on the Market</h6>
                            <div class="d-flex align-items-center justify-content-between mb-16">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/users/user-2.png" alt="">
                                    <p class="dark-black">By <span class="color-primary">Harry</span></p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/icons/icon-1.png" alt="">
                                    <p class="dark-black">Comments</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/icons/icon-2.png" alt="">
                                    <p class="dark-black">Views</p>
                                </div>
                            </div>
                            <p class="light-gray mb-32">Lorem ipsum dolor sit amet consectetur. Vitae vel sit convallis
                                aliquet amet vestibulum maecenas ac.</p>
                            <div class="cus-btn-arrow">Read More
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15"
                                    fill="none">
                                    <path
                                        d="M13.3545 14.7476C13.3545 11.7476 16.1545 7.74756 19.3545 7.74756M19.3545 7.74756C17.5212 7.74756 13.3545 6.74756 13.3545 0.747559M19.3545 7.74756H0.354492"
                                        stroke="#0C0C0D" stroke-width="2" />
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                    <a href="blog-detail.html" class="blog-block bg-white m-0">
                        <div class="blog-image">
                            <img src="{{ asset('/') }}website/assets/media/blogs/blog-3.png" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="d-flex align-items-center gap-16 mb-16">
                                <img src="{{ asset('/') }}website/assets/media/icons/calender.png" alt="">
                                <p class="fw-500 dark-black">24 June, 2024</p>
                            </div>
                            <h6 class="mb-16 fw-600">The 4K Perspective: Gaining Insights into Ultra HD Entertainment</h6>
                            <div class="d-flex align-items-center justify-content-between mb-16">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/users/user-1.png" alt="">
                                    <p class="dark-black">By <span class="color-primary">Emily</span></p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/icons/icon-1.png" alt="">
                                    <p class="dark-black">Comments</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/icons/icon-2.png" alt="">
                                    <p class="dark-black">Views</p>
                                </div>
                            </div>
                            <p class="light-gray mb-32">Lorem ipsum dolor sit amet consectetur. Vitae vel sit convallis
                                aliquet amet vestibulum maecenas ac.</p>
                            <div class="cus-btn-arrow">Read More
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
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                    <a href="blog-detail.html" class="blog-block bg-white m-0">
                        <div class="blog-image">
                            <img src="{{ asset('/') }}website/assets/media/blogs/blog-4.png" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="d-flex align-items-center gap-16 mb-16">
                                <img src="{{ asset('/') }}website/assets/media/icons/calender.png" alt="">
                                <p class="fw-500 dark-black">24 June, 2024</p>
                            </div>
                            <h6 class="mb-16 fw-600">Gaming Grasp: Navigating the World of Game Controllers</h6>
                            <div class="d-flex align-items-center justify-content-between mb-16">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/users/user-2.png" alt="">
                                    <p class="dark-black">By <span class="color-primary">Harry</span></p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/icons/icon-1.png" alt="">
                                    <p class="dark-black">Comments</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/icons/icon-2.png" alt="">
                                    <p class="dark-black">Views</p>
                                </div>
                            </div>
                            <p class="light-gray mb-32">Lorem ipsum dolor sit amet consectetur. Vitae vel sit convallis
                                aliquet amet vestibulum maecenas ac.</p>
                            <div class="cus-btn-arrow">Read More
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
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                    <a href="blog-detail.html" class="blog-block bg-white m-0">
                        <div class="blog-image">
                            <img src="{{ asset('/') }}website/assets/media/blogs/blog-5.png" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="d-flex align-items-center gap-16 mb-16">
                                <img src="{{ asset('/') }}website/assets/media/icons/calender.png" alt="">
                                <p class="fw-500 dark-black">24 June, 2024</p>
                            </div>
                            <h6 class="mb-16 fw-600">Exploring the Benefits of Multi-Device Charging Stations</h6>
                            <div class="d-flex align-items-center justify-content-between mb-16">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/users/user-1.png" alt="">
                                    <p class="dark-black">By <span class="color-primary">Emily</span></p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/icons/icon-1.png" alt="">
                                    <p class="dark-black">Comments</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/icons/icon-2.png" alt="">
                                    <p class="dark-black">Views</p>
                                </div>
                            </div>
                            <p class="light-gray mb-32">Lorem ipsum dolor sit amet consectetur. Vitae vel sit convallis
                                aliquet amet vestibulum maecenas ac.</p>
                            <div class="cus-btn-arrow">Read More
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
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                    <a href="blog-detail.html" class="blog-block bg-white m-0">
                        <div class="blog-image">
                            <img src="{{ asset('/') }}website/assets/media/blogs/blog-6.png" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="d-flex align-items-center gap-16 mb-16">
                                <img src="{{ asset('/') }}website/assets/media/icons/calender.png" alt="">
                                <p class="fw-500 dark-black">24 June, 2024</p>
                            </div>
                            <h6 class="mb-16 fw-600">How to Choose the Best Headphones for Your Needs</h6>
                            <div class="d-flex align-items-center justify-content-between mb-16">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/users/user-2.png" alt="">
                                    <p class="dark-black">By <span class="color-primary">Harry</span></p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/icons/icon-1.png" alt="">
                                    <p class="dark-black">Comments</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/icons/icon-2.png" alt="">
                                    <p class="dark-black">Views</p>
                                </div>
                            </div>
                            <p class="light-gray mb-32">Lorem ipsum dolor sit amet consectetur. Vitae vel sit convallis
                                aliquet amet vestibulum maecenas ac.</p>
                            <div class="cus-btn-arrow">Read More
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
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                    <a href="blog-detail.html" class="blog-block bg-white m-0">
                        <div class="blog-image">
                            <img src="{{ asset('/') }}website/assets/media/blogs/blog-7.png" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="d-flex align-items-center gap-16 mb-16">
                                <img src="{{ asset('/') }}website/assets/media/icons/calender.png" alt="">
                                <p class="fw-500 dark-black">24 June, 2024</p>
                            </div>
                            <h6 class="mb-16 fw-600">The Ultimate Guide to Gaming Controllers: Features and Benefits</h6>
                            <div class="d-flex align-items-center justify-content-between mb-16">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/users/user-1.png" alt="">
                                    <p class="dark-black">By <span class="color-primary">Emily</span></p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/icons/icon-1.png" alt="">
                                    <p class="dark-black">Comments</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/icons/icon-2.png" alt="">
                                    <p class="dark-black">Views</p>
                                </div>
                            </div>
                            <p class="light-gray mb-32">Lorem ipsum dolor sit amet consectetur. Vitae vel sit convallis
                                aliquet amet vestibulum maecenas ac.</p>
                            <div class="cus-btn-arrow">Read More
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
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                    <a href="blog-detail.html" class="blog-block bg-white m-0">
                        <div class="blog-image">
                            <img src="{{ asset('/') }}website/assets/media/blogs/blog-8.png" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="d-flex align-items-center gap-16 mb-16">
                                <img src="{{ asset('/') }}website/assets/media/icons/calender.png" alt="">
                                <p class="fw-500 dark-black">24 June, 2024</p>
                            </div>
                            <h6 class="mb-16 fw-600">Maximize Your Productivity with These Laptop Accessories</h6>
                            <div class="d-flex align-items-center justify-content-between mb-16">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/users/user-2.png" alt="">
                                    <p class="dark-black">By <span class="color-primary">Harry</span></p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/icons/icon-1.png" alt="">
                                    <p class="dark-black">Comments</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/icons/icon-2.png" alt="">
                                    <p class="dark-black">Views</p>
                                </div>
                            </div>
                            <p class="light-gray mb-32">Lorem ipsum dolor sit amet consectetur. Vitae vel sit convallis
                                aliquet amet vestibulum maecenas ac.</p>
                            <div class="cus-btn-arrow">Read More
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
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                    <a href="blog-detail.html" class="blog-block bg-white m-0">
                        <div class="blog-image">
                            <img src="{{ asset('/') }}website/assets/media/blogs/blog-9.png" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="d-flex align-items-center gap-16 mb-16">
                                <img src="{{ asset('/') }}website/assets/media/icons/calender.png" alt="">
                                <p class="fw-500 dark-black">24 June, 2024</p>
                            </div>
                            <h6 class="mb-16 fw-600">Smart Home Essentials: Best Accessories to Upgrade You</h6>
                            <div class="d-flex align-items-center justify-content-between mb-16">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/users/user-1.png" alt="">
                                    <p class="dark-black">By <span class="color-primary">Emily</span></p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/icons/icon-1.png" alt="">
                                    <p class="dark-black">Comments</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/icons/icon-2.png" alt="">
                                    <p class="dark-black">Views</p>
                                </div>
                            </div>
                            <p class="light-gray mb-32">Lorem ipsum dolor sit amet consectetur. Vitae vel sit convallis
                                aliquet amet vestibulum maecenas ac.</p>
                            <div class="cus-btn-arrow">Read More
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
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                    <a href="blog-detail.html" class="blog-block bg-white m-0">
                        <div class="blog-image">
                            <img src="{{ asset('/') }}website/assets/media/blogs/blog-10.png" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="d-flex align-items-center gap-16 mb-16">
                                <img src="{{ asset('/') }}website/assets/media/icons/calender.png" alt="">
                                <p class="fw-500 dark-black">24 June, 2024</p>
                            </div>
                            <h6 class="mb-16 fw-600">Your Entertainment Experience with the Right Accessories</h6>
                            <div class="d-flex align-items-center justify-content-between mb-16">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/users/user-2.png" alt="">
                                    <p class="dark-black">By <span class="color-primary">Harry</span></p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/icons/icon-1.png" alt="">
                                    <p class="dark-black">Comments</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/icons/icon-2.png" alt="">
                                    <p class="dark-black">Views</p>
                                </div>
                            </div>
                            <p class="light-gray mb-32">Lorem ipsum dolor sit amet consectetur. Vitae vel sit convallis
                                aliquet amet vestibulum maecenas ac.</p>
                            <div class="cus-btn-arrow">Read More
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
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                    <a href="blog-detail.html" class="blog-block bg-white m-0">
                        <div class="blog-image">
                            <img src="{{ asset('/') }}website/assets/media/blogs/blog-11.png" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="d-flex align-items-center gap-16 mb-16">
                                <img src="{{ asset('/') }}website/assets/media/icons/calender.png" alt="">
                                <p class="fw-500 dark-black">24 June, 2024</p>
                            </div>
                            <h6 class="mb-16 fw-600">The Future of Electronics Accessories: Trends to Watch in 2024</h6>
                            <div class="d-flex align-items-center justify-content-between mb-16">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/users/user-1.png" alt="">
                                    <p class="dark-black">By <span class="color-primary">Emily</span></p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/icons/icon-1.png" alt="">
                                    <p class="dark-black">Comments</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/icons/icon-2.png" alt="">
                                    <p class="dark-black">Views</p>
                                </div>
                            </div>
                            <p class="light-gray mb-32">Lorem ipsum dolor sit amet consectetur. Vitae vel sit convallis
                                aliquet amet vestibulum maecenas ac.</p>
                            <div class="cus-btn-arrow">Read More
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
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                    <a href="blog-detail.html" class="blog-block bg-white m-0">
                        <div class="blog-image">
                            <img src="{{ asset('/') }}website/assets/media/blogs/blog-12.png" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="d-flex align-items-center gap-16 mb-16">
                                <img src="{{ asset('/') }}website/assets/media/icons/calender.png" alt="">
                                <p class="fw-500 dark-black">24 June, 2024</p>
                            </div>
                            <h6 class="mb-16 fw-600">Best Accessories to Boost Your Smartphone's Performance</h6>
                            <div class="d-flex align-items-center justify-content-between mb-16">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/users/user-2.png" alt="">
                                    <p class="dark-black">By <span class="color-primary">Harry</span></p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/icons/icon-1.png" alt="">
                                    <p class="dark-black">Comments</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('/') }}website/assets/media/icons/icon-2.png" alt="">
                                    <p class="dark-black">Views</p>
                                </div>
                            </div>
                            <p class="light-gray mb-32">Lorem ipsum dolor sit amet consectetur. Vitae vel sit convallis
                                aliquet amet vestibulum maecenas ac.</p>
                            <div class="cus-btn-arrow">Read More
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
                <div class="pagination mt-24">
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
    </section>
    <!-- Blog Section End -->
@endsection
