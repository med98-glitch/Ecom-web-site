<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

      
        $categorie=Category::all();
        //to get products by categorie
        $productsByCategorie=product::join('reductions','products.id','=','reductions.id_product')
        ->Where('products.name','like','%'.$name.'%')
        ->orwhere('products.id_category',$id)
        ->select('products.name as name','products.ratting as ratting','products.price as price','reductions.reduction as reductions','reductions.new_price as newprice','products.image as img','products.id_category as catid')
        ->paginate(1);
        
        $nameCategories=Category::where('id',$id)
       ->select('categories.name as name')
       ->get();
        
        //count fon this products
        $count=product::join('reductions','products.id','=','reductions.id_product')
        ->Where('products.name','like','%'.$name.'%')
        ->orwhere('products.id_category',$id)
        ->select('products.name as name','products.ratting as ratting','products.price as price','reductions.reduction as reductions','reductions.new_price as newprice','products.image as img')
        ->get()->count();
        
        //count of products by categories 
        $categoriesBynombreProductsproduct=product::join('categories','products.id_category','=','categories.id')
        ->select('categories.name as name', DB::raw('count(categories.id) as total'))
        ->groupBy('categories.id')
        //->selectRaw('count(products.id) as total, group_id')
        ->get();
       
     //top rated products shop 
     $topRatedProduct=product::orderBy('ratting', 'desc')->join('reductions','products.id','=','reductions.id_product')
     ->select('products.name as name','products.id as id','products.ratting as ratting','products.price as price','reductions.reduction as reductions','reductions.new_price as newprice','products.image as img')
     ->take(10)->get();

        return view('shop',compact('productsByCategorie','categorie','count','categoriesBynombreProductsproduct','nameCategories','topRatedProduct'));
     }
    
}
