<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    {{-- 各ページごとにtitleタグを入れるため、@yieldで空けておく --}}
    <title>@yield('title')</title>

    <!-- Styles -->
    @yield('styles')
    <link rel="stylesheet" href="/css/styles.css">
    {{-- Laravel標準で用意されているCSSの読み込み --}}
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('css/styles.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <header>
        <nav class="my-navbar">
            <a class="my-navbar-brand" href="/">ToDo App</a>
            <div class="my-navbar-control">
                @if(Auth::check())
                    <span class="my-navbar-item">ようこそ, {{ Auth::user()->name }}さん</span>
                    ｜
                    <a href="#" id="logout" class="my-navbar-item">ログアウト</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a class="my-navbar-item" href="{{ route('login') }}">ログイン</a>
                    ｜
                    <a class="my-navbar-item" href="{{ route('register') }}">会員登録</a>
                @endif
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    @if(Auth::check())
        <script>
            document.getElementById('logout').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('logout-form').submit();
            });
        </script>
    @endif
    @yield('scripts')    
</body>
</html>