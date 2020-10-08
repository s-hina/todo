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
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    @yield('scripts')    
</body>
</html>