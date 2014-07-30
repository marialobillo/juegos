<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Colección de Juegos</title>
	{{ HTML::style('css/boots.css') }}
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<a href="{{ action('JuegosController@index') }}" class="navbar-brand">
					Colección de Juegos
				</a>
			</div>
		</nav>
		<div class="row">
			<div class="col-md-10">
				@yield('contenido')
			</div>
		</div>

		<div class="row">
			<div class="col-md-10">
				@yield('otro')
			</div>
		</div>
		
		
	</div>
</body>
</html>