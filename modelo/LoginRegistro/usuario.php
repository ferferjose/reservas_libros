<?php
    require_once '../controladores/Usuarios.php';
    require_once '../conexion.php';

    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $email = $_POST['email'];
        $pw = $_POST['password'];

        $objUsuario = new Usuarios();

        if($objUsuario->login($email,$pw)){
            header('Location: ../vistas/inicio.html');
        }else{
            echo 'Correo o contraseña incorrectos';
        }
    }else{
        echo 'Correo o contraseña no rellenados';
    }
?>