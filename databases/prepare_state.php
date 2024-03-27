<?php
$host = 'localhost';
$user = 'henry';
$password = 'Hfra2006';
$database = 'usuarios';

$conexion = new mysqli($host, $user, $password, $database);


if ($conexion->connect_errno) {
    echo "errot";
}
$statement = $conexion->prepare("SELECT * FROM amigos");
$rows = $statement->execute();

print_r($rows);