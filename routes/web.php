<?php

use Illuminate\Support\Facades\Route;

//Accueil
Route::get('/', fn() => view('homepage'))->name('homepage');

//Produits
Route::get('/product-list', fn() => view('product-list')) ->name('product-list');

//Fiche produit
Route::get('/product/{id}', fn()=> view ('product-details')) ->name('product-details');

//Panier
Route::get('/cart', fn() => view('cart')) ->name('cart');

//Personnaliser
Route::get('/personalize', fn() => view ('personalize')) ->name('personalize');

//Contact
Route::get('/contact', fn() => view ('contact')) ->name('contact');