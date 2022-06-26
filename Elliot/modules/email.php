<?php
// El mensaje
?>
<form action="email.php" method="post">
    <input type="text" name="correo" placeholder="Correo"></input>
    <button type="submit" name="send">Enviar</button>
</form>

<?php
$paraCorreo = $_POST['correo'] ?? '';
$titulo = "Recuperación de Contraseña";
$hoy = date("F j, Y, g:i a");
$mensaje = '
<html>
<head>
    <title></title>
</head>
<body>
<h1>Alguien ingresó a tu cuenta</h1>
<p>
Hola! 
</p>
<p>
Se ha ingresado a tu cuenta en la fecha ' . $hoy . '
</p>
</body>
</html>
';

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: <' . $paraCorreo . '>' . "\r\n";
$cabeceras .= 'From: Recuperar contraseña <noresponderEliot@gmail.com>' . "\r\n";

if (mail($paraCorreo, $titulo, $mensaje, $cabeceras)) {
    echo "Correo Envíado";
} else if (isset($_POST['send'])) {
    echo "Error :P";
}
?>