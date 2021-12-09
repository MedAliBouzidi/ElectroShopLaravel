<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::all();
//        $products = array(1, 2, 3, 4);
        return view('content.shop', compact('products'));

    }

    public function show(Product $product): View
    {
        return view('content.detail', compact('product'));
    }
}
