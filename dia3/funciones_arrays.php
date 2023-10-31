<?php
$array = ['telefone'=>'11 96760 3378'];
$dias = ['lunes','martes','miercules','jueves','viernes','sabado','domingo'];

extract($array);

echo $telefone .'</br>';

// array_pop($dias);
echo count($dias).'</br>';

echo join(" - ",$dias).'</br>';

$arra_reverse= array_reverse($dias);
echo join(" - ",$arra_reverse);

?>