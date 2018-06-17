<?php
    class Conectar{

        public static function conexion(){

            $dsn = 'mysql:dbname=mvcV1;host=127.0.0.1';
            $usuario = 'root';
            $contraseña = '';
            try {
                $conect = new PDO($dsn, $usuario, $contraseña);
                return $conect;
            } catch (PDOException $e) {
                echo 'Falló la conexión: ' . $e->getMessage();
            }
        }
    }

?>