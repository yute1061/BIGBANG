@extends('layouts.front')

@section('title', 'TEAM BIGBANG')

@section('main')
<main id="main" class="main" itemscope="" itemtype="https://schema.org/Blog" style="height: auto !important;">
	<!-- <div id="list" class="list ect-entry-card front-page-type-index">
		<a href="https://cycle-tv.com/workman-cycle-gloves3/" class="entry-card-wrap a-wrap border-element cf" title="ワークマンのサイクリンググローブ２（２０２４）">
			<article id="post-25151" class="post-25151 entry-card e-card cf post type-post status-publish format-standard has-post-thumbnail hentry category-bicycle-supplies-post tag-117-post">
			    <figure class="entry-card-thumb card-thumb e-card-thumb">
				    <img width="320" height="180" src="https://cycle-tv.com/wp-content/uploads/2024/04/IMG_8903-320x180.jpg" class="entry-card-thumb-image card-thumb-image wp-post-image" alt="" decoding="async" fetchpriority="high" srcset="https://cycle-tv.com/wp-content/uploads/2024/04/IMG_8903-320x180.jpg 320w, https://cycle-tv.com/wp-content/uploads/2024/04/IMG_8903-120x68.jpg 120w, https://cycle-tv.com/wp-content/uploads/2024/04/IMG_8903-160x90.jpg 160w" sizes="(max-width: 320px) 100vw, 320px">
				    <span class="cat-label cat-label-39">自転車用品</span>    
			    </figure><!-- /.entry-card-thumb -->
			 <!-- <div class="entry-card-content card-content e-card-content">
			      <h2 class="entry-card-title card-title e-card-title" itemprop="headline">ワークマンのサイクリンググローブ２（２０２４）</h2>
			            <div class="entry-card-snippet card-snippet e-card-snippet">
			        		ワークマンの夏用グローブでフルフィンガータイプを見つけました。      
			        	</div>
			            <div class="entry-card-meta card-meta e-card-meta">
			        		<div class="entry-card-info e-card-info">
			                	<span class="post-date">
			                		<span class="fa fa-clock-o" aria-hidden="true"></span>
			                		<span class="entry-date">2024.04.23</span>
	                			</span>
                            </div>
			        		<div class="entry-card-categorys e-card-categorys">
		        				<span class="entry-category">自転車用品</span>
		        			</div>
			    		</div>
			    </div><!-- /.entry-card-content -->
		<!-- </article>
		</a>
	</div> -->
	<?php $count=0; ?>
	@foreach ($posts as $post)
		@if ($post->status == 1)
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
					<!-- <div class="entry-card-content card-content e-card-content"> -->
					<div class="entry-card-content">
						<!-- <h2 class="entry-card-title card-title e-card-title" itemprop="headline">{{ $post->title }}</h2> -->
						<h2 class="entry-card-title">{{ $post->title }}</h2>
						<!-- <div class="entry-card-snippet card-snippet e-card-snippet"> -->
						<div class="entry-card-snippet">
							{{ $post->body1 }}
						</div>
					</div>
					<!-- <div class="entry-card-meta card-meta e-card-meta"> -->
					<div class="entry-card-meta">
						<!-- <div class="entry-card-info e-card-info"> -->
		        		<div class="entry-card-info">
		                	<span class="post-date">
		                		<span class="fa fa-clock-o" aria-hidden="true"></span>
		                		<span class="entry-date">{{ $post->created_at }}</span>
	            			</span>
	                    </div>
	                    <!-- <div class="entry-card-categorys e-card-categorys"> -->
		        		<div class="entry-card-categorys">
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