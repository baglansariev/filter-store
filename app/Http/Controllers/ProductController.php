<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function single($id)
    {
        $product = Product::findOrFail($id);
        $product->views++;
        $product->save();

        return view('product.single', compact('product'));
    }
}
