<?php

/*
Esercizio 3

Modificare la classe Student. In particolare la visibilità della proprietà age deve essere modificata da public a private.

Provare a stampare la proprietà age di uno dei 3 oggetti creati precedentemente. (In questo caso dovreste ricevere un errore).
*/


class Student {

    public $name;

    public $email;

    private $age;

    public function __construct($name, $email, $age)
    {

        $this->name = $name;
        $this->email = $email;
        $this->age = $age;

    }
}

$Studente1 = new Student("Alessio", "alessio@gmail.com",27);

$Studente2 = new Student("Francesco", "francesco@gmail.com",20);

$Studente3 = new Student("Marco", "marco@gmail.com",19);


echo $Studente1->name;

echo $Studente2->name;

echo $Studente2->email;

echo $Studente3->age;






// php esercitazione4\ese3.php