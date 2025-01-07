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

        return redirect()->route('cart.index')->with('message', 'Cart product info added successfully');
    }

    public function updateQuantity(Request $request, $rowId)
    {
        // Validate the request to ensure quantity is provided and is a valid integer
        $request->validate([
            'newQuantity' => 'required|integer|min:1',
        ]);

        // Get the new quantity from the request
        $newQuantity = $request->input('newQuantity');

        // Update the quantity of the cart item using the rowId
        $updated = Cart::update($rowId, ['qty' => $newQuantity]);

        if ($updated) {
            // If successful, return a JSON response with success message
            return response()->json(['success' => true, 'message' => 'Cart product quantity updated successfully']);
        }

        // If the item is not found or something goes wrong, return an error response
        return response()->json(['success' => false, 'message' => 'Failed to update cart item']);
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
