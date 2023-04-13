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
                <label for="choice1">選択肢 1</label>
                <input type="text" name="choice1" id="choice1">
            </div>

            <div>
                <label for="choice2">選択肢 2</label>
                <input type="text" name="choice2" id="choice2">
            </div>

            <div>
                <label for="choice3">選択肢 3</label>
                <input type="text" name="choice3" id="choice3">
            </div>

            <div>
                <label for="choice4">選択肢 4</label>
                <input type="text" name="choice4" id="choice4">
            </div>

            <div>
                <label for="correct_choice">正しい選択肢の番号</label>
                <input type="number" name="correct_answer_index" id="correct_answer_index" min="1" max="4">
            </div>

            <button type="submit">登録</button>
        </form>
    </body>
</html>
