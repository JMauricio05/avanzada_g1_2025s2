<?php
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$email = $_POST["correo"];

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

$sql = "update contactos set nombre=?, telefono=?, email=? where id=?";

$prepare = $conexDb->prepare($sql);
$prepare->bind_param("sssi", $nombre, $telefono, $email, $id);
$result = $prepare->execute();

$conexDb->close();


if ($result) {
    header("Location: index.php");
} else {
    echo "Error al guardar";
}


?>