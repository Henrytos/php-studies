<?php
session_start();
if(! $_SESSION['user']){
    $_SESSION['user']= array();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name">
        
        <label for="email">email:</label>
        <input type="text" name="email" id="email">

        <button type="submit" name="submit">Enviar</button>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $_SESSION['name']=$name;


        $email=$_POST['email'];
        $_SESSION['email']=$email;
    }
    ?>

    <section>
        <p>Nome: <?php echo $name; ?></p>
        <p>Email: <?php echo $email; ?></p>
        <br>
        <?php echo $_SESSION['name'] ?>
        <br>
        <?php echo $_SESSION['email'] ?>

    </section>
</body>
</html>