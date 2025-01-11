<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class AdminCustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::latest()->get();
        return view('admin.customer.index', compact('customers'));
    }
    public function create()
    {
        return view('admin.customer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email|max:255',
            'mobile' => 'required|string|unique:customers,mobile|max:15',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'country' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'note' => 'nullable|string|max:500',
        ]);
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->mobile = $request->mobile;
        $customer->address = $request->address;
        $customer->city = $request->city;
        $customer->country = $request->country;
        $customer->state = $request->state;
        $customer->note = $request->note;
        $customer->save();

        return redirect()->route('customer.index')->with('message', 'Customer created successfully.');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('admin.customer.create', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->mobile = $request->mobile;
        $customer->address = $request->address;
        $customer->gender = $request->gender;
        $customer->blood_group = $request->blood_group;
        $customer->date_of_birth = $request->date_of_birth;
        if ($request->file('image')) {
            $customer->image = getFileUrl($request->file('image'), 'uploads/customer-image/');
        }
        $customer->status = $request->status;
        $customer->save();

        return redirect()->route('customer.index')->with('message', 'Customer updated successfully.');
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->route('customer.index')->with('message', 'Customer deleted successfully.');
    }
}
