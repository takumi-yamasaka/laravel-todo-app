@extends('layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>問題集一覧</h1>
        <div class="action-buttons">
            <a href="{{ route('questions.create') }}">問題登録</a>
            <a href="{{ route('questions.create-gpt') }}">問題登録・チャットGPTモード</a>
        </div>
    </div>
    <ul class="list-group mb-3">
        @foreach($questions as $question)
            <li class="list-group-item">
                <a href="{{ route('questions.show', $question->id) }}" class="stretched-link">{{ $question->title }}</a>
                <div class="action-buttons">
                    <a href="{{ route('questions.show', $question->id) }}">詳細</a>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
