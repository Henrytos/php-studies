<?php 

// print_r ($_POST); ele retorna um array asociativo
// Array ( 
//    [name] => henry 
//    [sexo] => homen 
//    [year] => 2002 
//    [termos] => ok )

//   if(!$_POST){
//   header("location:http://localhost/php-studies/formularios/?name=");
//   }
//
//   $name= $_POST['name'];
//   $sexo= $_POST['sexo'];
//   $year= $_POST['year'];
//   $termos= $_POST['termos'];
//   
//   echo 'você é'.$name.' do sexo '.$sexo.' da idade '.$year.' e aceitous os termos'.$termos;

   if(!$_GET ){
   header("location:http://localhost/php-studies/formularios/?name=");
   }

   $name= $_GET['name'];
   $sexo= $_GET['sexo'];
   $year= $_GET['year'];
   $termos= $_GET['termos'];

   echo htmlspecialchars($name).'<br>';
   echo htmlspecialchars($sexo).'<br>';
   echo htmlspecialchars($year).'<br>';
   echo htmlspecialchars($termos).'<br>';