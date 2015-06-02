
@extends('layout')
@section('content')
	<h1>Movies</h1>
	@foreach ($movies as $movie)
		<h2><a href="/movies/{{$movie->id}}">{{$movie->name}}</a></h2>
		<p>{{$movie->description}}</p>
		<a href="/movies/{{$movie->id}}/edit">Editar</a>
		{!! Form::open(array('route' => array('movies.destroy', $movie->id), 'method' => 'delete')) !!}
		<button type="submit" class="btn btn-danger btn-mini">Borrar</button>
		{!! Form::close() !!}
		Likes: {{$movie->likes}}
		<br>
		<h3>Review of the current movie</h3>
		@foreach ($movie->reviews as $review)
			{{$review->content}}
			<br>
			Review created by:
			{{$review->user->name}}
			<br>
		@endforeach
		<a href="/movies/like/{{$movie->id}}">Like</a>
		
	@endforeach

	<a href="/movies/create">Nuevo</a>
@stop