<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\reduction;
use App\Models\product;
use App\Models\image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class shopCtroller extends Controller
{
    public function shop(){
        //get section of categeries with number of item by categories
        $categoriesBynombreProductsproduct=product::join('categories','products.id_category','=','categories.id')
        ->select('categories.name as name','products.id_category as idcat', DB::raw('count(categories.id) as total'))
        ->groupBy('categories.id')
        //->selectRaw('count(products.id) as total, group_id')
        ->get();
        $categorie=Category::all();
        //get all categorie form database
        $categorie=Category::all();

        $productsByCategorie=product::join('reductions','products.id','=','reductions.id_product')
        ->select('products.name as name','products.ratting as ratting','products.price as price','reductions.reduction as reductions','products.image as img')
        ->paginate(10);

        //default count of products
          //count fon this products
          $count=product::join('reductions','products.id','=','reductions.id_product')
         
          ->select('products.name as name','products.ratting as ratting','products.price as price','reductions.reduction as reductions','products.image as img')
          ->get()->count();
        
        return view('shop',compact('categorie','productsByCategorie','count','categoriesBynombreProductsproduct'));
    }
  



    //side bar for filltrer by categrie
    public function fillterbycategorie(Request $request){
      $categorie=Category::all();
      $id = $request->id;
       $productsByCategorie=product::join('reductions','products.id','=','reductions.id_product')
       ->where('products.id_category',$id)
       ->select('products.name as name','products.ratting as ratting','products.price as price','reductions.reduction as reductions','products.image as img')
       ->paginate(2);

       $categoriesBynombreProductsproduct=product::join('categories','products.id_category','=','categories.id')
        ->select('categories.name as name','products.id_category as idcat', DB::raw('count(categories.id) as total'))
        ->groupBy('categories.id')
        //->selectRaw('count(products.id) as total, group_id')
        ->get();
        $count=product::join('reductions','products.id','=','reductions.id_product')
        ->where('products.id_category',$id)
        ->select('products.name as name','products.ratting as ratting','products.price as price','reductions.reduction as reductions','products.image as img')
        ->get()->count();
       return view('shop',compact('productsByCategorie','categorie','categoriesBynombreProductsproduct','count'));
    
    }






    public function show($id ){
        $productsByCategorie_side_bar=product::join('reductions','products.id','=','reductions.id_product')
        ->where('products.id_category',$id)
        ->select('products.name as name','products.ratting as ratting','products.price as price','reductions.reduction as reductions','products.image as img')
        ->take(10)->get();

        return view('shop',compact('productsByCategorie'));
     }
    public function showproducts(Request $request){
      if($request->ajax()){
        $idCat=$request->catego;
      
        $productsByCategorie=product::join('reductions','products.id','=','reductions.id_product')
        ->orwhere('products.id_category',$idCat)
        ->select('products.name as name','products.ratting as ratting','products.price as price','reductions.reduction as reductions','products.image as img','products.id_category as catid')
        ->paginate(2);
        return response()->json($productsByCategorie);
    }
    }

  
 
}
