@extends('layout')
@section('content')
{!! Form::model($movie, ['method'=>'PATCH', 'action' => ['MoviesController@update', $movie->id]]) !!}
{!! Form::label('name','Title:') !!}
{!! Form::text('name') !!}
<br>
{!! Form::label('name','Description:') !!}
{!! Form::text('description') !!}
<br><br>
{!! Form::submit('Guardar') !!}
{!! Form::close() !!}
@stop