@extends('plantilla')

@section('contenido')
	<div class="page-header">
		<h1 class="text-center">
			Todos los Juegos <small>Hazte con todos!!</small>
		</h1>
	</div>

	<div class="panel panel-default">
		<div class="panel-body">
			<a href="{{ action('JuegosController@crear')}}">Nuevo Juego</a>
		</div>
	</div>


	@if($juegos->isEmpty())
		<p>No hay juegos!</p>
	@else
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Título</th>
					<th>Publicadora</th>
					<th>Completado</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($juegos as $juego)
					<tr>
						<td>{{ $juego->titulo }}</td>
						<td>{{ $juego->publicadora }} </td>
						<td>{{ $juego->completado ? 'Si' : 'No'}} </td>
						<td>
							<a href="{{ action('JuegosController@editar', $juego->id) }}" 
								class="btn btn-default"></a>
							<a href="{{ action('JuegosController@borrar', $juego->id) }}" 
								class="btn btn-danger"></a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@endif

@stop
