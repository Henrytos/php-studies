<?php
$dias = ['lunes','martes','miercules','jueves','viernes','sabado','domingo'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <h1>dias da semana</h1>
    <ul>
    <?php
    foreach($dias as $dia){
        if($dia=="sabado" ) {
            continue;
        } 
        echo '<li>'. $dia. '</li>';
    }
    ?>
    </ul>
</body>
</html>