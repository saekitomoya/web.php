{"filter":false,"title":"admin.blade.php","tooltip":"/mynews/resources/views/layouts/admin.blade.php","ace":{"folds":[],"scrolltop":478,"scrollleft":0,"selection":{"start":{"row":64,"column":0},"end":{"row":64,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":109,"mode":"ace/mode/php_laravel_blade"}},"hash":"87e537f86a796c596b2cc1b32b4b297f2bda3eb9","mime":"application/octet-stream","undoManager":{"mark":7,"position":7,"stack":[[{"start":{"row":0,"column":0},"end":{"row":60,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"{{ app()->getLocale() }}\">","    <head>","        <meta charset=\"utf-8\">","        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">","        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","","        <!-- CSRF Token -->","         {{-- 後の章で説明します --}}","        <meta name=\"csrf-token\" content=\"{{ csrf_token() }}\">","","        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}","        <title>@yield('title')</title>","","        <!-- Scripts -->","         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}","        <script src=\"{{ secure_asset('js/app.js') }}\" defer></script>","","        <!-- Fonts -->","        <link rel=\"dns-prefetch\" href=\"https://fonts.gstatic.com\">","        <link href=\"https://fonts.googleapis.com/css?family=Raleway:300,400,600\" rel=\"stylesheet\" type=\"text/css\">","","        <!-- Styles -->","        {{-- Laravel標準で用意されているCSSを読み込みます --}}","        <link href=\"{{ secure_asset('css/app.css') }}\" rel=\"stylesheet\">","        {{-- この章の後半で作成するCSSを読み込みます --}}","        <link href=\"{{ secure_asset('css/admin.css') }}\" rel=\"stylesheet\">","    </head>","    <body>","        <div id=\"app\">","            {{-- 画面上部に表示するナビゲーションバーです。 --}}","            <nav class=\"navbar navbar-expand-md navbar-dark navbar-laravel\">","                <div class=\"container\">","                    <a class=\"navbar-brand\" href=\"{{ url('/') }}\">","                        {{ config('app.name', 'Laravel') }}","                    </a>","                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">","                        <span class=\"navbar-toggler-icon\"></span>","                    </button>","","                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">","                        <!-- Left Side Of Navbar -->","                        <ul class=\"navbar-nav mr-auto\">","","                        </ul>","","                        <!-- Right Side Of Navbar -->","                        <ul class=\"navbar-nav ml-auto\">","                        </ul>","                    </div>","                </div>","            </nav>","            {{-- ここまでナビゲーションバー --}}","","            <main class=\"py-4\">","                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}","                @yield('content')","            </main>","        </div>","    </body>","</html>"],"id":1}],[{"start":{"row":60,"column":7},"end":{"row":61,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":61,"column":0},"end":{"row":62,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":61,"column":0},"end":{"row":77,"column":11},"action":"insert","lines":["{{-- layouts/admin.blade.phpを読み込む --}}","@extends('layouts.admin')","","","{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}","@section('title', 'ニュースの新規作成')","","{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}","@section('content')","    <div class=\"container\">","        <div class=\"row\">","            <div class=\"col-md-8 mx-auto\">","                <h2>ニュース新規作成</h2>","            </div>","        </div>","    </div>","@endsection"],"id":3}],[{"start":{"row":61,"column":0},"end":{"row":77,"column":11},"action":"remove","lines":["{{-- layouts/admin.blade.phpを読み込む --}}","@extends('layouts.admin')","","","{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}","@section('title', 'ニュースの新規作成')","","{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}","@section('content')","    <div class=\"container\">","        <div class=\"row\">","            <div class=\"col-md-8 mx-auto\">","                <h2>ニュース新規作成</h2>","            </div>","        </div>","    </div>","@endsection"],"id":5}],[{"start":{"row":61,"column":0},"end":{"row":62,"column":0},"action":"insert","lines":["",""],"id":6}],[{"start":{"row":62,"column":0},"end":{"row":78,"column":11},"action":"insert","lines":["{{-- layouts/admin.blade.phpを読み込む --}}","@extends('layouts.admin')","","","{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}","@section('title', 'ニュースの新規作成')","","{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}","@section('content')","    <div class=\"container\">","        <div class=\"row\">","            <div class=\"col-md-8 mx-auto\">","                <h2>ニュース新規作成</h2>","            </div>","        </div>","    </div>","@endsection"],"id":7}],[{"start":{"row":78,"column":11},"end":{"row":79,"column":0},"action":"insert","lines":["",""],"id":8}],[{"start":{"row":62,"column":0},"end":{"row":78,"column":11},"action":"remove","lines":["{{-- layouts/admin.blade.phpを読み込む --}}","@extends('layouts.admin')","","","{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}","@section('title', 'ニュースの新規作成')","","{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}","@section('content')","    <div class=\"container\">","        <div class=\"row\">","            <div class=\"col-md-8 mx-auto\">","                <h2>ニュース新規作成</h2>","            </div>","        </div>","    </div>","@endsection"],"id":10}]]},"timestamp":1643030596840}