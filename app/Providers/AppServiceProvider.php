<?php

namespace App\Providers;

use App\Models\ProductCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->menu_data();
    }

    private function menu_data()
    {
        View::composer('*', function ($view) {
            // Obtener las primeras 5 categorías
            $categories = ProductCategory::where('sequence', '<=', 5)->get();

            // Obtener la cantidad de líneas del carrito desde la sesión
            $cart_count = session()->get('cart', []);
            Log::info("CART");
            Log::info(json_encode($cart_count));

            // Pasar los datos a las vistas
            $view->with([
                'categories' => $categories,
                'cart_count' => count($cart_count, 0),
            ]);
        });
    }
}
