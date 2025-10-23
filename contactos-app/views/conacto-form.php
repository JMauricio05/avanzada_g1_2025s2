<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos Form</title>
</head>

<body>
    <h1>Guardar contacto</h1>
    <br>
    <?php require 'componentes/menu.php';?>
    <form action="operaciones/guardar-contacto.php" method="post">
        <?php
        if (!empty($_GET["cod"])) {
            echo '<input type="hidden" name="id" value="' . $_GET["cod"] . '">';
        }
        ?>
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>
        <div>
            <label for="tel">Teléfono</label>
            <input type="text" name="telefono" id="tel" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <button type="submit">Guardar</button>
        </div>
    </form>
    <a href="contactos.php">Volver</a>
</body>

</html>