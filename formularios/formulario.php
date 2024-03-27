<?php 
$errorText = " ";
$errorEmail = " "; // Initialize with a space to avoid potential rendering issues.

if ($_POST) {
    $name =  $_POST["name"];
    $email = $_POST["email"];

    if (!empty($name)) {
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        echo "Seu nome é $name <br/>";
        $errorText .= ' ';

    } else {
        $errorText .= 'Por favor preencha o nome';
    }
    if (!empty($email)) {
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errorEmail .= 'por favor ingressar com email valido';
        }
        else{
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            echo "Seu email é $email ";            
            $errorEmail .= '';
    
        }
    } else {
        $errorEmail .= 'Por favor preencha o email';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color:red
        }
    </style>
</head>
<body>
  <form  method="post">
    <input type="text" name="name" id="name" placeholder="....">
    

    <input type="text" name="email" id="email" placeholder="@gmail.com">
    <input type="submit" name="submit" value="submit">
</form>

<?php if (!empty($errorText)): ?>
    
    <div class="error">
    <?php echo $errorText ;?>
</div>

<?php endif; ?>
        
<?php if (!empty($errorEmail)): ?>
    
    <div class="error">
    <?php echo $errorEmail ;?>
</div>

<?php endif; ?>

</body>
</html>