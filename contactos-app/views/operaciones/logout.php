<?php
require __DIR__ . "/../../controllers/usuarios-controller.php";

use App\Controllers\UsuariosController;

$controller = new UsuariosController();
$controller->logout('../login.php');

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar sesión</title>
</head>

<body>
    <h1>Error</h1>
    <p>Error al cerrar sesión</p>
    <a href="../login.php">Ir a login</a>
</body>

</html>