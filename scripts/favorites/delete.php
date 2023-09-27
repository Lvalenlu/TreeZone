<?php
    include_once 'Favorites.php';
    if (Favorites::delete($_POST['id'])) {
        header('Location: indexTreeZone.php');
    }else{
        die("error creating favorites");
    }
?>