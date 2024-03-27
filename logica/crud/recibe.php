<?php
if (!$_POST) {
    header("location: http://localhost/php-studies/logica/crud/index.php");
}

$name = $_POST["name"];
$name = htmlspecialchars($name);
$password = $_POST["password"];
$password = htmlspecialchars($password);
$email = $_POST["email"];
$email = htmlspecialchars($email);
print_r([$name, $password, $email]);
?>