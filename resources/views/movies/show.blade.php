@extends('layout')
@section('content')
	<h2>{{$movie->name}}</h2>
	<p>{{$movie->description}}</p>
	{!! Form::model($movie, ['method'=>'PATCH', 'action' => ['MoviesController@rating', $movie->id]]) !!}
	{!! Form::label('name','Rating:') !!}
	{!! Form::input('number', 'rating') !!}
	<br><br>
	{!! Form::submit('Guardar') !!}

	{!! Form::close() !!}
@stop