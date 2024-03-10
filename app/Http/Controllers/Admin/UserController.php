<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//この2行がないとDB情報とユーザー情報が使えない
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

// 以下を追記することでModelが扱えるようになる
use App\Models\User;

class UserController extends Controller
{
    public function edit(Request $request)
    {
        // User Modelからログイン中のデータを取得する
        $id = Auth::id();
        $posts = User::find($id);
        dd($posts);

        return view('admin.user.edit', ['user_form' => $user]);
    }

    public function update(Request $request)
    {
        return redirect('admin/user/edit');
    }
    //編集された内容を更新する
}
