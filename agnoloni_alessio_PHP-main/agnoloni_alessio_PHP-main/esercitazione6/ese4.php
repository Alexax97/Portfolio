<?php

/*
Esercizio 4

Creare un metodo abstract stampaCaratteristiche nella classe Veicolo ed implementarlo nelle classi Moto e Auto:

  in Moto deve stampare: "Sono una moto marca e modello"

  in Auto deve stampare: "Sono un auto marca e modello"
*/

abstract class Veicolo {

    public $marca;

    public $modello;

    public function __construct($marca, $modello) {

        $this->marca = $marca;
        $this->modello = $modello;
    }

    public function avviaMotore() {
        echo "Motore avviato\n";
    }

    public function spegniMotore() {
        echo "Motore spento\n";
    }

    abstract public function stampaCaratteristiche();
}

class Moto extends Veicolo {

    public function __construct($marca,$modello) {
        parent::__construct($marca,$modello);
    }

    public function stampaCaratteristiche() {
        echo "Sono una moto marca {$this->marca} e modello {$this->modello}\n";
    }
}

class Auto extends Veicolo {

    public function __construct($marca,$modello) {
        parent::__construct($marca,$modello);
    }

    public function stampaCaratteristiche() {
        echo "Sono una auto marca {$this->marca} e modello {$this->modello}\n";
    }
}

$moto = new Moto("Honda","cbr-500");

$auto = new Auto("Fiat","Panda");

$moto->stampaCaratteristiche();
$auto->stampaCaratteristiche();
