<?php
  session_start();

  if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.html");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../public/bootstrap/bootstrap.min.css" />
  <link rel="stylesheet" href="../public/datatable/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../public/datatable/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../public/fontawesome/css/all.css">
  <link rel="stylesheet" href="../public/datatable/buttons.dataTables.min.css">
  
  <link rel="stylesheet" href="../public/css/triforce_logo.css">
  <link rel="stylesheet" href="../public/css/zelda_style.css"> 
  <title>Help Desk</title>
  <link rel="icon" href="../public/img/logoicono.ico" type="image/x-icon">
</head>
<body class="dashboard-page"> <nav class="navbar navbar-expand-lg navbar-dark bg-zelda-dark static-top mb-5 shadow"> <div class="container">
     <a class="navbar-brand d-flex align-items-center" href="inicio.php">
        <img src="../public/img/logoicono.ico" alt="Logo" style="width: 30px; height: 30px;" class="me-2">
        Help Desk
      </a>
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
            <a class="nav-link" href="inicio.php">
              <span class="fas fa-home"></span> Inicio
            </a>
          </li>

          <?php if ($_SESSION['usuario']['rol'] == 3) { ?>
          <li class="nav-item">
            <a class="nav-link" href="misDispositivos.php">
              <span class="fas fa-server"></span> Mis dispositivos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="misReportes.php">
              <span class="fas fa-file-alt"></span> Reportes soporte
            </a>
          </li>
          <?php } else if($_SESSION['usuario']['rol'] == 1) { ?>

          <li class="nav-item">
            <a class="nav-link" href="usuarios.php">
              <span class="fas fa-user-cog"></span> Usuarios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="asignacion.php">
              <span class="fas fa-address-book"></span> Asignación
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reportes.php">
              <span class="fas fa-file-alt"></span> Reportes
            </a>
          </li>
          <?php } ?>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: var(--zelda-gold);">
              <span class="fas fa-user"></span> Usuario: <?php echo $_SESSION['usuario']['nombre']; ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow-lg" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalActualizarDatosPersonales" onclick="obtenerDatosPersonalesInicio('<?php echo $_SESSION['usuario']['id_usuario']; ?>')">
                <span class="fas fa-edit"></span> Editar datos
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-danger" href="../procesos/usuarios/login/salir.php">
                <span class="fas fa-sign-out-alt"></span> Salir del Sistema
              </a>
            </div>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <?php
    include "inicio/modalActualizarDatosPersonales.php";
  ?>