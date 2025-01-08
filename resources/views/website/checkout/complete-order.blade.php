@extends('website.master')
@section('title')
    Complete Order Page
@endsection

@section('body')
    <!-- Title Banner Start -->
    <section class="title-banner" style="background-image: url({{ asset($pageTitleBanner->image) }});">
        <div class="container-fluid">
            <div class="banner-wrapper">
                {{-- <img src="{{ asset('/') }}website/assets/media/banner/left-image.png" alt="" class="banner-image1"> --}}
                <h1 class="dark-black fw-600">complete Order</h1>
                {{-- <img src="{{ asset('/') }}website/assets/media/banner/right-image.png" alt="" class="banner-image2"> --}}
            </div>
        </div>
    </section>
    <!-- Title Banner End -->

    <!-- checkout area start -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <h3 class="text-center text-success">{{ session('message') }}</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- checkout area end -->
@endsection
