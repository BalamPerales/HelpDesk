<?php

class Conexion{
    public function conectar(){
        $servidor = "localhost";
        $usuario = "dba_hp";
        $password = "hp123456";
        $db = "bd_helpdesk";
        $conexion = mysqli_connect($servidor, $usuario, $password, $db);
        return $conexion;
    } 
}