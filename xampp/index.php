<?php
    $arr =array("henry","franz","Ramos","Arcaya");


    // constantes
    define('NOME', 'henry');
    echo NOME.'<br>';

    // splice
    $frase= 'hgfjsadvdsvfhicabwsjfbawsjhfvbsdhlfb fhbs ivchbsdfvbkvcbk hv';
    echo substr($frase,0,9);

    echo"<br>";
    echo"<h2>FOR</h2>";
    for ($i=1; $i <=10 ; $i++) { 
        echo $i."-".NOME."<br>";
    }

    echo "<h2>WHILE</h2>";
    $i=0;
    while($i <=10){
        echo $i."-".NOME."<br>";
        $i++;
    }

    echo "<h2>DO WHILE</h2>";
    $i=0;
    do{
        echo $i."-".NOME."<br>";
        $i++;
    }
    while($i <=10);

?>