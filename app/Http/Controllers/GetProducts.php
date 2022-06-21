<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\category;
use App\Models\reduction;
use App\Models\product;
use App\Models\image;
use Illuminate\Support\Facades\DB;
class GetProducts extends Controller
{
  
     public function show(Request $request) {
       //condition if input it empty
        if(!empty($request->id)){
        $id =$request->id;
        }else{
        $id='1';
        }
        if(!empty($request->name)){
            $name =$request->name;
        }else{
          $name='empty';
        }

        //get categories on side bar 10
        $firstencategorie=Category::take(10)->get();
        //get last categorie for the side abar
        $lastcategories=Category::get()->skip(10);

        $categorie=Category::all();
        //to get products by categorie
        $productsByCategorie=product::
        Where('products.name','like','%'.$name.'%')
        ->orwhere('products.id_category',$id)
        ->select('products.name as name','products.id as id','products.ratting as ratting','products.price as price','products.new_price as newprice','products.image as img','products.id_category as catid')
        ->paginate(10);
        
        $nameCategories=Category::where('id',$id)
       ->select('categories.name as name')
       ->get();
        
        //count fon this products
        $count=product::
        Where('products.name','like','%'.$name.'%')
        ->orwhere('products.id_category',$id)
        ->select('products.name as name','products.ratting as ratting','products.price as price','products.new_price as newprice','products.image as img')
        ->get()->count();
        
        //count of products by categories 
        $categoriesBynombreProductsproduct=product::join('categories','products.id_category','=','categories.id')
        ->select('categories.name as name', DB::raw('count(categories.id) as total'))
        ->groupBy('categories.id')
        //->selectRaw('count(products.id) as total, group_id')
        ->get();
       
     //top rated products shop 
     $topRatedProduct=product::orderBy('ratting', 'desc')
     ->select('products.name as name','products.id as id','products.ratting as ratting','products.price as price','products.new_price as newprice','products.image as img')
     ->take(10)->get();

          $id_user=Auth::id();
          $products_cards=Cart::where('id_user',$id_user)->get()->count();

           $total_price=Cart::where('id_user',$id_user)
          ->get()->sum('total_price');


        return view('shop',compact('productsByCategorie','categorie','count','categoriesBynombreProductsproduct','nameCategories','topRatedProduct','products_cards','total_price','firstencategorie','lastcategories'));
     }
    
}
