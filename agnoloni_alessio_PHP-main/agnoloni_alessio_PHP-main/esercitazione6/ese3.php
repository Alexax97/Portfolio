<?php

/*
Esercizio 3

Creare una classe Auto che estends la classe Veicolo
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
}

class Moto extends Veicolo {

    public function __construct($marca,$modello) {
        parent::__construct($marca,$modello);
    }
}

class Auto extends Veicolo {

    public function __construct($marca,$modello) {
        parent::__construct($marca,$modello);
    }
}

$moto = new Moto("Honda","cbr-500");
echo $moto->marca."\n";
echo $moto->modello."\n";

$moto->avviaMotore();
$moto->spegniMotore();

$auto = new Auto("Fiat","Panda");
echo $auto->marca."\n";
echo $auto->modello."\n";

$auto->avviaMotore();
$auto->spegniMotore();