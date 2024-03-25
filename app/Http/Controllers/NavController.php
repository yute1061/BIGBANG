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
        return view('toppage.index');
    }
    
    public function article_list(Request $request)
    {   
        return view('article_list.index');
    }
    
    public function article(Request $request)
    {   
        return view('article.index');
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
