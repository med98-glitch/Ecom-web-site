<?php

namespace App\Http\Livewire;

use App\Models\category;
use App\Models\reduction;
use App\Models\product;
use App\Models\image;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class TodaysDeals extends Component
{
    // public $idcategories;
    public $term;

    public function sendid($id)
    {
        $this->term = $id;
    }

    public function render()

    {

        $categorie = $categorie = Category::all();
        $getfirestcategories = Category::select('id as id')
            ->first();

        $term = $this->term;
        if (isset($term)) {
            $GetAll = product::limit(2)
                ->where('products.id_category', $term)
                //->join('images','products.id','=','images.id_product')
                ->select('products.name as name', 'products.id as id', 'products.ratting as ratting', 'products.price as price', 'products.new_price as reductions', 'products.image as img','products.qte as qte')
                ->get();
        } else {
            $GetAll = product::orderBy('created_at', 'desc')->limit(2)
                ->select('products.name as name', 'products.id as id', 'products.ratting as ratting', 'products.price as price', 'products.new_price as reductions', 'products.image as img', 'products.qte as qte')
                ->get();
        }
        $all_product_reduction = product::select('products.name as name', 'products.id as id', 'products.image as img', 'products.ratting as ratting', 'products.price as price', 'products.new_price as reductions')
        ->orderBy('ratting', 'desc')
        ->get();
        return view('livewire.todays-deals', compact(['categorie', 'GetAll', 'all_product_reduction']));
    }
}
