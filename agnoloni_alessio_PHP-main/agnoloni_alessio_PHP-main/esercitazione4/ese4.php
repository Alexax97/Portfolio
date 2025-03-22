<?php

/*
Esercizio 4

Adesso che non possiamo più accedere alla proprietà "dall'esterno" dell'oggetto, scriviamo un metodo chiamato "getAge" che stampi attraverso echo la proprietà age. Testarne il corretto funzionamento chiamando questo metodo a partire da un oggetto.
*/



class Student {

    public $name;

    public $email;

    private $age;

    public function __construct($name, $email,$age)
    {

        $this->name = $name;
        $this->email = $email;
        $this->age = $age;


    }

    public function getAge()
    {
       return $this->age;
    }
}

$Studente1 = new Student('Alessio', 'alessio@gmail.com',27);

$Studente2 = new Student('Francesco', 'francesco@gmail.com',20);

$Studente3 = new Student('Marco', 'marco@gmail.com',19);


// echo $Studente1->name;

// echo $Studente2->name;

// echo $Studente2->email;

echo $Studente3->getAge();


//       php ese4.php