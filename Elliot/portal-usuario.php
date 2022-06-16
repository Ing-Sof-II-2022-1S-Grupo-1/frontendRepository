<?php
session_start();
if (!isset($_SESSION['idUser']) && empty($_SESSION['idUser'])) {
    header('Location: login.html');
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="Resources/Images/Grupo 24.png" />
    <title>Acceder a Elliot</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/estilo-main.css" />
    <link rel="stylesheet" href="CSS/estilos-login.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg" style="background: #315254; min-height: 120px">
        <div class="container-fluid">
            <a class="navbar-brand" href="inicio.html">
                <img src="Resources/Images/Logo-menu.png" width="60px " />
                <p class="texto-logo">ELLIOT TECH</p>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" style="padding-right: 40px; padding-left: 40px">
                        <a class="nav-link active" aria-current="page" href="inicio.html" id="texto-botones">Inicio</a>
                    </li>
                    <li class="nav-item" id="nav-item-linea" style="padding-left: 40px">
                        <a class="nav-link" href="#" id="texto-botones">¿Quiénes somos?</a>
                    </li>
                    <li class="nav-item" style="
                        padding-right: 40px;
                        padding-left: 40px;
                        border-right-color: #f25c5c;
                        border-width: 3px;
                        border-top-color: #315254;
                        border-style: solid;
                        border-bottom-color: #315254;
                        border-left-color: #315254;
                    ">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="texto-botones">
                            Productos
                        </a>
                    </li>
                    <li class="nav-item" style="padding-left: 40px">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true" id="texto-botones">Planes</a>
                    </li>
                </ul>
            </div>
        </div>

        <span class="login">
            <a href="portal-usuario.php"><img src="Resources/Images/user_50px.png" width="30px" style="margin-right: 30px" /></a>
            <img src="Resources/Images/phone_50px.png" width="30px" />
        </span>
    </nav>

    <div class="container">
        <div class="row" style="max-height: 100px;">
            <div class="col-12" style=" margin-top: 50px; margin-bottom: 50px; ">
                <h2 style="margin-top:10%; margin-bottom: 40px; display: inline;">
                    Portal de usuario
                </h2>
                <a href="#" onclick="logout();">
                    <img src="Resources/Images/option.png" width="30px" style="margin-bottom: 40px; float: right;" />
                </a>
                <p id="texto-titulo" style="margin-bottom: 40px; float: right; margin-right: 30px;">
                    Bienvenido <?php echo $_SESSION['user']; ?>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-2 side-menu" style="padding-bottom:10px; padding-top:20px;">
                <ul class="nav flex-column menu-vertical">
                    <li class="nav-item" style="margin-top: 20px; margin-bottom: 20px; margin-left: 10px;">
                        <a class="nav-link active" id="texto-botones" href="#">Mi perfil</a>
                    </li>
                    <li class="nav-item" style="margin-top: 20px; margin-bottom: 20px; margin-left: 10px;">
                        <a class="nav-link" id="texto-botones" href="#">Cámaras</a>
                    </li>
                    <li class="nav-item" style="margin-top: 20px; margin-bottom: 20px; margin-left: 10px;">
                        <a class="nav-link" id="texto-botones" href="#">Switches</a>
                    </li>
                    <li class="nav-item" style="margin-top: 20px; margin-left: 10px;">
                        <a class="nav-link" id="texto-botones" href="#">Sensores</a>
                    </li>
                    <div class="divider d-flex align-items-center my-4"></div>
                    <li class="nav-item" style=" margin-bottom: 30px; margin-left: 10px;">
                        <a class="nav-link" id="texto-botones" href="#">Ayuda</a>
                    </li>
                </ul>
            </div>

            <div class="col" style="padding-bottom:10px; padding-top:20px; margin-left: 30px;   margin-top: 50px; margin-bottom: 50px;">

                <h2 style="margin-bottom: 30px; margin-left: 30px;">
                    Dashboard
                </h2>
                <p style="margin-bottom: 40px; margin-top: 30px; margin-left: 30px;">
                    Bienvenido al <b>Portal de usuario de Elliot</b>, desde aquí podrá controlar todos los dispositivos que tenga asociados, además de adicionar o eliminar los ya existentes.
                </p>

                <center>
                    <h2 style="margin-bottom: 30px; margin-left: 30px;">
                        Blog
                    </h2>
                    <div class="card" style="width: 18rem; display: inline-block; margin-left: 30px;">
                        <div class="card-body">
                            <h5 class="card-title">Compromiso con la seguridad</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn">Leer más</a>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem; display: inline-block; margin-left: 60px; margin-right: 60px;">
                        <div class="card-body">
                            <h5 class="card-title">El alza de los CCTV´s en el último año</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn">Leer más</a>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem; display: inline-block">
                        <div class="card-body">
                            <h5 class="card-title">Criptografía: Pilar de la seguridad</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn">Leer más</a>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </div>

    <footer class="text-center text-lg-start " style="background-color: #feefe8; min-height: 300px; border-right-color: rgba(0, 0, 0, 0); border-width: 3px; border-top-color: rgb(0, 0, 0); border-style: solid; border-bottom-color: rgba(0, 0, 0, 0);
                                border-left-color: rgba(255, 255, 255, 0); ">
        <!-- Grid container -->
        <div class="container p-2 ">
            <!--Grid row-->
            <div class="row ">
                <!--Grid column-->
                <div class="col-4 ">
                    <img src="Resources/Images/Grupo 35.png " width="40% " style="float: right; margin-top: 50px; float: left " /><br /><br /><br /><br /><br /><br />
                    <ul class="list-unstyled mb-0 ">
                        <li><a href="inicio.html" class=" ">Inicio</a><br /></li>
                        <li><a href="quienes-somos.html" class=" ">¿Quiénes Somos?</a><br /></li>
                        <li><a href="productos.html" class=" ">Productos</a><br /></li>
                        <li><a href="planes.html" class=" ">Planes</a><br /></li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-8 " style="margin-top: 50px ">
                    <h5 class="text-uppercase mb-0 ">Información de contacto</h5>
                    <br /><br />

                    <ul class="list-unstyled ">
                        <li>
                            <a href="#! " class="text-dark ">Colombia</a>
                        </li>
                        <li>
                            <a href="#! " class="text-dark ">Teusaquillo, Bogotá</a>
                        </li>
                        <li>
                            <a href="#! " class="text-dark ">3145678934</a>
                        </li>
                        <li>
                            <a href="#! " class="text-dark ">2445678</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->
    </footer>
</body>

<!-- auteticación de Usuario -->
<script src="jsQuerys/logoutUser.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</html>