<?php

/*

Esercizio 11 - EXTRA

Modificare l'esercizio 2 in modo che i tre oggetti creati, non siano più delle singole variabili, ma elementi di un array $students.

Stampare attraverso "echo":



    -     la proprietà name del primo oggetto;

    -     la proprietà name del secondo oggetto;

    -     la proprietà email del secondo oggetto;

    -     la proprietà age del terzo oggetto.

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



$students = [$studente1,$studente2,$studente3];


echo $students[0]->name."\n";

echo $students[1]->name."\n";

echo $students[1]->email."\n";

echo $students[2]->age."\n";





// php esercitazione4\ese11.php