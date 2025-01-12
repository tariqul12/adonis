<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $total_customers = Customer::all()->count();
        $orders = Order::latest()->get();
        $totalPaymentAmount = $orders->sum('payment_amount');
        $totalShippingAmount = $orders->sum('shipping_amount');
        $totalTaxAmount = $orders->sum('tax_amount');
        $total_products = Product::all()->count();
        $total_brands = Brand::all()->count();
        $total_orders = Order::all()->count();
        $pending_orders = Order::where('order_status', 'Pending')->count();
        $processing_orders = Order::where('order_status', 'Processing')->count();
        $complete_orders = Order::where('order_status', 'Complete')->count();
        $cancelled_orders = Order::where('order_status', 'Cancel')->count();
        $total_today_order = Order::where('order_date', date('Y-m-d'))->count();
        $customers = Customer::latest()->limit(5)->get();
        $top_sellers = Product::where('status', 1)->orderBy('sales_count', 'desc')->limit(5)->get();
        $popular_products = Product::where('popular_status', 1)->where('status', 1)->latest()->limit(4)->get();
        return view('admin.home.index', compact('total_customers', 'total_products', 'total_brands', 'total_orders', 'total_today_order', 'pending_orders', 'processing_orders', 'complete_orders', 'cancelled_orders', 'customers', 'top_sellers', 'popular_products', 'orders', 'totalPaymentAmount', 'totalShippingAmount', 'totalTaxAmount'));
    }
}
