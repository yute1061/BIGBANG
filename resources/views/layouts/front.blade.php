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
                    <div class="widgetitle">記事検索</div>
                    <form method="get" class="searchform" action="###########" role="search">
                    	<input type="text" placeholder="検索" name="s" class="s">
                    	<button type="submit">
                                {{ __('検索') }}
                      </button>
                    </form>
                  </div>
                  <div>
                    <div class="widgetitle">サイト管理者</div>
                    <div class="diver_widget_profile clearfix">
                      <div class="clearfix coverimg on lazyloaded">
                        <img class=" lazyloaded" src="https://www.longride.org/wp/wp-content/uploads/2019/07/profile01.jpg" data-src="https://www.longride.org/wp/wp-content/uploads/2019/07/profile01.jpg" alt="userimg">
                      </div>
                      <div class="img_meta">
                        <div class="meta">
                          <p>2013年よりブルベにエントリーをしています。海外ブルベがメイン。年間2本走れるようにがんばる。目下の目標はRM1200km以上を20本完走、ISR5回（4CR）ゲトね。愛車はCube Agree C:62 ディスク（海外・遠征などメイン）、BeONEディアブロ（引退・予備・ローラー台専用）で走っています。13年LEL1400kmから17年ラストチャンスコロラド、18年alpi4000、19年PBPなどRM1200km・RMオーバー1200kmを12本完走。ISR（1200km・4C）を1つコンプリート。アメリカ2本完走すればISR・4CRの2、3本目ゲットできる。</p><br>
                          <p class="b">BRM413東京400ぐるっと首都圏L予定</p>
                        </div>
                        <div class="button"><a style="background:#309b5b;color: #ffffff;" href="https://www.longride.org/webprofile/">Yasuについて</a></div>
                      </div>
                    </div>
                  </div>
                  
                  <div>
                    <div class="widgetitle">最新記事</div>
                  </div>
                  <div>
                    <div class="widgetitle">カテゴリー</div>
                  </div>
                </aside>
            </div>
            <footer class="footer">
                テキスト
            </footer>
        </div>
    </body>
</html>