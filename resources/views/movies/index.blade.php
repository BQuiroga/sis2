Movies!
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
		Usuario: {{($movie->user == null) ? 'NA' : $movie->user->email}}
		<br>
		Likes: {{$movie->likes}}
		<br>
		<a href="/movies/like/{{$movie->id}}">Like</a>
		<h3>Review of the current movie</h3>
		@foreach ($movie->reviews as $review)
			{{$review->content}}
			<br>
			<br>
		@endforeach
		{!! Form::open(['url'=>'reviews']) !!}
		<br>
		{!! Form::label('name','Review:') !!}
		{!! Form::text('content') !!}
		{!! Form::hidden('movie_id', $movie->id) !!}
		<br><br>
		{!! Form::submit('Guardar') !!}
		{!! Form::close() !!}
	@endforeach

	<a href="/movies/create">Nuevo</a>
@stop