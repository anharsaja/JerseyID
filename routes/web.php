<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();

// Route::get('/', function () {
//     return view('index');
// });


//(livewire v2.x)
Route::get('/', \App\Http\Livewire\home::class)->name('home');

// Route::get('/products', \App\Http\Livewire\productindex::class);

Route::get('/products', \App\Http\Livewire\ProductIndex::class)->name('products');

Route::get('/products/liga{ligaId}', \App\Http\Livewire\ProductLiga::class)->name('products.liga');
Route::get('/products/{id}', \App\Http\Livewire\ProductDetail::class)->name('products.detail');
