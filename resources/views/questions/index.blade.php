<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body class="antialiased">
            <h1>問題集一覧</h1>
            <ul>
                @foreach($questions as $question)
                    <li>
                     <a href="{{ route('questions.show', $question->id) }}">{{ $question->title }}</a>
                    </li>
                @endforeach
            </ul>
            <a href="{{ route('questions.create') }}">問題登録</a>
    </body>
</html>



