@extends('layouts.app')

@section('title', 'Question '.$question->id)

@section('content')
    <p class="card-text">
        {{ $question->text }}
    </p>
    @if (session('status') == $question::ANSWER_VALID)
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @elseif (session('status') == $question::ANSWER_INVALID)
        <div class="alert alert-danger">
            {{ session('status') }}
            <a href="{{ route('theory.show', $question->theory) }}">{{ $question->theory->name}}</a>
        </div>
    @endif
    <form method="POST" action="{{ route('question.answer', $question) }}">
        @csrf
        <div class="form-group">
            @if($question->answers->count() > 1)
                @foreach ($question->answers as $val)
                    <div class="form-check">
                        <label class="form-check-label" for="answerRadios{{ $loop->iteration }}">
                            <input class="form-check-input" type="radio" name="answer"
                                   id="answerRadios{{ $loop->iteration }}" value="{{ $val->text }}">
                            {{ $val->text }}
                        </label>
                    </div>
                @endforeach
            @else
                <input class="form-control" type="text" name="answer" title="{{ $question->answers[0]->text }}">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
@endsection
