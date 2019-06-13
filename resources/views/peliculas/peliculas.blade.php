@extends('layouts\app')
@section('content')
	@foreach($peliculas as $pelicula)
		<li>{{ $pelicula }}</li>
	@endforeach
@endsection