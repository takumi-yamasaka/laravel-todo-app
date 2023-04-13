@extends('layout')

@section('content')
    <h1>問題登録・チャットGPTモード</h1>
    <h2>GPTに以下のプロンプトで質問してみてください。（コピペでいいです）</h2>
    <p>AWSの勉強をしています。以下の問題の形式でタイトル、問題文、選択肢、回答も含めて出題してください。</p>
    <p>内容はランダムで構いません。{ "title": "", "question": "", "choices": [ "1. ", "2. ", "3. ", "4. ], "correct_answer_index": "" }</p>


    <form action="{{ route('questions.store-gpt') }}" method="POST">
        @csrf
        <div>
            <label for="gpt-generated-json">GPTで生成されたJSON:</label>
            <textarea id="gpt-generated-json" name="gpt-generated-json" rows="10" cols="50" required></textarea>
        </div>

        <button type="submit">問題を登録する</button>
    </form>

    <a href="{{ route('questions.index') }}">一覧へ戻る</a>
@endsection
