<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = DB::table('users')->where('isAdmin', 0)->paginate(10);
        return view('admin.content.user.index', compact('users'));
    }

    public function show(User $user): View
    {
        return view('admin.content.user.show', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
