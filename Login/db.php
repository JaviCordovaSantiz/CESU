<?php
$servidor = "localhost";
$username = "root";
$password = "123";
$db = "proto1";


$conexion = new mysqli($servidor, $username, $password, $db);


if ($conexion-> connect_error){
    die ("Conexion fallida: " . $conexion->connect_error);

} echo "Conexion exitosa...";



?>