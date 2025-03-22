<?php

/*

Esercizio 2

Creare una classe Moto che estenda la classe Veicolo

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

$moto = new Moto("Honda","cbr-500");

echo $moto->marca."\n";

echo $moto->modello."\n";

$moto->avviaMotore();

$moto->spegniMotore();
