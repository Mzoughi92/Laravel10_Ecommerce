<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\DiscountCodeController;
use App\Http\Controllers\Admin\ShippingChargeController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PageController;



use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController as ProductFront;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductsController;







/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function()
//{
  //  return View('welcome');
//});




Route::get('admin', [AuthController::class, 'login_admin']);
Route::post('admin', [AuthController::class, 'auth_login_admin']);
Route::get('admin/logout', [AuthController::class, 'logout_admin']);





Route::group(['middleware'=> 'user'], function () {

  Route::get('user/dashboard', [UserController::class, 'dashboard']);
  Route::get('user/orders', [UserController::class, 'orders']);
  Route::get('user/orders/detail/{id}', [UserController::class, 'orders_detail']);
  
  Route::get('user/edit-profile', [UserController::class, 'edit_profile']);
  Route::post('user/edit-profile', [UserController::class, 'update_profile']);
  Route::get('user/change-password', [UserController::class, 'change_password']);
  Route::post('user/change-password', [UserController::class, 'update_password']);

  Route::post('add_to_wishlist', [UserController::class, 'add_to_wishlist']);
  Route::post('user/make-review', [UserController::class, 'submit_review']);
  


  Route::get('my-wishlist', [ProductFront::class, 'my_wishlist']);
  
  
});



Route::group(['middleware'=> 'admin'], function ()
{
    
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('admin/page/list', [PageController::class, 'list'])->middleware('auth' , 'is_active');
    Route::get('admin/page/edit/{id}', [PageController::class, 'edit'])->middleware('auth' , 'is_active');
    Route::post('admin/page/edit/{id}', [PageController::class, 'update'])->middleware('auth' , 'is_active');
    Route::get('admin/system-setting', [PageController::class, 'system_setting'])->middleware('auth' , 'is_active');
    Route::post('admin/system-setting', [PageController::class, 'update_system_setting'])->middleware('auth' , 'is_active');


    Route::get('admin/admin/list', [AdminController::class, 'list'])->middleware('auth' , 'is_active');
    Route::get('admin/admin/add', [AdminController::class, 'add'])->middleware('auth' , 'is_active');
    Route::post('admin/admin/add', [AdminController::class, 'insert'])->middleware('auth' , 'is_active');
    Route::get('admin/admin/edit/{id}', [AdminController::class, 'edit'])->middleware('auth' , 'is_active');
    Route::post('admin/admin/update/{id}', [AdminController::class, 'update'])->middleware('auth' , 'is_active');
    Route::get('admin/admin/delete/{id}', [AdminController::class, 'delete'])->middleware('auth' , 'is_active');
    Route::get('admin/adminlist/warning', [AdminController::class, 'warning']);

    Route::get('admin/customer/list', [AdminController::class, 'customer_list'])->middleware('auth' , 'is_active');
    Route::post('admin/admin/update/{id}', [AdminController::class, 'update'])->middleware('auth' , 'is_active');
    Route::get('admin/customer/delete/{id}', [AdminController::class, 'delete_customer'])->middleware('auth' , 'is_active');
  
    Route::get('admin/category/list', [CategoryController::class, 'list']);
    Route::get('admin/category/add', [CategoryController::class, 'add']);
    Route::post('admin/category/add', [CategoryController::class, 'insert']);
    Route::get('admin/category/edit/{id}', [CategoryController::class, 'edit']);
    Route::post('admin/category/update/{id}', [CategoryController::class, 'update']);
    Route::get('admin/category/delete/{id}', [CategoryController::class, 'delete']);


    Route::get('admin/sub_category/list', [SubCategoryController::class, 'list']);
    Route::get('admin/sub_category/add', [SubCategoryController::class, 'add']);
    Route::post('admin/sub_category/add', [SubCategoryController::class, 'insert']);
    Route::get('admin/sub_category/edit/{id}', [SubCategoryController::class, 'edit']);
    Route::post('admin/sub_category/update/{id}', [SubCategoryController::class, 'update']);
    Route::get('admin/sub_category/delete/{id}', [SubCategoryController::class, 'delete']);
    Route::post('admin/get_sub_category', [SubCategoryController::class, 'get_sub_category']);


    Route::get('admin/brand/list', [BrandController::class, 'list']);
    Route::get('admin/brand/add', [BrandController::class, 'add']);
    Route::post('admin/brand/add', [BrandController::class, 'insert']);
    Route::get('admin/brand/edit/{id}', [BrandController::class, 'edit']);
    Route::post('admin/brand/update/{id}', [BrandController::class, 'update']);
    Route::get('admin/brand/delete/{id}', [BrandController::class, 'delete']);


    Route::get('admin/color/list', [ColorController::class, 'list']);
    Route::get('admin/color/add', [ColorController::class, 'add']);
    Route::post('admin/color/add', [ColorController::class, 'insert']);
    Route::get('admin/color/edit/{id}', [ColorController::class, 'edit']);
    Route::post('admin/color/update/{id}', [ColorController::class, 'update']);
    Route::get('admin/color/delete/{id}', [ColorController::class, 'delete']);

    
    Route::get('admin/product/list', [ProductController::class, 'list']);
    Route::get('admin/product/add', [ProductController::class, 'add']);
    Route::post('admin/product/add', [ProductController::class, 'insert']);
    Route::get('admin/product/edit/{id}', [ProductController::class, 'edit']);
    Route::post('admin/product/update/{id}', [ProductController::class, 'update']);
    Route::get('admin/product/delete/{id}', [ProductController::class, 'delete']);

    Route::get('admin/product/image_delete/{id}', [ProductController::class, 'image_delete']);
    Route::post('admin/product_image_sortable', [ProductController::class, 'product_image_sortable']);


    Route::get('admin/discount_code/list', [DiscountCodeController::class, 'list']);
    Route::get('admin/discount_code/add', [DiscountCodeController::class, 'add']);
    Route::post('admin/discount_code/add', [DiscountCodeController::class, 'insert']);
    Route::get('admin/discount_code/edit/{id}', [DiscountCodeController::class, 'edit']);
    Route::post('admin/discount_code/update/{id}', [DiscountCodeController::class, 'update']);
    Route::get('admin/discount_code/delete/{id}', [DiscountCodeController::class, 'delete']);
    


    Route::get('admin/shipping_charge/list', [ShippingChargeController::class, 'list']);
    Route::get('admin/shipping_charge/add', [ShippingChargeController::class, 'add']);
    Route::post('admin/shipping_charge/add', [ShippingChargeController::class, 'insert']);
    Route::get('admin/shipping_charge/edit/{id}', [ShippingChargeController::class, 'edit']);
    Route::post('admin/shipping_charge/update/{id}', [ShippingChargeController::class, 'update']);
    Route::get('admin/shipping_charge/delete/{id}', [ShippingChargeController::class, 'delete']);
    
    Route::get('admin/orders/list', [OrderController::class, 'list']);
    Route::get('admin/orders/detail/{id}', [OrderController::class, 'order_detail']);
    Route::get('admin/order_status', [OrderController::class, 'order_status']);

    Route::get('admin/slider/list', [SliderController::class, 'list']);
    Route::get('admin/slider/add', [SliderController::class, 'add']);
    Route::post('admin/slider/add', [SliderController::class, 'insert']);
    Route::get('admin/slider/edit/{id}', [SliderController::class, 'edit']);
    Route::post('admin/slider/update/{id}', [SliderController::class, 'update']);
    Route::get('admin/slider/delete/{id}', [SliderController::class, 'delete']);



    
    
});




