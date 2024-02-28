<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// 以下を追記することでModelが扱えるようになる
use App\Models\User;

class UserController extends Controller
{
    public function add()
    {
        return view('admin.user.create');
    }

    public function create(Request $request)
    {   
        return redirect('admin/user/create');
    }

    public function edit()
    {
        return view('admin.user.edit');
    }

    public function update(Request $request)
    {
        return redirect('admin/user/edit');
    }
}
