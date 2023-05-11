<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./resources/styles.css" />
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">


            <a class="navbar-brand" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-code-slash" viewBox="0 0 16 16">
                    <path class="bran-icon"
                        d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z" />
                </svg>
            </a>


            <button class="btn btn-outline-primary d-lg-none" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-person-lock" viewBox="0 0 16 16">
                    <path
                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 5.996V14H3s-1 0-1-1 1-4 6-4c.564 0 1.077.038 1.544.107a4.524 4.524 0 0 0-.803.918A10.46 10.46 0 0 0 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h5ZM9 13a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z" />
                </svg>
            </button>

            <?php
    

            ?>

            <a href="./resources/bd/logOut.php">
                <button class="btn btn-outline-danger d-lg-none" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-person-lock" viewBox="0 0 16 16">
                        <path
                            d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 5.996V14H3s-1 0-1-1 1-4 6-4c.564 0 1.077.038 1.544.107a4.524 4.524 0 0 0-.803.918A10.46 10.46 0 0 0 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h5ZM9 13a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z" />
                    </svg>
                </button>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex-lg justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active item-nav" aria-current="page" href="#Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link item-nav" href="#Nosotros">Nosotros</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-primary d-none d-sm-none d-md-none d-lg-inline"
                        data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-person-lock" viewBox="0 0 16 16">
                            <path
                                d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 5.996V14H3s-1 0-1-1 1-4 6-4c.564 0 1.077.038 1.544.107a4.524 4.524 0 0 0-.803.918A10.46 10.46 0 0 0 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h5ZM9 13a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z" />
                        </svg>
                    </button>
                </form>
                <a href="./resources/bd/logOut.php">
                    <button class="btn btn-outline-danger d-none d-sm-none d-md-none d-lg-inline" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-person-lock" viewBox="0 0 16 16">
                            <path
                                d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 5.996V14H3s-1 0-1-1 1-4 6-4c.564 0 1.077.038 1.544.107a4.524 4.524 0 0 0-.803.918A10.46 10.46 0 0 0 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h5ZM9 13a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z" />
                        </svg>
                    </button>
                </a>
            </div>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
                    <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center">
                        <img src="./resources/img/login-image.jpg" alt="" />
                    </div>
                    <div class="row justify-content-center">
                        <!-- Formulario -->
                        <form action="./resources/validateSession.php" method="POST" class="d-flex flex-column col-8"
                            id="form-Login" name="login">
                            <div class="mb-4 ">
                                <label for="email" class="form-label "> Email</label>
                                <div>
                                    <input type="email" class="form-control " name="email" id="email"
                                        placeholder="ejmeplo@gmail.com" />
                                    <div class="valid-feedback">
                                        Correcto!
                                    </div>
                                    <div class="invalid-feedback ">
                                        Por favor ingrese una cuenta valida
                                    </div>

                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-label">Contraseña</label>
                                <div id="validatePass">

                                    <input type="password" class="form-control" name="password" placeholder="password"
                                        id="password" />
                                    <div class="valid-feedback">
                                        Correcto!
                                    </div>
                                    <div class="invalid-feedback ">
                                        <ul>
                                            <li>Minimo 8 caracteres</li>
                                            <li>Maximo 15</li>
                                            <li>Al menos una letra mayúscula</li>
                                            <li>Al menos una letra minucula</li>
                                            <li>Al menos un dígito</li>
                                            <li>No espacios en blanco</li>
                                            <li>Al menos 1 caracter especial</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Ingresar</button>
                            </div>
                            <div class=" modal-footer mt-3 d-flex justify-content-center ">
                                <span>¿Ha perdido su contraseña?</span>
                                <span>¿Aun no tiene cuenta? <a href="">Registrate</a></span>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>





    <?php $saluda ="Hola a totos"?>