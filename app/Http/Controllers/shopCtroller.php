<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shopCtroller extends Controller
{
    public function shop(){
        return view('shop');
    }
}
