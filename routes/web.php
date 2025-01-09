<?php

use App\Http\Middleware\CustomerMiddleware;
use Illuminate\Support\Facades\Route;

//frontend
use App\Http\Controllers\Frontend\WebsiteController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\CustomerProfileController;

//backend
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\UnitController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\CourierController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\ShippingController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\RoleController;

//Website Route list
Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/about-us', [WebsiteController::class, 'about'])->name('about');
Route::get('/shop', [WebsiteController::class, 'shop'])->name('shop');
Route::get('/blog', [WebsiteController::class, 'blog'])->name('blog');
Route::get('/contact-us', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/ajax-search', [WebsiteController::class, 'ajaxSearch'])->name('ajax-search'); //ajax product search
Route::get('/product-category/{id}', [WebsiteController::class, 'category'])->name('category');
Route::get('/product-sub-category/{id}', [WebsiteController::class, 'subCategory'])->name('sub-category');
Route::get('/product-detail/{id}', [WebsiteController::class, 'product'])->name('product-detail');
// Popular Products 
Route::get('/popular-products', [WebsiteController::class, 'popularProducts'])->name('popular.products');


// Product Filter
Route::get('/fetch-products', [WebsiteController::class, 'fetchProducts'])->name('fetch-products');

//subscribe 
Route::post('/subscribe', [WebsiteController::class, 'subscribe'])->name('subscribe');

//Cart
Route::get('/cart/index', [CartController::class, 'index'])->name('cart.index'); //cart product list showing
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update/{rowId}', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/update-qty/{rowId}', [CartController::class, 'updateQuantity'])->name('cart.updateQty');

Route::get('/cart/remove/{rowId}', [CartController::class, 'remove'])->name('cart.remove');

//Checkout


//Customer Auth
Route::get('/customer/register', [CustomerAuthController::class, 'register'])->name('customer.register');
Route::post('/customer/store', [CustomerAuthController::class, 'newCustomer'])->name('customer.store');
Route::get('/customer/login', [CustomerAuthController::class, 'login'])->name('customer.login');
Route::post('/customer/login', [CustomerAuthController::class, 'loginCheck'])->name('customer.login');
Route::get('/customer/logout', [CustomerAuthController::class, 'logout'])->name('customer.logout');

//Customer Profile
Route::middleware([CustomerMiddleware::class])->group(function () {
    Route::get('/customer/dashboard', [CustomerAuthController::class, 'dashboard'])->name('customer.dashboard'); //used CustomerAuthController
    Route::get('/customer/profile', [CustomerProfileController::class, 'index'])->name('customer.profile');
    Route::get('/customer/order', [CustomerProfileController::class, 'order'])->name('customer.order');
    Route::get('/customer/payment', [CustomerProfileController::class, 'payment'])->name('customer.payment');
    Route::get('/customer/change-password', [CustomerProfileController::class, 'changePassword'])->name('customer.change-password');
    Route::post('/customer/update-password', [CustomerProfileController::class, 'updatePassword'])->name('customer.update-password');
    Route::get('/checkout/index', [CheckoutController::class, 'index'])->name('checkout');
    Route::get('/checkout/confirm-order', [CheckoutController::class, 'confirmOrder'])->name('checkout.confirm-order');
    Route::post('/checkout/new-order', [CheckoutController::class, 'newOrder'])->name('checkout.new-order'); //save order info using post
    Route::get('/checkout/complete-order', [CheckoutController::class, 'completeOrder'])->name('checkout.complete-order'); //Order info save successfully.- message will show
});

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

