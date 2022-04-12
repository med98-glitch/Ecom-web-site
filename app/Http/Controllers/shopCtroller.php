<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\reduction;
use App\Models\product;
use App\Models\image;
use Illuminate\Http\Request;

class shopCtroller extends Controller
{
    public function shop(){
        $categorie=Category::all();
        //get all categorie form database
        $categorie=Category::all();
        
        return view('shop',compact('categorie'));
    }

    public function show($id ){
        $productsByCategorie=product::join('reductions','products.id','=','reductions.id_product')
        ->where('products.id_category',$id)
        ->select('products.name as name','products.ratting as ratting','products.price as price','reductions.reduction as reductions','products.image as img')
        ->take(10)->get();

        return view('shop',compact('productsByCategorie'));
     }
    

    public function work(){
        return view('index');
    }
 
}
