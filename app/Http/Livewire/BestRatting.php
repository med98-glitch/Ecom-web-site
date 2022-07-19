<?php

namespace App\Http\Livewire;
use App\Models\category;
use App\Models\product;
use App\Models\image;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use Livewire\Component;

class BestRatting extends Component
{
    public $term ;

    public function sendid($id){
        $this->term=$id;
    }

    public function render()
    {
        $categorie=Category::all();
        $test=$this->term;
        if(isset ($test)){
            $topRatedProduct=product::limit(4)
            ->where('products.id_category',$test)
            //->join('images','products.id','=','images.id_product')
            ->select('products.name as name','products.id as id','products.ratting as ratting','products.price as price','products.new_price as reductions','products.image as img','products.qte as qte')
            ->get();
        }else
        {
            $topRatedProduct=product::limit(4)
            ->select('products.name as name','products.id as id','products.ratting as ratting','products.price as price','products.new_price as reductions','products.image as img','products.qte as qte')
            ->get();
        }
       
        return view('livewire.best-ratting',compact(['categorie','topRatedProduct','test']));
    }
}
