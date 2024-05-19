<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Article;

use Carbon\Carbon;

class NavController extends Controller
{
    //
    public function toppage(Request $request)
    {   
        $posts = Article::all()->sortByDesc('id');
        $delete = Article::all()->sortBy('status')->first(); //トップページを開くたびにstatusが1じゃない＝保存だけされて表示されていないデータを削除する
        
        if (!empty($delete)) {
            if ($delete->status != 1) {
                $delete->delete();
            }
        }
        
        return view('toppage.toppage', ['posts' => $posts]);
    }
    
    public function article_list(Request $request)
    {   
        return view('article_list.index');
    }
    
    public function article_page(Request $request)
    {         
        $user_id = Auth::id();
        if (empty($user_id)) {
            $user = null; //ログアウト時はnullを渡す
        } else {
            $user = User::find($user_id);
        }
        $id = $request->id;
        $article = Article::find($id);
        $posts = Article::all()->sortByDesc('id');

        return view('article.page', ['article' => $article, 'user' => $user, 'posts' => $posts]);
    }
    
    public function about()
    {   
        return view('about.index');
    }
    
    public function contact()
    {   
        return view('contact.index');
    }
}
