<?php

class Conexion {
    
    public static function conectar() {
        $host = "localhost";
        $bd = "bd_helpdesk"; 
        $usuario = "dba_hp";
        $password = "hp123456";

        try {
            $conexion = new PDO("mysql:host=$host;dbname=$bd", $usuario, $password);
            
            $conexion->exec("set names utf8");
  
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Test de conexión";
            return $conexion;

        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            return null;
        }
    }
}

// Conexion::conectar();