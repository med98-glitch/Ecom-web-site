<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class shopCtroller extends Controller
{
    public function shop(){
        
        //get all categorie form database
        $categorie=Category::all();
        return view('shop',compact('categorie'));
    }
}
