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
        ->where('products.id','=','1')
        ->join('images','products.id','=','images.id_product')
        ->select('products.name as name','products.ratting as ratting','products.price as price','reductions.reduction as reductions','images.name as img')
        ->get();
        //return and send all variables declare in the index veiws
        return view('index',compact('categorie','products','all_product_reduction','GetAll'));
        
    }
    //function to get articls by categiries with out reload page
    public function getbyAjax(Request $request){
      if($request->ajax()){
          $pro=$request->catego;
        
         $GetAll=product::limit(2)->join('reductions','products.id','=','reductions.id_product')
        ->join('images','products.id','=','images.id_product')
        ->where('products.id_category',$pro)
        ->select('products.name as name','products.ratting as ratting','products.price as price','reductions.reduction as reductions','images.name as img')
        ->get();
        return response()->json($GetAll);
         
      }
    }
    
    
}
