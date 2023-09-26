<?php
include_once 'user.php';

$email = $_POST['email'];
$password = $_POST['password'];
$user = user::verificarInicioSesion($email, $password);

if ($user>0) {
    header('Location: ../indexTreeZone.php');
} else {
    echo "Inicio de sesión fallido. Verifica tus credenciales.";
}
?>