<?php
    define("RUTA", $_SERVER['DOCUMENT_ROOT'] . '/ReservaLibros/reservas_libros/');

    try {
        require_once RUTA . 'controladores/CAdministradores.php';

        if (!empty($_POST['user']) && !empty($_POST['password'])) {
            $usuario = $_POST['user'];
            $pw = $_POST['password'];

            $objAdmin = new CAdministradores();

            try {
                if ($objAdmin->inicioSesion($usuario, $pw)) {
                    header('location: ../../vistas/panelAdmin.php'); 
                    exit;
                } else {
                    echo 'Error de inicio de sesión';
                }
            } catch (Exception $e) {
                echo 'Ocurrió un error al iniciar sesión. Por favor, intente nuevamente.';
            }
        } else {
            echo 'Campos no rellenados';
        }
    } catch (Exception $e) {
        echo 'Ocurrió un error al procesar la solicitud. Intente más tarde.';
    }
