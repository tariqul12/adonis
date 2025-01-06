<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    private $product;

    public function index()
    {
        return view('website.cart.index', ['cart_products' => Cart::content()]);
    }

    public function add(Request $request, $id)
    {
        $this->product = Product::find($id);
        Cart::add([
            'id'      => $id,
            'name'    => $this->product->name,
            'qty'     => $request->qty,
            'price'   => $this->product->selling_price,
            'weight'  => 0,
            'options' =>
            [
                'image' => $this->product->image,
                'code'  => $this->product->code,
                'size'  => $request->size,
                'color' => isset($request->color) ? $request->color : 'standard'
            ],
        ]);

        return back()->with('message', 'Cart product info add successfully');
    }

    public function update(Request $request, $rowId)
    {
        Cart::update($rowId, $request->qty);
        return back()->with('message', 'Cart product info updated successfully');
    }

    public function remove($rowId)
    {
        Cart::remove($rowId);
        return back()->with('message', 'Cart product info remove successfully');
    }
}
