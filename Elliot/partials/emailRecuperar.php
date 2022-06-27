<?php

$paraCorreo = $_POST['email'] ?? '';

try {
    require "../modules/dbSelect.php";
    $result = $conn->query("SELECT * from usuario 
                                WHERE correoUsuario ='$paraCorreo';");
    $fetch = $result->fetch_object();
    $confirmacion = $fetch->tokenUsuarioEstado;
    if ($confirmacion == 0) {
        die("No autorizado");
    }
    $token = $fetch->tokenUsuario;
} catch (Exception $e) {
    echo $e;
    echo 2;
    die("Upps error");
}


$titulo = "Recupera tu cuenta Eliot";
date_default_timezone_set('America/Bogota');
$hoy = date("F j, Y, g:i a");
$mensaje = '
<html>
<head>
    <title>Recupera tu cuenta Eliot</title>
</head>
<body>
<h1>Recupera tu cuenta Eliot</h1>
<p>
Hola! 
</p>
<p>
Se ha solicitado un restablecimiento de tu contraseña el día ' . $hoy . ' 
</p>
<p>
Ingresa el siguiente código para recuperar tu cuenta: 
</p>
<p>
<b>
' . $token . '
</b>
</p>
<p>
NO COMPARTAS ESTE CÓDIGO CON NADIE. Ni siquiera con Soporte.
</p>
<p>
Si no eres tu, omite este mensaje. 
</p>
</body>
</html>
';

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: <' . $paraCorreo . '>' . "\r\n";
$cabeceras .= 'From: Recupera tu cuenta Eliot <noresponderEliot@gmail.com>' . "\r\n";

mail($paraCorreo, $titulo, $mensaje, $cabeceras);
