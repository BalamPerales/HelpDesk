<?php
// Verificamos la sesión
session_start();

// Si no existe la sesión
if (!isset($_SESSION['id_usuario'])) {
    // Lo mandamos de regreso a la raíz
    header("Location: ../index.php");
    exit();
}

include 'header.php'; 
?>

<div class="container mt-4">
    <h2>Dashboard</h2>
    <p>Aquí pondremos las tarjetas de dispositivos</p>
</div>

<?php include 'footer.php'; ?>