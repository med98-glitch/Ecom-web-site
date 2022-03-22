<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class homCtroller extends Controller
{
    public function index(){
        //get all categorie form database
        $categorie=Category::all();
        return view('index',compact('categorie'));
    }
}
