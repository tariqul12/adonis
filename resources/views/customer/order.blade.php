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
                        <h4 class="py-2">My Recent Order</h4>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Order ID</th>
                                    <th>Order Total</th>
                                    <th>Order Date</th>
                                    <th>Order Status</th>
                                    <th>Payment Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->order_total }}</td>
                                        <td>{{ $order->order_date }}</td>
                                        <td>{{ $order->order_status }}</td>
                                        <td>{{ $order->payment_status }}</td>
                                        <td>
                                            <a href="#" class="btn btn-success btn-sm">Detail</a>
                                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login area end -->
@endsection
