<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        return view("admin.content.product.index");
    }

    public function show(Product $product): View
    {
        return view("admin.content.product.show", compact('product'));
    }

}
