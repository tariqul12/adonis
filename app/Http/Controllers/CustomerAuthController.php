<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use Session;

class CustomerAuthController extends Controller
{
    private $customer;

    public function register()
    {
        return view('customer.register');
    }

    public function newCustomer(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:customers,email|max:255',
                'password' => 'required|string|min:6',
                'mobile' => 'required|string|unique:customers,mobile|max:15'
            ]
        );
        $this->customer = Customer::newCustomer($request);
        Session::put('customer_id', $this->customer->id);
        Session::put('customer_name', $this->customer->name);

        $redirectUrl = Session::get('redirect_url', '/'); // ডিফল্টে হোমপেজ
        Session::forget('redirect_url'); // রিডিরেক্ট করার পর সেশন ক্লিয়ার করো

        return redirect($redirectUrl);
    }

    public function dashboard()
    {
        return view('customer.dashboard', ['orders' => Order::where('customer_id', Session::get('customer_id'))->latest()->get()]);
    }

    public function login()
    {
        return view('customer.login');
    }


    public function loginCheck(Request $request)
    {
        $this->customer = Customer::where('email', $request->email)->first();

        if ($this->customer) {
            if (password_verify($request->password, $this->customer->password)) {
                Session::put('customer_id', $this->customer->id);
                Session::put('customer_name', $this->customer->name);

                // রিডিরেক্ট URL চেক করো
                $redirectUrl = Session::get('redirect_url', '/'); // ডিফল্টে হোমপেজ
                Session::forget('redirect_url'); // রিডিরেক্ট করার পর সেশন ক্লিয়ার করো

                return redirect($redirectUrl);
            } else {
                return back()->with('message', 'Sorry ... Your password is not valid');
            }
        } else {
            return back()->with('message', 'Sorry... Your email is not valid');
        }
    }



    public function logout()
    {
        Session::forget('customer_id');
        Session::forget('customer_name');
        return redirect('/');
    }
}
