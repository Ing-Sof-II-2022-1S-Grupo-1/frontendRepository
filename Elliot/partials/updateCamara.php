<?php

$id = $_POST['idCamara'] ?? '';
$ip = $_POST['IP'] ?? '';     //Extraemos del serializado el valor de la variable
$alias = $_POST['Alias'] ?? '';     //Extraemos del serializado el valor de la variable
$serial = $_POST['Serial'] ?? '';     //Extraemos del serializado el valor de la variable
$marca = $_POST['Marca'] ?? '';     //Extraemos del serializado el valor de la variable
$modelo = $_POST['Modelo'] ?? '';     //Extraemos del serializado el valor de la variable
$estado = $_POST['estadoCamara'] ?? '';

if ($estado != "1") {
    $estado = "0";
}

if (empty($id)) {
    echo 2;
    die("Acceso No Autorizado!!!");
}

try {
    require "../modules/dbUpdate.php";     //Incorporamos el código para consultas Delete

    //Preparamos la consulta y la realizamos
    $result = $conn->query("UPDATE camara SET   direccionIPCamara = '$ip', 
                                                aliasCamara = '$alias',
                                                codigoSNCamara= '$serial',
                                                marcaCamara = '$marca', 
                                                modeloCamara = '$modelo', 
                                                estadoCamara = '$estado', 
                                                CCTV_idCCTV = '1'
                                          WHERE idCamara = '$id';");

    cerrarConexion();  //Finalizamos la conexión

    echo 1;         //Flag para indicar que fue correcta la consulta
} catch (Exception $e) {
    echo $e;
    echo 2;         //Flag para indicar que ocurrió un error durante la consulta
}
