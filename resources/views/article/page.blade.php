@extends('layouts.front')

@section('title', $article->title)

@section('main')
<main id="main" class="main" itemscope="" itemtype="https://schema.org/Blog" style="height: auto !important;">
    <div class="article_pankuzu">
        <a>{{ $article->tag }}</a>
        <a> > </a>
        <a>{{ $article->title }}</a>
    </div>
    <div class="article_wrap">
        <h1 class="article_title">{{ $article->title }}</h1>
        <div class="article_thumbnail">
            @if ($article->thumbnail_path)
    	        <img width="800" height="533" src="{{ secure_asset('storage/image/' . $article->thumbnail_path) }}" class="img-review">
	        @endif
        </div>
        <div class="date-tags">
            <span class="post-date">
                <span class="fa fa-clock-o" aria-hidden="true"></span>
                <time class="entry-date date published updated">{{ $article->created_at }}</time>
            </span>
        </div>
    </div>
    <div class="entry-content cf" itemprop="mainEntityOfPage">
        @if ($article->body1)
            <?php
                $text1 = nl2br( $article->body1 );
                echo $text1;
            ?>
        @endif
	    @if ($article->image_path1)
	        <img width="800" height="533" src="{{ secure_asset('storage/image/' . $article->image_path1) }}" class="img-review">
        @endif
        @if ($article->body2)
            <?php
                $text2 = nl2br( $article->body2 );
                echo $text2;
            ?>
        @endif
        @if ($article->image_path2)
	        <img width="800" height="533" src="{{ secure_asset('storage/image/' . $article->image_path2) }}" class="img-review">
        @endif
        @if ($article->body3)
	        <?php
                $text3 = nl2br( $article->body3 );
                echo $text3;
            ?>
        @endif
        @if ($article->image_path3)
	        <img width="800" height="533" src="{{ secure_asset('storage/image/' . $article->image_path3) }}" class="img-review">
        @endif
        @if ($article->body4)
	        <?php
                $text4 = nl2br( $article->body4 );
                echo $text4;
            ?>
        @endif
        @if ($article->image_path4)
	        <img width="800" height="533" src="{{ secure_asset('storage/image/' . $article->image_path4) }}" class="img-review">
        @endif
        @if ($article->body5)
	        <?php
                $text5 = nl2br( $article->body5 );
                echo $text5;
            ?>
        @endif
        @if ($article->image_path5)
	        <img width="800" height="533" src="{{ secure_asset('storage/image/' . $article->image_path5) }}" class="img-review">
        @endif
        @if ($article->body6)
	        <?php
                $text6 = nl2br( $article->body6 );
                echo $text6;
            ?>
        @endif
        @if ($article->image_path6)
	        <img width="800" height="533" src="{{ secure_asset('storage/image/' . $article->image_path6) }}" class="img-review">
        @endif
        @if ($article->body7)
            <?php
                $text7 = nl2br( $article->body7 );
                echo $text7;
            ?>
        @endif
        @if ($article->image_path7)
	        <img width="800" height="533" src="{{ secure_asset('storage/image/' . $article->image_path7) }}" class="img-review">
        @endif
        @if ($article->body8)
	        <?php
                $text8 = nl2br( $article->body8 );
                echo $text8;
            ?>
        @endif
        @if ($article->image_path8)
	        <img width="800" height="533" src="{{ secure_asset('storage/image/' . $article->image_path8) }}" class="img-review">
        @endif
        @if ($article->body9)
	        <?php
                $text9 = nl2br( $article->body9 );
                echo $text9;
            ?>
        @endif
        @if ($article->image_path9)
	        <img width="800" height="533" src="{{ secure_asset('storage/image/' . $article->image_path9) }}" class="img-review">
        @endif
        @if ($article->body10)
            <?php
                $text2 = nl2br( $article->body10 );
                echo $text10;
            ?>
        @endif
        @if ($article->image_path10)
	        <img width="800" height="533" src="{{ secure_asset('storage/image/' . $article->image_path10) }}" class="img-review">
        @endif
    </div>
</main>
@endsection

<!--
<main id="main" class="main" itemscope="" itemtype="https://schema.org/Blog" style="height: auto !important;">
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
</main>