<?php

/*
Esercizio 2

Utilizzare la classe Student per creare 3 oggetti con nome di variabile e dati a piacere.

Stampare attraverso "echo":



    - la proprietà name del primo oggetto;

    - la proprietà name del secondo oggetto;

    - la proprietà email del secondo oggetto;

    - la proprietà age del terzo oggetto.


*/



class Student {

    public $name;

    public $email;

    public $age;

    public function __construct($name, $email, $age)

    {

        $this->name = $name;
        $this->email = $email;
        $this->age = $age;

    }
}

$studente1 = new Student("Alessio", "alessio@gmail.com",27);

$studente2 = new Student("Francesco", "francesco@gmail.com",20);

$studente3 = new Student("Marco", "marco@gmail.com",19);


echo $studente1->name;

echo $studente2->name;

echo $studente2->email;

echo $studente3->age;





// php esercitazione4\ese2.php