<?php
    class Usuarios{
        private $email;
        private $pw;
        private $pwBd;
        private $conexion;

        public function __construct(){
            require_once __DIR__ . '/../modelo/conexion.php';
            $this->conexion = $conexion;
        }

        public function login($email, $password) {
            $this->email = $email;
            $this->pw = $password;
        
            $this->pwBd = $this->obtenerContraseñaBd();
        
            if ($this->pwBd && password_verify($this->pw, $this->pwBd)){
                $this->sesionInicio();
                return true;
            }
            else
                return false;
        }

        public function registro($email, $password, $password2){
            $this->email = $email;

            $sql = "SELECT * FROM usuarios WHERE email = '".$this->email."'";

            $resultado = $this->conexion->query($sql);
            if($resultado->num_rows <= 0){
                if($password === $password2){
                    $this->pw = password_hash($password, PASSWORD_DEFAULT);
                    if($this->insertarUsuario()){
                        $this->sesionInicio();
                        return true;
                    }
                }  
                return false;
            }
            return false;
        }

        private function obtenerContraseñaBd (){
            $sql = "SELECT contrasenia FROM usuarios WHERE email = '".$this->email."'";

            $resultado = $this->conexion->query($sql);

            if($resultado->num_rows > 0) {
                $fila = $resultado->fetch_assoc();
                return $fila['contrasenia'];
            }
        }

        private function sesionInicio() {
            $sql = "SELECT * FROM usuarios WHERE email = '".$this->email."'";

            $resultado = $this->conexion->query($sql);
            if($resultado->num_rows > 0) {
                $fila = $resultado->fetch_assoc();
                session_start();
                $_SESSION['id'] = $fila['idUsuario'];
                $_SESSION['rol'] = $fila['rol'];
            }
            
        }

        private function insertarUsuario() {

            $sql = "INSERT INTO usuarios (correo,contrasenia) VALUES ('$this->email','$this->pw')";

            $resultado = $this->conexion->query($sql);

            if($resultado){
                return true;
            }
            return false;
        }
    }
?>