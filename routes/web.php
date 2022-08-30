<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\RatingController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\WishlistController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use League\CommonMark\Extension\FrontMatter\FrontMatterParser;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[FrontendController::class,'index']);
Route::get('category',[FrontendController::class,'category']);
Route::get('category/{slug}',[FrontendController::class,'viewcategory']);
Route::get('category/{cate_slug}/{prod_slug}',[FrontendController::class,'productview']);

Route::get('product-list',[FrontendController::class,'productlistAjax']);
Route::post('searchproduct',[FrontendController::class,'searchProduct']);
Auth::routes();

Route::get('load-cart-data',[CartController::class,'cartcount']);

Route::get('load-wishlist-data',[WishlistController::class,'wishlistcount']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('add-to-cart',[CartController::class,'addProduct']);
Route::post('delete-cart-item',[CartController::class,'deleteproduct']);
Route::post('update-cart',[CartController::class,'updatecart']);


Route::post('add-to-wishlist',[WishlistController::class,'add']);
Route::post('delete-wishlist-item',[WishlistController::class,'deleteitem']);

Route::middleware(['auth'])->group(function(){
    Route::get('cart',[CartController::class,'viewcart']);
    Route::get('checkout',[CheckoutController::class,'index']);
    Route::post('place-order',[CheckoutController::class,'placeorder']);

    Route::get('my-orders',[UserController::class,'index']);
    Route::get('view-order/{id}',[UserController::class,'view']);

    Route::post('add-rating',[RatingController::class,'add']);

    Route::get('wishlist',[WishlistController::class,'index']);
    

    Route::post('proceed-to-payment',[CheckoutController::class,'payment']);
    
});

Route::middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard', 'Admin\FrontendController@index');
    
    Route::get('categories', 'Admin\CategoryController@index');
    Route::get('add-category', 'Admin\CategoryController@add');
    Route::post('insert-category','Admin\CategoryController@insert');
    
    Route::get('edit-category/{id}',[CategoryController::class,'edit']);
    Route::put('update-category/{id}',[CategoryController::class,'update']);
    Route::get('delete-category/{id}',[CategoryController::class,'destroy']);

    Route::get('products',[ProductController::class,'index']);
    Route::get('add-products',[ProductController::class,'add']);
    Route::post('insert-product',[ProductController::class,'insert']);

    Route::get('edit-product/{id}',[ProductController::class,'edit']);
    Route::put('update-product/{id}',[ProductController::class,'update']);
    Route::get('delete-product/{id}',[ProductController::class,'destroy']);

    Route::get('orders',[OrderController::class,'index']);
    Route::get('admin/view-order/{id}',[OrderController::class,'view']);
    Route::put('update-order/{id}',[OrderController::class,'updateorder']);
    Route::get('order-history',[OrderController::class,'orderhistory']);

    Route::get('users',[DashboardController::class,'users']);
    Route::get('view-users/{id}',[DashboardController::class,'viewusers']);
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');