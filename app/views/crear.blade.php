@extends('plantilla')

@section('contenido')
	<div class="page-header">
		<h1 class="text-center">Crear Juego <small>Y terminarlo algún día!!</small></h1>
	</div>

	<div class="col-md-6">
		{{ Form::open(array('action' => 'JuegosController@gestionaCreacion')) }}
	<div class="form-group">
		{{ Form::label('titulo', 'Título') }}
		{{ Form::text('titulo', Input::old('titulo'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('publicadora', 'Publicadora') }}
		{{ Form::text('publicadora', Input::old('publicadora'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('completado', '¿Completado?')}}
		{{ Form::checkbox('completado', true) }}
	</div>
	{{ Form::submit('Crear', array('class' => 'btn btn-primary')) }}
	{{ Form::close() }}
	


	</div>

	

@stop