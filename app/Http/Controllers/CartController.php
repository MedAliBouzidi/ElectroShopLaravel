<?php

namespace App\Http\Controllers;

use App\Models\Command;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CartController extends Controller
{
    public function index(): View
    {
        $commands = DB::table('commands')->where('user_id', auth()->user()->id)->paginate(10);
        return view('content.cart', compact('commands'));
    }

    public function store(Request $request, Product $product)
    {
        $command = Command::create([
            'qte' => $request->qte,
            'total_price' => $request->qte * $product->price,
            'address' => auth()->user()->address,
            'user_id' => auth()->user()->id,
            'product_id' => $product->id,
        ]);

        $command->save();

        return redirect()->back();

    }

    public function destroy(Command $command)
    {
        $command->delete();
        return redirect()->route('cart');
    }
}
