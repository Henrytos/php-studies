<?php

class Person
{
    public $id;
    public $first_name;
    public $email;
    public $password;

    function __construct($id, $name, $email, $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function show_person()
    {
        echo "seu nome é $this->first_name; $this->email; $this->password <br>";
    }


}
;

class PersonAdmin extends Person
{
    public $id;
    public $first_name;
    public $email;
    public $password;

    public $last_name;

    function __construct($id, $name, $email, $password, $last_name)
    {
        parent::__construct($id, $name, $email, $password);
        $this->last_name = $last_name;
    }


}



class Animal
{
    public $species;

    public function __construct($species)
    {
        $this->species = $species;
    }

    public function makeSound()
    {
        echo "Animal sound";
    }
}

class Dog extends Animal
{
    public function makeSound()
    {
        echo "Woof!";
    }
}

$dog = new Dog("Canine");
echo $dog->species; // Outputs: Canine
$dog->makeSound(); // Outputs: Woof!