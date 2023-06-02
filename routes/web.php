<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProducerController;
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



Route::get('login', function (){
    return view('login');
});

Route::get('register', function (){
    return view('register');
});


Route::get('catalog', [CatalogController::class, 'index']);
Route::get('catalog/{id}', [CatalogController::class, 'get']);

Route::get('products/{id}', [ProductController::class, 'get']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


