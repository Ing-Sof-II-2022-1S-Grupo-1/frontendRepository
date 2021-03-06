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
                <img src="Resources/Images/Logo-menu.png" width="60px " />
                <p class="texto-logo">ELLIOT TECH</p>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" style="padding-right: 40px; padding-left: 40px">
                        <a class="nav-link active" aria-current="page" href="inicio.html" id="texto-botones">Inicio</a
              >
            </li>
            <li class="nav-item" id="nav-item-linea" style="padding-left: 40px">
              <a class="nav-link" href="quienes-somos.html" id="texto-botones"
                >??Qui??nes somos?</a>
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
                        <a class="nav-link" href="productos.html" id="texto-botones">
                            Productos
                        </a>
                    </li>
                    <li class="nav-item" style="padding-left: 40px">
                        <a class="nav-link" href="planes.html" id="texto-botones">Planes</a>
                    </li>
                </ul>
            </div>
        </div>

        <span class="login">
            <a href="Panel-Administraci??n.php">
                <img src="Resources/Images/user_50px.png" width="30px" style="margin-right: 30px"/>
            </a>
            <a href="contacto.html">        
                <img src="Resources/Images/phone_50px.png" width="30px" />
            </a>
        </span>
    </nav>

    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="Resources/Images/lockk.png" class="img-fluid" alt="Sample image" style="max-width: 60%" />
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form id="formLogin" method="POST">

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Cambio de contrase??a</p>
                        </div>

                        <input type="hidden" name="username" id="username" value="<?php echo $_SESSION['user'];?>">
                        <input type="hidden" name="mail" id="mail" value="<?php echo $_SESSION['mail'];?>">

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Ingrese su Contrase??a" />
                            <label class="form-label" for="password">Nueva Contrase??a</label>
                            <div class="d-flex justify-content-between align-items-center">
                                <p>Su contrase??a debe tener entre 8 y 20 caracteres, puede contener letras o n??meros; no debe contener espacios, caracteres especiales ni emoji.</p>
                            </div>
                        </div>

                        <!-- confirmPassword input -->
                        <div class="form-outline mb-3">
                            <input type="password" name="confirmPassword" id="confirmPassword" class="form-control form-control-lg" placeholder="Confirme su Contrase??a" />
                            <label class="form-label" for="confirmPassword">Confirmar Nueva contrase??a</label>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="button" onclick="cambiarPassword();" class="btn  btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem">
                                Cambiar Contrase??a
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center text-lg-start" style="
        background-color: #feefe8;
        min-height: 300px;
        border-right-color: rgba(0, 0, 0, 0);
        border-width: 3px;
        border-top-color: rgb(0, 0, 0);
        border-style: solid;
        border-bottom-color: rgba(0, 0, 0, 0);
        border-left-color: rgba(255, 255, 255, 0);
      ">
        <!-- Grid container -->
        <div class="container p-2">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-4 ">
                    <img src="Resources/Images/Grupo 35.png " width="40% " style="float: right; margin-top: 50px; float: left " /><br /><br /><br /><br /><br /><br />
                    <ul class="list-unstyled mb-0 ">
                        <li><a href="inicio.html" class=" ">Inicio</a><br /></li>
                        <li><a href="quienes-somos.html" class=" ">??Qui??nes Somos?</a><br /></li>
                        <li><a href="productos.html" class=" ">Productos</a><br /></li>
                        <li><a href="planes.html" class=" ">Planes</a><br /></li>
                        <li><a href="politica-privacidad.html" class=" ">Nuestra pol??tica de privacidad</a><br /></li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-8" style="margin-top: 50px">
                    <h5 class="text-uppercase mb-0">Informaci??n de contacto</h5>
                    <br /><br />

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!" class="text-dark">Colombia</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Teusaquillo, Bogot??</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">3145678934</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">2445678</a>
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

<!-- auteticaci??n de Usuario -->
<script src="jsQuerys/changePassword.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</html>