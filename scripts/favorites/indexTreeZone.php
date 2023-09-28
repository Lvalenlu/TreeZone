<?php
include_once 'Favorites.php';
include_once '../sectors/sector.php';
include '../user.php';

session_start();
$id = $_SESSION['id'];
$usuario = user::encontrarUsuario($id);
if (!$usuario == null) {
    $favorites= Favorites::all($id);
    $sectores= sector::all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../styles/styles.css">
    <link rel="shortcut icon" href="../../../assets/img" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://db.onlinewebfonts.com/c/85a73fc9e7be7b2f8e14a17362711b9f?family=MotoyaExBirch+W6" rel="stylesheet">
    <link href="https://db.onlinewebfonts.com/c/2113f701d3f2c47b990581da409548ae?family=Bio+Sans+W04+Regular" rel="stylesheet">
    <link rel="icon" href="../../assets/img/TreeZone PNG.png">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
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
    <main>
        <div id="mapa" style="left: 0; width: 100%; height: 85%; position: absolute; overflow: hidden;">
            <div id="map" style="height: 100%;"></div>
        </div>
        <div class="modal fade" id="account" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body my-4 text-center" style="color: #529471;">
                        <button type="button" class="btn-close btn-close-black d-grid" data-bs-dismiss="modal" aria-label="Close"></button>
                            <h3 class="mb-4 fw-bold">
                                <?php
                                echo $usuario[0]['name']. " " .$usuario[0]['lastName'];
                                ?>
                            </h3>
                        <button class="btn py-2 px-5 fs-5 border-5 rounded-3" style="color: white; border-color: #529471; background-color: #529471;" type="button" data-bs-toggle="modal" data-bs-target="#signOut">Cerrar sesión</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="favoritePlaces" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
            <div class="modal-center m-5">
                <div class="table-responsive bg-white mb-5 p-5" style="border-radius:30px;">
                    <button type="button" class="btn-close btn-close-black d-grid" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h1 class=" mb-5 fw-bold text-center" style="color:#529471;">Lugares</h1>
                    <table class="table" style="background-color:#e5f1e3;">
                        <thead>
                            <tr>
                                <th scope="col">Sector</th>
                                <th scope="col">Cantidad de Árboles</th>
                                <th scope="col">Nivel</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($favorites as $favorite) { ?>
                            <tr class="">
                                <td><?php echo $favorite['name'];?></td>
                                <td><?php echo $favorite['amount_trees'];?></td>
                                <td><?php echo $favorite['level'];?></td>
                                <td>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <form action="delete.php" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $favorite['id'];?>">
                                            <input type="submit" class="btn btn-danger" value="Eliminar">
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <a href="create.php" class="btn mt-5 mt-4 py-2 px-5 fs-5 border-5 rounded-3" style="color: white; border-color: #529471; background-color: #529471;">Agregar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="helpForm" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body m-4" style="color: #529471;">
                        <button type="button" class="btn-close btn-close-black d-grid" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center">
                            <h2 class="mt-4 mb-5 fw-bold">¿En que podemos ayudarte?</h2>
                            <form>
                                <div class="d-flex align-items-start">
                                    <input type="text" class="form-control" style="height: 120px;" id="inputEmail">
                                    <button type="submit" class="btn mx-3 py-2 border-5 rounded-circle" style="color:white; border-color: #529471; background-color: #529471;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                    </svg></button>
                                </div>
                                <div class="mt-4 d-flex align-items-start justify-content-end" style="color: #529471;">
                                    <p class="me-4">Contáctanos:</p>
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                            </svg>
                                            <a class="mb-0 ms-2" style="color: #529471;" href="mailto:lvalenlu02@gmail.com?Subject=Solicitusd%20soporte%20Treezone">Correo</a>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                            </svg>
                                            <a class="mb-0 ms-2" style="color: #529471;" href="tel:+573214637772">Telefono</a>
                                        </div>
                                    </div>
                                </div>   
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="ranking" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body m-4" style="color: #529471;">
                        <button type="button" class="btn-close btn-close-black d-grid" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center">
                            <h2 class="mt-4 mb-5 fw-bold">Ranking</h2>
                        </div>
                        <div class="mb-4">
                            <label for="filterName" class="form-label">Filtrar por Nombre:</label>
                            <input type="text" class="form-control" id="filterName">
                        </div>
                        <div class="mb-4">
                            <label for="filterAirQuality" class="form-label">Filtrar por Calidad de Aire:</label>
                            <select class="form-select" id="filterAirQuality">
                                <option value="">Todas</option>
                                <option value="Bueno">Bueno</option>
                                <option value="Moderado">Moderado</option>
                                <option value="No es saludable para grupos sensibles">No es saludable para grupos sensibles</option>
                                <option value="Insalubre">Insalubre</option>
                                <option value="Muy poco saludable">Muy poco saludable</option>
                                <option value="Peligroso">Peligroso</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="filterTreeCount" class="form-label">Filtrar por Cantidad de Árboles:</label>
                            <input type="number" class="form-control" id="filterTreeCount">
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Calidad de Aire</th>
                                    <th scope="col">Cantidad de Árboles</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($sectors as $sector): ?>
                                <tr data-name="<?php echo $sector['name']; ?>">
                                    <td><?php echo $sector['name']; ?></td>
                                    <td><?php echo $sector['level']; ?></td>
                                    <td><?php echo $sector['amount_trees']; ?></td>
                                </tr>
                            <?php endforeach; ?>

                            </tbody>
                        </table>
                        <div class="text-center">
                            <button class="btn mb-5 mt-4 py-2 px-5 fs-5 border-5 rounded-3" style="color: white; border-color: #529471; background-color: #529471;" data-bs-toggle="modal" data-bs-target="#graphicsModal">Mostrar Gráficas</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="graphicsModal" tabindex="-1" aria-labelledby="graphicsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content text-center" style="color: #529471;">
                    <div class="modal-header mx-5">
                        <h2 class="mt-4 fw-bold">Ranking</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex">
                        <section>
                            <div class="m-3">
                                <h3>Cantidad de árboles por localidad</h3>
                                <canvas id="myChart2"></canvas>
                            </div>
                        </section>
                        <section>
                            <div class="m-3">
                                <h3>Nivel de calidad de aire Bogotá</h3>
                                <canvas id="myChart3"></canvas>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="signOut" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirmar Cierre de Sesión</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        ¿Estás seguro de que deseas cerrar la sesión?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <a class="btn btn-danger" href="../sectors/index.php">Cerrar sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </main>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx4 = document.getElementById('myChart2');
        new Chart(ctx4, {
            type: 'polarArea',
            data: {
            labels: ['Antonio Nariño', 'Barrios Unidos', 'Bosa', 'Chapinero', 'Ciudad Bolivar', 'Engativá', 'Fontibón', 'Kennedy','La Candelaria',
            'Los Mártires','Puente Aranda','Rafael Uribe Uribe','San Cristóbal', 'Santa Fe','Suba','Sumapaz','Teusaquillo','Tunjuelito','Usaquén','Usme'],
            datasets: [{
                label: 'Nivel',
                data: [5, 5, 8, 2, 7, 1, 2, 5, 2, 5, 3, 7, 4, 1, 3,4, 10, 2, 3, 11],
                borderWidth: 1
            }]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });

        const ctx3 = document.getElementById('myChart3');
        new Chart(ctx3, {
            type: 'pie',
            data: {
            labels: ['Bueno', 'Moderado', 'No saludable', 'Insalubre', 'Poco saludable', 'Peligroso'],
            datasets: [{
                label: 'Nivel ICA',
                data: [8, 5, 4, 5, 1, 1],
                borderWidth: 1
            }]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });
    </script>
    <script>
        const map = L.map('map').setView([4.6097, -74.0817], 12);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 21,
        }).addTo(map);
        const localidades = [
        <?php foreach ($sectores as $sector) { ?>
            { name: '<?php echo $sector['name']?>', airQuality: '<?php echo $sector['level']?>', treeCount: <?php echo $sector['amount_trees']?>, latlng: [<?php echo $sector['latlng']?>, <?php echo $sector['length']?>] },
            <?php } ?>
        ];
        localidades.forEach(localidad => {
            const marker = L.marker(localidad.latlng).addTo(map);
            marker.bindPopup(`
            <strong>Localidad:</strong> ${localidad.name}<br>
            <strong>Calidad de Aire:</strong> ${localidad.airQuality}<br>
            <strong>Cantidad de Árboles:</strong> ${localidad.treeCount}
            `);
        });
    </script>
</html>

<?php
}else{
    die("Debes iniciar Sesion");
}
?>