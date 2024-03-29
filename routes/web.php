<?php

use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomePageController::class, 'index']);

Route::get('catalog', [CatalogController::class, 'index']);
Route::get('catalog/{id}', [CatalogController::class, 'get']);
Route::get('products/{id}', [ProductController::class, 'get']);

Route::get('carts', [CartItemController::class, 'index']);
Route::post('/update/cart-item', [CartController::class, 'updateCartItem']);
Route::post('/catalog/carts-add', [CartController::class, 'addCarts']);
Route::post('/delete/product', [CartController::class, 'delete']);
Route::post('/delete/product/all', [CartController::class, 'deleteAll']);

Route::post('/order', [OrderController::class, 'order']);

Route::get('/search', [SearchController::class, 'index']);






    // админка

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('contact', function (){
    return view('contact');
});
Route::middleware(['role:admin'])->prefix('admin_panel')->group( function () {
    Route::get('/', [HomeController::class, 'index'])->name('homeAdmin');
    Route::resource('category', CategoryController::class);
    Route::resource('product', AdminProductController::class);
});

require __DIR__.'/auth.php';


