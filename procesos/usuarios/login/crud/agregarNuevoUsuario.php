<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $datos = array(
    "paterno" => $_POST['paterno'],
    "materno" => $_POST['materno'],
    "nombre" => $_POST['nombre'],
    "fechaNacimiento" => $_POST['fecha_nacimiento'],
    "sexo" => $_POST['sexo'],
    "telefono" => $_POST['telefono'],
    "correo" => $_POST['correo'],
    "usuario" => $_POST['usuario'],
    "password" => sha1($_POST['password']),
    "idRol" => $_POST['idRol'],
    "ubicacion" => $_POST['ubicacion']
);

include "../../../../clases/Usuarios.php";
$Usuarios = new Usuarios();

echo $Usuarios -> agregarNuevoUsuario($datos);

?>