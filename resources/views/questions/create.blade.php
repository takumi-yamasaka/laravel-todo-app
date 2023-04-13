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
           
        <h1>問題集の登録</h1>

        <form action="{{ route('questions.store') }}" method="POST">
            @csrf

            <div>
                <label for="title">タイトル</label>
                <input type="text" name="title" id="title">
            </div>

            <div>
                <label for="question">問題</label>
                <textarea name="question" id="question"></textarea>
            </div>

            <div>
                <label for="choices">選択肢 (1つずつ改行して入力してください)</label>
                <textarea name="choices" id="choices"></textarea>
            </div>

            <div>
                <label for="correct_choice">正しい選択肢の番号</label>
                <input type="number" name="correct_answer_index" id="correct_answer_index">
            </div>

            <button type="submit">登録</button>
        </form>
    </body>
</html>



