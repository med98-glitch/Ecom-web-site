<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\category;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function about(){
        //get all categorie form database
        $categorie=Category::all();

          $id_user=Auth::id();
          $products_cards=Cart::where('id_user',$id_user)->get()->count();

           $total_price=Cart::where('id_user',$id_user)
          ->get()->sum('total_price');
            //get categories on side bar 10
        $firstencategorie=Category::take(10)->get();

        //get last categorie for the side abar
        $lastcategories=Category::get()->skip(10);

       
        return view('about',compact('categorie','products_cards','total_price','firstencategorie','lastcategories'));
    }
    public function contact(){
        //get all categorie form database

        $id_user=Auth::id();
        $products_cards=Cart::where('id_user',$id_user)->get()->count();

        $total_price=Cart::where('id_user',$id_user)
        ->get()->sum('total_price');
        $categorie=Category::all();
      
           //get categories on side bar 10
           $firstencategorie=Category::take(10)->get();

           //get last categorie for the side abar
           $lastcategories=Category::get()->skip(10);
   
        

        return view('contact',compact('categorie','products_cards','total_price','firstencategorie','lastcategories'));
    }
}
