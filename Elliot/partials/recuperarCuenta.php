<?php
$paraCorreo = $_POST['email'] ?? '';
$token = bin2hex(random_bytes((30 - (30 % 2)) / 2)); //token de longitud = 30;

try {
    require "../modules/dbUpdate.php";
    $result = $conn->query("SELECT * from usuario 
                                WHERE correoUsuario='$paraCorreo';");
    $numfilas = $result->num_rows;
    // echo $numfilas;
    if ($numfilas < 1) {
        echo 9;         //No existe un correo registrado con dicho código
    } else {
        $result2 = $conn->query("UPDATE usuario 
                                    SET tokenUsuario = '$token',
                                        tokenUsuarioEstado = '1'
                                    WHERE (`correoUsuario` = '$paraCorreo');");
        echo 1;
    }
} catch (Exception $e) {
    echo $e;
    echo 2;
}
