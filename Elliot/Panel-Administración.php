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
                        <li class="nav-item" style="margin-top: 20px; margin-bottom: 20px; margin-left: 10px;">
                            <a class="nav-link active" id="texto-botones" data-bs-toggle="collapse" href="#reles" aria-controls="reles" data-bs-parent="#myGroup" aria-expanded="false">Relés</a>
                        </li>
                        <li class="nav-item" style="margin-top: 20px; margin-left: 10px;">
                            <a class="nav-link active" id="texto-botones" data-bs-toggle="collapse" href="#sensores" aria-controls="sensores" data-bs-parent="#myGroup" aria-expanded="false">Sensores</a>
                        </li>
                        <div class="divider d-flex align-items-center my-4"></div>
                        <li class="nav-item" style=" margin-bottom: 30px; margin-left: 10px;">
                            <a class="nav-link" href="contacto.html" tabindex="-1" aria-disabled="true" id="texto-botones">Ayuda</a>
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
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn">Leer más</a>
                            </div>
                        </div>

                        <div class="card" style="width: 18rem; display: inline-block; margin-left: 60px; margin-right: 60px;">
                            <div class="card-body">
                                <h5 class="card-title">El alza de los CCTV's en el último año</h5>
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
                            <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" data-bs-parent="#myGroup2">
                                Camara 1
                            </button>
                            <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2" data-bs-parent="#myGroup2">
                                Camara 2
                            </button>
                            <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3" data-bs-parent="#myGroup2" style="float: right;">
                                Añadir cámara
                            </button>
                        </span>
                        <div class="multi-collapse collapse" id="collapseExample" style="padding-bottom:10px; padding-top:20px; margin-left: 30px;   margin-top: 50px; margin-bottom: 50px;" data-bs-parent="#myGroup2">
                            <p>Feed de la cámara 1 se ve en el iframe:</p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/qM19eRgOK1Q?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="multi-collapse collapse" id="collapseExample2" style="padding-bottom:10px; padding-top:20px; margin-left: 30px;   margin-top: 50px; margin-bottom: 50px;" data-bs-parent="#myGroup2">
                            <p>Feed de la cámara 2 se ve en el iframe:</p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/qM19eRgOK1Q?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="multi-collapse collapse" id="collapseExample3" style="padding-bottom:10px; padding-top:20px; margin-left: 30px;   margin-top: 50px; margin-bottom: 50px;" data-bs-parent="#myGroup2">
                            <h2>Listado y añadir cámaras</h2>

                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <table id="productTable" class="table table-bordered table-condensed table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Editar</th>
                                                    <th>Nombre de cámara</th>
                                                    <th>Dirección IP</th>
                                                    <th>Estado</th>
                                                    <th>Eliminar</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h2>Información del componente</h2>
                                            </div>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label for="productname">
                                                        Nombre de cámara
                                                    </label>
                                                    <input type="text" class="form-control" value=" " id="productname" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="introdate">
                                                        Dirección IP
                                                    </label>
                                                    <input type="text" class="form-control" value=" " id="introdate" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="url">
                                                        Estado
                                                    </label>
                                                    <input type="text" class="form-control" value=" " id="url" />
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <button type="button" id="updateButton" class="btn " onclick="productUpdate();" style="margin-top: 20px;">
                                                            Añadir
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                // Next id for adding a new Product
                                var nextId = 1;
                                // ID of Product currently editing
                                var activeId = 0;

                                function productDisplay(ctl) {
                                    var row = $(ctl).parents("tr");
                                    var cols = row.children("td");

                                    activeId = $($(cols[0]).children("button")[0]).data("id");
                                    $("#productname").val($(cols[1]).text());
                                    $("#introdate").val($(cols[2]).text());
                                    $("#url").val($(cols[3]).text());

                                    // Change Update Button Text
                                    $("#updateButton").text("Update");
                                }

                                function productUpdate() {
                                    if ($("#updateButton").text() == "Update") {
                                        productUpdateInTable(activeId);
                                    } else {
                                        productAddToTable();
                                    }

                                    // Clear form fields
                                    formClear();

                                    // Focus to product name field
                                    $("#productname").focus();
                                }

                                // Add product to <table>
                                function productAddToTable() {
                                    // First check if a <tbody> tag exists, add one if not
                                    if ($("#productTable tbody").length == 0) {
                                        $("#productTable").append("<tbody></tbody>");
                                    }

                                    // Append product to table
                                    $("#productTable tbody").append(
                                        productBuildTableRow(nextId));

                                    // Increment next ID to use
                                    nextId += 1;
                                }

                                // Update product in <table>
                                function productUpdateInTable(id) {
                                    // Find Product in <table>
                                    var row = $("#productTable button[data-id='" + id + "']")
                                        .parents("tr")[0];

                                    // Add changed product to table
                                    $(row).after(productBuildTableRow(id));
                                    // Remove original product
                                    $(row).remove();

                                    // Clear form fields
                                    formClear();

                                    // Change Update Button Text
                                    $("#updateButton").text("Add");
                                }

                                // Build a <table> row of Product data
                                function productBuildTableRow(id) {
                                    var ret =
                                        "<tr>" +
                                        "<td>" +
                                        "<button type='button' " +
                                        "onclick='productDisplay(this);' " +
                                        "class='btn btn-default' " +
                                        "data-id='" + id + "'>" +
                                        "<span class='glyphicon glyphicon-edit' />" +
                                        "</button>" +
                                        "</td>" +
                                        "<td>" + $("#productname").val() + "</td>" +
                                        "<td>" + $("#introdate").val() + "</td>" +
                                        "<td>" + $("#url").val() + "</td>" +
                                        "<td>" +
                                        "<button type='button' " +
                                        "onclick='productDelete(this);' " +
                                        "class='btn btn-default' " +
                                        "data-id='" + id + "'>" +
                                        "<span class='glyphicon glyphicon-remove' />" +
                                        "</button>" +
                                        "</td>" +
                                        "</tr>"

                                    return ret;
                                }

                                // Delete product from <table>
                                function productDelete(ctl) {
                                    $(ctl).parents("tr").remove();
                                }

                                // Clear form fields
                                function formClear() {
                                    $("#productname").val("");
                                    $("#introdate").val("");
                                    $("#url").val("");
                                }
                            </script>


                        </div>

                    </div>
                </div>
                <!-- Camaras -->

                <!-- Reles -->
                <div class="col multi-collapse collapse" class="collapse" id="reles" data-bs-parent="#myGroup" style="padding-bottom:10px; padding-top:20px; margin-left: 30px;   margin-top: 50px; margin-bottom: 50px; ">

                    <h2 style="margin-bottom: 30px; margin-left: 30px;">
                        Relés
                    </h2>

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <table id="productTable" class="table table-bordered table-condensed table-striped">
                                    <thead>
                                        <tr>
                                            <th>Editar</th>
                                            <th>Nombre relé</th>
                                            <th>Dirección IP</th>
                                            <th>Estado</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h2>Información del componente</h2>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label for="productname">
                                                Nombre de relé
                                            </label>
                                            <input type="text" class="form-control" value=" " id="productname" />
                                        </div>
                                        <div class="form-group">
                                            <label for="introdate">
                                                Dirección IP
                                            </label>
                                            <input type="text" class="form-control" value=" " id="introdate" />
                                        </div>
                                        <div class="form-group">
                                            <label for="url">
                                                Estado
                                            </label>
                                            <input type="text" class="form-control" value=" " id="url" />
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <button type="button" id="updateButton" class="btn " onclick="productUpdate();" style="margin-top: 20px;">
                                                    Añadir
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        // Next id for adding a new Product
                        var nextId = 1;
                        // ID of Product currently editing
                        var activeId = 0;

                        function productDisplay(ctl) {
                            var row = $(ctl).parents("tr");
                            var cols = row.children("td");

                            activeId = $($(cols[0]).children("button")[0]).data("id");
                            $("#productname").val($(cols[1]).text());
                            $("#introdate").val($(cols[2]).text());
                            $("#url").val($(cols[3]).text());

                            // Change Update Button Text
                            $("#updateButton").text("Update");
                        }

                        function productUpdate() {
                            if ($("#updateButton").text() == "Update") {
                                productUpdateInTable(activeId);
                            } else {
                                productAddToTable();
                            }

                            // Clear form fields
                            formClear();

                            // Focus to product name field
                            $("#productname").focus();
                        }

                        // Add product to <table>
                        function productAddToTable() {
                            // First check if a <tbody> tag exists, add one if not
                            if ($("#productTable tbody").length == 0) {
                                $("#productTable").append("<tbody></tbody>");
                            }

                            // Append product to table
                            $("#productTable tbody").append(
                                productBuildTableRow(nextId));

                            // Increment next ID to use
                            nextId += 1;
                        }

                        // Update product in <table>
                        function productUpdateInTable(id) {
                            // Find Product in <table>
                            var row = $("#productTable button[data-id='" + id + "']")
                                .parents("tr")[0];

                            // Add changed product to table
                            $(row).after(productBuildTableRow(id));
                            // Remove original product
                            $(row).remove();

                            // Clear form fields
                            formClear();

                            // Change Update Button Text
                            $("#updateButton").text("Add");
                        }

                        // Build a <table> row of Product data
                        function productBuildTableRow(id) {
                            var ret =
                                "<tr>" +
                                "<td>" +
                                "<button type='button' " +
                                "onclick='productDisplay(this);' " +
                                "class='btn btn-default' " +
                                "data-id='" + id + "'>" +
                                "<span class='glyphicon glyphicon-edit' />" +
                                "</button>" +
                                "</td>" +
                                "<td>" + $("#productname").val() + "</td>" +
                                "<td>" + $("#introdate").val() + "</td>" +
                                "<td>" + $("#url").val() + "</td>" +
                                "<td>" +
                                "<button type='button' " +
                                "onclick='productDelete(this);' " +
                                "class='btn btn-default' " +
                                "data-id='" + id + "'>" +
                                "<span class='glyphicon glyphicon-remove' />" +
                                "</button>" +
                                "</td>" +
                                "</tr>"

                            return ret;
                        }

                        // Delete product from <table>
                        function productDelete(ctl) {
                            $(ctl).parents("tr").remove();
                        }

                        // Clear form fields
                        function formClear() {
                            $("#productname").val("");
                            $("#introdate").val("");
                            $("#url").val("");
                        }
                    </script>



                </div>
                <!-- Reles -->

                <!-- Sensores -->
                <div class="col multi-collapse collapse" class="collapse" id="sensores" data-bs-parent="#myGroup" style="padding-bottom:10px; padding-top:20px; margin-left: 30px;   margin-top: 50px; margin-bottom: 50px; ">

                    <h2 style="margin-bottom: 30px; margin-left: 30px;">
                        Sensores
                    </h2>

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <table id="productTable" class="table table-bordered table-condensed table-striped">
                                    <thead>
                                        <tr>
                                            <th>Editar</th>
                                            <th>Nombre del sensor</th>
                                            <th>Dirección IP</th>
                                            <th>Estado</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h2>Información del componente</h2>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label for="productname">
                                                Nombre del sensor
                                            </label>
                                            <input type="text" class="form-control" value=" " id="productname" />
                                        </div>
                                        <div class="form-group">
                                            <label for="introdate">
                                                Dirección IP
                                            </label>
                                            <input type="text" class="form-control" value=" " id="introdate" />
                                        </div>
                                        <div class="form-group">
                                            <label for="url">
                                                Estado
                                            </label>
                                            <input type="text" class="form-control" value=" " id="url" />
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <button type="button" id="updateButton" class="btn " onclick="productUpdate();" style="margin-top: 20px;">
                                                    Añadir
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        // Next id for adding a new Product
                        var nextId = 1;
                        // ID of Product currently editing
                        var activeId = 0;

                        function productDisplay(ctl) {
                            var row = $(ctl).parents("tr");
                            var cols = row.children("td");

                            activeId = $($(cols[0]).children("button")[0]).data("id");
                            $("#productname").val($(cols[1]).text());
                            $("#introdate").val($(cols[2]).text());
                            $("#url").val($(cols[3]).text());

                            // Change Update Button Text
                            $("#updateButton").text("Update");
                        }

                        function productUpdate() {
                            if ($("#updateButton").text() == "Update") {
                                productUpdateInTable(activeId);
                            } else {
                                productAddToTable();
                            }

                            // Clear form fields
                            formClear();

                            // Focus to product name field
                            $("#productname").focus();
                        }

                        // Add product to <table>
                        function productAddToTable() {
                            // First check if a <tbody> tag exists, add one if not
                            if ($("#productTable tbody").length == 0) {
                                $("#productTable").append("<tbody></tbody>");
                            }

                            // Append product to table
                            $("#productTable tbody").append(
                                productBuildTableRow(nextId));

                            // Increment next ID to use
                            nextId += 1;
                        }

                        // Update product in <table>
                        function productUpdateInTable(id) {
                            // Find Product in <table>
                            var row = $("#productTable button[data-id='" + id + "']")
                                .parents("tr")[0];

                            // Add changed product to table
                            $(row).after(productBuildTableRow(id));
                            // Remove original product
                            $(row).remove();

                            // Clear form fields
                            formClear();

                            // Change Update Button Text
                            $("#updateButton").text("Add");
                        }

                        // Build a <table> row of Product data
                        function productBuildTableRow(id) {
                            var ret =
                                "<tr>" +
                                "<td>" +
                                "<button type='button' " +
                                "onclick='productDisplay(this);' " +
                                "class='btn btn-default' " +
                                "data-id='" + id + "'>" +
                                "<span class='glyphicon glyphicon-edit' />" +
                                "</button>" +
                                "</td>" +
                                "<td>" + $("#productname").val() + "</td>" +
                                "<td>" + $("#introdate").val() + "</td>" +
                                "<td>" + $("#url").val() + "</td>" +
                                "<td>" +
                                "<button type='button' " +
                                "onclick='productDelete(this);' " +
                                "class='btn btn-default' " +
                                "data-id='" + id + "'>" +
                                "<span class='glyphicon glyphicon-remove' />" +
                                "</button>" +
                                "</td>" +
                                "</tr>"

                            return ret;
                        }

                        // Delete product from <table>
                        function productDelete(ctl) {
                            $(ctl).parents("tr").remove();
                        }

                        // Clear form fields
                        function formClear() {
                            $("#productname").val("");
                            $("#introdate").val("");
                            $("#url").val("");
                        }
                    </script>

                </div>
                <!-- Sensores -->

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