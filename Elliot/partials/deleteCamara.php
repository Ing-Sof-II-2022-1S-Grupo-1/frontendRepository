<?php

$id = $_POST['idCamara'] ?? '';

if (empty($id)) {
    echo 2;
    die("Acceso No Autorizado!!!");
}

try {
    require "../modules/dbDelete.php";     //Incorporamos el código para consultas Delete

    //Preparamos la consulta y la realizamos
    $result = $conn->query("DELETE FROM camara WHERE idCamara = '$id';");

    cerrarConexion();  //Finalizamos la conexión

    echo 1;         //Flag para indicar que fue correcta la consulta
} catch (Exception $e) {
    echo $e;
    echo 2;         //Flag para indicar que ocurrió un error durante la consulta
}
