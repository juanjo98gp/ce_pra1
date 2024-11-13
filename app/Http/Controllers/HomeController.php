<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        // Obtener todos los productos
        // $products = ProductCategory::all();
        $categories = ProductCategory::where('sequence', '<=', 5)->get();
        // Pasar los productos a la vista
        return view('welcome', compact('categories'));
    }
}
