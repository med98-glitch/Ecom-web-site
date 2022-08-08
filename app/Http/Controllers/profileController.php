<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\category;
use App\Models\User;
use App\Models\order;
use Illuminate\Http\Request;


class profileController extends Controller
{
    public function index(){
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

       $infouser=User::where('id',Auth::id())
       ->select('name','email','password')
       ->get();
       $orders=order::where('id_user',Auth::id())
       ->select('created_at as date','statu','total')
       ->get();
        return view('profile',compact('categorie','products_cards','total_price','firstencategorie','lastcategories','infouser','orders'));
    }
}
