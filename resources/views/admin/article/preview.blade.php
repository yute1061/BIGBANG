{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')

{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '記事のプレビュー')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="wrap">
        <h2 style="text-align: center;">記事のプレビュー</h2>
        <form method="POST" enctype="multipart/form-data" action={{ route('admin.article.create') }}>
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
            <div class="register_btn">
        	    <input type="hidden" name="id" value="{{ $article->id }}">
        	    {{-- hidden...隠しファイル これを使うことでidをcreateに送れる --}}
        	    <input class="btn btn--blue btn--cubic" type="submit" value="投稿">
    	    </div>
        </form>
        <div class="register_btn">
            <input class="btn btn--gray btn--cubic" type="submit" onclick="history.back()" value="戻る">
		</div>
    </div>
@endsection