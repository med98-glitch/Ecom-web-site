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

       
        return view('about',compact('categorie','products_cards','total_price'));
    }
    public function contact(){
        //get all categorie form database

        $id_user=Auth::id();
        $products_cards=Cart::where('id_user',$id_user)->get()->count();

        $total_price=Cart::where('id_user',$id_user)
        ->get()->sum('total_price');
        $categorie=Category::all();

        

        return view('contact',compact('categorie','products_cards','total_price'));
    }
}
