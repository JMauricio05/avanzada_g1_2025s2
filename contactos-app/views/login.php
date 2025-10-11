<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
</head>

<body>
    <h1>Iniciar sesión</h1>
    <br>
    <form action="operaciones/validar-usuario.php" method="post">
        <div>
            <label for="user">Usuario</label>
            <input type="text" name="user" id="user">
        </div>
        <div>
            <label for="pwd">Contraseña</label>
            <input type="password" name="pwd" id="pwd">
        </div>
        <div>
            <button type="submit">Iniciar sesión</button>
        </div>
    </form>
</body>

</html>