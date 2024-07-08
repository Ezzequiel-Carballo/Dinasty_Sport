<?php

class Colores{
	private $id;
	private $name;
	private $db;
	
	public function __construct() {
		$this->db = Database::connect();
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

	public function getDb()
	{
		return $this->db;
	}

	public function setDb($db)
	{
		$this->db = $db;

		return $this;
	}

    public function getAll(){
		$colores = $this->db->query("SELECT * FROM colores ORDER BY id DESC;");
		return $colores;
	}

    public function save(){
		$sql = "INSERT INTO colores VALUES(NULL, '{$this->getName()}');";
		$save = $this->db->query($sql);
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}
}