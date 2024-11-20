<?php
    require_once '../../controladores/Administradores.php';

    if(!empty($_POST['user']) && !empty($_POST['password'])){
        $usuario = $_POST['user'];
        $pw = $_POST['password'];

        $objAdmin = new Administradores();

        if($objAdmin->inicioSesion($usuario,$pw))
            header('location: ../vistas/panelAdmin.php');
        else
            echo 'Error de inicio de sesión';
    }
    else
        echo 'Campos no rellenados';