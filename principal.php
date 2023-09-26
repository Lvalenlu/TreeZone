<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="shortcut icon" href="./assets/img"   type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://db.onlinewebfonts.com/c/85a73fc9e7be7b2f8e14a17362711b9f?family=MotoyaExBirch+W6" rel="stylesheet">
    <link href="https://db.onlinewebfonts.com/c/2113f701d3f2c47b990581da409548ae?family=Bio+Sans+W04+Regular" rel="stylesheet">
    <link rel="icon" href="./assets/img/TreeZone PNG.png">
    <title>TreeZone</title>
</head>
<body class="overflow-x-hidden" style="font-family: Bio Sans W04 Regular;">
    <header class="top-0 start-0 w-100 bg-white px-4 py-2 d-flex justify-content-between align-items-center border-bottom" style="height: 100px;">
        <div class="logo d-flex align-items-center">
            <img src="./assets/img/TreeZone icon1.jpg " class="rounded-circle" style="width: 60px; height: 60px;">
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
                <button class="btn dropdown-toggle border rounded-pill" style="color: #35635b;" type="button" id="dropdownUser" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownUser">
                    <button class="btn dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#loginForm">Iniciar sesión</button>
                    <button class="btn dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#registerForm">Registrarse</button>
                    <li><hr class="dropdown-divider"></li>
                    <button class="btn dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#helpForm">Ayuda</button>
                </div>
            </div>
        </div>
    </header>
    <main>
    <div class="mapa-container">
    <div class="btn-group w-100" role="group" aria-label="Toggle buttons">
        <button type="button" class="btn btn-outline-dark active" id="calidadAireBtn">Calidad de Aire</button>
        <button type="button" class="btn btn-outline-dark" id="cantidadArbolesBtn">Cantidad de Árboles</button>
    </div>
    <div id="mapa" style="left: 0; width: 100%; height: 85%; position: absolute; overflow: hidden;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63627.804334538116!2d-74.12877810380233!3d4.640799300433638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9beaa5647337%3A0x6fa358372e109359!2sTeusaquillo%2C%20Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1693452379541!5m2!1ses!2sco" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
        <div class="modal fade" id="loginForm" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body m-4" style="color: #529471;">
                    <button type="button" class="btn-close btn-close-black d-grid" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center">
                        <img src="./assets/img/TreeZone PNG.png" alt="Logo" class="mb-3" style="height: 100px; width: 100 px;">
                        <h2 class="mb-4 fw-bold">Iniciar sesión</h2>
                    </div>
                    
                    <form method="POST" action="scripts/login.php">
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label text-start">Email</label>
                            <input type="email" class="form-control border-bottom" id="inputEmail" name="email" aria-describedby="emailHelp" style="border: 0; border-bottom: #35635b;">
                        </div>
                        <div class="mb-1">
                            <label for="inputPassword" class="form-label text-start">Contraseña</label>
                            <input type="password" class="form-control border-bottom" id="inputPassword" name="password" style="border: 0; border-bottom: #35635b;">
                        </div>
                        <div  class="text-end mb-3">
                            <a class="underline" type="button" data-bs-toggle="modal" data-bs-target="#forgotPassword">¿Olvido su contraseña?</a>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn mb-5 mt-4 py-2 px-5 fs-5 border-5 rounded-3" style="color: white; border-color: #529471; background-color: #529471;" value="Ingresar">
                        </div>
                        <div class="text-end mt-4">
                            <p>¿No tienes cuenta? <a class="underline" type="button" data-bs-toggle="modal" data-bs-target="#registerForm">Regístrate</a></p>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
        <div class="modal fade" id="registerForm" tabindex="-2" aria-labelledby="ModalFormLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body m-4" style="color: #529471;">
                    <button type="button" class="btn-close btn-close-black d-grid" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center">
                        <img src="./assets/img/TreeZone PNG.png" alt="Logo" class="mb-3" style="height: 100px; width: 100 px;">
                        <h2 class="mb-4 fw-bold">Registrar cuenta</h2>
                    </div>
                    <form action="scripts/register.php" method="POST">
                        <div class="mb-3 d-flex align-items-center">
                            <div class="me-2">
                                <label for="inputName" class="form-label text-start">Nombre</label>
                                <input type="text" class="form-control border-bottom" id="inputName" name="name" style="border: 0; border-bottom: #35635b;">
                            </div>
                            <div class="ms-2">
                                <label for="inputName" class="form-label text-start d-flex align-items-center">Apellido</label>
                                <input type="text" class="form-control border-bottom" id="inputName" name="lastName" style="border: 0; border-bottom: #35635b;">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label text-start">Email</label>
                            <input type="email" class="form-control border-bottom" id="inputEmail" name="email" aria-describedby="emailHelp" style="border: 0; border-bottom: #35635b;">
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword" class="form-label text-start">Contraseña</label>
                            <input type="password" class="form-control border-bottom" id="inputPassword" name="password" style="border: 0; border-bottom: #35635b;">
                        </div>
                        <div class="my-3">
                            <label for="confirmPassword" class="form-label text-start">Confirmar contraseña</label>
                            <input type="password" class="form-control border-bottom" id="confirmPassword" style="border: 0; border-bottom: #35635b;">
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn my-5 mt-4 py-2 px-5 fs-5 border-5 rounded-3" style="color: white; border-color: #529471; background-color: #529471;" value="Registrarse">
                        </div>
                        <div class="text-end mt-2">
                            <p>¿Ya tienes cuenta? <a class="underline" type="button" data-bs-toggle="modal" data-bs-target="#loginForm">Inicia sesión</a></p>
                        </div>
                    </form>
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
                            <tr>
                                <td><?php echo $sector['name']; ?></td>
                                <td><?php echo $sector['air']; ?></td>
                                <td><?php echo $sector['trees']; ?></td>
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

    <script type="module">
        import { Toast } from 'bootstrap.esm.min.js'
      
        Array.from(document.querySelectorAll('.toast'))
          .forEach(toastNode => new Toast(toastNode))
    </script>
    <script>
        function mostrarCalidadAireMapa() {
            document.getElementById("mapa").innerHTML = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63627.804334538116!2d-74.12877810380233!3d4.640799300433638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9beaa5647337%3A0x6fa358372e109359!2sTeusaquillo%2C%20Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1693452379541!5m2!1ses!2sco" width="100%" height="450" frameborder="0" style="left: 0; height: 100%; position: absolute; overflow: hidden;" allowfullscreen="" loading="lazy"></iframe>';
            document.getElementById("calidadAireBtn").classList.add("active");
            document.getElementById("cantidadArbolesBtn").classList.remove("active");
        }
        function mostrarCantidadArbolesMapa() {
            document.getElementById("mapa").innerHTML = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63627.804334538116!2d-74.12877810380233!3d4.640799300433638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9beaa5647337%3A0x6fa358372e109359!2sTeusaquillo%2C%20Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1693452379541!5m2!1ses!2sco" width="100%" height="450" frameborder="0" style="left: 0; height: 100%; position: absolute; overflow: hidden;" allowfullscreen="" loading="lazy"></iframe>';
            document.getElementById("calidadAireBtn").classList.remove("active");
            document.getElementById("cantidadArbolesBtn").classList.add("active");
        }
        document.getElementById("calidadAireBtn").addEventListener("click", mostrarCalidadAireMapa);
        document.getElementById("cantidadArbolesBtn").addEventListener("click", mostrarCantidadArbolesMapa);
        mostrarCalidadAireMapa();
    </script>
</html>