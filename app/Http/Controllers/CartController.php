<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
      public function show($id)
    {
        $cart = Cart::with('products')->findOrFail($id);
        return view('cart.show', compact('cart'));
    }
}
