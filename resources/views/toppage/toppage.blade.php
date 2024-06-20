@extends('layouts.front')

@section('title', 'TEAM BIGBANG')

@section('main')
<main id="main" class="main" itemscope="" itemtype="https://schema.org/Blog" style="height: auto !important;">
	<?php $count = 0; ?>
	<?php $article_start = $page * 10 - 9; ?>
	<?php $article_end = $page * 10; ?>
	@foreach ($posts as $post)
		@if ($post->status == 1)
			<?php $count++; ?>
			@if ($count >= $article_start and $count <= $article_end)
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
		@endif
		@if ($count == $article_end)
			@break
		@endif
	@endforeach
	<!-- ここからページング -->
	<div class="pagination">
		<p class="from_to"><?php echo $article_total; ?>件中 <?php echo $from_record; ?> - <?php echo $to_record;?> 件目を表示</p>
		<!-- 戻るボタン -->
		@if ($page >= 2)
            <a href="index.php?page=<?php echo($page - 1); ?>" class="page_feed">&laquo;</a>
        @else
            <span class="first_last_page">&laquo;</span>
        @endif
        
        <!-- ページボタン -->
        <?php for ($i = 1; $i <= $max_page; $i++) : ?>
		   <?php if($i >= $page - $range && $i <= $page + $range) : ?>
		       @if ($i == $page)
		           <span class="now_page_number"><?php echo $i; ?></span>
		       @else
		           <a href="?page=<?php echo $i; ?>" class="page_number"><?php echo $i; ?></a>
		       @endif
		   <?php endif; ?>
		<?php endfor; ?>
		
		<!-- 進むボタン -->
		@if ($page < $max_page)
        	<a href="index.php?page=<?php echo($page + 1); ?>" class="page_feed">&raquo;</a>
	    @else
	        <span class="first_last_page">&raquo;</span>
	    @endif
    </div>
    {{ $page }}<br>
    {{ $article_start }}<br>
    {{ $article_end }}<br>
    {{ $count }}
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