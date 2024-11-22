<?php
    define("RUTA", $_SERVER['DOCUMENT_ROOT'] . '/ReservaLibros/reservas_libros/');

    try {
        require_once RUTA . 'controladores/CUsuarios.php';

        if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password2'])) {
            $email = $_POST['email'];
            $pw = $_POST['password'];
            $pw2 = $_POST['password2'];

            $objUsuario = new CUsuarios();

            try {
                if ($objUsuario->registro($email, $pw, $pw2)) {
                    header('location: ../../vistas/inicio.php');
                    exit;
                } else {
                    header('location: ../../login.php');
                    exit;
                }
            } catch (Exception $e) {
                echo 'Ocurrió un error al registrar el usuario. Por favor, intente nuevamente.';
            }
        } else {
            echo 'No se ha rellenado algún campo';
        }
    } catch (Exception $e) {
        echo 'Ocurrió un error al procesar la solicitud. Intente nuevamente más tarde.';
    }
