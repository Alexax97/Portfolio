<?php

/*
Esercizio 8

Vogliamo adesso limitare a 3 il numero massimo di corsi ai quali uno studente può essere iscritto, quindi:



    - creare, nella classe Student, una costante CLASSES_MAX che sarà uguale a 3;

    - modificare il metodo addClass, in modo che aggiunga un nuovo corso solo se non si è superato il limite di 3 (CLASSES_MAX), in caso contrario, se si prova aggiungere un nuovo elemento, stampare: Hai raggiunto il numero massimo di corsi.

    



Suggerimenti: la funzione count($array) vi restituisce il numero di elementi attualmente presenti nell'array
*/



class Student {

    public const CLASSES_MAX = 3;

    public $name;

    public $email;

    private $age;

    private $classes = [];

    public function __construct($name, $email,$age)
    {

        $this->name = $name;
        $this->email = $email;
        $this->age = $age;


    }

    private function getAge()
    {
        if ($this->age >=18 && $this->age<=30) {

           return "'18 - 30'";

        } else if ($this->age>=31 && $this->age<=50) {

           return "'31 - 50'";

        }else if ($this->age> 50) {

           return "'50+'";
        }
    }

    public function ageRange()
    {
        echo "Lo studente si trova nella fascia di età: " . $this->getAge();
    }

    public function addClass($corso)
    {
        $this->classes[] = $corso;
    }

    public function printClasses()
    {
        if (count($this->classes)<=3) {

            $this->classes[]= $corso;

            echo "Lo studente {$this->name} segue i corsi:\n";

            foreach($this->classes as $class){

            echo "$class\n";
            }

        } else {
            echo "Hai raggiunto il numero massimo di corsi";
        }
    }
}

$Studente1 = new Student('Alessio', 'alessio@gmail.com',27);

$Studente2 = new Student('Francesco', 'francesco@gmail.com',20);

$Studente3 = new Student('Marco', 'marco@gmail.com',19);


$Studente1->addClass("php");

$Studente1->addClass("js");

$Studente1->addClass("css");

$Studente1->addClass("html");


$Studente1->printClasses();








// php esercitazione4\ese8.php