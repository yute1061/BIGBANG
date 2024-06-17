@extends('layouts.front')

@section('title', 'TEAM BIGBANG')

@section('main')
<main id="main" class="main" itemscope="" itemtype="https://schema.org/Blog" style="height: auto !important;">
	<?php $count=0; ?>
	@foreach ($posts as $post)
		@if ($post->status == 1)
			<?php $count++; ?>
			<a href="{{ route('article.page', ['id' => $post->id]) }}">
				<div class="new_article">
					<div class="new_article_thumbnail">
						@if ($post->thumbnail_path != null)
							<img width="95%" height="100%" src="{{ secure_asset('storage/image/' . $post->thumbnail_path) }}" class="img_new_article">
						@else
						    <img width="95%" height="100%" src="{{ secure_asset('images/no_image.png/') }}" class="img_new_article">
						@endif
					</div>
					<!-- <div class="entry-card-content card-content e-card-content"> -->
					<div>
						<!-- <h2 class="entry-card-title card-title e-card-title" itemprop="headline">{{ $post->title }}</h2> -->
						<span class="entry-card-title">{{ $post->title }}</span>
						<!-- <div class="entry-card-snippet card-snippet e-card-snippet"> -->
						<div class="entry-card-snippet">
							<span>{{ $post->body1 }}</span>
						</div>
					</div>
					<!-- <div class="entry-card-meta card-meta e-card-meta"> -->
					<div class="entry-card-meta">
						<!-- <div class="entry-card-info e-card-info"> -->
		        		<div class="entry-card-date">
	                		<span class="post-date">{{ $post->created_at }}</span>
	                    </div>
	                    <!-- <div class="entry-card-categorys e-card-categorys"> -->
		        		<div class="entry-card-tag">
	        				<span class="entry-category">{{ $post->tag }}</span>
	        			</div>
		    		</div>
				</div>
			</a>
		@endif
		@if ($count == 10)
			@break
		@endif
	@endforeach
</main>
@endsection
    
<!--
<main class="main">
	<img class="h-img" src="{{ secure_asset('storage/image/3X5OuXSwlUHpaa8XhIcmlJfFlBsVzSuaqtMI2som.jpg/') }}">
	<?php $count=0; ?>
	@foreach ($posts as $post)
		<?php $count++; ?>
		<a href="{{ route('article.page', ['id' => $post->id]) }}">
			<div class="new_article">
				<div class="new_article_thumbnail">
					@if ($post->thumbnail_path != null)
						<img src="{{ secure_asset('storage/image/' . $post->thumbnail_path) }}" class="img_new_article">
					@else
					    <img src="{{ secure_asset('images/no_image.png/') }}" class="img_new_article">
					@endif
				</div>
				<div>
                    <p>{{ $post->created_at }}</p>
                    <p>{{ $post->tag }}</p>
					<p>{{ $post->title }}</p>
				</div>
				<div>
					<p>{{ $post->body1 }}</p>
				</div>
			</div>
		</a>
		@if ($count == 10)
			@break
		@endif
	@endforeach
</main>
-->