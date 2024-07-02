@extends('layouts.app')

@section('content')
    <h1>Quanti film ci sono nel Database: {{ count($movies) }}</h1>
    <a href="">
        <button class="btn btn-primary">Vai alle Card</button>
    </a>
    <a href="{{ route('movie') }}">
        <button class="btn btn-primary">Vai alla lista Film</button>
    </a>
@endsection
