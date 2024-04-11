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
                @yield('side')
            </div>
            <footer class="footer">
                テキスト
            </footer>
        </div>
    </body>
</html>