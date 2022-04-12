<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\reduction;
use App\Models\product;
use App\Models\image;
use Illuminate\Http\Request;
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

        //$data=DB::table('categories')
        //->join('categories','products.id_category','=','categories.id')
        //->select('products.name','products.')
        //->get();
         //to get product how  have reduction
         
         /*$all_product_reduction=reduction::join('products','reductions.id_product','=','products.id')
         ->join('products','images.id_product','=','products.id')
        ->select('reductions.id as id','products.name as name')
        ->get();*/
        $all_product_reduction=product::join('reductions','products.id','=','reductions.id_product')
        ->join('images','products.id','=','images.id_product')
        ->select('products.name as name','products.ratting as ratting','products.price as price','reductions.reduction as reductions')
        ->get();


        //request to get default products in session ajax (prodct by categories)
        $GetAll=product::limit(2)->join('reductions','products.id','=','reductions.id_product')
        //->join('images','products.id','=','images.id_product')
        ->select('products.name as name','products.ratting as ratting','products.price as price','reductions.reduction as reductions','products.image as img')
        ->get();
       

        //section get news products
        //left two products
        $leftProduct=product::orderBy('created_at', 'desc')->first()->join('reductions','products.id','=','reductions.id_product')
        //->join('images','products.id','=','images.id_product')
        ->select('products.name as name','products.ratting as ratting','products.price as price','reductions.reduction as reductions','products.image as img')
        ->take(2)->get();
         //right two products
        $righttProduct=product::orderBy('created_at', 'desc')->first()->limit(2)->join('reductions','products.id','=','reductions.id_product')
        ->select('products.name as name','products.ratting as ratting','products.price as price','reductions.reduction as reductions','products.image as img')
        ->skip(2)->take(2)->get();
        //center one products

        $cebterProducts=product::orderBy('created_at', 'desc')->first()->limit(2)->join('reductions','products.id','=','reductions.id_product')
        ->select('products.name as name','products.ratting as ratting','products.price as price','reductions.reduction as reductions','products.image as img')
        ->skip(4)->take(1)->get();

        //get top ratid elemment defaut value
         $topRatedProduct=product::orderBy('ratting', 'desc')->join('reductions','products.id','=','reductions.id_product')
         ->select('products.name as name','products.ratting as ratting','products.price as price','reductions.reduction as reductions','products.image as img')
         ->take(10)->get();

         //get top reduction products
         $topReductionProducts=product::join('reductions','products.id','=','reductions.id_product')->orderBy('reductions','desc')
         ->select('products.name as name','products.ratting as ratting','products.price as price','reductions.reduction as reductions','products.image as img')
         ->take(10)->get();
         
         //last products
         $lastProduct=product::orderBy('created_at', 'desc')->first()->join('reductions','products.id','=','reductions.id_product')
         ->select('products.name as name','products.ratting as ratting','products.price as price','reductions.reduction as reductions','products.image as img')
         ->take(10)->get();
         
          //Top price products
          $toppriceproducts=product::orderBy('price', 'asc')->join('reductions','products.id','=','reductions.id_product')
          ->select('products.name as name','products.ratting as ratting','products.price as price','reductions.reduction as reductions','products.image as img')
          ->take(10)->get();


        return view('index',compact('categorie','products','all_product_reduction','GetAll','leftProduct','righttProduct','cebterProducts','topRatedProduct','topReductionProducts','lastProduct','toppriceproducts'
        ,'firstencategorie','lastcategories'));
        
    }
    //function to get articls by categiries with out reload page
    public function getbyAjax(Request $request){
      if($request->ajax()){
          $pro=$request->catego;
        
         $GetAll=product::limit(2)->join('reductions','products.id','=','reductions.id_product')
        //->join('images','products.id','=','images.id_product')
        ->where('products.id_category',$pro)
        ->select('products.name as name','products.ratting as ratting','products.price as price','reductions.reduction as reductions','products.image as img')
        ->get();
        return response()->json($GetAll);
         
      }
    }

    
    //function to get top rated products by categorie
    public function gatbyCategorie(Request $request){
      if($request->ajax()){
        $categorie=$request->categorie;
       
        $RatedProductByCategorie=product::orderBy('ratting', 'DESC')->join('reductions','products.id','=','reductions.id_product')
        ->where('products.id_category',$categorie)
        ->select('products.name as name','products.ratting as ratting','products.price as price','reductions.reduction as reductions','products.image as img')
        ->take(4)->get();
        return response()->json($RatedProductByCategorie);
      }
    }
    
  
    
}
