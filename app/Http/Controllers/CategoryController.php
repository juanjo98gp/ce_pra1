<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function show($id)
    {
        // Obtener todos los productos
        // $products = ProductCategory::all();
        $category = ProductCategory::where('id', $id)->first();
        // TODO: REDIRECT NOT FOUND
        $products = Product::where('category', '=', $id)->get();
        //$category = ProductCategory::where('id', '=', $id)->get();
        // Pasar los productos a la vista
        return view('category', compact('category', 'products'));
    }
}
