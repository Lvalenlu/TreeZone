<?php
    include_once 'user.php';

    $user = new User($_POST['name'], $_POST['lastName'], $_POST['email'], $_POST['password']);
    $registro = $user->guardar($_POST['name'], $_POST['lastName'], $_POST['email'], $_POST['password']);
if ($registro) {
    header("location:../index.php");
}


?>