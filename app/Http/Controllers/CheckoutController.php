<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Sale;
use App\Models\SaleLine;
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
        $cart = $request->session()->get('cart', []);
        $user_type = 'login';
        // Autentificar la sessión
        //$request->authenticate();
        // Rediririgar a la siguiente página para gestionar checkout
        //return redirect()->route('checkout');
        return view('checkout', compact('cart', 'email', 'name', 'address', 'user_type'));
    }

    // Guest
    public function guest(Request $request)
    {
        $email = $request->input('email');
        $address = $request->input('address');
        $cart = $request->session()->get('cart', []);
        $user_type = 'guest';
        $name = '';
        return view('checkout', compact('cart', 'email', 'name', 'address', 'user_type'));
    }
    
    public function show_checkout(Request $request)    
    {
        //print(json_encode($request->session()->get('cart', [])));
        //Log::info(json_encode($request->session()->get('cart', [])));
        $cart = $request->session()->get('cart', []);
        return view('checkout', compact('cart'));
    }

    public function create_sale(Request $request)
    {
        //Crear venta con los datos del carrito
        $sale = Sale::create([
            'email' => $request->input('email'),
            'name' => '-',
            'address' => $request->input('address'),
            'user_type' => $request->input('user_type'),
            'base_cache' => 0,
            'tax_cache' => 0,
            'total_cache' => 0,
        ]);

        if ($request->input('name')) {
            $sale->name=$request->input('name');
        }
        $saleId = $sale->id;
        $base_cache = 0;
     
        // Crear líneas
        $cart = $request->session()->get('cart', []);
        foreach ($cart as $product_id => $item) {
            SaleLine::create([
                'sale' => $saleId,
                'product' => $product_id,
                'product_name' => $item['name'],
                'quantity' => $item['quantity'],
                'unit_price' => $item['price'],
                'product_image' => $item['thumbnail_image']
            ]);
            $base_cache += ($item['price'] * $item['quantity']);
        }

        // Guardar totales (una vez finalizada, una venda no ha de cambiar)
        $tax_cache = ($base_cache*0.21); // Por ahora el impuesto siempre es 21%
        $shipment = 4.99;
        $total_cache = ($base_cache + $tax_cache + $shipment);

        $sale->base_cache = $base_cache;
        $sale->tax_cache = $tax_cache;
        $sale->total_cache = $total_cache;
        $sale->save();

        // Vaciar carrito
        $request->session()->forget('cart');
        return redirect()->route('welcome');
    }
}
