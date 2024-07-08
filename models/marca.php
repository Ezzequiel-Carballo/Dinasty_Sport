<?php

class Marca{
    private $id;
	private $name;
    private $ruta;
	private $image;
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

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}

    public function getRuta()
    {
        return $this->ruta;
    }

    public function setRuta($ruta)
    {
        $this->ruta = $ruta;

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

    public function consultId(){

        $sql = $this->db->query("SELECT id FROM marcas m WHERE m.name = '{$this->getName()}'");
        return $sql->fetch_object();
    }

    public function consultImg(){

        $sql = $this->db->query("SELECT image FROM marcas m WHERE m.name = '{$this->getName()}'");
        return $sql->fetch_object();
    }

    public function getAll(){
		$marcas = $this->db->query("SELECT * FROM marcas ORDER BY id DESC;");
		return $marcas;
	}

    public function save(){

        $sql = "INSERT INTO marcas VALUES (null,'{$this->getName()}','{$this->getRuta()}','{$this->getImage()}')";
        $save = $this->db->query($sql);

        $result = false;

        if($save){
            $result = true;
        }

        return $save;
    }
}