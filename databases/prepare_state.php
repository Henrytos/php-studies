<?php
$host = 'localhost';
$user = 'henry';
$password = 'Hfra2006';
$database = 'usuarios';

$conexion = new mysqli($host, $user, $password, $database);


if ($conexion->connect_errno) {
    echo "errot";
}


$statement = $conexion->prepare("INSERT INTO amigos VALUES (?,?,?,?)");

if (isset($_GET['id']) && isset($_GET['name']) && isset($_GET['email']) && isset($_GET['password'])) {
    $id = $_GET['id'];
    $name = $_GET['name'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    $statement->bind_param('ssss', $id, $name, $email, $password);
    $rows = $statement->execute();
}

$sql = "SELECT * FROM amigos";
$rows = $conexion->query($sql);

foreach ($rows as $row) {
    print_r($row['id'] . ' - ' . $row['name'] . ' - ' . $row['email'] . ' - ' . $row['password'] . '<br>');
}

if ($conexion->affected_rows > 0) {
    echo 'fila:' . $conexion->affected_rows;
}