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

class shopCtroller extends Controller
{
    public function shop(){
      //get categories on side bar 10
      $firstencategorie=Category::take(10)->get();
      //get last categorie for the side abar
      $lastcategories=Category::get()->skip(10);
        //get section of categeries with number of item by categories
        $categoriesBynombreProductsproduct=product::join('categories','products.id_category','=','categories.id')
        ->select('categories.name as name','products.id_category as idcat', DB::raw('count(categories.id) as total'))
        ->groupBy('categories.id')
        //->selectRaw('count(products.id) as total, group_id')
        ->get();
        $categorie=Category::all();
        //get all categorie form database
        $categorie=Category::all();

        $productsByCategorie=product::
        select('products.id as id','products.name as name','products.ratting as ratting','products.price as price','products.new_price as newprice','products.image as img')
        ->paginate(10);

        //default count of products
          //count fon this products
          $count=product::
          select('products.name as name','products.ratting as ratting','products.price as price','products.new_price as newprice','products.image as img')
          ->get()->count();
        //name cataegries for shop
          $nameCategories=Category::all(); 
          $topRatedProduct=product::orderBy('ratting', 'desc')
          ->select('products.name as name','products.ratting as ratting','products.price as price','products.new_price as newprice','products.image as img')
          ->take(10)->get();

           //carts
         $id_user=Auth::id();
         $products_cards=Cart::where('id_user',$id_user)->get()->count();

         $total_price=Cart::where('id_user',$id_user)
         ->get()->sum('total_price');

        return view('shop',compact('categorie','productsByCategorie','count','categoriesBynombreProductsproduct','nameCategories','topRatedProduct','products_cards','total_price','firstencategorie','lastcategories'));
    }
  
  //flitter by price range

  public function fillterbyprice(Request $request){
    $price1=$request->price1;
    $price2=$request->price2;

    //get section of categeries with number of item by categories
    $categoriesBynombreProductsproduct=product::join('categories','products.id_category','=','categories.id')
    ->select('categories.name as name','products.id_category as idcat', DB::raw('count(categories.id) as total'))
    ->groupBy('categories.id')
    //->selectRaw('count(products.id) as total, group_id')
    ->get();
    $categorie=Category::all();
    //get all categorie form database
    $categorie=Category::all();
    $count=product::
          select('products.name as name','products.ratting as ratting','products.price as price','products.new_price as newprice','products.image as img')
          ->get()->count();
    $productsByCategorie=product::
    whereBetween('products.new_price',[$price1,$price2])
    ->select('products.name as name','products.id as id','products.ratting as ratting','products.price as price','products.new_price as newprice','products.image as img','products.id_category as catid')
    ->paginate(10);

    //default count of products
      //count fon this products
      $count=product::join('reductions','products.id','=','reductions.id_product')
      ->whereBetween('reductions.new_price',[$price1,$price2])
      ->select('products.name as name','products.ratting as ratting','products.price as price','products.new_price as newprice','products.image as img')
      ->get()->count();
    //name cataegries for shop
      $nameCategories=Category::all(); 

      //top rated products shop
      $topRatedProduct=product::orderBy('ratting', 'desc')
      ->select('products.name as name','products.id as id','products.ratting as ratting','products.new_price as newprice','products.image as img')
      ->take(10)->get();

     

          //carts
          $id_user=Auth::id();
          $products_cards=Cart::where('id_user',$id_user)->get()->count();

           $total_price=Cart::where('id_user',$id_user)
          ->get()->sum('total_price');

          //get categories on side bar 10
        $firstencategorie=Category::take(10)->get();
        //get last categorie for the side abar
        $lastcategories=Category::get()->skip(10);
    return view('shop',compact('categorie','productsByCategorie','count','categoriesBynombreProductsproduct','nameCategories','topRatedProduct','total_price','products_cards','firstencategorie','lastcategories'));
}



    //side bar for filltrer by categrie
    public function fillterbycategorie(Request $request){
      $categorie=Category::all();
      $id = $request->id;
       $productsByCategorie=product::
       join('categories','categories.id','=','products.id_category')
       ->where('products.id_category',$id)
       ->select('products.name as name','products.id as id','products.ratting as ratting','products.price as price','products.new_price as newprice','products.image as img','categories.name as catNam')
       ->paginate(10);

       $nameCategories=Category::where('id',$id)
       ->select('categories.name as name')
       ->get();
       

       $categoriesBynombreProductsproduct=product::join('categories','products.id_category','=','categories.id')
        ->groupBy('categories.id')
        ->select('categories.name as name','products.id_category as idcat', DB::raw('count(categories.id) as total'))
        //->selectRaw('count(products.id) as total, group_id')
        ->get();
        $count=product::
        where('products.id_category',$id)
        ->select('products.name as name','products.ratting as ratting','products.price as price','products.new_price as newprice','products.image as img',)
        ->get()->count();
        //top rated products shop
        $topRatedProduct=product::orderBy('ratting', 'desc')
        ->select('products.name as name','products.ratting as ratting','products.price as price','products.new_price as newprice','products.image as img')
        ->take(10)->get();

          //carts
          $id_user=Auth::id();
          $products_cards=Cart::where('id_user',$id_user)->get()->count();
 
          $total_price=Cart::where('id_user',$id_user)
          ->get()->sum('total_price');
        $total_price=Cart::where('id_user',$id_user)
        ->get()->sum('total_price');

          //get categories on side bar 10
          $firstencategorie=Category::take(10)->get();
          //get last categorie for the side abar
          $lastcategories=Category::get()->skip(10);
       return view('shop',compact('productsByCategorie','categorie','categoriesBynombreProductsproduct','count','nameCategories','topRatedProduct','products_cards','total_price','firstencategorie','lastcategories'));
    
    }



    public function show($id){
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
        ->paginate(10);
        return response()->json($productsByCategorie);
    }
    }

  
 
}
