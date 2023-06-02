<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProducerController;
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

Route::get('/', function () {
    return view('index');
});


Route::get('login', function (){
    return view('login');
});

Route::get('register', function (){
    return view('register');
});


//
//Route::get('catalog', function (){
//    return view('catalog');
//});
//Route::get('catalog', [ProducerController::class, 'get'])->name('catalog');


Route::get('catalog', [CatalogController::class, 'get']);
//Route::get('catalog', [ProducerController::class, 'get']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


