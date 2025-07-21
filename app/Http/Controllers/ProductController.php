<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Faker\Calculator\Ean;

class ProductController extends Controller
{
    //for show a list of all the products
    public function listOfProducts(): View
    {
        $products = DB::select('SELECT * FROM products');
        //? protège contre les injections SQL
        return view('product-list', ['products' => $products]);
    }

    //for show one productsheet
    public function productSheet ($id): View
    {
       $product = DB::select('SELECT * FROM products WHERE id = ?', [$id]);

            if (empty($product)) {
            abort(404);
        }

        return view('product-details', ['product' => $product[0]]);
    }

    //sort by price
    public function sortByPrice() : View
     {
        $products = DB::table('products')
                   ->orderBy('price')
                   ->get();

                   return view('product-list', ['products' => $products]);
                }

    //sort by name
    public function sortByName() : View
    {
        $products = DB::table('products')
                        ->orderBy('name')
                        ->get();

                        return view('product-list', ['products' => $products]);
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'nom' => 'required|string|max:225',
            'description' => 'required|string',
            'prix' => 'required|numeric|min:0',
        ]);

        $product = Product::findOrfail($id);
        $product->update($validated);

        return redirect()-> route('product-details', $id->with('succes', 'Produit mis à jour !'));
    }
}
