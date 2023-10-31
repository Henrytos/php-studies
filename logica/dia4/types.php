<?php 
declare(strict_types= 1);
function quadrado(int $number) : int {
    return $number* $number;
} 

$number=8;
echo 'o quadrado de '.$number.' é '. quadrado($number);