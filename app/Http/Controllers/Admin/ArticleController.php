<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// 以下を追記することでModelが扱えるようになる
use App\Models\Article;

class ArticleController extends Controller
{
    public function add()
    {
        return view('admin.article.create');
    }
    
    public function create(Request $request)
    {
        // Validationを行う
        $this->validate($request, Article::$rules);

        $article = new Article;
        $form = $request->all();
        
        // フォームから画像が送信されてきたら、保存して、$article->image_path に画像のパスを保存する
        if (isset($form['image1'])) {
            $path = $request->file('image1')->store('public/image');
            $article->image_path1 = basename($path);
        } else {
            $article->image_path1 = null;
        }
        
        if (isset($form['image2'])) {
            $path = $request->file('image2')->store('public/image');
            $article->image_path2 = basename($path);
        } else {
            $article->image_path2 = null;
        }
        
        if (isset($form['image3'])) {
            $path = $request->file('image3')->store('public/image');
            $article->image_path3 = basename($path);
        } else {
            $article->image_path3 = null;
        }
        
        if (isset($form['image4'])) {
            $path = $request->file('image4')->store('public/image');
            $article->image_path4 = basename($path);
        } else {
            $article->image_path4 = null;
        }
        
        if (isset($form['image5'])) {
            $path = $request->file('image5')->store('public/image');
            $article->image_path5 = basename($path);
        } else {
            $article->image_path5 = null;
        }
        
        if (isset($form['image6'])) {
            $path = $request->file('image6')->store('public/image');
            $article->image_path6 = basename($path);
        } else {
            $article->image_path6 = null;
        }
        if (isset($form['image7'])) {
            $path = $request->file('image7')->store('public/image');
            $article->image_path7 = basename($path);
        } else {
            $article->image_path7 = null;
        }
        
        if (isset($form['image8'])) {
            $path = $request->file('image8')->store('public/image');
            $article->image_path8 = basename($path);
        } else {
            $article->image_path8 = null;
        }
        
        if (isset($form['image9'])) {
            $path = $request->file('image9')->store('public/image');
            $article->image_path9 = basename($path);
        } else {
            $article->image_path9 = null;
        }
        
        if (isset($form['image10'])) {
            $path = $request->file('image10')->store('public/image');
            $article->image_path10 = basename($path);
        } else {
            $article->image_path10 = null;
        }
        
         // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        // フォームから送信されてきたimageを削除する
        unset($form['image1']);
        unset($form['image2']);
        unset($form['image3']);
        unset($form['image4']);
        unset($form['image5']);
        unset($form['image6']);
        unset($form['image7']);
        unset($form['image8']);
        unset($form['image9']);
        unset($form['image10']);
        
        // データベースに保存する    
        $article->fill($form);
        $article->save();
        
        // admin/article/createにリダイレクトする
        return redirect('admin/article/create');
    }
}
