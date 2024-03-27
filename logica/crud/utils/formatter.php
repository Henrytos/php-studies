<?php

function formatterName($name): string
{
    $name = htmlspecialchars($name);
    $name = trim($name);
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    return $name;
}

function formatterEmail($email): string
{
    $email = htmlspecialchars($email);
    $email = trim($email);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    return $email;
}

function formatterPassword($password): string
{
    $password = htmlspecialchars($password);
    $password = trim($password);
    $password = filter_var($password, FILTER_SANITIZE_STRING);
    return $password;
}



?>