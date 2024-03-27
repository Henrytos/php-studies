<?php 
$name = 'henry';
$age=17;
$is17=false;
$array = ['lunes','martes','miercules','jueves','viernes','sabado','domingo'];
$matriz=[
    'nathi'=>["nathalia",123,"nathi"],
    'mari'=>["mariana",456,"mari"],
    'namie'=>["gabrieely",789,["sla1",'sla2',["henry"]],"namie"]
];

echo"<pre>";
var_dump($name);
echo"</pre>";

echo"<pre>";
var_dump($age);
echo"</pre>";

echo"<pre>";
var_dump($array);
echo"</pre>";

echo"<pre>";
var_dump($matriz);
echo"</pre>";

?>