<?php
$array = ['lunes','martes','miercules','jueves','viernes','sabado','domingo'];

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
    foreach($array as $target){
        echo '<li>'. $target. '</li>';
    }
    ?>
    </ul>
</body>
</html>