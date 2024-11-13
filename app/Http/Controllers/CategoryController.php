<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function show($id)
    {
        // Obtener todos los productos
        // $products = ProductCategory::all();
        $categories = ProductCategory::where('sequence', '<=', 5)->get();
        // Pasar los productos a la vista
        return view('category', compact('categories'));
    }
}
