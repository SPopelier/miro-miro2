<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Product;


class ProductController extends Controller
{
    //for show a list of all the products
    public function index(): View
    {
        $products = DB::select('SELECT * FROM products');
        //? protège contre les injections SQL
        return view('product-list', ['products' => $products]);
    }

    //for show one productsheet
    public function show($id): View
    {
       $product = DB::select('SELECT * FROM products WHERE id = ?', [$id]);

            if (empty($product)) {
            abort(404);
        }

        return view('product-details', ['product' => $product[0]]);
    }
}
