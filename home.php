<?php
define("TITULO", "Hola desde home!!!");
const TITULO2 = "Sub titulo";
$numero = 12;
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
    <h1><?php echo TITULO; ?></h1>
    <h2><?php echo TITULO2; ?></h2>
    <p>
        <?php
        $esPar = $numero % 2;
        if ($esPar == 0) {
            echo "El numero $numero es par";
        } else {
            echo "El numero $numero es impar";
        }
        ?>
    </p>
    <script>
        alert('<?php echo TITULO; ?>');
    </script>
</body>

</html>