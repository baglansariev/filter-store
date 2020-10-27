<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Mail\Quiz;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'categories' => Category::all(),
            'products' => Product::all(),
            'top_sales' => Product::limit(6)->orderBy('views', 'desc')->get(),
        ];

        return view('pages.home', $data);
    }
}
