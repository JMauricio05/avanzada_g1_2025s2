<?php
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

$sql = "insert into contactos (nombre,telefono,email)values";
$sql .= "('$nombre', '$telefono', '$email')";

$result = $conexDb->query($sql);

$conexDb->close();

if ($result) {
    header("Location: index.php");
} else {
    echo "Erro al guardar";
}


?>