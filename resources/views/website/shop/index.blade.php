@extends('website.master')

@section('title')
    About Us Page
@endsection

@section('body')
    <!-- Title Banner Start -->
    <section class="title-banner">
        <div class="container-fluid">
            <div class="banner-wrapper">
                <img src="{{ asset('/') }}website/assets/media/images/bag.png" alt="" class="banner-image1">
                <h1 class="dark-black fw-600">Shop</h1>
                <img src="{{ asset('/') }}website/assets/media/images/saree-2.png" alt="" class="banner-image2">
            </div>
        </div>
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
                    <div class="second-block">
                        <div class="grid-icons v-2">
                            <a href="shop-grid-1.html" class="grid-dots">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="30" viewBox="0 0 22 30"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3 6C4.65685 6 6 4.65685 6 3C6 1.34315 4.65685 0 3 0C1.34315 0 0 1.34315 0 3C0 4.65685 1.34315 6 3 6ZM11 6C12.6569 6 14 4.65685 14 3C14 1.34315 12.6569 0 11 0C9.34315 0 8 1.34315 8 3C8 4.65685 9.34315 6 11 6ZM22 3C22 4.65685 20.6569 6 19 6C17.3431 6 16 4.65685 16 3C16 1.34315 17.3431 0 19 0C20.6569 0 22 1.34315 22 3ZM3 14C4.65685 14 6 12.6569 6 11C6 9.34315 4.65685 8 3 8C1.34315 8 0 9.34315 0 11C0 12.6569 1.34315 14 3 14ZM14 11C14 12.6569 12.6569 14 11 14C9.34315 14 8 12.6569 8 11C8 9.34315 9.34315 8 11 8C12.6569 8 14 9.34315 14 11ZM19 14C20.6569 14 22 12.6569 22 11C22 9.34315 20.6569 8 19 8C17.3431 8 16 9.34315 16 11C16 12.6569 17.3431 14 19 14ZM6 19C6 20.6569 4.65685 22 3 22C1.34315 22 0 20.6569 0 19C0 17.3431 1.34315 16 3 16C4.65685 16 6 17.3431 6 19ZM11 22C12.6569 22 14 20.6569 14 19C14 17.3431 12.6569 16 11 16C9.34315 16 8 17.3431 8 19C8 20.6569 9.34315 22 11 22ZM22 19C22 20.6569 20.6569 22 19 22C17.3431 22 16 20.6569 16 19C16 17.3431 17.3431 16 19 16C20.6569 16 22 17.3431 22 19ZM3 30C4.65685 30 6 28.6569 6 27C6 25.3431 4.65685 24 3 24C1.34315 24 0 25.3431 0 27C0 28.6569 1.34315 30 3 30ZM14 27C14 28.6569 12.6569 30 11 30C9.34315 30 8 28.6569 8 27C8 25.3431 9.34315 24 11 24C12.6569 24 14 25.3431 14 27ZM19 30C20.6569 30 22 28.6569 22 27C22 25.3431 20.6569 24 19 24C17.3431 24 16 25.3431 16 27C16 28.6569 17.3431 30 19 30Z"
                                        fill="#006937" />
                                </svg>
                            </a>
                            <a href="shop-grid-2.html" class="grid-dots">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3 6C4.65685 6 6 4.65685 6 3C6 1.34315 4.65685 0 3 0C1.34315 0 0 1.34315 0 3C0 4.65685 1.34315 6 3 6ZM11 6C12.6569 6 14 4.65685 14 3C14 1.34315 12.6569 0 11 0C9.34315 0 8 1.34315 8 3C8 4.65685 9.34315 6 11 6ZM22 3C22 4.65685 20.6569 6 19 6C17.3431 6 16 4.65685 16 3C16 1.34315 17.3431 0 19 0C20.6569 0 22 1.34315 22 3ZM27 6C28.6569 6 30 4.65685 30 3C30 1.34315 28.6569 0 27 0C25.3431 0 24 1.34315 24 3C24 4.65685 25.3431 6 27 6ZM6 11C6 12.6569 4.65685 14 3 14C1.34315 14 0 12.6569 0 11C0 9.34315 1.34315 8 3 8C4.65685 8 6 9.34315 6 11ZM11 14C12.6569 14 14 12.6569 14 11C14 9.34315 12.6569 8 11 8C9.34315 8 8 9.34315 8 11C8 12.6569 9.34315 14 11 14ZM22 11C22 12.6569 20.6569 14 19 14C17.3431 14 16 12.6569 16 11C16 9.34315 17.3431 8 19 8C20.6569 8 22 9.34315 22 11ZM27 14C28.6569 14 30 12.6569 30 11C30 9.34315 28.6569 8 27 8C25.3431 8 24 9.34315 24 11C24 12.6569 25.3431 14 27 14ZM6 19C6 20.6569 4.65685 22 3 22C1.34315 22 0 20.6569 0 19C0 17.3431 1.34315 16 3 16C4.65685 16 6 17.3431 6 19ZM11 22C12.6569 22 14 20.6569 14 19C14 17.3431 12.6569 16 11 16C9.34315 16 8 17.3431 8 19C8 20.6569 9.34315 22 11 22ZM22 19C22 20.6569 20.6569 22 19 22C17.3431 22 16 20.6569 16 19C16 17.3431 17.3431 16 19 16C20.6569 16 22 17.3431 22 19ZM27 22C28.6569 22 30 20.6569 30 19C30 17.3431 28.6569 16 27 16C25.3431 16 24 17.3431 24 19C24 20.6569 25.3431 22 27 22ZM6 27C6 28.6569 4.65685 30 3 30C1.34315 30 0 28.6569 0 27C0 25.3431 1.34315 24 3 24C4.65685 24 6 25.3431 6 27ZM11 30C12.6569 30 14 28.6569 14 27C14 25.3431 12.6569 24 11 24C9.34315 24 8 25.3431 8 27C8 28.6569 9.34315 30 11 30ZM22 27C22 28.6569 20.6569 30 19 30C17.3431 30 16 28.6569 16 27C16 25.3431 17.3431 24 19 24C20.6569 24 22 25.3431 22 27ZM27 30C28.6569 30 30 28.6569 30 27C30 25.3431 28.6569 24 27 24C25.3431 24 24 25.3431 24 27C24 28.6569 25.3431 30 27 30Z"
                                        fill="#EAEAEC" />
                                </svg>
                            </a>
                            <a href="shop-grid-3.html" class="grid-dots">
                                <svg xmlns="http://www.w3.org/2000/svg" width="39" height="30" viewBox="0 0 39 30"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.5 6C5.15685 6 6.5 4.65685 6.5 3C6.5 1.34315 5.15685 0 3.5 0C1.84315 0 0.5 1.34315 0.5 3C0.5 4.65685 1.84315 6 3.5 6ZM11.5 6C13.1569 6 14.5 4.65685 14.5 3C14.5 1.34315 13.1569 0 11.5 0C9.84315 0 8.5 1.34315 8.5 3C8.5 4.65685 9.84315 6 11.5 6ZM22.5 3C22.5 4.65685 21.1569 6 19.5 6C17.8431 6 16.5 4.65685 16.5 3C16.5 1.34315 17.8431 0 19.5 0C21.1569 0 22.5 1.34315 22.5 3ZM27.5 6C29.1569 6 30.5 4.65685 30.5 3C30.5 1.34315 29.1569 0 27.5 0C25.8431 0 24.5 1.34315 24.5 3C24.5 4.65685 25.8431 6 27.5 6ZM38.5 3C38.5 4.65685 37.1569 6 35.5 6C33.8431 6 32.5 4.65685 32.5 3C32.5 1.34315 33.8431 0 35.5 0C37.1569 0 38.5 1.34315 38.5 3ZM3.5 14C5.15685 14 6.5 12.6569 6.5 11C6.5 9.34315 5.15685 8 3.5 8C1.84315 8 0.5 9.34315 0.5 11C0.5 12.6569 1.84315 14 3.5 14ZM14.5 11C14.5 12.6569 13.1569 14 11.5 14C9.84315 14 8.5 12.6569 8.5 11C8.5 9.34315 9.84315 8 11.5 8C13.1569 8 14.5 9.34315 14.5 11ZM19.5 14C21.1569 14 22.5 12.6569 22.5 11C22.5 9.34315 21.1569 8 19.5 8C17.8431 8 16.5 9.34315 16.5 11C16.5 12.6569 17.8431 14 19.5 14ZM30.5 11C30.5 12.6569 29.1569 14 27.5 14C25.8431 14 24.5 12.6569 24.5 11C24.5 9.34315 25.8431 8 27.5 8C29.1569 8 30.5 9.34315 30.5 11ZM35.5 14C37.1569 14 38.5 12.6569 38.5 11C38.5 9.34315 37.1569 8 35.5 8C33.8431 8 32.5 9.34315 32.5 11C32.5 12.6569 33.8431 14 35.5 14ZM6.5 19C6.5 20.6569 5.15685 22 3.5 22C1.84315 22 0.5 20.6569 0.5 19C0.5 17.3431 1.84315 16 3.5 16C5.15685 16 6.5 17.3431 6.5 19ZM11.5 22C13.1569 22 14.5 20.6569 14.5 19C14.5 17.3431 13.1569 16 11.5 16C9.84315 16 8.5 17.3431 8.5 19C8.5 20.6569 9.84315 22 11.5 22ZM22.5 19C22.5 20.6569 21.1569 22 19.5 22C17.8431 22 16.5 20.6569 16.5 19C16.5 17.3431 17.8431 16 19.5 16C21.1569 16 22.5 17.3431 22.5 19ZM27.5 22C29.1569 22 30.5 20.6569 30.5 19C30.5 17.3431 29.1569 16 27.5 16C25.8431 16 24.5 17.3431 24.5 19C24.5 20.6569 25.8431 22 27.5 22ZM38.5 19C38.5 20.6569 37.1569 22 35.5 22C33.8431 22 32.5 20.6569 32.5 19C32.5 17.3431 33.8431 16 35.5 16C37.1569 16 38.5 17.3431 38.5 19ZM3.5 30C5.15685 30 6.5 28.6569 6.5 27C6.5 25.3431 5.15685 24 3.5 24C1.84315 24 0.5 25.3431 0.5 27C0.5 28.6569 1.84315 30 3.5 30ZM14.5 27C14.5 28.6569 13.1569 30 11.5 30C9.84315 30 8.5 28.6569 8.5 27C8.5 25.3431 9.84315 24 11.5 24C13.1569 24 14.5 25.3431 14.5 27ZM19.5 30C21.1569 30 22.5 28.6569 22.5 27C22.5 25.3431 21.1569 24 19.5 24C17.8431 24 16.5 25.3431 16.5 27C16.5 28.6569 17.8431 30 19.5 30ZM30.5 27C30.5 28.6569 29.1569 30 27.5 30C25.8431 30 24.5 28.6569 24.5 27C24.5 25.3431 25.8431 24 27.5 24C29.1569 24 30.5 25.3431 30.5 27ZM35.5 30C37.1569 30 38.5 28.6569 38.5 27C38.5 25.3431 37.1569 24 35.5 24C33.8431 24 32.5 25.3431 32.5 27C32.5 28.6569 33.8431 30 35.5 30Z"
                                        fill="#EAEAEC" />
                                </svg>
                            </a>
                            <a href="shop-grid-4.html" class="grid-dots active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="47" height="30" viewBox="0 0 47 30"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.5 6C5.15685 6 6.5 4.65685 6.5 3C6.5 1.34315 5.15685 0 3.5 0C1.84315 0 0.5 1.34315 0.5 3C0.5 4.65685 1.84315 6 3.5 6ZM11.5 6C13.1569 6 14.5 4.65685 14.5 3C14.5 1.34315 13.1569 0 11.5 0C9.84315 0 8.5 1.34315 8.5 3C8.5 4.65685 9.84315 6 11.5 6ZM22.5 3C22.5 4.65685 21.1569 6 19.5 6C17.8431 6 16.5 4.65685 16.5 3C16.5 1.34315 17.8431 0 19.5 0C21.1569 0 22.5 1.34315 22.5 3ZM27.5 6C29.1569 6 30.5 4.65685 30.5 3C30.5 1.34315 29.1569 0 27.5 0C25.8431 0 24.5 1.34315 24.5 3C24.5 4.65685 25.8431 6 27.5 6ZM38.5 3C38.5 4.65685 37.1569 6 35.5 6C33.8431 6 32.5 4.65685 32.5 3C32.5 1.34315 33.8431 0 35.5 0C37.1569 0 38.5 1.34315 38.5 3ZM43.5 6C45.1569 6 46.5 4.65685 46.5 3C46.5 1.34315 45.1569 0 43.5 0C41.8431 0 40.5 1.34315 40.5 3C40.5 4.65685 41.8431 6 43.5 6ZM6.5 11C6.5 12.6569 5.15685 14 3.5 14C1.84315 14 0.5 12.6569 0.5 11C0.5 9.34315 1.84315 8 3.5 8C5.15685 8 6.5 9.34315 6.5 11ZM11.5 14C13.1569 14 14.5 12.6569 14.5 11C14.5 9.34315 13.1569 8 11.5 8C9.84315 8 8.5 9.34315 8.5 11C8.5 12.6569 9.84315 14 11.5 14ZM22.5 11C22.5 12.6569 21.1569 14 19.5 14C17.8431 14 16.5 12.6569 16.5 11C16.5 9.34315 17.8431 8 19.5 8C21.1569 8 22.5 9.34315 22.5 11ZM27.5 14C29.1569 14 30.5 12.6569 30.5 11C30.5 9.34315 29.1569 8 27.5 8C25.8431 8 24.5 9.34315 24.5 11C24.5 12.6569 25.8431 14 27.5 14ZM38.5 11C38.5 12.6569 37.1569 14 35.5 14C33.8431 14 32.5 12.6569 32.5 11C32.5 9.34315 33.8431 8 35.5 8C37.1569 8 38.5 9.34315 38.5 11ZM43.5 14C45.1569 14 46.5 12.6569 46.5 11C46.5 9.34315 45.1569 8 43.5 8C41.8431 8 40.5 9.34315 40.5 11C40.5 12.6569 41.8431 14 43.5 14ZM6.5 19C6.5 20.6569 5.15685 22 3.5 22C1.84315 22 0.5 20.6569 0.5 19C0.5 17.3431 1.84315 16 3.5 16C5.15685 16 6.5 17.3431 6.5 19ZM11.5 22C13.1569 22 14.5 20.6569 14.5 19C14.5 17.3431 13.1569 16 11.5 16C9.84315 16 8.5 17.3431 8.5 19C8.5 20.6569 9.84315 22 11.5 22ZM22.5 19C22.5 20.6569 21.1569 22 19.5 22C17.8431 22 16.5 20.6569 16.5 19C16.5 17.3431 17.8431 16 19.5 16C21.1569 16 22.5 17.3431 22.5 19ZM27.5 22C29.1569 22 30.5 20.6569 30.5 19C30.5 17.3431 29.1569 16 27.5 16C25.8431 16 24.5 17.3431 24.5 19C24.5 20.6569 25.8431 22 27.5 22ZM38.5 19C38.5 20.6569 37.1569 22 35.5 22C33.8431 22 32.5 20.6569 32.5 19C32.5 17.3431 33.8431 16 35.5 16C37.1569 16 38.5 17.3431 38.5 19ZM43.5 22C45.1569 22 46.5 20.6569 46.5 19C46.5 17.3431 45.1569 16 43.5 16C41.8431 16 40.5 17.3431 40.5 19C40.5 20.6569 41.8431 22 43.5 22ZM6.5 27C6.5 28.6569 5.15685 30 3.5 30C1.84315 30 0.5 28.6569 0.5 27C0.5 25.3431 1.84315 24 3.5 24C5.15685 24 6.5 25.3431 6.5 27ZM11.5 30C13.1569 30 14.5 28.6569 14.5 27C14.5 25.3431 13.1569 24 11.5 24C9.84315 24 8.5 25.3431 8.5 27C8.5 28.6569 9.84315 30 11.5 30ZM22.5 27C22.5 28.6569 21.1569 30 19.5 30C17.8431 30 16.5 28.6569 16.5 27C16.5 25.3431 17.8431 24 19.5 24C21.1569 24 22.5 25.3431 22.5 27ZM27.5 30C29.1569 30 30.5 28.6569 30.5 27C30.5 25.3431 29.1569 24 27.5 24C25.8431 24 24.5 25.3431 24.5 27C24.5 28.6569 25.8431 30 27.5 30ZM38.5 27C38.5 28.6569 37.1569 30 35.5 30C33.8431 30 32.5 28.6569 32.5 27C32.5 25.3431 33.8431 24 35.5 24C37.1569 24 38.5 25.3431 38.5 27ZM43.5 30C45.1569 30 46.5 28.6569 46.5 27C46.5 25.3431 45.1569 24 43.5 24C41.8431 24 40.5 25.3431 40.5 27C40.5 28.6569 41.8431 30 43.5 30Z"
                                        fill="#EAEAEC" />
                                </svg>
                            </a>
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
