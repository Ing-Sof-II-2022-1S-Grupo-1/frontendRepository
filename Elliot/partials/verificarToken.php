<?php

$token = $_POST['token'] ?? '';

try {
    require "../modules/dbUpdate.php";
    $result = $conn->query("SELECT * from usuario 
                                WHERE tokenUsuario='$token'
                                AND tokenUsuarioEstado ='1';");
    $numfilas = $result->num_rows;
    $fetch = $result->fetch_object();
    // echo $numfilas;
    if ($numfilas < 1) {
        echo 9;         //No existe un usuario con token habilitado
    } else {
        $result2 = $conn->query("UPDATE usuario 
                                    SET tokenUsuarioEstado = '0'
                                    WHERE (tokenUsuario='$token');");
        session_start();
        $_SESSION['idUser'] = $fetch->idUsuario;
        $_SESSION['user'] = $fetch->usernameUsuario;
        $_SESSION['nombres'] = $fetch->nombresUsuario;
        $_SESSION['apellidos'] = $fetch->apellidosUsuario;
        $_SESSION['mail'] = $fetch->correoUsuario;
        echo 1;
    }
} catch (Exception $e) {
    echo $e;
    echo 2;
}
