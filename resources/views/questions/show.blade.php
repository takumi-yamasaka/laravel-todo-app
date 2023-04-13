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

        <button type="button" onclick="checkAnswer()">回答する</button>
    </form>

    <div id="result" class="mt-5"></div>

   

    <a href="{{ route('questions.index') }}" class="mt-5">一覧へ戻る</a>
