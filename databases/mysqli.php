<?php
$host = 'localhost';
$user = 'henry';
$password = 'Hfra2006';
$database = 'usuarios';

$conexion = new mysqli($host, $user, $password, $database);

if ($conexion->connect_errno) {
    echo "errot";
}

$sql = "SELECT * FROM amigos LIMIT 1";
$rows = $conexion->query($sql);
if ($rows->num_rows) {
    foreach ($rows->fetch_all() as $row) {
        print_r($row);
    }
}
?>