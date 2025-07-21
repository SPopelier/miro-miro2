<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\CompteController;

//Homepage
Route::get('/', function () { $products = Product::all(); return view('homepage', ['products' => $products]); })->name('homepage');

//Mon Compte 
Route::get('/mon-compte', [CompteController::class, 'mon-compte']) ->name('mon-compte');

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

//Dashboard
Route::get('/dashboard', [BackofficeController::class, 'dashboard'])->name('dashboard');

//Backoffice-Products
Route::get('/backoffice/products', [BackofficeController::class, 'products'])->name('products');

//Backoffice-Products Sheet
Route::get('backoffice/product/{id}', [BackofficeController::class, 'productdetailsbackoffice'])->name('product-details-backoffice');

//Backoffice Edit
Route::get('/product/{id}/edit', [BackofficeController::class, 'editProduct'])->name('product-edit-backoffice');

