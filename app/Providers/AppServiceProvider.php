<?php

namespace App\Providers;


use App\Http\Controllers\CartController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\MenuCategoryController;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        $cart = new MenuCategoryController();
//        $menuCart = $cart->getCartItems();
//
////        // Передаем menuCart во все шаблоны
//        view()->share('menuCart', $menuCart);
        $cartsController = new CartItemController();
        $carts = $cartsController->getCartItems();

        view()->share('carts', $carts);

        $cartItemsContr = new CartController();
        $cartItems = $cartItemsContr->getCartQuantity();

        view()->share('cartItems', $cartItems);


    }


}
