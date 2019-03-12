@extends('layouts.app')

@section('title', 'Questions')

@section('content')
    <ul class="list-group list-group-flush">
        @foreach ($questions as $question)
            <li class="list-group-item">
                <a href="{{ route('question.show', $question) }}">question {{ $question->id }}</a>
            </li>
        @endforeach
    </ul>
@endsection
