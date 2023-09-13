<?php
    include_once 'air.php';
    $id = $_POST['id'];
    echo $id;
    $air = air::delete($id);
    header('Location: ../../view/airs/');
?>