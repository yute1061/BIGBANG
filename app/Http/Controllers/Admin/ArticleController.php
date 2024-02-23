<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function add()
    {
        return view('admin.article.create');
    }
    
    public function create(Request $request)
    {
        // admin/article/createにリダイレクトする
        return redirect('admin/article/create');
    }
}
