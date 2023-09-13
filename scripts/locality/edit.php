<?php
    include_once 'locality.php';
    $id = $_POST['id'];
    $locality = $_POST['locality'];
    $locality = locality::edit($id, $locality);
    header('Location: ../../view/locality/');
?>