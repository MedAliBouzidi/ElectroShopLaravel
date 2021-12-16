<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = DB::table('products')->paginate(15);
        return view('content.shop', compact('products'));

    }

    public function show(Product $product): View
    {
        return view('content.detail', compact('product'));
    }
}
