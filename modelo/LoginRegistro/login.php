<?php
    require_once __DIR__ . '/../../controladores/Usuarios.php';

    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $email = $_POST['email'];
        $pw = $_POST['password'];

        $objUsuario = new Usuarios();

        if($objUsuario->login($email,$pw)){
            header('Location: ../vistas/inicio.php');
            exit;
        }else{
            echo 'Correo o contraseña incorrectos';
        }
    }else{
        echo 'Correo o contraseña no rellenados';
    }