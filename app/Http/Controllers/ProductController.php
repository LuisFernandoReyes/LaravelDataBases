<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Product;

class ProductController extends Controller
{
    public function index():View
    {
        $products = Product::all();
        return view('product.index', compact('products'));

    }
}
