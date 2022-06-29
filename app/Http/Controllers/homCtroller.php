<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\reduction;
use App\Models\product;
use App\Models\image;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class homCtroller extends Controller
{
    public function index(){

        //get all categorie form database
        $categorie=Category::all();
        //get product with categorie and images
        $products=product::join('categories','products.id_category','=','categories.id')
        //->join('images','products.id_image','=','images.id')
        ->select('categories.name as cat')
        ->get();
        
        //get categories on side bar 10
        $firstencategorie=Category::take(10)->get();

        //get last categorie for the side abar
        $lastcategories=Category::get()->skip(10);

       
        $all_product_reduction=product::
        select('products.name as name','products.id as id','products.image as img','products.ratting as ratting','products.price as price','products.new_price as reductions')
        ->get();


        //request to get default products in session ajax (prodct by categories)
        $GetAll=product::limit(2)
        //->join('images','products.id','=','images.id_product')
        ->select('products.name as name','products.id as id','products.ratting as ratting','products.price as price','products.new_price as reductions','products.image as img')
        ->get();
       

        //section get news products
        //left two products

        if(product::count() > 0){
          $leftProduct=product::orderBy('created_at', 'desc')->first()
          //->join('images','products.id','=','images.id_product')
          ->select('products.name as name','products.id as id','products.ratting as ratting','products.price as price','products.new_price as reductions','products.image as img')
          ->take(2)->get();
        }else{
          $leftProduct=product::
          //->join('images','products.id','=','images.id_product')
          select('products.name as name','products.id as id','products.ratting as ratting','products.price as price','products.new_price as reductions','products.image as img')
          ->get();
        }
       
         //right two products
         if(product::count() > 0){
        $righttProduct=product::orderBy('created_at', 'desc')->first()->limit(2)
        ->select('products.name as name','products.id as id','products.ratting as ratting','products.price as price','products.new_price as reductions','products.image as img')
        ->skip(2)->take(2)->get();
         }else{
          $righttProduct=product::
          select('products.name as name','products.id as id','products.ratting as ratting','products.price as price','products.new_price as reductions','products.image as img')
          ->get();
         }
        //center one products
        if(product::count() > 0){
        $cebterProducts=product::orderBy('created_at', 'desc')->first()->limit(2)
        ->select('products.name as name','products.id as id','products.ratting as ratting','products.price as price','products.new_price as reductions','products.image as img')
        ->skip(4)->take(1)->get();
        }else{
          $cebterProducts=product::
          select('products.name as name','products.id as id','products.ratting as ratting','products.price as price','products.new_price as reductions','products.image as img')
          ->get();
        }

        //get top ratid elemment defaut value
         $topRatedProduct=product::orderBy('ratting', 'desc')
         ->select('products.name as name','products.id as id','products.id as id','products.ratting as ratting','products.price as price','products.new_price as reductions','products.image as img')
         ->take(10)->get();

         //get top reduction products
         $topReductionProducts=product::orderBy('new_price','desc')
         ->select('products.name as name','products.id as id','products.ratting as ratting','products.price as price','products.new_price as reductions','products.image as img')
         ->take(10)->get();
         
         //last products
         if(product::count() < 0){
         $lastProduct=product::orderBy('created_at', 'desc')->first()
         ->select('products.name as name','products.id as id','products.ratting as ratting','products.price as price','products.new_price as reductions','products.image as img')
         ->take(10)->get();
         }else{
          $lastProduct=product::
          select('products.name as name','products.id as id','products.ratting as ratting','products.price as price','products.new_price as reductions','products.image as img')
         ->get();
         }
         
          //Top price products
          $toppriceproducts=product::orderBy('price', 'asc')
          ->select('products.name as name','products.id as id','products.ratting as ratting','products.price as price','products.new_price as reductions','products.image as img')
          ->take(10)->get();

         //carts
         $id_user=Auth::id();
         $products_cards=Cart::where('id_user',$id_user)->get()->count();

        $total_price=Cart::where('id_user',$id_user)
        ->get()->sum('total_price');
        return view('index',compact('categorie','products','all_product_reduction','GetAll','leftProduct','righttProduct','cebterProducts','topRatedProduct','topReductionProducts','lastProduct','toppriceproducts'
        ,'firstencategorie','lastcategories','products_cards','total_price'));
        
    }
    //function to get articls by categiries with out reload page
    public function getbyAjax(Request $request){
      if($request->ajax()){
          $pro=$request->catego;
        
         $GetAll=product::limit(2)
        //->join('images','products.id','=','images.id_product')
        ->where('products.id_category',$pro)
        ->select('products.name as name','products.id as id','products.ratting as ratting','products.price as price','products.new_price as reductions','products.image as img')
        ->get();
        return response()->json($GetAll);
         
      }
    }

    
    //function to get top rated products by categorie
    public function gatbyCategorie(Request $request){
      if($request->ajax()){
        $categorie=$request->categorie;
       
        $RatedProductByCategorie=product::orderBy('ratting', 'DESC')
        ->where('products.id_category',$categorie)
        ->select('products.name as name','products.id as id','products.ratting as ratting','products.price as price','products.new_price as reductions','products.image as img')
        ->take(4)->get();
        return response()->json($RatedProductByCategorie);
      }
    }
    
  
    
}
