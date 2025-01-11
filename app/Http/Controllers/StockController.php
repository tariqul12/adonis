<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 1)->latest()->get();
        return view('admin.stock.index', compact('products'));
    }
}
