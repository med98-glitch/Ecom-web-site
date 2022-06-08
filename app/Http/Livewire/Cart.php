<?php

namespace App\Http\Livewire;

//use App\Models\Cart;
use App\Models\category;
use App\Models\reduction;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class Cart extends Component
{    
    public $productsincarts;
    public $carttest;
    public $categories;
    public $number=100;
    public function render()
    {
         $this->categorie=Category::all();
         //$this->carttest=Cart::all();
         $this->productsincarts=product::join('carts','products.id','=','carts.id_products')
         ->where('id_user',Auth::id())
         ->select('carts.id as id','products.image as image','products.name as name','products.price as price','carts.qte as qte','total_price as total')
         ->get();
        return view('livewire.cart');
    }
    public function confirmeDelete($id)
    {
       //$itemcart= Cart::find($id);
     
        //$itemcart->delete();
    }
    
}
