@extends('layouts.front')

@section('title', 'TEAM BIGBANG')

@section('content')
    <img class="h-img" src="{{ secure_asset('storage/image/3X5OuXSwlUHpaa8XhIcmlJfFlBsVzSuaqtMI2som.jpg/') }}">
    <div class="c">
        <main class="main">
			<?php $count=0; ?>
			@foreach ($posts as $post)
					<?php $count++; ?>
					<a href="{{ route('article.page', ['id' => $post->id]) }}">
						<div class="new_review">
							<div class="new_review_img">
								@if ($post->thumbnail_path != null)
									<img src="{{ secure_asset('storage/image/' . $post->thumbnail_path) }}" class="img_new_review">
								@else
								    <img src="{{ secure_asset('images/no_image.png/') }}" class="img_new_review">
								@endif
							</div>
							<div class="new_review_outline">
                                <a>aaaaa</a>
							</div>
						</div>
					</a>
					@if ($count == 10)
						@break
					@endif
			@endforeach
    　  </main>    
        <aside class="side">サイド</aside>
    </div>
@endsection