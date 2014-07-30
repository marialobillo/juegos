@extends('plantilla')

@section('contenido')
	<div class="page-header">
		<h1 class="text-center">
			Editar Juego <small>Ánimo, márcalo como completado!!</small>
		</h1>
	</div>

	<div class="col-md-6">
	{{ Form::open(array('action' => 'JuegosController@gestionaEdicion')) }}
		{{ Form::hidden('id', $juego->id) }}
	<div class="form-group">
		{{ Form::label('titulo', 'Título') }}
		{{ Form::text('titulo', $juego->titulo, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('publicadora', 'Publicadora') }}
		{{ Form::text('publicadora', $juego->publicadora, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('completado', 'Completado?') }}
		{{ Form::checkbox('completado', $juego->completado) }}
	</div>
	{{ Form::submit('Guardar Cambios', array('class' => 'btn btn-primary')) }}
	<a href="{{ action('JuegosController@index') }}" class="btn btn-link"></a>
	{{ Form::close() }}
		
	</div>

@stop