<?php
$matriz=[
    'nathi'=>["nathalia",123,"nathi"],
    'mari'=>["mariana",456,"mari"],
    'namie'=>["gabrieely",789,["sla1",'sla2',["henry"]],"namie"]
];?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>ciclo for each</h2>

    <ul>
        
    <?php 
    foreach($matriz as $key => $value){
        echo "<li>" .$key." = ".$value[0]. "</li>";
    }
    ?>
    </ul>
</body>
</html>