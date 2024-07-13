@extends('layouts.app')

@section('content')
	<ul>
		@foreach ($movies as $movie)
			<li>{{ $movie->id }}: {{ $movie->title }}, {{ $movie->vote }}, {{ $movie->nationality }}</li>
		@endforeach
	</ul>

	<a href="{{ route('home') }}" class="p-2"><button class="btn btn-primary">Vai alla Home</button></a>
	<a href="{{ route('card_movie') }}" class="p-2"><button class="btn btn-primary">Vai alle Card dei film</button></a>
@endsection
