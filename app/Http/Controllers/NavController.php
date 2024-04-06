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
        $article = Article::all()->sortByDesc('id');
        
        return view('toppage.toppage', ['article' => $article]);
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

        return view('article.page', ['article' => $article, 'user' => $user]);
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
