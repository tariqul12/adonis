@extends('website.master')

@section('title')
    About Us Page
@endsection

@section('body')
    <!-- Title Banner Start -->
    <section class="title-banner" style="background-image: url({{ asset($pageTitleBanner->image) }});">
        <h1 class="dark-black fw-600">About Us</h1>
        {{-- <div class="container-fluid">
            <div class="banner-wrapper">
                <img src="{{ asset('/') }}website/assets/media/images/bag.png" alt="" class="banner-image1" />
                <img width="50" src="{{ asset('/') }}website/assets/media/images/saree-2.png" alt=""
                    class="banner-image2" />
            </div>
        </div> --}}
    </section>
    <!-- Title Banner End -->

    <!-- About Section Start -->
    <section class="about-section py-40">
        <div class="container-fluid">
            <div class="about-wrapper bg-white">
                <div class="about-block mb-24">
                    <div class="row align-items-center row-gap-4">
                        <div class="col-xl-12 text-center order-sm-1 order-2">
                            <div class="about-content">
                                <h3 class="mb-24">{{ $about->title }}</h3>
                                <p class="light-gray mb-12">
                                    {!! $about->description !!}
                                </p>

                            </div>
                        </div>
                        <div class="col-xl-12 text-center order-sm-2 order-1 py-5">
                            <div class="about-image">
                                <img src="{{ asset($about->image) }}" alt="" class="br-20" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Why Choose Us -->
    <section class="whyChoose-us py-40">
        <div class="container-fluid">
            <div class="title-row text-center mb-16">
                <h5>Why Choose Us</h5>
            </div>
            <div class="row row-gap-3">
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="our-block bg-white br-10 text-center">
                        <div class="icon-block m-auto">
                            <img src="{{ asset('/') }}website/assets/media/icons/quality.png" alt="" />
                        </div>
                        <h6 class="mt-24 mb-16 fw-600">Quality Assurance</h6>
                        <p class="light-gray">
                            Lorem ipsum dolor sit amet consectetur. Pellentesque
                            hendrerit phasellus quam massa. Vulputate eget duis.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="our-block bg-white br-10 text-center">
                        <div class="icon-block m-auto">
                            <img src="{{ asset('/') }}website/assets/media/icons/customer.png" alt="" />
                        </div>
                        <h6 class="mt-24 mb-16 fw-600">Customer-Centric</h6>
                        <p class="light-gray">
                            Lorem ipsum dolor sit amet consectetur. Pellentesque
                            hendrerit phasellus quam massa. Vulputate eget duis.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="our-block bg-white br-10 text-center">
                        <div class="icon-block m-auto">
                            <img src="{{ asset('/') }}website/assets/media/icons/wishlist-icon.png" alt="" />
                        </div>
                        <h6 class="mt-24 mb-16 fw-600">Secure Shopping:</h6>
                        <p class="light-gray">
                            Lorem ipsum dolor sit amet consectetur. Pellentesque
                            hendrerit phasellus quam massa. Vulputate eget duis.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="our-block bg-white br-10 text-center">
                        <div class="icon-block m-auto">
                            <img src="{{ asset('/') }}website/assets/media/icons/cheque.png" alt="" />
                        </div>
                        <h6 class="mt-24 mb-16 fw-600">Affordable Prices</h6>
                        <p class="light-gray">
                            Lorem ipsum dolor sit amet consectetur. Pellentesque
                            hendrerit phasellus quam massa. Vulputate eget duis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose Us -->
    {{-- 
    <!-- Blog Section Start -->
    <section class="blog-section bg-lightest-gray py-40">
        <div class="container-fluid">
            <div class="top-bar mb-16">
                <div class="title-row mb-16 m-auto text-center">
                    <h5>Meet Our Team</h5>
                </div>
            </div>
            <div class="blog-slider" data-parent="blog-slider">
                <a href="#" class="blog-block bg-white">
                    <div class="blog-image">
                        <img src="{{ asset('/') }}website/assets/media/team/person-1.png" alt="" />
                    </div>
                    <div class="blog-content">
                        <div class="content-bo">
                            <h6 class="mb-8">Emily Johnson</h6>
                            <p class="mb-16">Founder/CEO</p>
                            <p class="light-gray">
                                Lorem ipsum dolor sit amet consectetur malesuada
                                scelerisque tortor. Nulla sit egestas proin mauris mattis
                                viverra.
                            </p>
                        </div>
                    </div>
                </a>
                <a href="#" class="blog-block bg-white">
                    <div class="blog-image">
                        <img src="{{ asset('/') }}website/assets/media/team/person-2.png" alt="" />
                    </div>
                    <div class="blog-content">
                        <div class="content-box">
                            <h6 class="mb-8">Emily Johnson</h6>
                            <p class="mb-16">Founder/CEO</p>
                            <p class="light-gray">
                                Lorem ipsum dolor sit amet consectetur malesuada
                                scelerisque tortor. Nulla sit egestas proin mauris mattis
                                viverra.
                            </p>
                        </div>
                    </div>
                </a>
                <a href="#" class="blog-block bg-white">
                    <div class="blog-image">
                        <img src="{{ asset('/') }}website/assets/media/team/person-4.png" alt="" />
                    </div>
                    <div class="blog-content">
                        <div class="content-box">
                            <h6 class="mb-8">Emily Johnson</h6>
                            <p class="mb-16">Founder/CEO</p>
                            <p class="light-gray">
                                Lorem ipsum dolor sit amet consectetur malesuada
                                scelerisque tortor. Nulla sit egestas proin mauris mattis
                                viverra.
                            </p>
                        </div>
                    </div>
                </a>
                <a href="#" class="blog-block bg-white">
                    <div class="blog-image">
                        <img src="{{ asset('/') }}website/assets/media/team/person-3.png" alt="" />
                    </div>
                    <div class="blog-content">
                        <div class="content-box">
                            <h6 class="mb-8">Emily Johnson</h6>
                            <p class="mb-16">Founder/CEO</p>
                            <p class="light-gray">
                                Lorem ipsum dolor sit amet consectetur malesuada
                                scelerisque tortor. Nulla sit egestas proin mauris mattis
                                viverra.
                            </p>
                        </div>
                    </div>
                </a>
                <a href="#" class="blog-block bg-white">
                    <div class="blog-image">
                        <img src="{{ asset('/') }}website/assets/media/team/person-2.png" alt="" />
                    </div>
                    <div class="blog-content">
                        <div class="content-box">
                            <h6 class="mb-8">Emily Johnson</h6>
                            <p class="mb-16">Founder/CEO</p>
                            <p class="light-gray">
                                Lorem ipsum dolor sit amet consectetur malesuada
                                scelerisque tortor. Nulla sit egestas proin mauris mattis
                                viverra.
                            </p>
                        </div>
                    </div>
                </a>
                <a href="#" class="blog-block bg-white">
                    <div class="blog-image">
                        <img src="{{ asset('/') }}website/assets/media/team/person-2.png" alt="" />
                    </div>
                    <div class="blog-content">
                        <div class="content-box">
                            <h6 class="mb-8">Emily Johnson</h6>
                            <p class="mb-16">Founder/CEO</p>
                            <p class="light-gray">
                                Lorem ipsum dolor sit amet consectetur malesuada
                                scelerisque tortor. Nulla sit egestas proin mauris mattis
                                viverra.
                            </p>
                        </div>
                    </div>
                </a>
                <a href="#" class="blog-block bg-white">
                    <div class="blog-image">
                        <img src="{{ asset('/') }}website/assets/media/team/person-2.png" alt="" />
                    </div>
                    <div class="blog-content">
                        <div class="content-box">
                            <h6 class="mb-8">Emily Johnson</h6>
                            <p class="mb-16">Founder/CEO</p>
                            <p class="light-gray">
                                Lorem ipsum dolor sit amet consectetur malesuada
                                scelerisque tortor. Nulla sit egestas proin mauris mattis
                                viverra.
                            </p>
                        </div>
                    </div>
                </a>
                <a href="#" class="blog-block bg-white">
                    <div class="blog-image">
                        <img src="{{ asset('/') }}website/assets/media/team/person-2.png" alt="" />
                    </div>
                    <div class="blog-content">
                        <div class="content-box">
                            <h6 class="mb-8">Emily Johnson</h6>
                            <p class="mb-16">Founder/CEO</p>
                            <p class="light-gray">
                                Lorem ipsum dolor sit amet consectetur malesuada
                                scelerisque tortor. Nulla sit egestas proin mauris mattis
                                viverra.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- Blog Section End --> --}}

    <!-- FAQ's Section Start -->
    <div class="faq py-40">
        <div class="container-fluid">
            <div class="title-row mb-16 text-center">
                <h5>Frequently Asked Questions</h5>
            </div>
            <div class="row">
                @foreach ($faqs as $faq)
                    <div class="col-md-6">
                        <div id="accordionExample">
                            <div class="faq-block">
                                <a href="#" class="accordion-button" data-bs-toggle="collapse"
                                    data-bs-target="#faq{{ $loop->index }}" aria-expanded="true"
                                    aria-controls="faq{{ $loop->index }}">{{ $faq->question }}
                                </a>
                                <div id="faq{{ $loop->index }}" class="accordion-collapse collapse"
                                    aria-labelledby="faq{{ $loop->index }}" data-bs-parent="#accordionExample">
                                    <p class="light-gray">
                                        {{ $faq->answer }}
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- FAQ's Section End -->

    <!-- Brand Slider Start -->
    <div class="brand-sec bg-white mt-40 mb-80">
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
@endsection
