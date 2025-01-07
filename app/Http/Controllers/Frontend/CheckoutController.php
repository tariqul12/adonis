<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Shipping;
use App\Models\ShippingAddress;
use Illuminate\Http\Request;
use Session;
use Cart;

class CheckoutController extends Controller
{
    private $order, $orderDetail, $sslCommerz;

    // check if customer is logged in or not
    public function index()
    {
        // if (Session::get('customer_id')) {
        //     return redirect('/checkout/confirm-order');
        // }
        $shippings = Shipping::whereStatus(1)->latest()->get();
        return view('website.checkout.index', compact('shippings'));
    }

    public function confirmOrder()
    {
        return view('website.checkout.confirm-order');
    }

    public function newOrder(Request $request)
    {
        return $request;
        $request->validate([
            'first_name'    => 'required|string|max:50',
            'last_name'     => 'nullable',
            'email'         => 'required|email|',
            'mobile'        => 'required',
            'address'       => 'required|string|max:255',
            'city'          => 'required|string|max:100',
            'country'       => 'required|string|max:100',
            'note'          => 'nullable|string|max:500',
        ]);
        // dd($request->payment_method);

        if ($request->payment_method == 'cash') {
            $this->order                    = new Order();
            $this->order->customer_id       = Session::get('customer_id');
            $this->order->order_total       = $request->total;
            $this->order->tax_amount        = $request->tax;
            $this->order->shipping_amount   = $request->shipping_amount;
            $this->order->order_date        = date('Y-m-d'); //today date
            $this->order->order_timestamp   = strtotime(date('Y-m-d')); //convert into number
            $this->order->delivery_address  = $request->address;
            $this->order->payment_method    = $request->payment_method;
            $this->order->save();

            foreach (Cart::content() as $item) {
                $this->orderDetail                = new OrderDetail();
                $this->orderDetail->order_id      = $this->order->id; //getting from order table
                $this->orderDetail->product_id    = $item->id;
                $this->orderDetail->product_name  = $item->name;
                $this->orderDetail->product_price = $item->price;
                $this->orderDetail->product_qty   = $item->qty;
                $this->orderDetail->save();

                Cart::remove($item->rowId); //remove product items from cart
            }

            $shippingAddress = new ShippingAddress();
            $shippingAddress->order_id   = $this->order->id;
            $shippingAddress->customer_id = Session::get('customer_id');
            $shippingAddress->first_name = $request->first_name;
            $shippingAddress->last_name  = $request->last_name;
            $shippingAddress->email      = $request->email;
            $shippingAddress->mobile     = $request->mobile;
            $shippingAddress->address    = $request->address;
            $shippingAddress->city       = $request->city;
            $shippingAddress->country    = $request->country;
            $shippingAddress->state      = $request->state;
            $shippingAddress->note       = $request->note;
            $shippingAddress->save();
            return redirect('/checkout/complete-order')->with('message', 'Order info save successfully.');
        } elseif ($request->payment_method == 'ssl_commerz') {
            $customer = Customer::find(Session::get('customer_id'));
            $this->sslCommerz = new SslCommerzPaymentController();
            $this->sslCommerz->index($request, $customer);
        }
    }

    public function completeOrder()
    {
        return view('website.checkout.complete-order');
    }
}
