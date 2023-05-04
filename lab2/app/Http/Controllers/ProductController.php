<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function show($code)
    {
        $product = Product::where('symbol_code', $code)->first();

        if (!$product) {
            abort(404);
        }
        
        return view('products.show', ['product' => $product]);
    }
}
