<?php

// DECLARAÇÂO
$henry="henry franz ramos arcaya";
$nome="henry";
$i=0;
    //LOOP 
    while($i<10){
        viewName($$nome);
        $i++;
    }

    // FUNÇÂO
    function viewName($nome)  {
        echo $nome;
        echo "<hr>";
    }

    // POO
    class Person{
        public $name;
        public $age;

        public function __construct($name,$age){
            $this->name=$name;
            $this->age=$age;
        }
        public function showPerson(){
            echo $this->name;
            echo "<br>";
            echo $this->age;
        }

    }
    $nathalia = new Person("Nathalia","16");
    $nathalia->showPerson();
    echo "<br>";
    echo "<br>";
    echo "<br>";
    $henry = new Person("Henry","16");
    $henry->showPerson();


    $arr=array('henry','franz','ramos','arcaya');
    echo"<br>";
    for($i=0;$i<sizeof($arr);$i++){
        echo $arr[$i]." ";
    }




?>