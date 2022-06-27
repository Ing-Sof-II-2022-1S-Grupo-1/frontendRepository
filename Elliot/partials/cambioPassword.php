<?php
$usernameUsuario = $_POST['username'] ?? '';
$passwordUsuario = $_POST['password'] ?? '';

if (empty($usernameUsuario)) {
    //die("Acceso No Autorizado!!!");
}

try {
    require "../modules/dbUpdate.php";     //Incorporamos el código para consultas Delete
    //Preparamos la consulta y la realizamos
    $result = $conn->query("SELECT * from usuario 
                                WHERE usernameUsuario='wolfGhost23';");
    $numfilas = $result->num_rows;
    if ($numfilas < 1) {
        echo 2; //Indica que No existe el Usuario
    } else {
        $passwordUsuario = password_hash($passwordUsuario, PASSWORD_BCRYPT);
        $token = bin2hex(random_bytes((30 - (30 % 2)) / 2)); //token de longitud = 30

        $result2 = $conn->query("UPDATE usuario 
                                    SET `passwordUsuario`='$passwordUsuario', 
                                        `tokenUsuario`= '$token', 
                                        `tokenUsuarioEstado`='0' 
                                    WHERE `usernameUsuario`='$usernameUsuario';");                                         
        echo 1; //Todo correcto :D
    }
    cerrarConexion();  //Finalizamos la conexión
} catch (Exception $e) {
    echo $e;
    echo 5;         //Flag para indicar que ocurrió un error durante la consulta
}