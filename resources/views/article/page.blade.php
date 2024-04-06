@extends('layouts.admin')

@section('title', $article->title)

@section('content')
    <div class="wrap">
        <div class="review_pankuzu">
            <a>{{ $article->tag }}</a>
            <a> > </a>
            <a>{{ $article->title }}</a>
        </div>
        
        <table class="review_preview_tbl" cellspacing="1">
            @csrf
            <tr>
                <td class="head2011b">
            	    <div class="caption">
                	    @if ($article->thumbnail_path)
                	        <img src="{{ secure_asset('storage/image/' . $article->thumbnail_path) }}" class="img-review">
            	        @endif
            	</td>
            </tr>
            <tr>
            <td class="head2011a">
                	<label class="col-md-3">タグ</label>
                </td>
                <td class="head2011b">
            	    <p>{{ $article->tag }}</p>
                </td>
            </tr>
            <tr>
                <td class="head2011a">
                	<label class="col-md-3">タイトル</label>
                </td>
                <td class="head2011b">
            	    <p>{{ $article->title }}</p>
                </td>
            </tr>
            <tr>
                <td class="head2011a">
                	<label class="col-md-3">本文</label>
                </td>
                <td class="head2011b">
            	    <div class="caption">
            	        @if ($article->body1)
            	            <label class="col-md-3">本文①</label>
                	        <p>{{ $article->body1 }}</p>
            	        @endif
                	    @if ($article->image_path1)
                	        <label class="col-md-3">画像①</label>
                	        <img src="{{ secure_asset('storage/image/' . $article->image_path1) }}" class="img-review">
            	        @endif
            	        @if ($article->body2)
            	            <label class="col-md-3">本文②</label>
                	        <p>{{ $article->body2 }}</p>
            	        @endif
            	        @if ($article->image_path2)
            	            <label class="col-md-3">画像②/<label>
                	        <img src="{{ secure_asset('storage/image/' . $article->image_path2) }}" class="img-review">
            	        @endif
            	        @if ($article->body3)
            	            <label class="col-md-3">本文③</label>
                	        <p>{{ $article->body3 }}</p>
            	        @endif
            	        @if ($article->image_path3)
            	            <label class="col-md-3">画像③</label>
                	        <img src="{{ secure_asset('storage/image/' . $article->image_path3) }}" class="img-review">
            	        @endif
            	        @if ($article->body4)
            	            <label class="col-md-3">本文④</label>
                	        <p>{{ $article->body4 }}</p>
            	        @endif
            	        @if ($article->image_path4)
            	            <label class="col-md-3">画像④</label>
                	        <img src="{{ secure_asset('storage/image/' . $article->image_path4) }}" class="img-review">
            	        @endif
            	        @if ($article->body5)
            	            <label class="col-md-3">本文⑤</label>
                	        <p>{{ $article->body5 }}</p>
            	        @endif
            	        @if ($article->image_path5)
            	            <label class="col-md-3">画像⑤</label>
                	        <img src="{{ secure_asset('storage/image/' . $article->image_path5) }}" class="img-review">
            	        @endif
            	        @if ($article->body6)
            	            <label class="col-md-3">本文⑥</label>
                	        <p>{{ $article->body6 }}</p>
            	        @endif
            	        @if ($article->image_path6)
            	            <label class="col-md-3">画像⑥</label>
                	        <img src="{{ secure_asset('storage/image/' . $article->image_path6) }}" class="img-review">
            	        @endif
            	        @if ($article->body7)
            	            <label class="col-md-3">本文⑦</label>
                	        <p>{{ $article->body7 }}</p>
            	        @endif
            	        @if ($article->image_path7)
            	            <label class="col-md-3">画像⑦</label>
                	        <img src="{{ secure_asset('storage/image/' . $article->image_path7) }}" class="img-review">
            	        @endif
            	        @if ($article->body8)
            	            <label class="col-md-3">本文⑧</label>
                	        <p>{{ $article->body8 }}</p>
            	        @endif
            	        @if ($article->image_path8)
            	            <label class="col-md-3">画像⑧</label>
                	        <img src="{{ secure_asset('storage/image/' . $article->image_path8) }}" class="img-review">
            	        @endif
            	        @if ($article->body9)
            	            <label class="col-md-3">本文⑨</label>
                	        <p>{{ $article->body9 }}</p>
            	        @endif
            	        @if ($article->image_path9)
            	            <label class="col-md-3">画像⑨</label>
                	        <img src="{{ secure_asset('storage/image/' . $article->image_path9) }}" class="img-review">
            	        @endif
            	        @if ($article->body10)
            	            <label class="col-md-3">本文⑩</label>
                	        <p>{{ $article->body10 }}</p>
            	        @endif
            	        @if ($article->image_path10)
            	            <label class="col-md-3">画像⑩</label>
                	        <img src="{{ secure_asset('storage/image/' . $article->image_path10) }}" class="img-review">
            	        @endif
        	        </div>
                </td>
            </tr>
        </table>
    </div>

