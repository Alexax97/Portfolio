<?php

/*
Esercizio 7

A questo punto vogliamo associare ad ogni studente un elenco di corsi ai quali partecipa, per fare questo dobbiamo:



    - aggiungere una proprietà private $classes alla classe Student dove $classes è un array vuoto, in questo array andremo ad inserire tutti i corsi seguiti dallo studente;

    - aggiungere un metodo "addClass" a Student che permetta di aggiungere un nuovo corso all'array $classes.

    - aggiungere un metodo "printClasses" che stampi: "Lo studente nome_dello_studente segue i corsi: e qui l'elenco di tutti i corsi, separati da virgola oppure da a capo";



Suggerimenti:



    - dichiarazione proprietà array vuoto: private $classes = [];

    - aggiungere un nuovo elemento all'array: $classes[] = $elementoDaAggiungere;

    - stampare l'elenco dei corsi: utilizzate foreach.

*/





class Student {

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
        echo "Lo studente {$this->name} segue i corsi: \n";

        foreach($this->classes as $class) {
            
            echo "$class\n";
        }
    }
}

$Studente1 = new Student('Alessio', 'alessio@gmail.com',27);

$Studente2 = new Student('Francesco', 'francesco@gmail.com',20);

$Studente3 = new Student('Marco', 'marco@gmail.com',19);


$Studente1->addClass("php");

$Studente1->addClass("js");

$Studente1->printClasses();

// php esercitazione4\ese7.php