<?php
$hostname = 'localhost';
$username = 'update';
$password = 'permisoS0l0upd4t3';
$database = 'eliotdb';
$port = '3306';

$conn = mysqli_connect($hostname, $username, $password, $database, $port);
// Check connection
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
