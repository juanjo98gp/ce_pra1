<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{

    // Mostrar la página del carrito
    public function show(Request $request)    
    {
        //print(json_encode($request->session()->get('cart', [])));
        //Log::info(json_encode($request->session()->get('cart', [])));
        $cart = $request->session()->get('cart', []);
        return view('checkout-tunnel', compact('cart'));
    }

    // Login
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $name = $request->input('name');
        $address = $request->input('address');

                

    }

    // Guest
    public function guest(Request $request)
    {
        $email = $request->input('email');
        $address = $request->input('address');


    }


    

    
}
