<?php
$cod = empty($_GET["cod"]) ? "" : $_GET["cod"];
$titulo = empty($cod) ? "Crear contacto" : "Modificar contacto";
$action = empty($cod) ? "registrar-contacto.php" : "modificar-contacto.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Contacto formulario</title>
</head>

<body>
    <h1><?php echo $titulo; ?></h1>
    <br>
    <a href="index.php">Volver</a>
    <br>
    <form action="<?php echo $action; ?>" method="post">
        <?php
        if (!empty($cod)) {
            echo '<input type="hidden" name="id" value="' . $cod . '">';
        }
        ?>
        <div>
            <label for="name">Nombre:</label>
            <input type="text" name="nombre" id="name">
        </div>
        <div>
            <label for="rel">Telefono:</label>
            <input type="text" name="telefono" id="tel">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="correo" id="email">
        </div>
        <div>
            <button type="submit">Guardar</button>
        </div>
    </form>
</body>

</html>