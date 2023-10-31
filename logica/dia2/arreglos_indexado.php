<?php
$array = ['lunes','martes','miercules','jueves','viernes','sabado','domingo'];
echo'<h2>Dias da semana</h2>';
for ($i=0; $i < 6; $i++) { 
    echo $array[$i].'<br/>';
}
echo'<h2>Numeros ao quadrado</h2>';
for ($i=0; $i <6 ; $i++) { 
    $array[$i]=$i*$i;
    echo  $i.' * '.$i.' = '.$array[$i].'<br/>';
}


?>