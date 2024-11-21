<?php
    class MUsuarios {
        private $conexion;
        private $pwBd;
        private $pw;

        private $email;

        public function __construct(){
            require_once __DIR__ . '/../assets/config/configDb.php';
            $this->conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
            $this->conexion->set_charset("utf8"); 
            $controlador = new mysqli_driver();
            $controlador->report_mode = MYSQLI_REPORT_OFF;
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

        private function obtenerContraseñaBd (){
            $sql = "SELECT contrasenia FROM usuarios WHERE correo = '".$this->email."'";

            $resultado = $this->conexion->query($sql);

            if($resultado->num_rows > 0) {
                $fila = $resultado->fetch_assoc();
                return $fila['contrasenia'];
            }
            return null;
        }

        private function sesionInicio() {
            $sql = "SELECT * FROM usuarios WHERE correo = '".$this->email."'";

            $resultado = $this->conexion->query($sql);
            if($resultado->num_rows > 0) {
                $fila = $resultado->fetch_assoc();
                session_start();
                $_SESSION['id'] = $fila['idUsuario'];
                $_SESSION['rol'] = $fila['rol'];
            }
            
        }

        public function registro($email, $password, $password2){
            $this->email = $email;

            $sql = "SELECT * FROM usuarios WHERE correo = '".$this->email."'";

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

        private function insertarUsuario() {

            $sql = "INSERT INTO usuarios (correo,contrasenia) VALUES ('$this->email','$this->pw')";

            return $this->conexion->query($sql);
        }
    }
?>