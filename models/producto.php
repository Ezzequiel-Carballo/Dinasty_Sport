<?php

class Producto{
	private $id;
	private $categoria_id;
	private $marca_id;
	private $name;
	private $categoria;
	private $marca;
	private $genero;
	private $description;
	private $color;
	private $precio;
	private $stock;
	private $oferta;
	private $fecha;
	private $image_logo;
	private $image;
	private $image_path;
	private $image_post;


	private $db;
	
	public function __construct() {
		$this->db = Database::connect();
	}
	
	
	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}

	public function getCategoria_id()
	{
		return $this->categoria_id;
	}

	public function setCategoria_id($categoria_id)
	{
		$this->categoria_id = $categoria_id;

		return $this;
	}

	public function getMarca_id()
	{
		return $this->marca_id;
	}
 
	public function setMarca_id($marca_id)
	{
		$this->marca_id = $marca_id;

		return $this;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}

	
	public function getCategoria()
	{
		return $this->categoria;
	}

	public function setCategoria($categoria)
	{
		$this->categoria = $categoria;

		return $this;
	}


	public function getMarca()
	{
		return $this->marca;
	}

	public function setMarca($marca)
	{
		$this->marca = $marca;

		return $this;
	}

	
	public function getGenero()
	{
		return $this->genero;
	}

	public function setGenero($genero)
	{
		$this->genero = $genero;

		return $this;
	}

	public function getDescription()
	{
		return $this->description;
	}
 
	public function setDescription($description)
	{
		$this->description = $description;

		return $this;
	}


	public function getColor()
	{
		return $this->color;
	}

	public function setColor($color)
	{
		$this->color = $color;

		return $this;
	}

	public function getPrecio()
	{
		return $this->precio;
	}

	public function setPrecio($precio)
	{
		$this->precio = $precio;

		return $this;
	}

	public function getStock()
	{
		return $this->stock;
	}

	public function setStock($stock)
	{
		$this->stock = $stock;

		return $this;
	}

	public function getOferta()
	{
		return $this->oferta;
	}

	public function setOferta($oferta)
	{
		$this->oferta = $oferta;

		return $this;
	}

	public function getFecha()
	{
		return $this->fecha;
	}

	public function setFecha($fecha)
	{
		$this->fecha = $fecha;

		return $this;
	}

	public function getImage_logo()
	{
		return $this->image_logo;
	}

	public function setImage_logo($image_logo)
	{
		$this->image_logo = $image_logo;

		return $this;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function setImage($image)
	{
		$this->image = $image;

		return $this;
	}

	public function getImage_path()
	{
		return $this->image_path;
	}

	public function setImage_path($image_path)
	{
		$this->image_path = $image_path;

		return $this;
	}

	public function getImage_post()
	{
		return $this->image_post;
	}

	public function setImage_post($image_post)
	{
		$this->image_post = $image_post;

		return $this;
	}


	public function getAll(){
		$productos = $this->db->query("SELECT * FROM productos ORDER BY id DESC");
		return $productos;
	}
	
	public function getAllCategory(){
		$sql = "SELECT p.*, c.nombre AS 'catnombre' FROM productos p "
				. "INNER JOIN categorias c ON c.id = p.categoria_id "
				. "WHERE p.categoria_id = {$this->getCategoria_id()} "
				. "ORDER BY id DESC";
		$productos = $this->db->query($sql);
		return $productos;
	}
	
	public function getRandom($limit){
		$productos = $this->db->query("SELECT * FROM productos ORDER BY RAND() LIMIT $limit");
		return $productos;
	}
	
	public function getOne(){
		$producto = $this->db->query("SELECT * FROM productos WHERE id = {$this->getId()}");
		return $producto->fetch_object();
	}
	
	public function save(){
		$sql = "INSERT INTO productos VALUES(NULL, '{$this->getCategoria_id()}','{$this->getMarca_id()}',
											'{$this->getName()}', '{$this->getCategoria()}','{$this->getMarca()}',
											'{$this->getGenero()}', '{$this->getDescription()}',
											'{$this->getColor()}', '{$this->getPrecio()}', '{$this->getStock()}', 
											'{$this->getOferta()}', CURDATE(), '{$this->getImage_logo()}','{$this->getImage()}', 
											'{$this->getImage_path()}','{$this->getImage_post()}')";
		$save = $this->db->query($sql);

		$result = false;
		if(!$save){
			echo "Error: " . $this->db->error;
		}else{
			$result = true;
		}
		
		return $result;
	}
	
	public function edit(){
		$sql = "UPDATE productos SET nombre='{$this->getName()}', descripcion='{$this->getDescription()}', 
									precio={$this->getPrecio()}, stock={$this->getStock()}, categoria_id={$this->getCategoria_id()}";
		
		if($this->getImage() != null){
			$sql .= ", imagen='{$this->getImage()}'";
		}
		
		$sql .= " WHERE id={$this->id};";
		
		
		$save = $this->db->query($sql);
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}
	
	public function delete(){
		$sql = "DELETE FROM productos WHERE id={$this->id}";
		$delete = $this->db->query($sql);
		
		var_dump($sql);
		var_dump($delete);
		die();
		$result = false;
		if($delete){
			$result = true;
		}
		return $result;
	}
}