<?php
$nombresUsuario = $_POST['nombres'] ?? '';     //Extraemos del serializado el valor de la variable
$apellidosUsuario = $_POST['apellidos'] ?? '';
$usernameUsuario = $_POST['username'] ?? '';
$correoUsuario = $_POST['email'] ?? '';
$passwordUsuario = $_POST['password'] ?? '';

if (empty($nombresUsuario)) {
     die("Acceso No Autorizado!!!");
}

try {
    require "../modules/dbInsert.php";     //Incorporamos el código para consultas Delete
    //Preparamos la consulta y la realizamos
    $result = $conn->query("SELECT * from usuario 
                                WHERE usernameUsuario='$usernameUsuario' 
                                OR correoUsuario='$correoUsuario';");
    $numfilas = $result->num_rows;
    if ($numfilas >= 1) {
        echo 9; //Indica que existe el Usuario
    } else {
        $passwordUsuario = password_hash($passwordUsuario, PASSWORD_BCRYPT);
        $token = bin2hex(random_bytes((30 - (30 % 2)) / 2)); //token de longitud = 30
        $result2 = $conn->query("INSERT INTO usuario (`nombresUsuario`, `apellidosUsuario`, `usernameUsuario`, `correoUsuario`, `passwordUsuario`, `estadoUsuario`, `tokenUsuario`, `tokenUsuarioEstado`) 
                                         VALUES ('$nombresUsuario', '$apellidosUsuario', '$usernameUsuario', '$correoUsuario', '$passwordUsuario', '1', '$token', '0');");                                         
        echo 1; //Todo correcto :D
    }
    cerrarConexion();  //Finalizamos la conexión
} catch (Exception $e) {
    echo $e;
    echo 2;         //Flag para indicar que ocurrió un error durante la consulta
}
