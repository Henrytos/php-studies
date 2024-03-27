<?php
$matriz=[
    'nathi'=>["nathalia",123,"nathi"],
    'mari'=>["mariana",456,"mari"],
    'namie'=>["gabrieely",789,["sla1",'sla2',["henry"]],"namie"]
];
$namie='namie';

echo $matriz[$namie][2][2][0]."<br/>";
echo 'tamanho do array = '.count($matriz);
?>