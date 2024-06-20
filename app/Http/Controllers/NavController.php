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
        //トップページを開くたびにstatusが1じゃない＝DBに保存だけされて表示されていないデータを削除する
        $delete = Article::all()->sortBy('status')->first();
        if (!empty($delete)) {
            if ($delete->status != 1) {
                $delete->delete();
            }
        }
        
    //----ここからページング処理----
        //$count_sqlはデータの件数取得に使うための変数。
        $article_total = Article::count();
        //ページ数を取得する。GETでページが渡ってこなかった時(最初のページ)のときは$pageに１を格納する。
        if(isset($_GET['page']) && is_numeric($_GET['page'])) {
          $page = $_GET['page'];
        } else {
          $page = 1;
        }
        //最大ページ数を取得する。
        //10件ずつ表示させているので、$countに入っている件数を10で割って小数点は切りあげると最大ページ数になる。
        $max_page = ceil($article_total / 10);
        
        if($page == 1 || $page == $max_page) {
            $range = 4;
        } elseif ($page == 2 || $page == $max_page - 1) {
            $range = 3;
        } else {
            $range = 2;
        }
        
        $from_record = ($page - 1) * 10 + 1;
        if($page == $max_page && $article_total % 10 !== 0) {
            $to_record = ($page - 1) * 10 + $article_total % 10;
        } else {
            $to_record = $page * 10;
        }
    //----ここまで----
        
        return view('toppage.toppage', ['posts' => $posts, 'article_total' => $article_total, 'page' => $page, 'max_page' => $max_page, 
        'range' => $range, 'from_record' => $from_record, 'to_record' => $to_record]);
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
        $posts = Article::all()->sortByDesc('id');
        return view('about.about', ['posts' => $posts]);
    }
    
    public function contact()
    {   
        return view('contact.index');
    }
}