//Admin Route List
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //Role (Normal)
    Route::get('/role/index', [RoleController::class, 'index'])->name('role.index');
    Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
    Route::post('/role/store', [RoleController::class, 'store'])->name('role.store');
    Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
    Route::post('/role/update/{id}', [RoleController::class, 'update'])->name('role.update');
    Route::get('/role/destroy/{id}', [RoleController::class, 'destroy'])->name('role.destroy');

    //User (Normal)
    Route::get('/user/index', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/user/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');

    //Category (Normal)
    Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    //Sub Category (Resource)
    Route::resource('sub-category', SubCategoryController::class);

    //Brand (Resource)
    Route::resource('brand', BrandController::class);

    //Unit (Resource)
    Route::resource('unit', UnitController::class);

    //color (Resource)
    Route::get('/color/index', [ColorController::class, 'index'])->name('color.index');
    Route::get('/color/create', [ColorController::class, 'create'])->name('color.create');
    Route::post('/color/store', [ColorController::class, 'store'])->name('color.store');
    Route::get('/color/edit/{id}', [ColorController::class, 'edit'])->name('color.edit');
    Route::post('/color/update/{id}', [ColorController::class, 'update'])->name('color.update');
    Route::post('/color/destroy/{id}', [ColorController::class, 'destroy'])->name('color.destroy');

    //Size (Resource)
    Route::get('/size/index', [SizeController::class, 'index'])->name('size.index');
    Route::get('/size/create', [SizeController::class, 'create'])->name('size.create');
    Route::post('/size/store', [SizeController::class, 'store'])->name('size.store');
    Route::get('/size/edit/{id}', [SizeController::class, 'edit'])->name('size.edit');
    Route::post('/size/update/{id}', [SizeController::class, 'update'])->name('size.update');
    Route::post('/size/destroy/{id}', [SizeController::class, 'destroy'])->name('size.destroy');

    //Product (Resource)
    Route::resource('product', ProductController::class);
    //route for dynamically get product subcategory according to category
    Route::get('/get-sub-category-by-category', [ProductController::class, 'getSubCategoryByCategory'])->name('get-sub-category-by-category');

    //Company Module
    Route::get('company/create', [CompanyController::class, 'create'])->name('company.create');
    Route::get('company/edit/{id}', [CompanyController::class, 'edit'])->name('company.edit');
    Route::post('company/store', [CompanyController::class, 'store'])->name('company.store');
    Route::get('company/index', [CompanyController::class, 'index'])->name('company.index');
    Route::post('company/update/{id}', [CompanyController::class, 'update'])->name('company.update');
    Route::post('company/destroy/{id}', [CompanyController::class, 'destroy'])->name('company.destroy');

    //Admin Order
    Route::get('/admin-order/index', [AdminOrderController::class, 'index'])->name('admin-order.index');
    Route::get('/admin-order/detail/{id}', [AdminOrderController::class, 'detail'])->name('admin-order.detail');
    Route::get('/admin-order/edit/{id}', [AdminOrderController::class, 'edit'])->name('admin-order.edit');
    Route::post('/admin-order/update/{id}', [AdminOrderController::class, 'update'])->name('admin-order.update');
    Route::get('/admin-order/show-invoice/{id}', [AdminOrderController::class, 'showInvoice'])->name('admin-order.show-invoice');
    Route::get('/admin-order/download-invoice/{id}', [AdminOrderController::class, 'downloadInvoice'])->name('admin-order.download-invoice');
    Route::get('/admin-order/destroy/{id}', [AdminOrderController::class, 'destroy'])->name('admin-order.destroy');


    //Shipping (Normal)
    Route::get('/shipping/index', [ShippingController::class, 'index'])->name('shipping.index');
    Route::get('/shipping/create', [ShippingController::class, 'create'])->name('shipping.create');
    Route::post('/shipping/store', [ShippingController::class, 'store'])->name('shipping.store');
    Route::get('/shipping/edit/{id}', [ShippingController::class, 'edit'])->name('shipping.edit');
    Route::post('/shipping/update/{id}', [ShippingController::class, 'update'])->name('shipping.update');
    Route::get('/shipping/destroy/{id}', [ShippingController::class, 'destroy'])->name('shipping.destroy');

    //Courier (Resource)
    Route::resource('courier', CourierController::class);

    //Slider (Resource)
    Route::resource('slider', SliderController::class);
});