{{--
    <div class="wrap">
        <div class="review_pankuzu">
            <a>{{ $posts->category }}</a>
            <a> > </a>
            <a>{{ $posts->item }}</a>
            <a> > </a>
            <a>{{ $posts->maker }} &ensp; {{ $posts->product }}</a>
        </div>
        
        <table class="review_index_tbl" cellspacing="1">
            <tr>
                <td class="head2011a">
                	<label class="col-md-3">カテゴリー</label>
                </td>
                <td class="head2011b">
            	    <p>{{ $posts->category }}</p>
                </td>
            </tr>
            <tr>
                <td class="head2011a">
                	<label class="col-md-3">アイテム</label>
                </td>
                <td class="head2011b">
            	    <p>{{ $posts->item }}</p>
                </td>
            </tr>
            <tr>
                <td class="head2011a">
                	<label class="col-md-3">メーカー</label>
                </td>
                <td class="head2011b">
            	    <p>{{ $posts->maker }}</p>
                </td>
            </tr>
            <tr>
                <td class="head2011a">
                	<label class="col-md-3">製品名</label>
                </td>
                <td class="head2011b">
            	    <p>{{ $posts->product }}</p>
                </td>
            </tr>
            <tr>
                <td class="head2011a">
                    <label class="col-md-3">投稿者プロフィール</label>
                </td>
                <td class="head2011b">
                    <a>{{ $posts->gender }}</a>&nbsp;
                    <a>{{ $posts->age }}歳</a>&nbsp;
                    <a>自転車歴：{{ $posts->career }}年</a>&nbsp;
                    <a>ライドスタイル：{{ $posts->ridestyle }}</a>
                </td>
            </tr>
            <tr>
                <td class="head2011a">
                	<label class="col-md-3">本文</label>
                </td>
                <td class="head2011b">
            	    <p>{!! nl2br(e($posts->body)) !!}</p> {{-- 改行を反映させるための表記 --
            	    <div class="caption">
                	    @if ($posts->image_path1)
                	        <img src="{{ secure_asset('storage/image/' . $posts->image_path1) }}" class="img-review">
            	        @endif
            	        @if ($posts->image_path2)
                	        <img src="{{ secure_asset('storage/image/' . $posts->image_path2) }}" class="img-review">
            	        @endif
            	        @if ($posts->image_path3)
                	        <img src="{{ secure_asset('storage/image/' . $posts->image_path3) }}" class="img-review">
            	        @endif
            	        @if ($posts->image_path4)
                	        <img src="{{ secure_asset('storage/image/' . $posts->image_path4) }}" class="img-review">
            	        @endif
            	        @if ($posts->image_path5)
                	        <img src="{{ secure_asset('storage/image/' . $posts->image_path5) }}" class="img-review">
            	        @endif
        	        </div>
                </td>
            </tr>
            <tr>
                <td class="head2011a">
                	<label class="col-md-3">耐久性</label>
                </td>
                <td class="head2011b">
            	    <p>{{ $posts->durability }}</p>
                </td>
            </tr>
            <tr>
                <td class="head2011a">
                	<label class="col-md-3">使いやすさ</label>
                </td>
                <td class="head2011b">
            	    <p>{{ $posts->usability }}</p>
                </td>
            </tr>
            <tr>
                <td class="head2011a">
                	<label class="col-md-3">コストパフォーマンス</label>
                </td>
                <td class="head2011b">
            	    <p>{{ $posts->cost }}</p>
                </td>
            </tr>
            <tr>
                <td class="head2011a">
                	<label class="col-md-3">総合評価</label>
                </td>
                <td class="head2011b">
        	        <p>{{ $posts->evaluation }}</p>
                </td>
            </tr>
        </table>
        @if ($user != null) 
            @if ($user->email == $posts->contributor)
                <div class="register_btn">
                    <form method="get" action="{{ route('admin.post_review.edit') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $posts->id }}">
                        <input class="btn btn--red btn--cubic" type="submit" value="編集">
                    </form>
                </div>
                <div class="register_btn">
                    <form method="get" action="{{ route('admin.post_review.delete') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $posts->id }}">
                        <input class="btn btn--gray btn--cubic" type="submit" value="削除">
                    </form>
                </div>
            @endif
        @endif
    </div>
@endsection 
--}}