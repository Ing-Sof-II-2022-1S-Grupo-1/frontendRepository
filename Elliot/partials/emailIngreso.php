<?php
$paraCorreo = $_SESSION['mail'] ?? '';
$titulo = "Ingreso a Cuenta Eliot";
date_default_timezone_set('America/Bogota');
$hoy = date("F j, Y, g:i a");
$mensaje = '
<html>
<head>
    <title>Acceso a tu cuenta Eliot</title>
</head>
<body>
<h1>Alguien ingresó a tu cuenta</h1>
<p>
Hola! 
</p>
<p>
Se ha ingresado a tu cuenta en la fecha ' . $hoy . '
</p>
<p>
Si eres tu, omite este mensaje. </p>
<p>
De lo contrario contáctate inmediatamente con Soporte para bridarte ayuda en el proceso de recuperación de tu cuenta.
</p>
</body>
</html>
';

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: <' . $paraCorreo . '>' . "\r\n";
$cabeceras .= 'From: Ingreso a Cuenta Eliot <noresponderEliot@gmail.com>' . "\r\n";

mail($paraCorreo, $titulo, $mensaje, $cabeceras);
