<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = DB::table('products')->paginate(10);
        return view('admin.content.product.index', compact('products'));
    }

    public function show(Product $product): View
    {
        return view('admin.content.product.show', compact('product'));
    }

    public function create(): View
    {
        $marques = array('Samsung', 'LG', 'Condor');
        $categories = array('Refrigerator', 'Washing Machine', 'Plaque');
        return view('admin.content.product.create', compact('marques', 'categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:100'],
            'desc' => ['required'],
            'color' => ['required'],
            'price' => ['required'],
            'category' => ['required'],
            'marque' => ['required'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('assets/img'), $imageName);

        $product = Product::create([
            'name' => $request->input('name'),
            'desc' => $request->input('desc'),
            'color' => $request->input('color'),
            'price' => $request->input('price'),
            'category' => $request->input('category'),
            'marque' => $request->input('marque'),
            'rate' => rand(0, 5),
            'image' => 'assets/img/'.$imageName,
        ]);

        $product->save();

        return redirect()->route('admin.products.index');

    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
