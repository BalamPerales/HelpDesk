<?php
session_start(); 

// Conexión a la base de datos
require_once 'conexion.php'; 

// Verificamos si hay solicitud
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Atrapamos lo del input
    $usuario_login = $_POST['usuario']; 
    $password = $_POST['password'];

    try {
        // Abrimos la conexión
        $conexion = Conexion::conectar();

        $sql = "SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password";
        $stmt = $conexion->prepare($sql);

        // Intercambiamos los escudos por los datos reales y disparamos
        $stmt->bindParam(':usuario', $usuario_login);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        // Intentamos atrapar el registro
        $usuario_bd = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario_bd) {
            // Las credenciales coinciden. Guardamos sus datos en sesión.
            $_SESSION['id_usuario'] = $usuario_bd['id_usuario'];
            $_SESSION['nombres'] = $usuario_bd['nombres'];
            $_SESSION['rol'] = $usuario_bd['rol'];

            // Lo mandamos a la vista principal
            header("Location: vistas/inicio.php");
            exit();
        } else {
            // Usuario o contraseña incorrectos. Lo regresamos al login.
            header("Location: index.php?error=1");
            exit();
        }

    } catch (PDOException $e) {
        echo "Error crítico en el sistema: " . $e->getMessage();
    }
} else {
    // Si intentan entrar a este archivo escribiendo la URL directa, los regresamos
    header("Location: index.php");
    exit();
}
?>