<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;

//Homepage
Route::get('/', function () { $products = Product::all(); return view('homepage', ['products' => $products]); })->name('homepage');

//Products
Route::get('/product-list', [ProductController::class, 'listOfProducts'])->name('product-list');

//Product Sheet
Route::get('/product/{id}', [ProductController::class, 'productSheet'])->name('product-details');

//Cart
Route::get('/cart', fn () => view('cart')) ->name('cart');

//Personnalize
Route::get('/personalize', fn () => view('personalize')) ->name('personalize');

//Contact
Route::get('/contact', fn () => view('contact')) ->name('contact');

//SortByPrice
Route::get('/products/sort/price', [ProductController::class, 'sortByPrice']);

//SortByName
Route::get('/product/sort/name', [ProductController::class, 'sortByName']);



