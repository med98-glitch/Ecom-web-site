<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\shopCtroller;
use App\Http\Controllers\homCtroller;
use App\Http\Controllers\product;



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
Route::get('/',[homCtroller::class,'index']);

Route::get('/index',[homCtroller::class,'index']);

//Route for go to the  page contact
Route::get('/contact',[aboutController::class,'contact']);

//Route for go to the page about
Route::get('/about',[aboutController::class,'about']);

//call controller 
Route::get('/shop',[shopCtroller::class,'shop']);
Route::get('shop/{id}',[shopCtroller::class,'shop']);

//first product in index page
//Route::get('/',[product::class,'show']);

Route::post('/getbyajax',[homCtroller::class,'getbyAjax']);