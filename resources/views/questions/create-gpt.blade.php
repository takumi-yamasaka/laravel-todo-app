@extends('layout')

@section('content')
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl mb-6">問題登録・チャットGPTモード</h1>
        <h2 class="text-xl mb-4">GPTに以下のプロンプトで質問してみてください。</h2>
        <div class="bg-gray-100 border border-gray-200 p-4 mb-8 rounded">
            <p>AWSの勉強をしています。以下の問題の形式でタイトル、問題文、選択肢、回答も含めて出題してください。</p>
            <p>内容はランダムで構いません。{ "title": "", "question": "", "choices": [ "1. ", "2. ", "3. ", "4. ], "correct_answer_index": "" }</p>
            <button id="copy-prompt" class="bg-blue-500 text-white px-4 py-2 rounded">コピー</button>
        </div>

        <form action="{{ route('questions.store-gpt') }}" method="POST" class="bg-white p-8 rounded border border-gray-200">
            @csrf
            <div class="mb-4">
                <label for="gpt-generated-json" class="block text-sm mb-2">GPTで生成されたJSON:</label>
                <textarea id="gpt-generated-json" name="gpt-generated-json" rows="10" cols="50" class="w-full p-2 border border-gray-200 rounded" required></textarea>
            </div>

            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">問題を登録する</button>
        </form>

        <a href="{{ route('questions.index') }}" class="block mt-4 text-blue-500">一覧へ戻る</a>
    </div>

    <script>
        document.getElementById('copy-prompt').addEventListener('click', function() {
            const text = 'AWSの勉強をしています。以下の問題の形式でタイトル、問題文、選択肢、回答も含めて出題してください。\n\n内容はランダムで構いません。{ "title": "", "question": "", "choices": [ "1. ", "2. ", "3. ", "4. ], "correct_answer_index": "" }';
            const textarea = document.createElement('textarea');
            textarea.textContent = text;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);
            alert('コピーしました');
        });
    </script>
@endsection
