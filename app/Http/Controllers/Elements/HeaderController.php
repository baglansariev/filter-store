<?php

namespace App\Http\Controllers\Elements;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index()
    {
        return view('pages.elements.header');
    }
}
