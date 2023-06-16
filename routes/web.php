<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PHPMailerController;
use App\Http\Controllers\ProductController;
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
Route::post('add-to-cart', [CartItemController::class, 'addToCart']);

Route::post("send-email", [PHPMailerController::class, "composeEmail"])->name("send-email");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::middleware(['role:admin'])->prefix('admin_panel')->group( function () {
    Route::get('/', [HomeController::class, 'index'])->name('homeAdmin');
    Route::resource('category', CategoryController::class);
});


require __DIR__.'/auth.php';


