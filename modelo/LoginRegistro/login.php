<?php
    define("RUTA", $_SERVER['DOCUMENT_ROOT'] . '/ReservaLibros/reservas_libros/');

    try {
        require_once RUTA . 'controladores/CUsuarios.php';

        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $pw = $_POST['password'];

            $objUsuario = new CUsuarios();

            try {
                if ($objUsuario->login($email, $pw)) {
                    header('location: ../../vistas/inicio.php');
                    exit;
                } else {
                    header('location: ../../login.php?msj=Correo o contraseña incorrectos');
                    exit;
                }
            } catch (Exception $e) {
                header('location: ../../login.php?msj=Ocurrió un error, intente nuevamente');
                exit;
            }
        } else {
            echo 'Correo o contraseña no rellenados';
        }
    } catch (Exception $e) {
        echo 'Ocurrió un error al procesar la solicitud. Intente nuevamente más tarde.';
    }
