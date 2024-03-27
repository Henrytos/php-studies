<?php
function crationUser($name,$email,$password)  {
    require 'conexao.php';


        $sql= "INSERT INTO users (name , email  , password ) VALUES ('$name' , '$email'  ,'$password') "; 
        $newUser = $conn->query($sql);
        
        return $newUser;      
};

function findByUsers()  {
    require 'conexao.php';
        $sql= "SELECT * FROM users"; 
        $users = $conn->query($sql);
        
        return $users;
};

?>