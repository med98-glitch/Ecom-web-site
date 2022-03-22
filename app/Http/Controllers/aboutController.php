<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function about(){
        //get all categorie form database
        $categorie=Category::all();
        return view('about',compact('categorie'));
    }
}
