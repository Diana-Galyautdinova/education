@extends('layouts.app')

@section('title', 'Theories')

@section('content')
    <ul class="list-group list-group-flush">
        @foreach ($theories as $theory)
            <li class="list-group-item">
                <a href="{{ route('theory.show', $theory) }}">{{ $theory->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection
