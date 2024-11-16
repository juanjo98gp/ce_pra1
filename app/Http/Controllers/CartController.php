<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{

    // Mostrar la página del carrito
    public function show(Request $request)    
    {
        $cart = $request->session()->get('cart', []);
        return view('cart', compact('cart'));
    }


    // Agregar un product al carrito
    public function add(Request $request) 
    {
        $product = $request->input('product');
        $quantity = $request->input('quantity', 1);

        // Obtener carrito
        $cart = $request->session()->get('cart', []);

        // Gestionar productos ya existentes en el carro.
        if (isset($cart[$product])) {
            // Si el producte YA existe en el carrito hay que incrementar la cantidad en vez de crear una nueva línea
            $cart[$product] += $quantity;
        } else {
            // Si el product NO existe en el carrito, hay que crear una línea nueva
            $cart[$product] = $quantity;
        }

        // Actualizar carrito en la sessión
        $request->session()->put('cart', $cart);

        return redirect()->route('cart')->with('success', 'Producto añadido correctamente');
    }

    // Eliminiar un producto del carrito
    public function remove(Request $request)
    {
        $product = $request->input('product');
        $cart = $request->session()->get('cart', []);

        if (isset($cart[$product])) {
            // Eliminar producto de carrito
            unset($cart[$product]); 
            

        }
    }
}
