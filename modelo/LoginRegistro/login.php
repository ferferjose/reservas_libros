<?php
define("RUTA", $_SERVER['DOCUMENT_ROOT'] . '/ReservaLibros/reservas_libros/');

require_once RUTA . 'assets/config/config.php';
require_once RUTA . 'controladores/Usuarios.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $pw = $_POST['password'];

    $objUsuario = new Usuarios();

    if ($objUsuario->login($email, $pw)) {
        echo "Login exitoso. Redirigiendo...";
        header('location: ../../vistas/inicio.php');
        exit;
    } else {
        header('location: ../../vistas/panelAdmin.php');
    }
} else {
    echo 'Correo o contraseña no rellenados';
}
?>
