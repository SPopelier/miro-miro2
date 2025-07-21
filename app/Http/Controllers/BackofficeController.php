<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


class BackofficeController extends Controller {
        
    public function dashboard()
    {
        return view('backoffice.dashboard');
    }

    public function products() : View {
        $products = Product::all();
        return view('backoffice.products', compact('products'));
    }

    //for show one productsheet backoffice
    public function productdetailsbackoffice ($id): View
    {  
       $product = Product::findOrFail($id);
       return view('backoffice.product-details-backoffice', compact('product'));
    }

    public function delete($id) {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products')-> with('success', 'produit supprimé avec succès !');
    }

    public function create() {
    return view('backoffice.new-product');
}

    public function store(Request $request) {
        $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
    ]);

    Product::create($request->all());

    return redirect()->route('products')->with('success', 'Produit créé avec succès !');}

}