<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\jetstramcontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\productcontroller;

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

Route::get('/', function () {
    return view('welcome');
});
//views controllers
Route::get('home', [homecontroller::class, 'home']);
Route::get('about', [homecontroller::class, 'about']);
Route::get('contact', [homecontroller::class, 'contact']);
Route::get('product', [homecontroller::class, 'product']);
Route::get('blog', [homecontroller::class, 'blog']);
Route::get('testimonial', [homecontroller::class, 'testimonial']);
Route::get('product_details', [homecontroller::class, 'details']);
//admin panal view 
Route::get('index', [admincontroller::class, 'index']);
Route::get('blank', [admincontroller::class, 'blank']);
Route::get('addproduct', [admincontroller::class, 'addproduct']);
Route::get('element', [admincontroller::class, 'element']);
Route::get('form', [admincontroller::class, 'form']);
Route::get('table', [admincontroller::class, 'table']);
Route::get('showproduct', [admincontroller::class, 'showproduct']);
Route::get('wideget', [admincontroller::class, 'wideget']);
Route::get('signin', [admincontroller::class, 'signin']);
Route::get('signup', [admincontroller::class, 'signup']);
Route::get('chart', [admincontroller::class, 'chart']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[jetstramcontroller::class,'redirect'])->middleware('auth','verified');

//products

Route::get('/view-catagory',[productcontroller::class,'catagory']);

Route::post('/add-catagory',[productcontroller::class,'add']);

Route::get('deletee/{id}', [productcontroller::class, 'destroy']);

Route::get('/view_product',[productcontroller::class,'view_product']);

Route::post('/add_product',[productcontroller::class,'add_product']);


Route::get('/show_product',[productcontroller::class,'show_product']);

//delete product

Route::get('delet/{id}', [productcontroller::class, 'deletee']);

Route::get('update/{id}', [productcontroller::class, 'edit']);

Route::put('update/finalupdate/{id}', [productcontroller::class, 'finaledit']);


//product details
Route::get('product_details/{id}', [homecontroller::class, 'details']);
//add to cart 
Route::post('/add_cart/{id}', [homecontroller::class, 'add_cart']);
Route::get('/show_cart', [homecontroller::class, 'show_cart']);
Route::get('delete/{id}', [homecontroller::class, 'delete']);

//payment 

Route::get('/cash_order', [homecontroller::class, 'cash_order']);


Route::get('/stripe/{totalprice}', [homecontroller::class, 'striped']);

Route::post('stripee/{totalprice}',[homecontroller::class, 'stripePost'])->name('stripe.post');

//show orders in admin panel

Route::get('/order', [admincontroller::class, 'order']);
Route::get('/delivered/{id}', [admincontroller::class, 'delivered']);

//pdf download

Route::get('/print_pdf/{id}', [admincontroller::class, 'print']);
//email

Route::get('/send_email/{id}', [admincontroller::class, 'send_email']);

Route::post('/send_useremail/{id}', [admincontroller::class, 'send_useremail']);
//search
Route::get('/search', [admincontroller::class, 'searchdata']);

//show orders
Route::get('/show_order', [homecontroller::class, 'show_order']);

Route::get('/cancel_order/{id}', [homecontroller::class, 'cancel_order']);

Route::get('/search_products', [homecontroller::class, 'search_products']);