<?php
    require_once '../modelo/conexion.php';

    class Usuarios{
        private $email;
        private $pw;
        public $pwBd;

        private $conexion;

        public function __construct(){
            $this->conexion = new Conexion();
        }

        public function login($email, $password) {
            $this->email = $email;
            $this->pw = $password;
        
            $this->pwBd = $this->obtenerContraseñaBd();
        
            if ($this->pwBd && password_verify($this->pw, $this->pwBd))
                return true;
            else
                return false;
        }

        public function obtenerContraseñaBd (){
            $sql = "SELECT contraseña FROM usuarios WHERE email = :email";

            $resultado = $this->conexion->prepare($sql);

            $resultado->bindParam(':email',$this->email);

            $resultado->execute();

            $resultado = $resultado->fetch(PDO::FETCH_ASSOC);

            return $resultado['contraseña'];
        }
    }
?>