<?php session_start(); ?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../public/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="../public/css/plantilla.css" />
    <link rel="stylesheet" href="../public/datatable/dataTables.bootstrap4.min.css">
    <title>Help Desk</title>
  </head>
  <body>
    <!-- Navigation -->
    <nav
      class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow"
    >
      <div class="container">
        <a class="navbar-brand" href="#">Help Desk</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
              <a class="nav-link" href="inicio.php">Inicio</a>
            </li>
            <?php if ($_SESSION['usuario']['rol'] == 3) { ?>
            <li class="nav-item">
              <a class="nav-link" href="misDispositivos.php">Mis dispositivos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="misReportes.php">Reportes soporte</a>
            </li>
            <?php } else if($_SESSION['usuario']['rol'] == 1){  ?>

            <!-- Las vistas del administrador -->
            <li class="nav-item">
              <a class="nav-link" href="usuarios.php">Usuarios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="asignacion.php">Asignación</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reportes.php">Reportes</a>
            </li>
            <?php } ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle"  style="color:blue" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Usuario: <?php echo $_SESSION['usuario']['nombre']; ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Editar datos</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item"  style="color:red" href="../procesos/usuarios/login/salir.php">Salir</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
