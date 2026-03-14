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
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <span class="nav-link text-dark fw-bold me-3">
                            Hola, <?php echo $_SESSION['nombres']; ?>
                        </span>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Editar datos</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-outline-danger btn-sm ms-2" href="../cerrarSesion.php">
                            Salir
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">