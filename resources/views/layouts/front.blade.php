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
        <link href="{{ secure_asset('css/toppage.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/page.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <div class="area">
            <header class="header">
                <a class="title" href="{{ route('toppage') }}" style="font-weight: bold;">                     
                    <div>
                        <div style="float: left;" {{--text-align: center;--}}>
                            <div><span style="font-size: 50px;">T&nbsp;E&nbsp;A&nbsp;M</span>&emsp;&emsp;{{--全角スペース--}}<span style="font-size: 70px;">B&nbsp;I&nbsp;G&nbsp;B&nbsp;A&nbsp;N&nbsp;G</span></div>
                            <div style="margin-top: -20px;"><span style="font-size: 30px;">RoadraceTeam in Kumamoto</span></div>
                        </div>
                        <div>
                            <img class="logo_2" style="margin-left: 220px; width: 80px; margin-top: 57px;" src="{{ secure_asset('images/935503.jpeg/') }}">
                            <img class="logo_2" style="width: 110px; margin-top: 28px;" src="{{ secure_asset('images/935503.jpeg/') }}">
                            <img class="logo_2" style="width: 140px;" src="{{ secure_asset('images/935503.jpeg/') }}">
                        </div>
                    </div>
                </a>
                <nav class="h-nav">
                    <ul class="b">
                        <li><a href="#">HOME</a></li>
                        <li><a href="{{ route('about') }}">BIGBANGについて</a></li>
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
                        <img width="100%" src="{{ secure_asset('images/Screen_BIGBANG_2700×2700-min.png/') }}">
                    </div>
                    <div>
                        <div class="widgettitle">記事検索</div>
                        <form method="get" class="searchform" action="###########" role="search">
                          	<input type="text" placeholder="検索" name="s" class="s">
                          	<button type="submit">
                                      {{ __('検索') }}
                            </button>
                        </form>
                    </div>
                    
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
                    
        		    <div class="widgettitle">最新記事</div>
        		    <div>
  				        <?php $count_side=0; ?>
  			            @foreach ($posts as $post)
      			            <?php $count_side++; ?>
            				<a href="{{ route('article.page', ['id' => $post->id]) }}">
  							    <div class="new_article_side">
        						    <div class="new_article_thumbnail-side">
                						@if ($post->thumbnail_path != null)
                							<img width="100%" height="100%" src="{{ secure_asset('storage/image/' . $post->thumbnail_path) }}" class="img_new_article">
                						@else
                						    <img width="100%" height="100%" src="{{ secure_asset('images/no_image.png/') }}" class="img_new_article">
                						@endif
                					</div>
                					<div class="entry-card-content-side">
                    					<span class="entry-card-title-side">{{ $post->title }}</span>
                    				</div>
                					<div class="entry-card-meta-side">
                		        		<div class="entry-card-info-side">
                		        		    <span class="post-date-side">
                		                	    <span class="entry-date-side">{{ $post->created_at }}</span>
                		                	</span>
                	                    </div>
                	                    <!-- <div class="entry-card-categorys e-card-categorys"> -->
                		        		<div class="entry-card-categorys-side">
                	        				<span class="entry-category-side">{{ $post->tag }}</span>
                	        			</div>
                		    		</div>
            					</div>
                			</a>
  							@if ($count_side == 5)
  		                        @break
  		                    @endif
                        @endforeach
                    </div>
        		    
                    <div class="widgettitle">カテゴリー</div>
                    <ul>
                        <li class="category">
                            <a href="#">
                                <span class="category_name">レースレポ</span>
                                <?php $category_count_side_1=0; ?>
                                @foreach ($posts as $post)
                                    @if ($post->tag == "レースレポ")
                                        <?php $category_count_side_1++; ?>
                                    @endif
                                @endforeach
                                <span class="category_count">{{ $category_count_side_1 }}</span>
                            </a>
                        </li>
                        <li class="category">
                            <a href="#">
                                <span class="category">練習会</span>
                                <?php $category_count_side_2 = 0; ?>
                                @foreach ($posts as $post)
                                    @if ($post->tag == "練習会")
                                        <?php $category_count_side_2++; ?>
                                    @endif
                                @endforeach
                                <span class="category_count">{{ $category_count_side_2 }}</span>
                            </a>
                        </li>
                        <li class="category">
                            <a href="#">
                                <span class="category">機材レビュー</span>
                                <?php $category_count_side_3 = 0; ?>
                                @foreach ($posts as $post)
                                    @if ($post->tag == "機材レビュー")
                                        <?php $category_count_side_3++; ?>
                                    @endif
                                @endforeach
                                <span class="category_count">{{ $category_count_side_3 }}</span>
                            </a>
                        </li>
                        <li class="category">
                            <a href="#">
                                <span class="category">用品レビュー</span>
                                <?php $category_count_side_4 = 0; ?>
                                @foreach ($posts as $post)
                                    @if ($post->tag == "用品レビュー")
                                        <?php $category_count_side_4++; ?>
                                    @endif
                                @endforeach
                                <span class="category_count">{{ $category_count_side_4 }}</span>
                            </a>
                        </li>
                        <li class="category">
                            <a href="#">
                                <span class="category">ブルベ</span>
                                <?php $category_count_side_5 = 0; ?>
                                @foreach ($posts as $post)
                                    @if ($post->tag == "ブルベ")
                                        <?php $category_count_side_5++; ?>
                                    @endif
                                @endforeach
                                <span class="category_count">{{ $category_count_side_5 }}</span>
                            </a>
                        </li>
                        <li class="category">
                            <a href="#">
                                <span class="category">その他</span>
                                <?php $category_count_side_etc = 0; ?>
                                @foreach ($posts as $post)
                                    @if ($post->tag == "その他")
                                        <?php $category_count_side_etc++; ?>
                                    @endif
                                @endforeach
                                <span class="category_count">{{ $category_count_side_etc }}</span>
                            </a>
                        </li>
                    </ul>
                
                    <div>
                        <div class="widgettitle">X（エックス）</div>
                            <a class="twitter-timeline" data-height="600" href="https://twitter.com/silencetezuka?ref_src=twsrc%5Etfw">Tweets by silencetezuka</a> 
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div> 
                    </div>
                </aside>
            </div>
            <footer class="footer">
      				  <div class="footer_content clearfix">
      					    <nav class="footer_navi" role="navigation">
      						      <ul id="menu-%e3%83%95%e3%83%83%e3%82%bf%e3%83%bc%e3%83%a1%e3%83%8b%e3%83%a5%e3%83%bc" class="menu">
      						          <li id="menu-item-4748" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4748">
      						              <a href="https://www.longride.org/webinfo/">当サイトについて</a>
      						          </li>
                            <li id="menu-item-4749" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2 current_page_item menu-item-4749">
                                <a href="https://www.longride.org/webprofile/" aria-current="page">管理者について</a>
                            </li>
                            <li id="menu-item-4747" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4747">
                                <a href="https://www.longride.org/contactus/">お問い合わせ</a>
                            </li>
                        </ul>					
                    </nav>
      			    <div id="copyright">2014-2024 TEAM BIGBANG</div>
      			</footer>
        </div>
    </body>
</html>