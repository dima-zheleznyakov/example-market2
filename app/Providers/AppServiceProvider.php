<?php

namespace App\Providers;


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
        $catalogController = new MenuCategoryController();
        $menuCatalog = $catalogController->getMenuCatalog();

//        $cartItems = $catalogController->getCartItems();

        // Передаем $menuCatalog во все шаблоны
        view()->share('menuCatalog', $menuCatalog);
//        view()->share('cartItems', $cartItems);

    }


}
