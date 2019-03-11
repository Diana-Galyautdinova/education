@extends('layouts.app')

@section('title', $theory->name)

@section('content')
    {!! $theory->text !!}
@endsection
