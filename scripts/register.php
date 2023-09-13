<?php
    include_once 'user.php';

    $user = new User($_POST['name'], $_POST['lastName'], $_POST['email'], $_POST['passwd']);
    $user -> guardar();

    echo $user-> getName(). ' - ' . $user->getlastName(). ' - '. $user->getEmail().' - '. $user->getPasswd() .' - '. $user -> getId();
?>