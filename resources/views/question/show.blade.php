@extends('layouts.app')

@section('title', 'Question '.$question->id)

@section('content')
    {!! $question->text !!}
@endsection
