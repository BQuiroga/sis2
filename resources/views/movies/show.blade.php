@extends('layout')
@section('content')
	<h2>{{$movie->name}}</h2>
	<p>{{$movie->description}}</p>
		{!!Form::label('name','Rating:')!!}
		{!!Form::text('value')!!}
		{!! Form::close() !!}
		<a href="/movies/rating/{{$movie->id}}" >Vote</a>
	<h3>Review of the current movie</h3>
		@foreach ($movie->reviews as $review)
			{{$review->content}}
			<br>
			Review created by:
			{{$review->user->name}}
			<br>

		@endforeach
	{!! Form::open(['url'=>'reviews']) !!}
		<br>
		{!! Form::label('name','Review:') !!}
		{!! Form::text('content') !!}
		{!! Form::hidden('movie_id', $movie->id) !!}
		{!! Form::hidden('user_id', $movie->user->id) !!}
		<br><br>
		{!! Form::submit('Guardar') !!}
		{!! Form::close() !!}
@stop