<?php
try {
    require "../modules/dbUpdate.php";
    $usuario = $_POST['username'] ?? '';     //Extraemos del serializado el valor de la variable
    $contrasena = $_POST['password'] ?? '';     //Extraemos del serializado el valor de la variable

    //Preparamos la consulta y la realizamos
    $result = $conn->query("SELECT * from usuario 
                                WHERE usernameUsuario='$usuario';");
    $numfilas = $result->num_rows;
    if ($numfilas == 0) {
        echo 0; //Indica que no existe el Usuario
    } else {
        $fetch = $result->fetch_object();
        //if (password_verify($contrasena, $fetch->passwordUsuario)) {
        if ($contrasena == $fetch->passwordUsuario) {
            session_start();
            $_SESSION['idUser'] = $fetch->idUsuario;
            $_SESSION['user'] = $fetch->usernameUsuario;
            $_SESSION['nombres'] = $fetch->nombresUsuario;
            $_SESSION['apellidos'] = $fetch->apellidosUsuario;

            //Cancelamos el token de la base de datos para evitar cambios indeseados de contraseñas
            $result2 = $conn->query("UPDATE usuario 
                                        SET tokenUsuarioEstado = '0' 
                                        WHERE (usernameUsuario='$usuario');");

            echo 1; //Indica que el usuario se autenticó correctamente
        } else {
            echo 9; //Indica que existe el usuario pero la contraseña es incorrecta
        }
    }

    cerrarConexion();
} catch (Exception $e) {
    echo $e;
    echo 2;         //Flag para indicar que ocurrió un error durante la consulta
}
