<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Help Desk</title>
    <link rel="stylesheet" href="public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/plantilla.css">
</head>
<body class="bg-dark d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow-lg p-4" style="width: 25rem; border-radius: 10px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold text-primary">Help Desk</h2>
            <p class="text-muted">Ingresa tus credenciales</p>
        </div>

        <form action="loginController.php" method="POST">
            <div class="mb-3">
                <label for="usuario" class="form-label fw-semibold">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ej. admin" required>
            </div>
            
            <div class="mb-4">
                <label for="password" class="form-label fw-semibold">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
            </div>

            <button type="submit" class="btn btn-primary w-100 fw-bold fs-5">Ingresar</button>
        </form>
    </div>

</body>
</html>