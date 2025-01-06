<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use function Monolog\alert;

class WebsiteController extends Controller
{
    public function index()
    {
        $bannerSlider   = Slider::where(['status' => 1, 'banner_type' => 0])->orderBy('id', 'desc')->limit(3)->get();
        $bannerSides    = Slider::where(['status' => 1, 'banner_type' => 1])->orderBy('id', 'desc')->limit(2)->get();
        $featuredSlider = Slider::where(['status' => 1, 'banner_type' => 3])->orderBy('id', 'desc')->first();
        $popularSlider  = Slider::where(['status' => 1, 'banner_type' => 2])->orderBy('id', 'desc')->first();
        $footerSlider   = Slider::where(['status' => 1, 'banner_type' => 5])->orderBy('id', 'desc')->first();
        $homeCategory   = Category::whereStatus(1)->orderBy('id', 'desc')->limit(10)->get();
        $featureProducts = Product::where(['status' => 1, 'feature_status' => 1])->orderBy('id', 'desc')->limit(4)->get();
        $popularProducts = Product::where(['status' => 1, 'popular_status' => 1])->orderBy('id', 'desc')->limit(6)->get();
        $newarrivalsProducts = Product::where(['status' => 1])->orderBy('id', 'desc')->limit(6)->get();
        return view('website.home.index', compact('bannerSlider', 'bannerSides', 'featuredSlider', 'popularSlider', 'footerSlider', 'homeCategory', 'featureProducts', 'popularProducts', 'newarrivalsProducts'));
    }

    public function category($id)
    {
        $products = Product::where('category_id', $id)->latest()->get();
        return view('website.category.index', compact('products'));
    }

    public function subCategory($id)
    {
        $products = Product::where('sub_category_id', $id)->latest()->get();
        return view('website.category.index', compact('products'));
    }

    public function product($id)
    {
        $product = Product::find($id);

        if (!$product) {
            // Handle product not found, possibly return an error view or redirect
            return redirect()->route('products.index')->with('error', 'Product not found');
        }

        // $productImg = [$product->image]; // Assuming $product->image is a string, or handle appropriately
        $related_products = Product::where('category_id', $product->category_id)->limit(6)->get();

        foreach ($product->productImages as $item) {
            $productImg[] = $item->image;
        }
        // dd($productImg);

        return view('website.product.index', compact('product', 'related_products', 'productImg'));
    }

    public function shop()
    {
        $products = Product::where('status', 1)->get();
        return view('website.shop.index', compact('products'));
    }

    //ajax search
    public function ajaxSearch()
    {
        $search   = $_GET['query'];
        $products = Product::where('name', 'like', '%' . $search . '%')->latest()->get();
        return response()->json($products);
    }

    public function blog()
    {
        return view('website.blog.index');
    }

    public function about()
    {

        return view('website.about.about');
    }

    public function contact()
    {
        return view('website.contact.contact');
    }
}
