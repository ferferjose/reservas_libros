<?php
    require_once '../../controladores/Usuarios.php';

    if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password2'])){
        $email = $_POST['email'];
        $pw = $_POST['password'];
        $pw2 = $_POST['password2'];

        $objUsuario = new Usuarios();

        if($objUsuario->registro($email,$pw,$pw2)){
            header('location: ../../vistas/inicio.php');
        }else{
            header('location: ../../login.php');
        }
    }else{
        echo 'No se ha rellenado algun campo';
    }