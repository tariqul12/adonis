@extends('admin.master')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Order Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Order</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Order</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">File Export</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                        <table id="file-datatable"
                            class="table table-bordered text-nowrap key-buttons border-bottom  w-100">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">SL NO</th>
                                    <th class="wd-15p border-bottom-0">Order <br> ID</th>
                                    <th class="wd-15p border-bottom-0">Order <br> Date</th>
                                    <th class="wd-20p border-bottom-0">Customer Info</th>
                                    <th class="wd-20p border-bottom-0">Shipping Info</th>
                                    <th class="wd-15p border-bottom-0">Order <br> Total</th>
                                    <th class="wd-10p border-bottom-0">Order <br> Status</th>
                                    <th class="wd-10p border-bottom-0">Payment <br> Status</th>
                                    <th class="wd-10p border-bottom-0">Delivery <br> Status</th>
                                    <th class="wd-25p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>OrderID:#00{{ $order->id }}</td>
                                        <td>{{ $order->order_date }}</td>
                                        <td>
                                            Name: {{ $order->customer->name }} <br />
                                            Mobile: {{ $order->customer->mobile }} <br />
                                        </td>

                                        <td>
                                            Name: {{ @$order->shippingAddress->first_name }}
                                            {{ @$order->shippingAddress->last_name }} <br />
                                            Mobile: {{ @$order->shippingAddress->mobile }} <br />
                                            address:
                                            {{ @$order->shippingAddress->address }}</br>{{ @$order->shippingAddress->city }}
                                            <br />
                                        </td>
                                        <td>{{ $order->order_total }}</td>
                                        <td>{{ $order->order_status }}</td>
                                        <td>{{ $order->payment_status }}</td>
                                        <td>{{ $order->delivery_status }}</td>
                                        <td>
                                            <a href="{{ route('admin-order.detail', ['id' => $order->id]) }}"
                                                class="btn btn-info btn-sm" title="View Order Detail">
                                                <i class="fa fa-bookmark-o"></i>
                                            </a>
                                            <a href="{{ route('admin-order.edit', ['id' => $order->id]) }}"
                                                class="btn btn-success btn-sm {{ $order->order_status == 'Complete' ? 'disabled' : '' }}"
                                                title="Edit Order">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ route('admin-order.show-invoice', ['id' => $order->id]) }}"
                                                class="btn btn-primary btn-sm" title="Show Order Invoice">
                                                <i class="fa fa-book"></i>
                                            </a>
                                            <a href="{{ route('admin-order.download-invoice', ['id' => $order->id]) }}"
                                                target="_blank" class="btn btn-warning btn-sm"
                                                title="Download Order Invoice">
                                                <i class="fa fa-download"></i>
                                            </a>
                                            <a href="{{ route('admin-order.destroy', ['id' => $order->id]) }}"
                                                class="btn btn-danger btn-sm {{ $order->order_status == 'Cancel' ? '' : 'disabled' }}"
                                                title="Delete Order">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
@endsection
