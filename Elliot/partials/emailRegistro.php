<?php
$nombresUsuario = $_POST['nombres'] ?? '';     //Extraemos del serializado el valor de la variable
$correoUsuario = $_POST['email'] ?? '';

if (empty($nombresUsuario)) {
    die("Acceso No Autorizado!!!");
}

$paraCorreo = $correoUsuario;
$titulo = "Registro Cuenta Eliot";
date_default_timezone_set('America/Bogota');
$hoy = date("F j, Y, g:i a");
$mensaje = '
<html>
<head>
    <title>Registro Exitoso de cuenta Eliot</title>
</head>
<body>
<h1>Se registró correctamente tu cuenta de Eliot</h1>
<p>
Hola! 
</p>
<p>
Se ha registrado este correo a tu cuenta en la fecha ' . $hoy . '
</p>
<p>
Si eres tu, omite este mensaje. </p>
<p>
De lo contrario contáctate inmediatamente con Soporte para bridarte ayuda en el proceso de eliminación de dicha información.
</p>
</body>
</html>
';

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: <' . $paraCorreo . '>' . "\r\n";
$cabeceras .= 'From: Registro Exitoso de cuenta Eliot <noresponderEliot@gmail.com>' . "\r\n";

mail($paraCorreo, $titulo, $mensaje, $cabeceras);
