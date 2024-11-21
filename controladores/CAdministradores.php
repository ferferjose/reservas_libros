<?php
    class CAdministradores {
        private $objMAdmin;

        public function __construct(){
            require_once __DIR__ . '/../modelo/MAdministradores.php';
            $this->objMAdmin = new MAdministradores();
        }

        public function inicioSesion($usuario,$password) {
            if($this->objMAdmin->inicioSesion($usuario,$password))
                return true;
            return false;
        }
    }