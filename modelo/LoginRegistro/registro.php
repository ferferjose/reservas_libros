<?php
define("RUTA", $_SERVER['DOCUMENT_ROOT'] . '/ReservaLibros/reservas_libros/');

require_once RUTA . 'assets/config/config.php';
require_once RUTA . 'controladores/Usuarios.php';

if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password2'])) {
    $email = $_POST['email'];
    $pw = $_POST['password'];
    $pw2 = $_POST['password2'];

    $objUsuario = new Usuarios();

    if ($objUsuario->registro($email, $pw, $pw2)) {
        header('location: ../../vistas/inicio.php');
        exit;
    } else {
        header('location: ../../login.php');
        exit;
    }
} else {
    echo 'No se ha rellenado algún campo';
}
?>
