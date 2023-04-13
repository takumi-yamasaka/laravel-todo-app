@extends('layout')

@section('content')
    <h1 class="mb-4">問題集一覧</h1>
    <ul class="list-group mb-3">
        @foreach($questions as $question)
            <li class="list-group-item">
                <a href="{{ route('questions.show', $question->id) }}">{{ $question->title }}</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('questions.create') }}" class="btn btn-primary">問題登録</a>
@endsection
