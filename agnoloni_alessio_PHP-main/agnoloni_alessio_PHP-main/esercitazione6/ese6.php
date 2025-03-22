<?php

/*
Esercizio 6

Creare una intefaccia MovimentiInterface che impone alla classe che la implementa di avere:

  - un metodo public avanti()

  - un metodo public indietro()
*/

interface MovimentiInterface {

    public function avanti();
    public function indietro();

}

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


class Moto extends Veicolo implements MovimentiInterface {

    public function __construct($marca,$modello){
        parent::__construct($marca,$modello);
    }

    public function stampaCaratteristiche() {
        echo "Sono una moto marca {$this->marca} e modello {$this->modello}\n";
    }

    public function avanti() {
        echo "Mi sto muovendo in avanti\n";
    }

    public function indietro() {
        echo "Mi sto muovendo indietro\n";
    }
}

class Auto extends Veicolo implements MovimentiInterface {

    public function __construct($marca,$modello) {
        parent::__construct($marca,$modello);
    }

    public function stampaCaratteristiche() {
        echo "Sono una auto marca {$this->marca} e modello {$this->modello}\n";
    }

    public function avanti() {
        echo "Mi sto muovendo in avanti\n";
    }

    public function indietro() {
        echo "Mi sto muovendo indietro\n";
    }
}

$moto = new Moto("Honda","cbr-500");

$auto = new Auto("Fiat","Panda");

$moto->stampaCaratteristiche();
$moto->avanti();
$moto->indietro();

$auto->stampaCaratteristiche();
$auto->avanti();
$auto->indietro();
