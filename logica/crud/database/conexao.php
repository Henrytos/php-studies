<?php
// Configuração da conexão com o banco de dados
$host = "localhost";
$user = "root";
$password = "";
$database = "development_api";

// Conexão com o banco de dados usando o MySQLi
$conn = new mysqli($host, $user, $password, $database);

// Verifica se houve algum erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
else {
    echo"conexão como banco de dados";
}
?>
