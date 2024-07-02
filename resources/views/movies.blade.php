@extends('layouts.app');

@section('content')
    <a href="{{ route('home') }}">Card</a>
    @foreach ($movies as $movie)
        <ul>
            <li>{{ $movie->id }}: {{ $movie->title }} {{ $movie->vote }}</li>
        </ul>
    @endforeach
@endsection
