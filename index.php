<?php
$hostDb = "localhost";
$userDb = "root";
$pwdDb = "";
$nameDb = "grupo_1_avanzada";

$conexDb = new mysqli(
    $hostDb,
    $userDb,
    $pwdDb,
    $nameDb
);

if ($conexDb->connect_error) {
    die("DB error: " . $conexDb->connect_error);
}

$sql = "select * from contactos";
$result = $conexDb->query($sql);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Contactos</title>
</head>

<body>
    <h1>Lista de contactos</h1>
    <br>
    <a href="contacto-form.php">Crear</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo ' <td>' . $row['nombre'] . '</td>';
                    echo ' <td>' . $row['telefono'] . '</td>';
                    echo ' <td>' . $row['email'] . '</td>';
                    echo ' <td>';
                    echo '   <a href="contacto-form.php?cod=' . $row['id'] . '">Modificar</a>';
                    echo ' </td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr>';
                echo ' <td colspan="3">No registros</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>

</html>
<?php
$conexDb->close();
?>