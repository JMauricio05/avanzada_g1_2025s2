<?php
require __DIR__ . "/../controllers/contactos-controller.php";
require __DIR__ . "/../controllers/session-controller.php";

use App\Controllers\ContactosController;
use App\Controllers\SessionController;

$sessionController = new SessionController();
$sessionController->validateSession("login.php");

$contactosController = new ContactosController();
$contactos = $contactosController->queryAllContactos();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lsita de contactos</title>
    <link rel="stylesheet" href="../public/css/modals.css">
</head>

<body>
    <h1>LIsta de contactos</h1>
    <br>
    <a href="operaciones/logout.php">Cerrar sesión</a>
    <br>
    <a href="conacto-form.php">Crear contacto</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($contactos as $contacto) {
                echo '<tr>';
                echo '  <td>' . $contacto->get('nombre') . '</td>';
                echo '  <td>' . $contacto->get('telefono') . '</td>';
                echo '  <td>' . $contacto->get('email') . '</td>';
                echo '  <td>';
                echo '      <button onclick="onClickBorrar(' . $contacto->get('id') . ')">';
                echo '          <img src="../public/res/borrar.svg">';
                echo '      </button>';
                echo '  </td>';
                echo '  <td>';
                echo '      <a href="conacto-form.php?cod=' . $contacto->get('id') . '">';
                echo '          <img src="../public/res/editar.svg">';
                echo '      </a>';
                echo '  </td>';
                echo '</tr>';
            }
            if (count($contactos) == 0) {
                echo '<tr>';
                echo '  <td colspan="3">No hay registros</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>

    <div id="borrarContactoModal" class="modal">
        <h3>Eliminar registro</h3>
        <p>El registro se eliminara pemanentemente.</p>
        <form name="borrarContacto" action="operaciones/borrar-contacto.php" method="post">
            <input type="hidden" name="cod" value="0">
            <div>
                <button type="submit">continuar</button>
                <button type="reset">cancelar</button>
            </div>
        </form>
    </div>

    <script src="../public/js/contactos.js"></script>
</body>

</html>