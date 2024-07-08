<?php

require_once 'models/users.php';

class usersController{

    public function register(){

        require_once 'views/forms/register.php';
    }

    public function session(){
        require_once 'views/forms/session.php';
    }

    public function save(){
		if(isset($_POST)){

            //Recibir datos del formulario

            $name = isset($_POST['name']) ? $_POST['name'] : 'false';
            $surname = isset($_POST['surname']) ? $_POST['surname'] : 'false';
            $email = isset($_POST['email']) ? $_POST['email'] : 'false';
            $password = isset($_POST['password']) ? $_POST['password'] : 'false';
            $passAdmin = isset($_POST['passAdmin']) ? $_POST['passAdmin'] : 'false';

        
            //Validacion 

            $errores = array();

            if(!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)){
                $val_name = true;                
            }else{
                $val_name = false;
                $errores['name'] = "El nombre es incorrecto";
            }
            
            if(!empty($surname) && !is_numeric($surname) && !preg_match("/[0-9]/", $surname)){
                $val_surname = true;                
            }else{
                $val_surname = false;
                $errores['surname'] = "El apellido es incorrecto";
            }
            
            if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) ){
                $val_email = true;                
            }else{
                $val_email = false;
                $errores['email'] = "El email es incorrecto";
            }
            
            if(!empty($password)){
                $val_password = true;                
            }else{
                $val_password = false;
                $errores['password'] = "La contraseña esta incompleta";
            }

            if($passAdmin == $password){
                $val_password = true; 
            }else{
                $val_password = false;
                $errores['passAdmin'] = "Las contraseñas no coinciden"; 
            }
            
            if(count($errores) == 0){
                
                $user = new Users;
                $user ->setName($name);
                $user ->setSurname($surname);
                $user ->setEmail($email);


                //Password Administrador
                
                if($passAdmin == 'admin'){

                    $user ->setRol('admin');
                }else{
                    
                    $user ->setRol('user');
                }
                
                $user ->setPassword($password);

                $save = $user->save();          

                if($save){
                    $_SESSION['register'] = 'complete';
                
                }else{
                    $_SESSION['errores'] = 'falled';
                }           
            }else{
                $_SESSION['errores'] = $errores;
            }
            header('location:'.base_url.'users/register');
        }
    }

    public function login(){

        if(isset($_POST)){

            $usuario = new Users;
            $usuario-> setEmail($_POST['email']);
            $usuario-> setPassword($_POST['password']);

            $identity = $usuario->login();

            if($identity && is_object($identity)){
                $_SESSION['identity'] = $identity;
                
                if ($identity->rol == 'admin') {
                    $_SESSION['admin'] = true;
                    $_SESSION['rol'] = 'admin';
                } else {
                    $_SESSION['admin'] = false;
                    $_SESSION['rol'] = 'user';
                }

            }else{
                $_SESSION['error_login'] = "Identificacion Fallida";
            }
        }
        header('location:'.base_url);
    }
    
    public function logout(){
        if(isset($_SESSION['identity'])){
            unset($_SESSION['identity']);
        }

        if(isset($_SESSION['admin'])){
            unset($_SESSION['admin']);
        }

        header('location:'.base_url);
    }
}

