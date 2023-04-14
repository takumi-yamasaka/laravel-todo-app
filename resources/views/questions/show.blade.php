@extends('layout')

@section('content')
    <h1 class="mb-4">詳細画面</h1>

    <form id="quiz-form">
        <div>
            <h2>{{ $question->title }}</h2>
            <p>{{ $question->question }}</p>
        </div>
        
        @php
            $choices = json_decode($question->choices);
        @endphp

        @foreach ($choices as $index => $choice)
            <div>
                <label>
                    <input type="radio" name="choice" value="{{ $index + 1 }}">
                    {{ $choice }}
                </label>
            </div>
        @endforeach

        <button type="button" id = "result" >回答する</button>
        <input type="hidden" name="correct_answer_index" value="{{ $question->correct_answer_index }}">
    </form>

    <a href="{{ route('questions.index') }}" class="mt-5">一覧へ戻る</a>
    <script>
    const result = document.getElementById('result');
    const choices = document.querySelectorAll('input[name="choice"]');
    const correct_answer_index = document.querySelector('input[name="correct_answer_index"]').value;
    result.addEventListener('click', function() {
        let selectedChoice;
        choices.forEach(choice => {
            if (choice.checked) {
                selectedChoice = choice.value;
            }
        });

        if (selectedChoice == correct_answer_index) {
            alert('正解です');
        } else {
            alert('不正解です');
        }
    });
    </script>
@endsection
    