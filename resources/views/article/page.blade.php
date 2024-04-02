@extends('layouts.admin')

@section('title', '記事ページ')

@section('content')
    <div class="wrap">
        <div class="review_pankuzu">
            <a>{{ $posts->tag }}</a>
            <a> > </a>
            <a>{{ $posts->title }}</a>
        </div>
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