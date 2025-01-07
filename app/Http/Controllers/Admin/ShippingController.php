<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shipping;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function index()
    {
        $shippings = Shipping::latest()->get();
        return view('admin.shipping.index', compact('shippings'));
    }

    public function create()
    {
        return view('admin.shipping.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'title'        => 'required|string|unique:categories,name',
                'cost'        => 'required|',
            ]
        );
        $shipping               = new Shipping();
        $shipping->title        = $request->title;
        $shipping->cost         = $request->cost;
        $shipping->status       = $request->status;
        $shipping->save();

        return back()->with('message', 'Shipping info created successfully');
    }

    public function edit($id)
    {
        $shipping = Shipping::findOrFail($id);
        return view('admin.shipping.edit', compact('shipping'));
    }

    public function update(Request $request, $id)
    {
        $shipping = Shipping::findOrFail($id);
        $shipping->title       = $request->title;
        $shipping->cost        = $request->cost;
        $shipping->status      = $request->status;
        $shipping->save();

        return redirect('/shipping/index')->with('message', 'Shipping info updated successfully');
    }

    public function destroy($id)
    {
        $shipping = Shipping::findOrFail($id);
        $shipping->delete();
        return back()->with('message', 'Shipping info deleted successfully');
    }
}
