{{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('title')
    </title>
    {{-- laravel vite ↓ --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{-- laravel mix ↓ --}}
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <header>
        @include('header')
    </header>

    <br>

    <div class="container">
        @yield('content')
    </div>

    <footer class="footer bg-dark  fixed-bottom">
        @include('footer')
    </footer>
</body>
</html>