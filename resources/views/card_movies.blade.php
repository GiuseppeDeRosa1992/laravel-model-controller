@extends('layouts.app');

@section('content')
    {{-- INCLUDO LE CARD DEI FILM --}}
    @include('partials.card')

    <div class="mY-3">
        <a href="{{ route('home') }}" class="p-2">
            <button class="btn btn-primary">Vai alla Home</button>
        </a>
        <a href="{{ route('movie') }}" class="p-2">
            <button class="btn btn-primary">Vai alla lista dei Film</button>
        </a>
    </div>
@endsection
