<?php

$user = isset($_POST["user"]) ? $_POST["user"] : null;
$pwd = isset($_POST["pwd"]) ? $_POST["pwd"] : null;

if (empty($user) || empty($pwd)) {
    echo "Ingrese el usuario y la contraseña";
} else if ($user == 'pepe' && $pwd == '12345') {
    session_start();
    $_SESSION['username'] = $user;
    echo "Sesión iniciada";
    echo '<br><a href="dashboard.php">ir a dashboard</a>';
} else {
    echo "Sesión no iniciada";
}

?>