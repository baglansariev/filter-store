<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class SidebarController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();

        $data = [
            'products' => $products,
            'categories' => $categories,
        ];

        return view('admin.sidebar', $data);
    }
}
