<?php
    include_once 'locality.php';
    $locality = new locality($_POST['locality']);
    $locality -> guardar();
    header('Location: ../../view/locality/');
?>