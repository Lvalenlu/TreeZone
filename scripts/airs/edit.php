<?php
    include_once 'air.php';
    $id = $_POST['id'];
    $level = $_POST['level'];
    $air = air::edit($id, $level);
    header('Location: ../../view/airs/');
?>