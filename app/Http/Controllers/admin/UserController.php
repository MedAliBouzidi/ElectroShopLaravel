<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        return view("admin.content.user.index");
    }

    public function show(User $user): View
    {
        return view("admin.content.user.show", compact('user'));
    }
}
