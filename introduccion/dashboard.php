<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.html');
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio-Dashboard</title>
    <link rel="stylesheet" href="css/botones.css">
</head>

<body>
    <h1>Hola <?php echo $_SESSION['username']; ?></h1>
    <br>
    <a href="php/cerrar-sesion.php" class="btn">Cerrar sesión</a>
</body>

</html>