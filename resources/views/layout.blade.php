<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Laravel</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
</head>
<body class="bg-gray-100">
    <header class="bg-blue-500 py-4">
        <nav class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-white font-bold text-xl">問題集アプリ</a>
            <div>
                @guest
                    <a href="{{ route('login') }}" class="text-white mr-4">ログイン</a>
                    <a href="{{ route('register') }}" class="text-white">サインアップ</a>
                @else
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       class="text-white">
                        ログアウト
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                @endguest
            </div>
        </nav>
    </header>
    <main>
        <div class="content-wrapper"> <!-- 追加 -->
         @yield('content')
        </div> <!-- 追加 -->
    </main>
    <footer class="bg-blue-500 py-4 mt-10">
        <div class="container mx-auto text-center text-white">
            &copy; {{ date('Y') }} 問題集アプリ. All rights reserved.
        </div>
    </footer>
</body>
</html>
