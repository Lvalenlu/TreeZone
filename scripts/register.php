<?php
    include_once 'user.php';

    $user = new User($_POST['name'], $_POST['lastName'], $_POST['email'], $_POST['password']);
if (!$user->guardar()) {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        alert("Usuario registrado");
    </script>
</body>
</html>
    <?php
}
    echo $user-> getName(). ' - ' . $user->getlastName(). ' - '. $user->getEmail().' - '. $user->getPassword() .' - '. $user -> getId();


?>