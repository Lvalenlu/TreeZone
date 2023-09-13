<?php
    include_once 'air.php';
    $air = new air($_POST['level']);
    $air -> guardar();
    header('Location: ../../view/airs/');
?>