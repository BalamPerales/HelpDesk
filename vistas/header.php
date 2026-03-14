<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Desk - Panel</title>
    <link rel="stylesheet" href="../public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../public/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../public/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="../public/css/plantilla.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="inicio.php">Help Desk</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="inicio.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="mis_dispositivos.php">Mis Dispositivos</a></li>
                    <li class="nav-item"><a class="nav-link" href="mis_reportes.php">Reportes Soporte</a></li>
                    <li class="nav-item"><a class="nav-link" href="usuarios.php">Usuarios</a></li>
                    <li class="nav-item"><a class="nav-link" href="asignacion.php">Asignación</a></li>
                    <li class="nav-item"><a class="nav-link" href="reportes.php">Reportes Generales</a></li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <?php echo $_SESSION['nombres']; ?>
                            </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Editar datos</a></li>
                            <li><a class="dropdown-item" href="../cerrar_sesion.php">Salir</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">