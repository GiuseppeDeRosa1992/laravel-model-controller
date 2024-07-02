{{-- ESTENDO HEADER DA LAYOUTS.APP --}}
@extends('layouts.app')

{{-- RICHIAMO YELDS TRAMITE SECTION --}}
@section('content')
    <a href="{{ route('movie') }}" class="p-2">
        <button class="btn btn-primary">Vai alla lista Film</button>
    </a>
    <a href="{{ route('card_movie') }}" class="p-2">
        <button class="btn btn-primary">Vai alle Card dei film</button>
    </a>
@endsection
