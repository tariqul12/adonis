<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            font-size: 14px;
            color: #333;
        }

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
</head>

<body>
    <div class="header">
        <h1>Invoice</h1>
        <p>{{ date('d M Y') }}</p>
    </div>
    <div class="content">
        <h2>Customer Information</h2>
        <p>Name: {{ $customer->name }}</p>
        <p>Email: {{ $customer->email }}</p>
        <p>Mobile: {{ $customer->mobile }}</p>
        <p>Address: {{ $customer->address }}</p>

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
</body>

</html>
