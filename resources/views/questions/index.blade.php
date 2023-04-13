@extends('layouts.app')

@section('content')
    <h1>問題集一覧</h1>
    <ul>
        @foreach($questions as $question)
            <li>
                <a href="{{ route('questions.show', $question->id) }}">{{ $question->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
