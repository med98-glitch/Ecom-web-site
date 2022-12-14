<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\shopCtroller;
use App\Http\Controllers\homCtroller;
use App\Http\Controllers\GetProducts;
use App\Http\Controllers\product;
use App\Http\Controllers\Details_products;
use App\Http\Controllers\profileController;
use App\Http\Controllers\checkout;
//use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Order;
use App\Http\Controllers\CartController;
use App\Http\Controllers\profile;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
// call cotroller
    Route::get('/', [homCtroller::class, 'index'])/*->middleware('verified')*/;

    Route::get('/home', [App\Http\Controllers\homCtroller::class, 'index'])->name('home');

    //Route for go to the  page contact
    Route::get('/contact', [aboutController::class, 'contact']);

    //Route for go to the page about
    Route::get('/about', [aboutController::class, 'about']);
    Route::get('services',[aboutController::class,'services']);

    //call controller 
    Route::get('shop', [shopCtroller::class, 'shop'])/*->middleware('verified');*/;


    //first product in index page
    //Route::get('/',[product::class,'show']);

    //get product by catagorei in ajax
    Route::post('/getbyajax', [homCtroller::class, 'getbyAjax']);


    //get Top rated product by categorie
    Route::post('/gatbyCategorie', [homCtroller::class, 'gatbyCategorie']);


    //getproducts by categories and  get all categories
    Route::get('shop/categorie?={id}', [shopCtroller::class, 'show']);
    //Route::post('categories',[shopCtroller::class,'work']);
    //Route::get('shop?categorie={id}',[GetProducts::class,'show']);
    Route::get('categories', [GetProducts::class, 'show']);
    //fillter by price range
    Route::get('fillterbyprice', [shopCtroller::class, 'fillterbyprice']);
    //getproducts by categorie on shope page
    Route::post('/getbycategories', [shopCtroller::class, 'showproducts']);

    Route::get('shop/{id}', [shopCtroller::class, 'fillterbycategorie']);

    //details produs section
    Route::get('details/{id}', [Details_products::class, 'getdaitails']);

    //login and register section
    Route::get('/login', [LoginController::class, 'login']);
    Route::get('/register', [LoginController::class, 'register']);
    Auth::routes(/*['verify' => true]*/);

    Route::middleware(['auth'])->group(function () {
    Route::get('details_cart', [CartController::class, 'details']);
    Route::post('/deleteUpdateItem', [CartController::class, 'deleteUpdateItem']);
    Route::get('/profile', [profileController::class, 'index']);
    Route::get('/checkout', [checkout::class, 'index']);
    Route::POST('addorder', [Order::class, 'addorder']);

    Route::get('updateprofile', [profile::class, 'updateuser']);
    Route::post('updateinfo', [profile::class, 'updateinfo']);
    Route::post('updatepassword', [profile::class, 'updatepassword']);
});
    Route::post('/addtocard', [CartController::class, 'addProduct']);
    //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
});



//contact info 
    Route::post('sendemail', [aboutController::class, 'sendemail']);
