<?php
$hostname = 'localhost';
$username = 'insert';
$password = 'permisoS0l01nsert';
$database = 'eliotdb';
$port = '3306';

$conn = mysqli_connect($hostname, $username, $password, $database, $port);
//testConnection($conn);

function testConnection($conn)
{
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    cerrarConexion();
}

function cerrarConexion()
{
    global $conn;
    mysqli_close($conn);
}
