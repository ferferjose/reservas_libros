<?php
    define("RUTA", $_SERVER['DOCUMENT_ROOT'] . '/ReservaLibros/reservas_libros/');

    require_once RUTA . 'assets/config/config.php';
    require_once RUTA . 'controladores/Administradores.php';

    if (!empty($_POST['user']) && !empty($_POST['password'])) {
        $usuario = $_POST['user'];
        $pw = $_POST['password'];

        $objAdmin = new Administradores();

        if ($objAdmin->inicioSesion($usuario, $pw)) {
            header('location: ../../vistas/panelAdmin.php'); 
            exit;
        } else {
            echo 'Error de inicio de sesión';
        }
    } else {
        echo 'Campos no rellenados';
    }

