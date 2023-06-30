<?php
    include_once '../model/Usuario.php';

    session_start();

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $usuario = new Usuario();
    

    if(!empty($_SESSION['id_tipo'])){
        
        switch($_SESSION['id_tipo']){
            case 1:
                header('Location: ../view/adm_catalogo.php');
                break;

            case 2:
                header('Location: ../view/tec_catalogo.php');
                break;
        }

    }else{
        $usuario->Loguearse($user,$pass);
        if(!empty($usuario -> objetos)){
            foreach($usuario->objetos as $objeto){
                $_SESSION['usuario']=$objeto -> id_usuario;
                $_SESSION['id_tipo']=$objeto -> id_tipo;
                $_SESSION['nombre']=$objeto -> nombre;
            }
    
            switch($_SESSION['id_tipo']){
                case 1:
                    header('Location: ../view/adm_catalogo.php');
                    break;
    
                case 2:
                    header('Location: ../view/tec_catalogo.php');
                    break;
            }
        }else{
            header('Location: ../view/login.php');
        }
    }
    

    

?>