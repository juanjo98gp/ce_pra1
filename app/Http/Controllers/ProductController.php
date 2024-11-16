<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function show($category_id, $id)
    {
        // Obtener el producto
        $product = Product::where('id', $id)->first();
        //TODO: REDIRECT NOT FOUND
        // Pasar los productos a la vista
        return view('product', compact('product'));
    }
}
