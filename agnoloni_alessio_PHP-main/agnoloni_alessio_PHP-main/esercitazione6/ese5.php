<?php

/*
Esercizio 5

Creare un Trait chiamato Movimenti che contenga questi due metodi:

  - public avanti() che stampa: "Mi sto muovendo in avanti"

  - public indietro() che stampa: "Mi sto muovendo indietro"
*/

trait Movimenti {

    public function avanti() {
        echo "mi sto muovendo in avanti\n";
    }

    public function indietro() {
        echo "mi sto muovendo indietro\n";
    }


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


class Moto extends Veicolo {

    use Movimenti;


    public function __construct($marca,$modello) {
        parent::__construct($marca,$modello);
    }

    public function stampaCaratteristiche() {
        echo "Sono una moto marca {$this->marca} e modello {$this->modello}\n";
    }
}

class Auto extends Veicolo {

    use Movimenti;

    public function __construct($marca,$modello) {
        parent::__construct($marca,$modello);
    }

    public function stampaCaratteristiche() {
        echo "Sono una auto marca {$this->marca} e modello {$this->modello}\n";
    }
}

$moto = new Moto("Honda","cbr-500");

$auto = new Auto("Fiat","Panda");

$moto->avanti();
$moto->indietro();

$auto->avanti();
$auto->indietro();


