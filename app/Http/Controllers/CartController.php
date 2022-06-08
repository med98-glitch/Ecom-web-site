<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Cart;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addProduct(Request $request){

        $product_id=$request->id_products;
        $qte=$request->qte;
        $price=$request->price;
        $total_price=$qte * $price;
        
        if(Auth::check())
        {
         $prod_check = product::where('id',$product_id)->first();
        
        if($prod_check)
        {
            if(Cart::where('id_products',$product_id)->where('id_user',Auth::id())->exists()){
                $id_user=Auth::id();
                $products_cards=Cart::where('id_user',$id_user)->get()->count();

                $total_price=Cart::where('id_user',$id_user)
               ->get()->sum('total_price');
                return response()->json(['status' => "products it all ready existe",'icon' => "warning",'title' =>"warning...","products_cards" =>$products_cards,"total_price"=> $total_price]);
            }
            else
                {
                $cartItem = new Cart();
                $cartItem -> id_products = $product_id;
                $cartItem -> id_user = Auth::id();
                $cartItem -> qte = $qte;
                $cartItem -> total_price = $total_price;
                $cartItem ->save();
                $id_user=Auth::id();
                $products_cards=Cart::where('id_user',$id_user)->get()->count();

                $total_price=Cart::where('id_user',$id_user)
               ->get()->sum('total_price');
                return response()->json(['status' => "Product aded to cart",'icon' => "success",'title' =>"success...","products_cards" =>$products_cards,"total_price" =>$total_price]);
                }
    
            }
       }
        else{
                $id_user=Auth::id();
                $products_cards=Cart::where('id_user',$id_user)->get()->count();

                $total_price=Cart::where('id_user',$id_user)
               ->get()->sum('total_price');
            return response()->json(['status' => "login to continue",'icon' => "error",'title' =>"oops...","products_cards" =>$products_cards,"total_price" =>$total_price]);
        }
   
}
public function details(){
    $categorie=Category::all();

          $id_user=Auth::id();
          $products_cards=Cart::where('id_user',$id_user)->get()->count();

           $total_price=Cart::where('id_user',$id_user)
          ->get()->sum('total_price');
        
    return view('cart',compact('categorie','products_cards','total_price'));
}

//functionn reload panier 
public function deleteUpdateItem(Request $request)

{
   
    $id_user=Auth::id();
   
    $total_price=Cart::where('id_user',$id_user)
    ->get()->sum('total_price');
    $products_cards=Cart::where('id_user',$id_user)->get()->count();
    return response()->json(["products_cards" => $products_cards,"total_price"=> $total_price]);
}
    
}
