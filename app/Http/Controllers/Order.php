<?php


namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Models\Cart;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Models\product;

class Order extends Controller
{
    public function addorder(Request $request)
    {
        $request->validate([
            'firstName' => 'required|min:3',
            'lastName' => 'required|min:3',
            'adresse' => 'required|min:20|max:255',
            'email' => 'required|email',
            'phone' => 'required|digits:10|numeric',
        ]);
        $query = DB::table('orders')->insert([
            'id_user' => Auth::id(),
            'prenom' => $request->input('firstName'),
            'nom' => $request->input('lastName'),
            'ville' => $request->input('cuntry'),
            'adresse' => $request->adresse,
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'total' => $request->input('total'),
            'created_at' => new \dateTime,
        ]);
        //details product of email
        $order = Cart::join('products', 'products.id', '=', 'carts.id_products')
            ->where('id_user', Auth::id())
            ->select('products.name as name', 'carts.qte as qte', 'products.priceTTC as pricebyone', 'carts.total_price as total')
            ->get();
        //total price of products
        $priceTTc_total = product::join('carts', 'products.id', '=', 'carts.id_products')
            ->where('id_user', Auth::id())
            ->sum(DB::raw('carts.qte * products.priceTTC'));
        Mail::to($request->input('email'))->send(new OrderMail($request->input('firstName'),$request->input('lastName'),$order,$request->input('phone'),$request->adresse,$priceTTc_total));
        //Mail::to('chaima.dbibih@gmail.com')->send(new OrderMail($request->input('firstName'),$request->input('lastName'),$order,$request->input('phone'),$request->adresse,$priceTTc_total));

        if($query){
          return back()->with('success','Your order have been successfuly');
        }else{
           return back()->with('fail','something went wrong');
        }
    }
  
}
