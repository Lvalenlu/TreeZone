<?php
    include_once 'locality.php';
    $id = $_POST['id'];
    echo $id;
    $locality = locality::delete($id);
    header('Location: ../../view/locality/');
?>