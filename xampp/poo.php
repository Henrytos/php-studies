<?php
    include('credencias.php')
    class bd{
        private $pdo;
        function __construct($user,$senha){
            $this->pdo=new PDO('mysql:host=localhost;dbname=teste',$user,$senha);
        }
        public function getConnection(){
            return $this->pdo;
        }
    }
    $bd=new bd(USER,SENHA);
    $bd->getConnection()->prepare("INSERT INTO`clientes` VELUES (null,?,?)");
    $sql->execute(array("henry","henryfranz@gmail.com"));

?>

