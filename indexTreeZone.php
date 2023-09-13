<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="shortcut icon" href="../assets/img" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://db.onlinewebfonts.com/c/85a73fc9e7be7b2f8e14a17362711b9f?family=MotoyaExBirch+W6" rel="stylesheet">
    <link href="https://db.onlinewebfonts.com/c/2113f701d3f2c47b990581da409548ae?family=Bio+Sans+W04+Regular" rel="stylesheet">
    <link rel="icon" href="./assets/img/TreeZone PNG.png">
    <title>TreeZone</title>
</head>
<body class="bg-success-subtle overflow-x-hidden" style="font-family: Bio Sans W04 Regular;">
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
                  <a class="dropdown-item" href="/view/locality/index.php">Lugares Favoritos</a>
                  <button class="btn dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#account">Cuenta</button>
                  <li><hr class="dropdown-divider"></li>
                  <button class="btn dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#helpForm">Ayuda</button>
                  <button class="btn dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#close">Cerrar sesión</button>
                </div>
            </div>
        </div>
    </header>
    <main>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63627.804334538116!2d-74.12877810380233!3d4.640799300433638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9beaa5647337%3A0x6fa358372e109359!2sTeusaquillo%2C%20Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1693452379541!5m2!1ses!2sco" width="100%" height="650vh" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <div class="modal fade" id="account" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body m-4" style="color: #529471;">
                    <button type="button" class="btn-close btn-close-black d-grid" data-bs-dismiss="modal" aria-label="Close"></button>
                        <h3 class="mb-4 fw-bold">Laura Bustos Henao</h3>
                        <a href="/indexTreeZone.php" type="button" class="btn mb-5 mt-4 py-2 px-5 fs-5 border-5 rounded-3" style="color: white; border-color: #529471; background-color: #529471;">Ingresar</a>
                    </div>
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
        <div class="modal fade" id="close" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body m-4">
                    <button type="button" class="btn-close btn-close-black d-grid text-center" data-bs-dismiss="modal" aria-label="Close"></button>
                        <h4 class="mb-4 fw- py-3">¿Esta seguro de cerrar sesión?</h4>
                        <a href="/principal.php"></a>
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