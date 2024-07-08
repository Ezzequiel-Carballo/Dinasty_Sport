<?php
require_once 'models/producto.php';
require_once 'models/marca.php';
require_once 'models/categoria.php';

class productoController{

    public function index(){
        require_once 'views/layout/cabezal.php';
        require_once 'views/layout/conteiner.php';
    }

    public function detail(){

        require_once 'views/productos/ver.php';
    }

    public function crear(){

        require_once 'views/forms/newProducto.php';
    }

    public function save(){

        if(isset($_POST)){
            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : '';
            $marca = isset($_POST['marca']) ? $_POST['marca'] : '';
            $genero = isset($_POST['genero']) ? $_POST['genero'] : '';
            $description = isset($_POST['description']) ? $_POST['description'] : '';
            $color = isset($_POST['color']) ? $_POST['color'] : '';
            $precio = isset($_POST['precio']) ? $_POST['precio'] : '';
            $stock = isset($_POST['stock']) ? $_POST['stock'] : '';


            if($name && $categoria && $marca && $color && $description && $precio && $stock){

                $product = new Producto;

                $product->setName($name);
                $product->setCategoria($categoria);
                $product->setMarca($marca);
                $product->setGenero($genero);
                $product->setDescription($description);
                $product->setColor($color);
                $product->setPrecio($precio);
                $product->setStock($stock);

                $calc = ceil($precio / 6);

                
                $product->setOferta($calc);
                
                /* DATOS DE LA CATEGORIA */
                
                $categ = new Categoria;
                $categ->setName($categoria);
                
                $idObject = $categ->consultId();
                $idCateg = $idObject->id;
                
                
                /* DATOS DE LA MARCA */
                
                $consult = new Marca;
                $consult->setName($marca);
                
                $idObject = $consult->consultId();
                $imgObject = $consult->consultImg();

                $idMarca = $idObject->id;
                $imgMarca = $imgObject->image;               

                
                $product->setCategoria_id($idCateg);
                $product->setMarca_id($idMarca);
                $product->setImage_logo($imgMarca);
                
                /*               */
                
                $image = $_FILES['image'];
                $image_name = $image['name'];
                
                $image_path = $_FILES['image_path'];
                $image_path_name = $image_path['name'];
                
                $image_post = $_FILES['image_post'];
                $image_post_name = $image_post['name'];
                
                $product->setImage($image_name);
                $product->setImage_path($image_path_name);
                $product->setImage_post($image_post_name);
                
                $save = $product->save();

                if($save){
                    $_SESSION['producto'] = 'complete';
                    
                }else{
                    $_SESSION['producto'] = 'failed';
                }
            }
        }else{
            $_SESSION['producto'] = 'failed';
        }

        header('location:'.base_url.'producto/crear');

    }

}