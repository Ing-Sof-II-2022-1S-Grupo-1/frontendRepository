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
$mensaje = '
<html>
<head>
    <title></title>
</head>
<body>
    
</body>
</html>
';

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: <' . $paraCorreo . '>' . "\r\n";
$cabeceras .= 'From: Recuperar contraseña <noresponderEliot@gmail.com>' . "\r\n";
//$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

/*
for ($i=0; $i < 10; $i++) { 
    mail($paraCorreo, $titulo, $mensaje, $tuCorreo);
}
*/
if (mail($paraCorreo, $titulo, $mensaje, $cabeceras)) {
    echo "Correo Envíado";
} else if (isset($_POST['send'])) {
    echo "Error :P";
}
?>