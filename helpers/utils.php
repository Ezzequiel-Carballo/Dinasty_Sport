<?php

class Utils{

	public static function mostrarError($errores, $campo){
        $alerta = '';
        if(isset($errores[$campo]) && !empty($campo)){
            $alerta = "<div class='alert-error'>".$errores[$campo].'</div>';
        }
        
        return $alerta;
    }

    public static function borrarErrores(){
        $borrado = false;
        
        if(isset($_SESSION['errores'])){
            $_SESSION['errores'] = null;
            $borrado = true;
        }
            
        if(isset($_SESSION['completado'])){
            $_SESSION['completado'] = null;
            $borrado = true;
        }
        
        return $borrado;
    }
	
	public static function deleteSession($name){
		if(isset($_SESSION[$name])){
			$_SESSION[$name] = null;
			unset($_SESSION[$name]);
		}
		
		return $name;
	}
	
	public static function isAdmin(){
		if(!isset($_SESSION['admin'])){
			header("Location:".base_url);
		}else{
			return true;
		}
	}
	
	public static function isIdentity(){
		if(!isset($_SESSION['identity'])){
			header("Location:".base_url);
		}else{
			return true;
		}
	}
	
	public static function showCategorias(){
		require_once 'models/categoria.php';
		$categoria = new Categoria();
		$categorias = $categoria->getAll();
		return $categorias;
	}

	public static function showMarcas(){
		require_once 'models/marca.php';
		$marca = new Marca();
		$marcas = $marca->getAll();
		return $marcas;
	}

	public static function showColores(){
		require_once 'models/colores.php';
		$colores = new Colores();
		$color = $colores->getAll();
		return $color;
	}

	public static function showProduct(){
		require_once 'models/producto.php';
		$producto = new Producto();
		$product = $producto->getAll();
		return $product;
	}

	

	public static function oneProduct(){
		require_once 'models/producto.php';
		if(isset($_GET['id'])){
			$id = $_GET['id'];

			$producto = new Producto();
			$producto->setId($id);
			
			$product = $producto->getOne();
			return $product;
		}
	}
	
	public static function statsCarrito(){
		$stats = array(
			'count' => 0,
			'total' => 0
		);
		
		if(isset($_SESSION['carrito'])){
			$stats['count'] = count($_SESSION['carrito']);
			
			foreach($_SESSION['carrito'] as $producto){
				$stats['total'] += $producto['precio']*$producto['unidades'];
			}
		}
		
		return $stats;
	}
	
	public static function showStatus($status){
		$value = 'Pendiente';
		
		if($status == 'confirm'){
			$value = 'Pendiente';
		}elseif($status == 'preparation'){
			$value = 'En preparación';
		}elseif($status == 'ready'){
			$value = 'Preparado para enviar';
		}elseif($status = 'sended'){
			$value = 'Enviado';
		}
		
		return $value;
	}
	
}
