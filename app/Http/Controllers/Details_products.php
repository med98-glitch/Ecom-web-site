<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\category;
use App\Models\reduction;
use App\Models\product;
use App\Models\image;
use Illuminate\Support\Facades\DB;

class Details_products extends Controller
{
    public function getdaitails(Request $request){
        $categorie=Category::all();
        $id=$request->id;
        $prductsdtailsproduct=product::join('reductions','products.id','=','reductions.id_product')
        ->join('categories','categories.id','=','products.id_category')
        ->where('products.id',$id)
        ->select('products.name as name','products.ratting as ratting','products.price as price','products.description as desc','reductions.reduction as reductions','reductions.new_price as newprice','products.image as firsImage','categories.name as namecategorie')
        ->get();
        $id=2;
        $listimages=product::join('images','products.id','=','images.id_product')->distinct()
        ->where('images.id_product',$id)
        ->select('images.name as img')
        ->get();

        return view('details',compact('categorie','prductsdtailsproduct','listimages'));
    }
}
