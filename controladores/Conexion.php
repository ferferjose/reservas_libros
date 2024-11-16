<?php
    class Conexion extends PDO{
        private $tipoBase = 'mysql';
        private $host = 'esvirgua.com';
        private $nombreBase = 'user2daw_BD2-07';
        private $usuario = 'user2daw_07';
        private $contrasena = 'KsP2l+qfPWc9';

        public function __construct() {
            // Construir el DSN (Data Source Name)
            $dsn = "$this->tipoBase:host=$this->host;dbname=$this->nombreBase;charset=utf8mb4";
    
            try {
                // Llamar al constructor de la clase PDO
                parent::__construct($dsn, $this->usuario, $this->contrasena);
            } catch (PDOException $e) {
                // Manejar errores de conexión
                echo "Error de conexión: " . $e->getMessage();
                exit;
            }
        }
    }
?>