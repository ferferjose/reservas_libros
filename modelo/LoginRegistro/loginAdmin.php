<?php
    require_once '../../controladores/Administradores.php';

    if(!empty($_POST['usuario']) && !empty($_POST['password'])){
        $usuario = $_POST['usuario'];
        $pw = $_POST['password'];

        $objAdmin = new Administradores();

        if($objAdmin->inicioSesion($usuario,$pw))
            header('location: ../vistas/reservaLibros1Adm.php');
        else
            echo 'Error de inicio de sesión';
    }
    else
        echo 'Campos no rellenados';