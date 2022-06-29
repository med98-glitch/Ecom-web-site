<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\category;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
   
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void                   
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(){
        $categorie=Category::all();

        $id_user=Auth::id();
        $products_cards=Cart::where('id_user',$id_user)->get()->count();

         $total_price=Cart::where('id_user',$id_user)
        ->get()->sum('total_price');
          //get categories on side bar 10
      $firstencategorie=Category::take(10)->get();

      //get last categorie for the side abar
      $lastcategories=Category::get()->skip(10);
        return view('auth.login',compact('categorie','products_cards','total_price','firstencategorie','lastcategories'));
    }
}
