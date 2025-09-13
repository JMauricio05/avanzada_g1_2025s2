<?php
//require || include;
include "metodos.php";

$opr = new Operaciones();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
</head>

<body>
    <h1>Inicio</h1>
    <button id="btn">Ver sumas</button>
    <div id="suma1" style="display:none;">
        2 + 2 = <?php echo $opr->sumar(2, 2); ?>
    </div>
    <div>
        2 * 2 = <?php echo $opr->multiplicar(2, 2); ?>
    </div>

    <div>
        2 / 2 = <?php echo $opr->dividir(2, 2); ?>
    </div>
    <div>
        2 / 0 = <?php echo $opr->dividir(2, 0); ?>
    </div>

    <script>
        document.getElementById('btn').addEventListener('click', () => {
            document.getElementById('suma1').style.display = 'block';
        });
    </script>
</body>

</html>