<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use App\Models\ProductSize;
use App\Models\ProductColor;
use App\Models\Slider;
use App\Models\Subscriber;
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
        // $popular_categories = Category::whereStatus(1)->orderBy('id', 'desc')->limit(4)->get();
        $popular_categories = Category::whereHas('products', function ($query) {
            $query->where('popular_status', 1);
        })
            ->where('status', 1)
            ->orderBy('id', 'desc')
            ->limit(8)
            ->get();
        // dd($popular_categories);
        return view('website.home.index', compact('bannerSlider', 'bannerSides', 'featuredSlider', 'popularSlider', 'footerSlider', 'homeCategory', 'featureProducts', 'popularProducts', 'newarrivalsProducts', 'popular_categories'));
    }


    public function popularProducts(Request $request)
    {
        $categoryId = $request->input('category_id');

        // জনপ্রিয় পণ্যগুলি ক্যাটাগরি অনুসারে ফিল্টার করা
        $productsQuery = Product::where('popular_status', 1);

        if ($categoryId) {
            $productsQuery->where('category_id', $categoryId);
        }

        $products = $productsQuery->get();

        // প্রতিটি পণ্যের জন্য সাইজ এবং রঙ লোড করা
        foreach ($products as $product) {
            $product->productSizes = ProductSize::where('product_id', $product->id)->get();
            $product->productColors = ProductColor::where('product_id', $product->id)->get();
        }

        return response()->json($products);
    }




    public function category($id)
    {

        $products = Product::where('category_id', $id)->latest()->get();
        $featureProducts = Product::where(['status' => 1, 'feature_status' => 1])->orderBy('id', 'desc')->limit(4)->get();
        return view('website.category.index', compact('products', 'featureProducts'));
    }

    public function subCategory($id)
    {
        $products = Product::where('sub_category_id', $id)->latest()->get();
        $featureProducts = Product::where(['status' => 1, 'feature_status' => 1])->orderBy('id', 'desc')->limit(4)->get();
        return view('website.category.index', compact('products', 'featureProducts'));
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
        $featureProducts = Product::where(['status' => 1, 'feature_status' => 1])->orderBy('id', 'desc')->limit(4)->get();

        return view('website.shop.index', compact('products', 'featureProducts'));
    }

    //ajax search
    public function ajaxSearch()
    {
        $search   = $_GET['query'];
        $products = Product::where('name', 'like', '%' . $search . '%')->latest()->get();
        return response()->json($products);
    }
    public function fetchProducts(Request $request)
    {
        // Validate the incoming category IDs and search query
        $categoryIds = $request->input('category_ids');
        $searchQuery = $request->input('search', ''); // Default empty string if no search query is provided
        $minPrice = $request->input('min_price', 0); // Default 0 if no min price is provided
        $maxPrice = $request->input('max_price', 999999); // Default a large number if no max price is provided
        $page = $request->input('page', 1);

        // Start the query builder for products
        $query = Product::query();

        // Filter by categories if category IDs are provided
        if (!empty($categoryIds)) {
            $query->whereIn('category_id', $categoryIds);
        }

        // Filter by search query if provided
        if (!empty($searchQuery)) {
            $query->where('name', 'like', '%' . $searchQuery . '%')
                ->orWhere('short_description', 'like', '%' . $searchQuery . '%');
        }


        if (!empty($minPrice) && !empty($maxPrice)) {
            $query->whereBetween('selling_price', [$minPrice, $maxPrice]);
        }

        // Fetch the products based on the filters
        $products = $query->paginate(12);

        // Add product sizes and colors to each product
        foreach ($products as $product) {
            $product->productSizes = ProductSize::where('product_id', $product->id)->get();
            $product->productColors = ProductColor::where('product_id', $product->id)->get();
        }

        // Return the products as a JSON response
        return response()->json([
            'status' => 'success',
            'data' => $products->items(),
            'pagination' => [
                'current_page' => $products->currentPage(),
                'last_page' => $products->lastPage(),
                'total' => $products->total(),
                'previous_page_url' => $products->previousPageUrl(),
                'next_page_url' => $products->nextPageUrl(),
            ]
        ]);
    }


    public function blog()
    {
        return view('website.blog.index');
    }

    public function about()
    {
        $about = About::latest()->first();
        return view('website.about.about', compact('about'));
    }

    public function contact()
    {
        return view('website.contact.contact');
    }

    public function subscribe(Request $request)
    {
        $subscriber = new Subscriber();
        if ($request->email) {
            $subscriber->email = $request->email;
        }
        if ($request->mobile) {
            $subscriber->mobile = $request->mobile;
        }
        $subscriber->save();
        return back()->with('message', 'Subscribe Successfully');
    }
    public function contactStore(Request $request)
    {
        $contact = new Contact();
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->mobile = $request->mobile;
        $contact->message = $request->message;
        $contact->save();
        return back()->with('message', 'Thank you for contacting us. Our team will get back to you soon.');
    }
}
