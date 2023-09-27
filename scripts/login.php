<?php
include_once 'user.php';

$email = $_POST['email'];
$password = $_POST['password'];
$user = user::verificarInicioSesion($email, $password);

if ($user>0) {
    session_start();
    $_SESSION['id'] = $user[0]['id'];
    header('Location: favorites/indexTreeZone.php');
} else {
    echo "Inicio de sesión fallido. Verifica tus credenciales.";
}
?>