Route::get('/', [HomeController::class, 'home']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/agb', [HomeController::class, 'agb']);
Route::get('/Datenschutzerklärung', [HomeController::class, 'Datenschutzerklärung']);
Route::get('/Impressum', [HomeController::class, 'Impressum']);
Route::get('/Kundenumfrage', [HomeController::class, 'Kundenumfrage']);
Route::get('/Versandarten', [HomeController::class, 'Versandarten']);
Route::get('/Widerrufsbelehrung', [HomeController::class, 'Widerrufsbelehrung']);
Route::get('/ZahlungMethod', [HomeController::class, 'ZahlungMethod']);



Route::post('/auth_register', [AuthController::class, 'auth_register']);
Route::post('/auth_login', [AuthController::class, 'auth_login']);

Route::get('forget-password', [AuthController::class, 'forget_password']);
Route::post('forget-password', [AuthController::class, 'auth_forget_password']);
Route::get('reset/{token}', [AuthController::class, 'reset']);
Route::post('reset/{token}', [AuthController::class, 'auth_reset']);


Route::get('activate/{id}', [AuthController::class, 'activate_email']);



Route::get('products', [ProductsController::class, 'list']);
Route::get('cart', [PaymentController::class, 'cart']);
Route::post('update_cart', [PaymentController::class, 'update_cart']);
Route::get('cart/delete/{id}', [PaymentController::class, 'cart_delete']);

Route::get('checkout', [PaymentController::class, 'checkout']);
Route::post('checkout/apply_discount_code', [PaymentController::class, 'apply_discount_code']);
Route::post('checkout/place_order', [PaymentController::class, 'place_order']);
Route::get('checkout/payment', [PaymentController::class, 'checkout_payment']);
Route::get('paypal/success-payment', [PaymentController::class, 'paypal_success_payment']);




Route::post('product/add-to-cart', [PaymentController::class, 'add_to_cart']);
Route::get('search', [ProductFront::class, 'getProductSearch']);
Route::post('get_filter_product_ajax', [ProductFront::class, 'getFilterProductAjax']);
Route::get('{category?}/{subcategory?}', [ProductFront::class, 'getCategory']);



