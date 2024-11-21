<?php
    class MAdministradores {
        private $conexion;

        public function __construct(){
            require_once __DIR__ . '/../assets/config/configDb.php';
            $this->conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
            $this->conexion->set_charset("utf8"); 
            $controlador = new mysqli_driver();
            $controlador->report_mode = MYSQLI_REPORT_OFF;
        }

        public function inicioSesion($usuario,$password) {
            $sql = "SELECT * FROM administracion WHERE usuario = '$usuario' && contrasenia = '$password'";

            $resultado = $this->conexion->query($sql);

            if($resultado->num_rows > 0){
                $fila = $resultado->fetch_assoc();
                session_start();
                $_SESSION['id'] = $fila['idAdmin'];
                $_SESSION['usuario'] = $fila['usuario'];
                $_SESSION['rol'] = 'adm';
                return true;
            }
            return false;
        }

    }
?>