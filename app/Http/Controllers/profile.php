<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class profile extends Controller
{
    public function updateinfof()
    {
        DB::table('users')
        ->where('id', Auth::id())
    ->update(['name'=>'mohamed'/*,'password'=>hash::make('test')*/]);
       
    }
    public  function updateinfo(Request $request)
    {
        $name=$request->name;
        $email=$request->email;
       // $pass=$request->pass;
        
        DB::table('users')
        ->where('id', Auth::id())
    ->update(['name'=>$name,'email'=>$email/*,'password'=>hash::make($pass)*/]);
        return response()->json(['status' => "updated", 'icon' => "warning", 'title' => "warning...", "products_cards" => 'ff', "total_price" => 'ff']);
    }
   public function updatepassword(Request $request)
   {
    $pass=$request->pass;
    $passA=$request->passA;
   
    if($pass == $passA)
    {
    DB::table('users')
    ->where('id', Auth::id())
    ->update(['password'=>hash::make($pass)]);
    return response()->json(['status' => "updated", 'icon' => "warning", 'title' => "warning...", "products_cards" => 'ff', "total_price" => 'ff']);
    }else{
        return response()->json(['status' => "updated", 'icon' => "warning", 'title' => "warning...", "products_cards" => 'ff', "total_price" => 'ff']);  
    }
   }
    
}
