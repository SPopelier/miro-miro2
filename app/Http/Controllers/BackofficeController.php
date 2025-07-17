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
}