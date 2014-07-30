<?php 	


class JuegosController extends BaseController{

	public function index(){

		$juegos = Juego::all();

		return View::make('index', compact('juegos'));
	}

	public function crear(){

		return View::make('crear');
	}

	public function gestionaCreacion(){

		//gestiona el form de creacion
		$juego = new Juego;
		$juego->titulo = Input::get('titulo');
		$juego->publicadora = Input::get('publicadora');
		$juego->completado = Input::has('completado');
		$juego->save();	

		return Redirect::action('JuegosController@index');	
	}

	public function editar(Juego $juego){

		return View::make('editar', compact('juego'));
	}
 
	public function gestionaEdicion(){

		//gestiona el formulario de edicion
		$juego = Juego::findOrFail(Input::get('id'));
		$juego->titulo = Input::get('titulo');
		$juego->publicadora = Input::get('publicadora');
		$juego->completado = Input::has('completado');
		$juego->save();

		return Redirect::action('JuegosController@index');
	}

	public function borrar(Juego $juego){

		return View::make('borrar', compact('juego'));
	}

	public function gestionaBorrado(){

		//gestiona el form de borrado
		$id = Input::get('juego');
		$juego = Juego::findOrFail($id);
		$juego->delete();

		return Redirect::action('JuegosController@index');
	}


}

 ?>