@extends('admin.master')
@section('body')
    <!-- style -->
    <style>
        .header {
            text-align: center;
            background-color: #f4f4f4;
            padding: 20px;
            border-bottom: 1px solid #ddd;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .content {
            padding: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th,
        .table td {
            border: 1px solid #f0f0f0;
            padding: 8px;
            text-align: left;
        }

        .table th {
            background-color: #f9f9f9;
        }

        .footer .footer-right {
            text-align: right;
        }
    </style>

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Admin Order Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Admin Order</a></li>
                <li class="breadcrumb-item active" aria-current="page">Show Invoice</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="header">
        <h1>Invoice</h1>
        <p>{{ date('d M Y') }}</p>
        <p>Order ID: {{ $order->id }}</p>
        <p>Order Date: {{ $order->order_date }}</p>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <h2>Customer Information</h2>
                <p>Name: {{ $customer->name }}</p>
                <p>Email: {{ $customer->email }}</p>
                <p>Mobile: {{ $customer->mobile }}</p>
                <p>Address: {{ $customer->address }}</p>
            </div>
            <div class="col-md-6 text-end">
                <h2>Company Information</h2>
                <p>Company Name: {{ $companyInfo->company_name }}</p>
                <p>Company Email: {{ $companyInfo->contact_email }}</p>
                <p>Company Phone: {{ $companyInfo->contact_phone }}</p>
                <p>Company Address: {{ $companyInfo->company_address }}</p>
            </div>
        </div>

        <h2>Order Details</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>color</th>
                    <th>Size</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>${{ $item['price'] }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>{{ $item['color'] }}</td>
                        <td>{{ $item['size'] }}</td>
                        <td>${{ $item['price'] * $item['quantity'] }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
    <div class="footer">
        <div class="footer-right" style=" width: 95%">
            <p><span style="font-size:20px">Tax:</span> TK:{{ $order->tax_amount }}</p>
            <p><span style="font-size:20px">Shipping:</span> TK:{{ $order->shipping_amount }}</p>
            <p><span style="font-size:20px">Total:</span> TK:{{ $order->order_total }}</p>
        </div>
    </div>
@endsection
