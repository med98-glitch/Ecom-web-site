<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reduction;
use App\Models\product;
use App\Models\image;
use App\Models\category;
use Illuminate\Support\Facades\DB;

class Logincontroller extends Controller
{
   public function login(){
    $categorie=Category::all();
       return view('auth.login',compact('categorie'));
   }
   public function register(){
      $categorie=Category::all();
       return view('register',compact('categorie'));
   }
}