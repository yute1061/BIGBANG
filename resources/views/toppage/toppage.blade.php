@extends('layouts.front')

@section('title', 'TEAM BIGBANG')

@section('main')
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
						<div class="new_article_outline">
                            <p class="ellipsis">{{ $post->created_at }}</p>
                            <p class="ellipsis">{{ $post->tag }}</p>
							<p class="ellipsis">{{ $post->title }}</p>
							<p class="ellipsis">{{ $post->body }}</p>
						</div>
					</div>
				</a>
				@if ($count == 10)
					@break
				@endif
			@endforeach
    　  </main>
@endsection   

@section('side')
        <aside class="side">サイド</aside>
@endsection