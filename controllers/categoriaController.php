<?php 

require_once 'models/categoria.php';
require_once 'models/colores.php';

class categoriaController{

    public function crear(){
		require_once 'views/forms/newCategoria.php';
	}

	public function crearColor(){
		require_once 'views/forms/newColores.php';
	}
	
	public function save(){
	    if(isset($_POST) && isset($_POST['name'])){
			// Guardar la categoria en bd
			$categoria = new Categoria();
			$categoria->setName($_POST['name']);
			$save = $categoria->save();
		}
		header("Location:".base_url."categoria/crear");
	}

	public function saveColor(){
	    if(isset($_POST) && isset($_POST['name'])){
			// Guardar la categoria en bd
			$categoria = new Colores();
			$categoria->setName($_POST['name']);
			$save = $categoria->save();
		}
		header("Location:".base_url."categoria/crearColor");
	}
	
	
}