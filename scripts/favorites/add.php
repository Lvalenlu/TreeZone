<?php
    include_once 'Favorites.php';
    $result = $favorite = new Favorites($_POST['id_users'], $_POST['id']);
    if ($result->create($_POST['id'], $_POST['id_users'])) {
        header('Location: indexTreeZone.php');
    }else{
        die("error creating favorites");
    }
?>