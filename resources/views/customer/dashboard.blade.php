@extends('website.master')
@section('title')
    My Dashboard
@endsection

@section('body')
    <!-- breadcrumb area start -->
    <section class="py-3">
        <div class="container">
            <h3 class="">My Account</h3>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- login area start -->
    <section class="tp-login-area pb-140 p-relative z-index-1 fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    @include('customer.includes.sidebar-menu')
                </div>
                <div class="col-md-9">
                    <div class="card card-body">
                        <h4>My Dashboard</h4>
                        <div class="row py-4">
                            <div class="col-md-4 py-3">
                                <div class="card card-body">
                                    <div class="text-center bg-gray">
                                        <h5>All Order</h5>
                                        <p> <span class="text-success">0</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 py-3">
                                <div class="card card-body">
                                    <div class="text-center bg-gray">
                                        <h5>Completed Order</h5>
                                        <p> <span class="text-success">0</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 py-3">
                                <div class="card card-body">
                                    <div class="text-center bg-gray">
                                        <h5>Canceled Order</h5>
                                        <p> <span class="text-success">0</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login area end -->
@endsection
