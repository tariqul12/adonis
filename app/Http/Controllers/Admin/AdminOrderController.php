<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Courier;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\ShippingAddress;
use App\Models\Size;
use Illuminate\Http\Request;
//use Barryvdh\DomPDF\Facade\Pdf;
use PDF;
use DB;

class AdminOrderController extends Controller
{
    private $order;

    public function index()
    {
        $orders = Order::latest()->get();
        return view('admin.order.index', compact('orders'));
    }

    public function detail($id)
    {
        return view('admin.order.detail', ['order' => Order::find($id)]);
    }

    public function edit($id)
    {
        return view('admin.order.edit', [
            'order'    => Order::find($id),
            'couriers' => Courier::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->order = Order::find($id);


        if ($request->order_status == "Pending") {
            $this->order->order_status    = $request->order_status;
            $this->order->delivery_status = $request->order_status;
            $this->order->payment_status  = $request->order_status;
        } elseif ($request->order_status == "Processing") {
            $this->order->order_status     = $request->order_status;
            $this->order->delivery_status  = $request->order_status;
            $this->order->payment_status   = $request->order_status;
            $this->order->delivery_address = $request->delivery_address;
            $this->order->courier_id       = $request->courier_id;
        }
        //  elseif ($request->order_status == "Refund") {
        //     $this->order->order_status    = $request->order_status;
        //     $this->order->delivery_status = $request->order_status;
        //     $this->order->payment_status  = $request->order_status;
        //     $orderDetail = OrderDetail::where('order_id', $this->order->id)->get();
        //     foreach ($orderDetail as $orderDetail) {
        //         $product = Product::where('id', $orderDetail->product_id)->first()->stock_amount += $orderDetail->product_qty;
        //         $product->save();
        //     }
        // }
        elseif ($request->order_status == "Complete") {
            $this->order->order_status       = $request->order_status;
            $this->order->delivery_status    = $request->order_status;
            $this->order->payment_status     = $request->order_status;
            $this->order->delivery_date      = date('Y-m-d');
            $this->order->delivery_timestamp = strtotime(date('Y-m-d'));
            $this->order->payment_amount     = $this->order->order_total;
            $this->order->payment_date       = date('Y-m-d');
            $this->order->payment_timestamp  = strtotime(date('Y-m-d'));
        } elseif ($request->order_status == "Cancel") {
            $this->order->order_status    = $request->order_status;
            $this->order->delivery_status = $request->order_status;
            $this->order->payment_status  = $request->order_status;
        }
        $this->order->save();
        return redirect('/admin-order/index')->with('message', 'Admin order info updated successfully.');
    }

    public function showInvoice($id)
    {
        $order = Order::find($id);
        $customer = (object) [
            'name' => $order->shippingAddress->first_name . ' ' . $order->shippingAddress->last_name,
            'email' => $order->shippingAddress->email,
            'mobile' => $order->shippingAddress->mobile,
            'address' => $order->shippingAddress->address . ', ' . $order->shippingAddress->city . ', ' . $order->shippingAddress->state . ', ' . $order->shippingAddress->country,
        ];
        $orderDetails = OrderDetail::where('order_id', $id)->get();
        foreach ($orderDetails as $orderDetail) {
            $items[] = [
                'name' => $orderDetail->product_name,
                'quantity' => $orderDetail->product_qty,
                'price' => $orderDetail->product_price,
                'color' => Color::where('id', $orderDetail->product_color_id)->first()->name,
                'size' => Size::where('id', $orderDetail->product_size_id)->first()->name,
            ];
        }
        return view('admin.order.show-invoice',  compact('customer', 'items', 'order'));
    }

    public function downloadInvoice($id)
    {
        $order = Order::find($id);
        $customer = (object) [
            'name' => $order->shippingAddress->first_name . ' ' . $order->shippingAddress->last_name,
            'email' => $order->shippingAddress->email,
            'mobile' => $order->shippingAddress->mobile,
            'address' => $order->shippingAddress->address . ', ' . $order->shippingAddress->city . ', ' . $order->shippingAddress->state . ', ' . $order->shippingAddress->country,
        ];
        $orderDetails = OrderDetail::where('order_id', $id)->get();
        foreach ($orderDetails as $orderDetail) {
            $items[] = [
                'name' => $orderDetail->product_name,
                'quantity' => $orderDetail->product_qty,
                'price' => $orderDetail->product_price,
                'color' => Color::where('id', $orderDetail->product_color_id)->first()->name,
                'size' => Size::where('id', $orderDetail->product_size_id)->first()->name,
            ];
        }
        $pdf = PDF::loadView('admin.order.download-invoice', compact('customer', 'items', 'order'));
        return $pdf->stream();
    }

    public function destroy($id)
    {
        Order::find($id)->delete();
        $orderDetails = OrderDetail::where('order_id', $id)->get();
        foreach ($orderDetails as $orderDetail) {
            $orderDetail->delete();
        }
        return back()->with('message', 'Order info delete successfully.');
    }
}
