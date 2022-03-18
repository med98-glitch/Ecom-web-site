<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homCtroller;
use app\Http\cotrollers\shopCtroller;


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
Route::view('/contact','contact');

//Route for go to the page about
Route::view('/about','about');

//call controller 
Route::view('/shop',[shopCtroller::class,'shop']);