<?php
require __DIR__ . "/../../controllers/usuarios-controller.php";

use App\Controllers\UsuariosController;

$controller = new UsuariosController();

$usuario = $controller->login($_POST);
if (!empty($usuario)) {
    header("Location: ../contactos.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar</title>
</head>

<body>
    <h1>Error al iniciar sesión</h1>
    <p>No se pudo inicar la sesión.</p>
    <a href="../login.php">Volver</a>
</body>

</html>