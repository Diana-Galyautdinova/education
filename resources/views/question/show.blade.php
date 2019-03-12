@extends('layouts.app')

@section('title', $question->id)

@section('content')
    {!! $question->text !!}
@endsection
