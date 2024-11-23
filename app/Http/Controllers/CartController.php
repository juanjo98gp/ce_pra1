<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{

    // Mostrar la página del carrito
    public function show(Request $request)    
    {
        //print(json_encode($request->session()->get('cart', [])));
        //Log::info(json_encode($request->session()->get('cart', [])));
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
        Log::info($cart);

        // Gestionar productos ya existentes en el carro.
        if (isset($cart[$product])) {
            // Si el producte YA existe en el carrito hay que incrementar la cantidad en vez de crear una nueva línea
            $cart[$product]['quantity'] += $quantity;
        } else {
            // Utilizando la id del producto, buscamos el registro en la base de datos
            $product_obj = Product::where('id', $product)->first();
            // Si el product NO existe en el carrito, hay que crear una línea nueva, en esta línia ponemos la información base
            $cart[$product]['name'] = $product_obj->name; // Nombre producto (nombre que mostraremos)
            $cart[$product]['price'] = $product_obj->price; // Precio unitario (para poder calcular el total por línea / venta)
            $cart[$product]['category'] = $product_obj->category; // ID Categoria (necesario para preparar la URL del producto)
            $cart[$product]['thumbnail_image'] = $product_obj->thumbnail_image; // Ruta imagen miniatura (necesario para mostrar el producto)
            $cart[$product]['quantity'] = $quantity; // Cantidad (nos indica cuantas unidades hemos comprado de ese producto)
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
            $request->session()->put('cart', $cart);
        }
        return redirect()->route('cart')->with('success', 'Producto eliminado del carrito.');
    }

    // Limpiar el carrito
    public function clear(Request $request)
    {
        Log::info("CLEAN CART!!");
        // Limpiar el carrito
        $request->session()->forget('cart');
        return redirect()->route('cart')->with('success', 'Carrito vacío.');

    }
}
