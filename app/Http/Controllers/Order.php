<?php


namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class Order extends Controller
{
    public function addorder(Request $request){
        $request->validate([
         'firstName'=>'required',
         'lastName'=>'required',
         'adresse'=>'required',
         'email'=>'required',
         'phone'=>'required',
        ]);
       $query = DB::table('orders')->insert([
        'id_user'=>Auth::id(),
        'prenom'=>$request->input('firstName'),
        'nom'=>$request->input('lastName'),
        'ville'=>$request->input('cuntry'),
        'adresse'=>$request->adresse,
        'email'=>$request->input('email'),
        'phone'=>$request->input('phone'),
        'total'=>$request->input('total'),
     
       ]);  

      
     
       
    }
}
