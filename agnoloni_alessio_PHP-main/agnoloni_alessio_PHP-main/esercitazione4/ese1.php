<?php

/*
Creare una classe "Student" che abbia:


- 3 proprietà con visibilità "public": name, email, age (nome, email, età);

- un costruttore che, in fase di creazione di un oggetto, 
assegni i parametri passati al costruttore alle relative proprietà (name, mail, age).

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

$Studente = new Student("Alessio", "alessio@gmail.com",27);


// php esercitazione4\ese1.php