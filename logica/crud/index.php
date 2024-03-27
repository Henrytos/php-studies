<?php
require 'utils/formatter.php';

$name_error = "";
$email_error = "";
$password_error = "";

$name = "";
$email = "";
$password = "";

$success_message = "";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    !empty($name) ?
        $name = formatterName($name) :
        $name_error = "coloque um nomde valido";

    !empty($email) ?
        $email = formatterEmail($email) :
        $email_error = "coloque um email valido";

    !empty($password) ? $password = formatterPassword($password) : $password_error = "informe um passwod valido";


    if ($name_error == '' && $email_error == "" && $password_error == "") {
        $success_message = "enviado com sucesso";
        // mail("", "", "");
        $name = "";
        $email = "";
        $password = "";
    }

}

require "view/index.view.php";

?>