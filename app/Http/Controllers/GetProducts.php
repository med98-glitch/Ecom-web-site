<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\category;
use App\Models\reduction;
use App\Models\product;
use App\Models\image;
class GetProducts extends Controller
{
  
     public function show($id = 1){
        $productsByCategorie=product::join('reductions','products.id','=','reductions.id_product')
        ->where('products.id_category',$id)
        ->select('products.name as name','products.ratting as ratting','products.price as price','reductions.reduction as reductions','products.image as img')
        ->take(10)->get();

        return view('shop',compact('productsByCategorie'));
     }
     public function aa(){
        //$_GET['id'];
        $categorie=Category::all();
         return view('shop/',compact('categorie'));
     }
}
