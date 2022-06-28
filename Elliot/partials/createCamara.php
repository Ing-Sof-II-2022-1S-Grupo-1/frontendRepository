<?php

$ip = $_POST['crearDireccionIPCamara'] ?? '';     //Extraemos del serializado el valor de la variable
$alias = $_POST['crearAliasCamara'] ?? '';     //Extraemos del serializado el valor de la variable
$serial = $_POST['crearSerialCamara'] ?? '';     //Extraemos del serializado el valor de la variable
$marca = $_POST['crearMarcaCamara'] ?? '';     //Extraemos del serializado el valor de la variable
$modelo = $_POST['crearModeloCamara'] ?? '';     //Extraemos del serializado el valor de la variable

if (empty($ip)) {
    echo 2;
    die("Acceso No Autorizado!!!");
}

try {
    require "../modules/dbInsert.php";     //Incorporamos el código para consultas Delete

    //Preparamos la consulta y la realizamos
    $result = $conn->query("INSERT INTO camara
                                    (direccionIPCamara, aliasCamara, codigoSNCamara,
                                        marcaCamara, modeloCamara, estadoCamara, CCTV_idCCTV) 
                                VALUES ('$ip', '$alias', '$serial', '$marca', '$modelo', 1, 1);");

    cerrarConexion();  //Finalizamos la conexión

    echo 1;         //Flag para indicar que fue correcta la consulta
} catch (Exception $e) {
    echo $e;
    echo 2;         //Flag para indicar que ocurrió un error durante la consulta
}
