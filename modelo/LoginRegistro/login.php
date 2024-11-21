<?php
    define("RUTA", $_SERVER['DOCUMENT_ROOT'] . '/ReservaLibros/reservas_libros/');

    require_once RUTA . 'controladores/CUsuarios.php';

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $pw = $_POST['password'];

        $objUsuario = new CUsuarios();

        if ($objUsuario->login($email, $pw)) {
            echo "Login exitoso. Redirigiendo...";
            header('location: ../../vistas/inicio.php');
            exit;
        } else {
            header('location: ../../login.php?msj="Correo o contraseña incorrectos"');
        }
    } else {
        echo 'Correo o contraseña no rellenados';
    }

