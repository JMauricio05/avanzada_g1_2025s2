<?php

$msg = "hola mundo desde <b>php</b>!!!!";
echo $msg;

$nombre = 'Juan';
$apellido = "Gomez";

echo '<br>';
echo $nombre . ' ' . $apellido;
echo '<br>';
echo "$nombre $apellido";
echo "<br>";

$edad = 25;
$promedio = 2.5;
$mayorEdad = true; //false
/**
 * Bloques...
 */
$ejemplo = null;
//$edad = 'abc';

$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo "<br>";
echo $numeros[2];
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "<br>";
echo $numeros[5];

$persona = [
    "nombre" => 'Juan',
    'apellido' => "Perez",
    "edad" => 30,
    "numeros" => [1, 2, 5, 6]
];
echo "<br>";
echo $persona["apellido"];

if ($numeros[0] <= 2) {
    //codigo....
} else if ($numeros[0] <= 5) {
    //codigo....
} elseif ($numeros[0] <= 7) {
    //codigo....
} else {
    //codigo....
}

switch ($numeros[0]) {
    case 1:
        //codigo...
        break;
    case 2:
        //codigo...
        break;
    case 3:
        //codigo...
        break;
    default:
        //codigo...
        break;
}

for ($index = 0; $index < count($numeros); $index++) {
    echo "<br>" . $numeros[$index];
}

$index = 0;
while ($index < count($numeros)) {
    echo "<br>" . $numeros[$index];
    $index++;
}

$index = 0;
do {
    echo "<br>" . $numeros[$index];
    $index++;
} while ($index < count($numeros));

foreach ($numeros as $val) {
    echo "<br>" . $val;
}

foreach ($numeros as $i => $val) {
    echo "<br> $i: $val";
}

function saludar($nombre)
{
    return "<br>Hola $nombre";
}

echo saludar("Pepe");

function saludo($nombre="Anonimo")
{
    echo "<br>Hola $nombre<br>";
}
saludo("Ana");
saludo();


?>