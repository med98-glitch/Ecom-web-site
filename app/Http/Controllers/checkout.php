<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use App\Models\category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class checkout extends Controller
{
    public function index()
    {
        //get all categorie form database
        $categorie = Category::all();

        $id_user = Auth::id();
        $products_cards = Cart::where('id_user', $id_user)->get()->count();

        $total_price = Cart::where('id_user', $id_user)
            ->get()->sum('total_price');
        //get categories on side bar 10
        $firstencategorie = Category::take(10)->get();

        //get last categorie for the side abar
        $lastcategories = Category::get()->skip(10);

        //order dtails
        $order = Cart::join('products', 'products.id', '=', 'carts.id_products')
            ->where('id_user', Auth::id())
            ->select('products.name as name', 'carts.qte as qte', 'products.priceTTC as pricebyone', 'carts.total_price as total')
            ->get();

        $priceTTc_total = product::join('carts', 'products.id', '=', 'carts.id_products')
            ->where('id_user', Auth::id())
            ->sum(DB::raw('carts.qte * products.priceTTC'));

        $productpricetotal = product::join('carts', 'products.id', '=', 'carts.id_products')

            ->where('id_user', Auth::id())
            ->sum('carts.total_price');

        return view('checkout', compact('categorie', 'products_cards', 'total_price', 'firstencategorie', 'lastcategories', 'order', 'priceTTc_total', 'productpricetotal'));
    }
}
