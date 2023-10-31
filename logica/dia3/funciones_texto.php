<?php
$texto = ' <br > & ""';
/*entidade especias */
echo htmlspecialchars($texto).'</br>';

$texto2="   hwney    ";

/*sem espaços brancos */
echo trim($texto2)."</br>";

$texto3="henry franz";


/*legnht text */
echo strlen($texto3)."</br>";


/*recortar slice */
echo substr($texto3,0,strlen($texto3))."</br>";

/*caixa alta */
echo strtoupper($texto3)."</br>";
// caixa baixa
echo strtolower($texto3)."</br>";
// find
echo strpos($texto3,'h')
?>