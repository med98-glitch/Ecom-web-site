<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Cart;
use App\Models\category;
use App\Models\reduction;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Itemcarts extends Component
{

    public $number = 100;
   

    //total of price 
    //public $total = product::
    public function render()
    {



        //get categories on side bar 10
        $firstencategorie = Category::take(10)->get();

        //get last categorie for the side abar
        $lastcategories = Category::get()->skip(10);


        $productsincarts = product::join('carts', 'products.id', '=', 'carts.id_products')

            ->where('id_user', Auth::id())
            ->select('carts.id as id', 'carts.id_products as id_prodicts', 'products.image as img', 'products.name as name', 'products.new_price as price', 'carts.qte as qte', 'total_price as total')
            ->paginate(10);
        //total pof price with oute ttc
        $productpricetotal = product::join('carts', 'products.id', '=', 'carts.id_products')

            ->where('id_user', Auth::id())
            ->sum('carts.total_price');
        //price with TTC
        $priceTTc = product::join('carts', 'products.id', '=', 'carts.id_products')
            ->where('id_user', Auth::id())
            ->sum(DB::raw('carts.qte * products.priceTTC'));
        return view('livewire.itemcarts', compact('productsincarts', 'priceTTc', 'productpricetotal', 'firstencategorie', 'lastcategories'));
    }
    public function confirmeDelete($id)
    {
        $itemcart = Cart::find($id);
        if ($itemcart != null) {
        $itemcart->delete();
        }
    }
    //function to update panier

    public function modofiyincrement($id, $qte)
    {
        $newqte = $qte + 1;
        if ($newqte > 10) {
            $newqte = 10;
        }
        $productprice = product::join('carts', 'products.id', '=', 'carts.id_products')
            ->where('carts.id', $id)
            ->select('products.new_price as price')
            ->first();
        $totalprix = $productprice->price * $newqte;
        DB::table('carts')
            ->where('carts.id', $id)
            ->update(['qte' => $newqte, 'total_price' => $totalprix]);
    }
    public function modofiyindesinctemntt($id, $qte)
    {
        $newqte = $qte - 1;
        if ($newqte < 1) {
            $newqte = 1;
        }
        $productprice = product::join('carts', 'products.id', '=', 'carts.id_products')
            ->where('carts.id', $id)
            ->select('products.new_price as price')
            ->first();
        $totalprix = $productprice->price * $newqte;
        DB::table('carts')
            ->where('carts.id', $id)
            ->update(['qte' => $newqte, 'total_price' => $totalprix]);
    }
}
