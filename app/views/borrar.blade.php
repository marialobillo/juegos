@extends('plantilla')

@section('contenido')
	<div class="page-header">
		<h1 class="text-center">
			Borrar {{ $juego->titulo }} <small>¿Estás seguro?</small>
		</h1>
	</div>

	{{ Form::open(array('action' => 'JuegosController@gestionaBorrado')) }}
		{{ Form::hidden('juego', $juego->id) }}
		{{ Form::submit('Sí', array('class' => 'btn btn-danger')) }}
		<a href="{{ action('JuegosController@index')}}" class="btn btn-default">Ni hablar!</a>
	{{ Form::close() }}
	
@stop