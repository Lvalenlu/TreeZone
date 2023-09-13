
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../styles/styles.css">
    <link rel="stylesheet" href="../../styles/main.css">
    <link rel="shortcut icon" href="../../assets/img"   type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://db.onlinewebfonts.com/c/85a73fc9e7be7b2f8e14a17362711b9f?family=MotoyaExBirch+W6" rel="stylesheet">
    <link href="https://db.onlinewebfonts.com/c/2113f701d3f2c47b990581da409548ae?family=Bio+Sans+W04+Regular" rel="stylesheet">
    <link rel="icon" href="../../assets/img/TreeZone PNG.png">
    <title>TreeZone</title>
</head>
<body class="bg-success-subtle overflow-x-hidden" style="font-family: Bio Sans W04 Regular;">
    <header class="top-0 start-0 w-100 bg-white px-4 py-2 d-flex justify-content-between align-items-center border-bottom" style="height: 100px;">
        <div class="logo d-flex align-items-center">
            <img src="../../assets/img/TreeZone icon1.jpg " class="rounded-circle" style="width: 60px; height: 60px;">
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
                    <button class="raking px-3 justify-content-center" style="background: none;border: 0; width: 100px; color: #35635b;font-weight:500;">Raking</button>
                </span>
            </nav>
        </div>
        <div class="contenedor--usuario h-50">
            <div class="usuario dropdown">
            <button class="btn dropdown-toggle border rounded-pill d-flex align-items-center" style="color: #35635b;" type="button" id="dropdownUser" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                    <div style="height: 32px;width: 32px; align-tracks: center; background-color: #35635b; color: white; border-radius: 50px; padding: 4px;">LB</div>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownUser">
                  <a class="dropdown-item" href="../../view/locality/index.php">Lugares Favoritos</a>
                  <button class="btn dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#account">Cuenta</button>
                  <li><hr class="dropdown-divider"></li>
                  <button class="btn dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#helpForm">Ayuda</button>
                  <button class="btn dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#close">Cerrar sesión</button>
                </div>

            </div>
        </div>
    </header>
    <main>
        <div class="modal fade" id="loginForm" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body m-4" style="color: #529471;">
                    <button type="button" class="btn-close btn-close-black d-grid" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center">
                        <img src="./assets/img/TreeZone PNG.png" alt="Logo" class="mb-3" style="height: 100px; width: 100 px;">
                        <h2 class="mb-4 fw-bold">Iniciar sesión</h2>
                    </div>
                    
                    <form>
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label text-start">Email</label>
                            <input type="email" class="form-control border-bottom" id="inputEmail" name="email" aria-describedby="emailHelp" style="border: 0; border-bottom: #35635b;">
                        </div>
                        <div class="mb-1">
                            <label for="inputPassword" class="form-label text-start">Contraseña</label>
                            <input type="password" class="form-control border-bottom" id="inputPassword" name="password" style="border: 0; border-bottom: #35635b;">
                        </div>
                        <div  class="text-end mb-3">
                            <a href="">¿Olvido su contraseña?</a>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn mb-5 mt-4 py-2 px-5 fs-5 border-5 rounded-3" style="color: white; border-color: #529471; background-color: #529471;">Ingresar</button>
                        </div>
                        <div class="text-end mt-4">
                            <p>¿No tienes cuenta? <a href="#">Regístrate</a></p>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
        <div class="modal fade" id="account" tabindex="-2" aria-labelledby="ModalFormLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body m-4" style="color: #529471;">
                    <button type="button" class="btn-close btn-close-black d-grid" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center">
                        <img src="./assets/img/TreeZone PNG.png" alt="Logo" class="mb-3" style="height: 100px; width: 100 px;">
                        <h2 class="mb-4 fw-bold">Registrar cuenta</h2>
                    </div>
                    <form action="../scripts/register.php" method="post">
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
                            <input type="password" class="form-control border-bottom" id="inputPassword" name="passwd" style="border: 0; border-bottom: #35635b;">
                        </div>
                        <div class="my-3">
                            <label for="confirmPassword" class="form-label text-start">Confirmar contraseña</label>
                            <input type="password" class="form-control border-bottom" id="confirmPassword" style="border: 0; border-bottom: #35635b;">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn my-5 mt-4 py-2 px-5 fs-5 border-5 rounded-3" style="color: white; border-color: #529471; background-color: #529471;">Registrarse</button>
                        </div>
                        <div class="text-end mt-2">
                            <p>¿Ya tienes cuenta? <a href="#">Inicia sesión</a></p>
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
                            <button type="submit" class="btn mx-3 border-5 rounded-circle" style="color:white; border-color: #529471; background-color: #529471;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
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
                                    <a class="mb-0 ms-2" style="color: #529471;">Correo</a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                      </svg>
                                    <a class="mb-0 ms-2" style="color: #529471;">Telefono</a>
                                </div>
                            </div>
                        </div>
                        
                        </form>
                </div>
                </div>
            </div>
            </div>
        </div>

<div class="container-fluid p-5 text-white text-center bg-black">
  <h1>Crear lugar</h1>
</div>
  
<div class="container mt-5" style="width: 30%;">
  <div class="row">
  <div class="card text-white">
    <div class="card-body">
    <form action="../../scripts/locality/crear.php" method="POST">
  <div class="mb-3 mt-3">
    <input type="text" class="form-control" id="locality" placeholder="Ingresar lugar" name="locality">
  </div>
  <div class="text-center">
  <button type="submit" class="btn my-2 mt-4 py-1 px-5 fs-5 border-5 rounded-3" style="color: white; border-color: #529471; background-color: #529471;">Crear</button>
  </div>
    </div>
  </div>
    
  </div>
</div>
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script type="module">
        import { Toast } from 'bootstrap.esm.min.js'
      
        Array.from(document.querySelectorAll('.toast'))
          .forEach(toastNode => new Toast(toastNode))
    </script>
</body>
</html>
