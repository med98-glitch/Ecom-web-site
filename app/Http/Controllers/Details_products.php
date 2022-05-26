<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\category;
use App\Models\product;
use App\Models\image;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Details_products extends Controller
{
    public function getdaitails(Request $request){
        $categorie=Category::all();
        $id=$request->id;
        $prductsdtailsproduct=product::join('reductions','products.id','=','reductions.id_product')
        ->join('categories','categories.id','=','products.id_category')
        ->where('products.id',$id)
        ->select('products.name as name','products.id as id','products.ratting as ratting','products.price as price','products.description as desc','reductions.reduction as reductions','reductions.new_price as newprice','products.image as firsImage','categories.name as namecategorie')
        ->get();
        
        $listimages=image::
        where('images.id_product', $id)
        ->select('images.name as img')
        ->get();
        
        $id_user=Auth::id();
        $products_cards=Cart::where('id_user',$id_user)->get()->count();

        $total_price=Cart::where('id_user',$id_user)
        ->get()->sum('total_price');
        
        return view('details',compact('categorie','prductsdtailsproduct','listimages','products_cards','total_price'));
    }
}
