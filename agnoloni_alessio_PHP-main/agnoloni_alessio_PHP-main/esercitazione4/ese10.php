<?php

/*
Esercizio 10

Modificare la proprietà statica $students appena creata, da public a private ed in seguito creare un metodo statico che ci servirà per stampare $students. Testare il metodo statico appena creato, chiamandolo direttamente dalla classe Student (e non dall'oggetto).
*/

class Student {

    public const CLASSES_MAX = 3;

    public $name;

    public $email;

    private $age;

    private $classes = [];

    private static $students = 0;

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
    public static function stampaStudents()
    {
        echo self::$students;
    }

}

$Studente1 = new Student('Alessio', 'alessio@gmail.com',27);

$Studente2 = new Student('Francesco', 'francesco@gmail.com',20);

$Studente3 = new Student('Marco', 'marco@gmail.com',19);


// $Studente1->addClass("php");

// $Studente1->addClass("js");

// $Studente1->addClass("css");

// $Studente1->addClass("html");


Student::stampaStudents();



// php esercitazione4\ese10.php