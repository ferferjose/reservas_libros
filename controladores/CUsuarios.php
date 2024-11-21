<?php
    class CUsuarios{
        private $objMUsuario;

        public function __construct(){
            require_once __DIR__ . '/../modelo/MUsuarios.php';
            $this->objMUsuario = new MUsuarios();
        }

        public function login($email, $password) {
            if($this->objMUsuario->login($email,$password))
                return true;
            return false;
        }

        public function registro($email, $password, $password2){
            if($this->objMUsuario->registro($email,$password,$password2))
                return true;
            return false;
        }
    }
?>