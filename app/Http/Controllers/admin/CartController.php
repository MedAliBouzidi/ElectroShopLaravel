<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Command;
use App\Models\Product;
use App\Models\User;
use Illuminate\View\View;

class CartController extends Controller
{
    public function index(): View
    {
        $commands = Command::paginate(10);
        return view('admin.content.command.index', compact('commands'));
    }

    public function show(Command $command): View
    {
        $product = Product::where('id', $command->product_id)->first();
        $user = User::where('id', $command->user_id)->first();
        return view('admin.content.command.show', compact('command', 'product', 'user'));
    }

    public function destroy(Command $command)
    {
        $command->delete();
        return redirect()->route('admin.commands.index');
    }
}
