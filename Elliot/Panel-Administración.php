<?php

require "modules/dbDelete.php";

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
    <title>Panel Administración</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/estilo-main.css" />
    <link rel="stylesheet" href="CSS/estilos-login.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/62b7e310b0d10b6f3e795556/1g6f4tuui';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

<body>
    <nav class="navbar sticky-top navbar-expand-lg" style="background: #315254; min-height: 120px">
        <div class="container-fluid">
            <a class="navbar-brand" href="inicio.html">
                <img src="Resources/Images/Logo-menu.png" width="60px" />
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
                        <a class="nav-link" href="quienes-somos.html" id="texto-botones">¿Quiénes somos?</a>
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
                        <a class="nav-link" href="productos.html" tabindex="-1" aria-disabled="true" id="texto-botones">Productos</a>
                    </li>

                    <li class="nav-item" style="padding-left: 40px">
                        <a class="nav-link" href="planes.html" tabindex="-1" aria-disabled="true" id="texto-botones">Planes</a>
                    </li>
                </ul>
            </div>
        </div>

        <span class="login">
            <a href="Panel-Administración.php"><img src="Resources/Images/user_50px.png" width="30px" style="margin-right: 30px" /></a>
            <a href="contacto.html">
                <img src="Resources/Images/phone_50px.png" width="30px" /></a>
        </span>
    </nav>

    <div class="container">
        <div class="row" style="max-height: 100px;">
            <div class="col-12" style=" margin-top: 50px; margin-bottom: 50px; ">
                <h2 style="margin-top:10%; margin-bottom: 40px; display: inline;">
                    Portal de Usuario
                </h2>
                <a href="#" onclick="logout();">
                    <img src="Resources/Images/option.png" width="30px" style="margin-bottom: 40px; float: right;" />
                </a>
                <p id="texto-titulo" style="margin-bottom: 40px; float: right; margin-right: 30px;">
                    Bienvenido
                    <?php echo $_SESSION['user']; ?>
                </p>
            </div>
        </div>

        <div id="myGroup">
            <div class="row" style="margin-bottom:40px; margin-top: 40px;">
                <div class="col-2 side-menu" style="padding-bottom:10px; padding-top:20px; background-color: #315254">
                    <ul class="nav flex-column menu-vertical">
                        <li class="nav-item" style="margin-top: 20px; margin-bottom: 20px; margin-left: 10px;">
                            <a class="nav-link active" id="texto-botones" data-bs-toggle="collapse" href="#inicio" aria-controls="inicio" data-bs-parent="#myGroup" aria-expanded="false">Inicio</a>
                        </li>
                        <li class="nav-item" style="margin-top: 20px; margin-bottom: 20px; margin-left: 10px;">
                            <a class="nav-link active" id="texto-botones" data-bs-toggle="collapse" href="#perfil" aria-controls="perfil" data-bs-parent="#myGroup" aria-expanded="false">Mi perfil</a>
                        </li>
                        <li class="nav-item" style="margin-top: 20px; margin-bottom: 20px; margin-left: 10px;">
                            <a class="nav-link active" id="texto-botones" data-bs-toggle="collapse" href="#camaras" aria-controls="camaras" data-bs-parent="#myGroup" aria-expanded="false">Cámaras</a>
                        </li>
                        <div class="divider d-flex align-items-center my-4"></div>
                        <li class="nav-item" style=" margin-bottom: 30px; margin-left: 10px;">
                            <a class="nav-link" href="contacto.html" tabindex="-1" aria-disabled="true" id="texto-botones">Ayuda</a>
                        </li>
                        <li class="nav-item" style=" margin-bottom: 30px; margin-left: 10px;">
                            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true" id="texto-botones" onclick="logout();">Logout</a>
                        </li>
                    </ul>
                </div>

                <!-- Mensaje Inicial -->
                <div class="col multi-collapse collapse show" class="collapse" id="inicio" data-bs-parent="#myGroup" style="padding-bottom:10px; padding-top:20px; margin-left: 30px; margin-top: 50px; margin-bottom: 50px;">

                    <h2 style="margin-bottom: 30px; margin-left: 30px;">
                        Dashboard
                    </h2>
                    <p style="margin-bottom: 40px; margin-top: 30px; margin-left: 30px;">
                        Bienvenido al <b>Portal de Usuario de Eliot</b>, desde aquí podrá controlar todos los dispositivos que tenga asociados, además de adicionar o eliminar los ya existentes.
                    </p>

                    <center>
                        <h2 style="margin-bottom: 30px; margin-left: 30px;">
                            Blog
                        </h2>
                        <div class="card" style="width: 18rem; display: inline-block; margin-left: 30px;">
                            <div class="card-body">
                                <h5 class="card-title">Compromiso con la seguridad</h5>
                                <p class="card-text">La seguridad es fundamental, y debe guiar todas nuestras acciones y compromisos.</p>
                                <a href="quienes-somos.html" class="btn">Leer más</a>
                            </div>
                        </div>

                        <div class="card" style="width: 18rem; display: inline-block; margin-left: 60px; margin-right: 60px;">
                            <div class="card-body">
                                <h5 class="card-title">El alza de los CCTV's en el último año</h5>
                                <p class="card-text">La seguridad presencial y tecnológica aumentó un 50% en 2021, se presume que más.</p>
                                <a href="productos.html" class="btn">Leer más</a>
                            </div>
                        </div>

                        <div class="card" style="width: 18rem; display: inline-block">
                            <div class="card-body">
                                <h5 class="card-title">Criptografía: Pilar de la seguridad</h5>
                                <p class="card-text">Pilar esencial para garantizar la seguridad de cualquier comunicación que se realice.</p>
                                <a href="planes.html" class="btn">Leer más</a>
                            </div>
                        </div>
                    </center>
                </div>
                <!-- Mensaje Inicial -->

                <!-- Mi perfil -->
                <div class="col multi-collapse collapse" class="collapse" id="perfil" data-bs-parent="#myGroup" style="padding-bottom:10px; padding-top:20px; margin-left: 30px;   margin-top: 50px; margin-bottom: 50px; ">

                    <h2 style="margin-bottom: 30px; margin-left: 30px;">
                        Mi perfil
                    </h2>

                    <table class="table" style="margin-bottom: 30px; margin-left: 30px;">
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <p>Nombres y Apellidos</p>
                                </th>
                                <td>
                                    <p><?php echo $_SESSION['nombres'] . ' ' . $_SESSION['apellidos']; ?></p>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <p>Usuario</p>
                                </th>
                                <td>
                                    <p><?php echo $_SESSION['user']; ?></p>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <p>Correo electrónico</p>
                                </th>
                                <td>
                                    <p><?php echo $_SESSION['mail']; ?></p>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <p>Plan actual</p>
                                </th>
                                <td>
                                    <p>Gratuito</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <center>
                        <a href="planes.html">
                            <button type="button" class="btn btn-default" aria-label="Right Align" style=" margin-left: 40px;">
                                <span class="" aria-hidden="true"></span> MEJORAR MI PLAN
                            </button>
                        </a>
                        <a href="changePassword.php">
                            <button type="button" class="btn btn-default" aria-label="Right Align" style=" margin-left: 40px;">
                                <span class="" aria-hidden="true"></span> CAMBIAR CONTRASEÑA
                            </button>
                        </a>
                    </center>

                </div>
                <!-- Mi perfil -->

                <!-- Camaras -->
                <div class="col multi-collapse collapse" class="collapse" id="camaras" data-bs-parent="#myGroup" style="padding-bottom:10px; padding-top:20px; margin-left: 30px;   margin-top: 50px; margin-bottom: 50px; ">

                    <h2 style="margin-bottom: 30px; margin-left: 30px;">
                        Cámaras
                    </h2>

                    <div id="myGroup2">

                        <span style="padding-bottom:10px; padding-top:20px; margin-left: 30px;   margin-top: 50px; margin-bottom: 50px;">
                            <!--Camara 1-->
                            <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" data-bs-parent="#myGroup2">
                                Cámara 1
                            </button>
                            <!--Camara 2-->
                            <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2" data-bs-parent="#myGroup2">
                                Cámara 2
                            </button>
                            <!--Añadir Cámara-->
                            <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3" data-bs-parent="#myGroup2" style="float: right;">
                                +
                            </button>
                        </span>

                        <!--Camara 1-->
                        <div class="multi-collapse collapse" id="collapseExample" style="padding-bottom:10px; padding-top:20px; margin-left: 30px;   margin-top: 50px; margin-bottom: 50px;" data-bs-parent="#myGroup2">
                            <p>Feed de la cámara 1:</p>
                            <iframe width="850" height="650" src="https://c512-2800-e2-5680-2a59-b9c6-a15f-68b-146a.ngrok.io/" title="Camera video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <!--Camara 2-->
                        <div class="multi-collapse collapse" id="collapseExample2" style="padding-bottom:10px; padding-top:20px; margin-left: 30px;   margin-top: 50px; margin-bottom: 50px;" data-bs-parent="#myGroup2">
                            <p>Feed de la cámara 2:</p>
                            <iframe width="850" height="650" src="https://www.youtube.com/embed/qM19eRgOK1Q?controls=0" title="Camera video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>



                        <div class="multi-collapse collapse" id="collapseExample3" style="padding-bottom:10px; padding-top:20px; margin-left: 30px;   margin-top: 50px; margin-bottom: 50px;" data-bs-parent="#myGroup2">
                            <h2>Listado y añadir cámaras</h2>

                            <div class="container">
                                <div class="row">
                                    <?php
                                    //Conectamos para obtener la lista de camaras
                                    $idUsusario = $_SESSION['idUser'] ?? '';
                                    $query = "SELECT * FROM camara WHERE CCTV_idCCTV = (SELECT idCCTV FROM cctv WHERE Usuario_idUsuario = '$idUsusario');";
                                    $result = $conn->query($query);
                                    $numfilas = $result->num_rows;
                                    if ($numfilas > 0) {
                                    ?>
                                        <!-- Tabla de Registros -->
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">
                                                        <center>Driección IP</center>
                                                    </th>
                                                    <th scope="col">
                                                        <center>Alias</center>
                                                    </th>
                                                    <th scope="col">
                                                        <center>Serial</center>
                                                    </th>
                                                    <th scope="col">
                                                        <center>Marca</center>
                                                    </th>
                                                    <th scope="col">
                                                        <center>Modelo</center>
                                                    </th>
                                                    <th scope="col">
                                                        <center>Estado</center>
                                                    </th>
                                                    <th scope="col">
                                                        <center>Guardar</center>
                                                    </th>
                                                    <th scope="col">
                                                        <center>Eliminar</center>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                for ($i = 0; $i < $numfilas; $i++) {
                                                    $aux = $result->fetch_object();
                                                ?>
                                                    <tr>
                                                        <form id="formActualizarCamara<?php echo $aux->idCamara; ?>" method="POST">
                                                            <input type="hidden" name="idCamara" value="<?php echo $aux->idCamara; ?>">
                                                            <td class="align-middle"><input name="IP" id="IP" class="form-control" form="formActualizarCamara<?php echo $aux->idCamara; ?>" type="text" value="<?php echo $aux->direccionIPCamara; ?>"></td>
                                                            <td class="align-middle"><input name="Alias" id="Alias" class="form-control" form="formActualizarCamara<?php echo $aux->idCamara; ?>" type="text" value="<?php echo $aux->aliasCamara; ?>"></td>
                                                            <td class="align-middle"><input name="Serial" id="Serial" class="form-control" form="formActualizarCamara<?php echo $aux->idCamara; ?>" type="text" value="<?php echo $aux->codigoSNCamara; ?>"></td>
                                                            <td class="align-middle"><input name="Marca" id="Marca" class="form-control" form="formActualizarCamara<?php echo $aux->idCamara; ?>" type="text" value="<?php echo $aux->marcaCamara; ?>"></td>
                                                            <td class="align-middle"><input name="Modelo" id="Modelo" class="form-control" form="formActualizarCamara<?php echo $aux->idCamara; ?>" type="text" value="<?php echo $aux->modeloCamara; ?>"></td>
                                                            <td class="align-middle">
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="checkbox" role="switch" name="estadoCamara" id="estadoCamara" form="formActualizarCamara<?php echo $aux->idCamara; ?>" <?php $check = $aux->estadoCamara == "1" ? "checked" : "";
                                                                                                                                                                                                                                    echo $check; ?>>
                                                                </div>
                                                            </td>
                                                            <td class="align-middle">
                                                                <center>
                                                                    <button type="button" onclick="updateCamara(<?php echo $aux->idCamara; ?>);" class="btn btn-primary">✔</button>
                                                                </center>
                                                            </td>
                                                            <td class="align-middle">
                                                                <center>
                                                                    <button type="button" onclick="deleteCamara(<?php echo $aux->idCamara; ?>);" class="btn btn-primary">X</button>
                                                                </center>
                                                            </td>
                                                        </form>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    <?php
                                    } else {
                                    ?>
                                        <h3>Upps... No hay camaras registradas</h3>
                                    <?php
                                    }
                                    //cerrarConexion();
                                    ?>
                                </div>

                                <!-- Formulario crear cámara -->
                                <div class="row">
                                    <div class="col-7">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h2>Añadir Cámara:</h2>
                                            </div>
                                            <div class="panel-body">
                                                <form id="formCamara">
                                                    <div class="form-group">
                                                        <label for="introdate">
                                                            Dirección IP o WEB
                                                        </label>
                                                        <input type="text" class="form-control" id="crearDireccionIPCamara" name="crearDireccionIPCamara" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="productname">
                                                            Alias de la cámara
                                                        </label>
                                                        <input type="text" class="form-control" id="crearAliasCamara" name="crearAliasCamara" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="productname">
                                                            Serial de la cámara
                                                        </label>
                                                        <input type="text" class="form-control" id="crearSerialCamara" name="crearSerialCamara" />
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="productname">
                                                                Marca de la cámara
                                                            </label>
                                                            <input type="text" class="form-control" id="crearMarcaCamara" name="crearMarcaCamara" />
                                                        </div>
                                                        <div class="col">
                                                            <label for="productname">
                                                                Modelo de la cámara
                                                            </label>
                                                            <input type="text" form="formCamara" class="form-control" id="crearModeloCamara" name="crearModeloCamara" />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <button type="button" class="btn" onclick="crearCamara();" style="margin-top: 20px;">
                                                                Añadir Cámara
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Camaras -->

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
                        <li><a href="politica-privacidad.html" class=" ">Nuestra política de privacidad</a><br /></li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-8" style="margin-top: 50px">
                    <h5 class="text-uppercase mb-0">Información de contacto</h5>
                    <br /><br />

                    <ul class="list-unstyled">
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
<!-- consultas de página -->
<script src="jsQuerys/panelAdmin.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</html>