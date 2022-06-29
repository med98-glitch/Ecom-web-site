<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\category;
use Illuminate\Http\Request;

class Logincontroller extends Controller
{
   public function login(){
      $categorie=Category::all();

      $id_user=Auth::id();
      $products_cards=Cart::where('id_user',$id_user)->get()->count();

       $total_price=Cart::where('id_user',$id_user)
      ->get()->sum('total_price');
        //get categories on side bar 10
    $firstencategorie=Category::take(10)->get();

    //get last categorie for the side abar
    $lastcategories=Category::get()->skip(10);
       return view('auth.login',compact('categorie','products_cards','total_price','firstencategorie','lastcategories'));
   }
   public function register(){
      $categorie=Category::all();

      $id_user=Auth::id();
      $products_cards=Cart::where('id_user',$id_user)->get()->count();

       $total_price=Cart::where('id_user',$id_user)
      ->get()->sum('total_price');
        //get categories on side bar 10
    $firstencategorie=Category::take(10)->get();

    //get last categorie for the side abar
    $lastcategories=Category::get()->skip(10);
       return view('register',compact('categorie','products_cards','total_price','firstencategorie','lastcategories'));
   }
}