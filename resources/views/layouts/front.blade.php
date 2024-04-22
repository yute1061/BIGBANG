<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="uth-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
            
        <title>@yield('title')</title>
            
        <!-- Scripts -->
        {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        
        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{-- 固有のCSSを読み込みます --}}
        <link href="{{ secure_asset('css/front.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/side.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <div class="a">
            <header class="header">
              <h1>
                <a class="team_logo" href="#"><img class="logo" src="images/logo.jpg" alt="チームロゴ"><?php echo "&emsp;"; //「&emsp;」スペース ?>TEAM BIGBANG 熊本ロードバイクチーム</a>
            　</h1>
              <nav class="h-nav">
                <ul class="b">
                  <li><a href="#">ホーム</a></li>
                  <li><a href="#">BIGBANGについて</a></li>
                  <li><a href="#">レースレポ</a></li>
                  <li><a href="#">レース日程</a></li>
                  <li><a href="#">お問い合わせ</a></li>
                </ul>
              </nav>  
            </header>
            <div class="c">
                @yield('main')
                <aside class="side">
                  <div>
                    <div class="widgettitle">記事検索</div>
                    <form method="get" class="searchform" action="###########" role="search">
                    	<input type="text" placeholder="検索" name="s" class="s">
                    	<button type="submit">
                                {{ __('検索') }}
                      </button>
                    </form>
                  </div>
                  <div>
                    <div class="widgettitle">サイト管理者</div>
                    <div class="diver_widget_profile clearfix">
                      <div class="clearfix coverimg on lazyloaded">
                        <img class="img_profile" src="{{ secure_asset('images/profile.jpg/') }}" class="img_new_article">
                      </div>
                      <div class="name">テズカ</div>
                      <div class="img_meta">
                        <div class="meta">
                          <p>2019年よりTEAM BIGBANGに所属。一応ロードバイク歴10年。最近はブルべに夢中でレース活動は控え気味...でもヒルクライムとエンデューロには出たいと思ってます。目下の目標はSR取得で、2027年のPBP出場を目指してます。</p>
                          <p>愛車はチームメイトに塗装してもらったSTORCK Fascenario.3 comp。マイナーなブランドやアイテムを使いたがる癖あり。</p>
                        </div>
                      </div>
                    </div>
                  <div>
                  <div id="recent-posts-2" class="widget widget_recent_entries">
                		<div class="widgettitle">最新記事</div>
          					<?php $count_side=0; ?>
              			@foreach ($posts as $post)
              			<?php $count_side++; ?>
										  <div class="new_article_side">
                				<a href="{{ route('article.page', ['id' => $post->id]) }}">
              						<div>
                            <p class="ellipsis">{{ $post->created_at }}</p>
                            <p class="ellipsis">{{ $post->tag }}</p>
              							<p class="ellipsis">{{ $post->title }}</p>
              							<p class="ellipsis">{{ $post->body }}</p>
              						</div>
                				</a>
                			</div>
    									@if ($count_side == 5)
			                  @break
		                  @endif
	                  @endforeach
              		</div>
                  <div>
                    <div class="widgettitle">カテゴリー</div>
                  </div>
                </aside>
            </div>
            <footer class="footer">
                テキスト
            </footer>
        </div>
    </body>
</html>