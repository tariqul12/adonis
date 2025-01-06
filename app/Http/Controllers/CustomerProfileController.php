<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use Session;

class CustomerProfileController extends Controller
{
    private $customer;

    public function index()
    {
        return view('customer.profile');
    }

    public function order()
    {
        $orders = Order::where('customer_id', Session::get('customer_id'))->latest()->get();
        return view('customer.order', compact('orders'));
    }

    public function payment()
    {
        return view('customer.payment');
    }

    public function changePassword()
    {
        return view('customer.change-password');
    }

    public function updatePassword(Request $request)
    {
        $this->customer = Customer::find(Session::get('customer_id'));

        if (password_verify($request->previous_password, $this->customer->password)) {
            $this->customer->password = bcrypt($request->current_password);
            $this->customer->save();
            return redirect('/customer/dashboard')->with('message', 'Password Updated');
        } else {
            return back()->with('message', 'Sorry ... Password does not match');
        }
    }
}
