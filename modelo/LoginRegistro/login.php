<?php
    require_once '../../controladores/Usuarios.php';

    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $email = $_POST['email'];
        $pw = $_POST['password'];

        $objUsuario = new Usuarios();

        if($objUsuario->login($email,$pw)){
            header('location: ../vistas/reservaLibros1User.php');
        }else{
            echo 'Correo o contraseña incorrectos';
        }
    }else{
        echo 'Correo o contraseña no rellenados';
    }