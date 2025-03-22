<?php

/*
Esercizio 9

Creare una proprietà statica "public static $students = 0" che sarà incrementata ogni volta che viene creato un nuovo oggetto di tipo Student. Questo incremento lo facciamo nel costruttore, incrementando, appunto, di 1 la variabile $students. Dopo aver creato la proprietà, creare un numero di oggetti a piacere della classe Student e successivamente stampare, tramite echo, la proprietà statica $students
*/

class Student {

    public const CLASSES_MAX = 3;

    public $name;

    public $email;

    private $age;

    private $classes = [];

    public static $students = 0;

    public function __construct($name, $email, $age)
    {

        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        self::$students++;


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


// $Studente1->addClass("php");

// $Studente1->addClass("js");

// $Studente1->addClass("css");

// $Studente1->addClass("html");


// $Studente1->printClasses();

echo Student::$students;







// php esercitazione4\ese9.php














