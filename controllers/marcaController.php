<?php

require_once 'models/marca.php';

class marcaController{

    public function crear(){

        require_once 'views/forms/newMarca.php';
    }

    public function save(){

        if(isset($_POST)){

            $name = isset($_POST['name']) ? $_POST['name'] : 'false';

            if($name){

                $marca = new Marca;

                $marca->setName($name);
                
                /*creacion de carpeta marca*/

                $ruta = 'views/marcas/'.$name;

                if(!file_exists($ruta)){
                    mkdir($ruta,0777,true);
                    echo 'se creo la carpeta '. $name;
                    
                    $marca->setRuta($ruta);
                }else{
                    echo 'la carpeta ya existia';
                }

                /* Guardar imagen */

                if (isset($_FILES['logo']) && $_FILES['logo']['error'] == UPLOAD_ERR_OK) {

                    $image = $_FILES['logo'];
                    $fileName = $image['name'];
                    $fileTemp = $image['tmp_name'];
                }else{
                    echo 'error con los archivos de imagen';
                }

                /* Mover imagen */

                $img_path = $ruta.'/'.$fileName;

                if(move_uploaded_file($fileTemp,$img_path)){
                    $marca->setImage($fileName);
                }

                $save = $marca->save();

                if($save){
                    $_SESSION['marca'] = 'complete';
                
                }else{
                    $_SESSION['marca'] = 'failed';
                }
            }
        }else{
            $_SESSION['marca'] = 'failed';
        }

        header('location:'.base_url.'/marca/crear');
    }
}