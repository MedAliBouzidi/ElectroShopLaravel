<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Command;
use App\Models\Product;
use App\Models\User;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $products_count = Product::all()->count();
        $users_count = User::all()->count();
        $commands_count = Command::all()->count();
        return view('admin.content.dashboard', compact('users_count', 'products_count', 'commands_count'));
    }
}
