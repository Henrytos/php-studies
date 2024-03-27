<?php
$array = ['lunes','martes','miercules','jueves','viernes','sabado','domingo'];
$numbers=[3,4,1,63,54,230,100,100,120];
//sort cresciente A-Z 0-9
//rsort descreciente Z-A 9-0
sort($array);
sort($numbers);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <h1>dias da semana ordenados</h1>
    <ul>
    <?php
    foreach($array as $target){
        echo '<li>'. $target. '</li>';
    }
    ?>
    </ul>   
    <h2>numeros ordenados</h2>
    <ul>
     <?php
     foreach($numbers as $number){
        echo '<li>'. $number.'</li>';
     }
     ?>   
    </ul>


</body>
</html>