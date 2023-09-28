<?php
include_once 'Favorites.php';
include '../sectors/sector.php';
include '../user.php';

session_start();
$id = $_SESSION['id'];
$usuario = user::encontrarUsuario($id);
if (!$usuario == null) {
$sectors = sector::all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="shortcut icon" href="../../../assets/img" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://db.onlinewebfonts.com/c/85a73fc9e7be7b2f8e14a17362711b9f?family=MotoyaExBirch+W6" rel="stylesheet">
    <link href="https://db.onlinewebfonts.com/c/2113f701d3f2c47b990581da409548ae?family=Bio+Sans+W04+Regular" rel="stylesheet">
    <link rel="icon" href="./../../assets/img/TreeZone PNG.png">
    <title>TreeZone</title>
</head>
<body class="overflow-x-hidden" style="font-family: Bio Sans W04 Regular;">
    <header class="top-0 start-0 w-100 bg-white px-4 py-2 d-flex justify-content-between align-items-center border-bottom" style="height: 100px;">
        <div class="logo d-flex align-items-center">
            <img src="./../../assets/img/TreeZone icon1.jpg " class="rounded-circle" style="width: 60px; height: 60px;">
            <h3 style="font-family: MotoyaExBirch W6; color: #35635b;">TreeZone</h1>
        </div>
        <div class="navbar py-3 px-2 border rounded-pill shadow-sm">
            <nav>
                <span class="navbar__opc d-flex align-items-center">
                    <div class="buscar px-3 border-end">
                        <input type="text" placeholder="Buscar lugar..." class="border-0 border-bottom" style="width: 350px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16" style="color: #35635b;">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                          </svg>
                    </div>
                    <button class="raking px-3 justify-content-center" style="background: none;border: 0; width: 100px; color: #35635b;font-weight:500;" data-bs-toggle="modal" data-bs-target="#ranking">Ranking</button>
                </span>
            </nav>
        </div>
        <div class="contenedor--usuario h-50">
            <div class="usuario dropdown">
                <button class="btn dropdown-toggle border rounded-pill d-flex align-items-center" style="color: #35635b;" type="button" id="dropdownUser" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-tree-fill" viewBox="0 0 16 16">
                <path d="M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777l-3-4.5z"/>
                </svg>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownUser">
                  <button class="btn dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#favoritePlaces">Lugares Favoritos</button>
                  <button class="btn dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#account">Cuenta</button>
                  <li><hr class="dropdown-divider"></li>
                  <button class="btn dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#helpForm">Ayuda</button>
                  <button class="btn dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#signOut">Cerrar sesión</button>
                </div>
            </div>
        </div>
    </header>
    <div class="container mt-5">
        <div class="table-responsive">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Cantidad de Arboles</th>
                        <th scope="col">Nivel</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($sectors as $sector) {
                    ?>
                    <tr class="">
                        <td><?php echo $sector['name'] ?></td>
                        <td><?php echo $sector['amount_trees'] ?></td>
                        <td><?php echo $sector['level'] ?></td>
                        <td><form action="add.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $sector['id'] ?>">
                            <input type="hidden" name="id_users" value="<?php echo $usuario[0]['id'] ?>">
                            <input type="submit" value="Agregar" class="btn btn-success">
                        </form></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<?php
}else{
    die("Debes iniciar Sesion");
}
?>