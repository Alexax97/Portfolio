<?php

/*
Esercizio 7

Assegnare l'interfaccia MovimentiInterface creata alla classe Auto ed effettuare un test creando un oggetto di tipo auto.

Successivamente, assegnare il trait Movimento alla classe Auto ed effettuare di nuovo un test.
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

trait Movimenti {
    public function avanti() {
        echo "Mi sto muovendo in avanti\n";
    }

    public function indietro() {
        echo "Mi sto muovendo in indietro\n";
    }
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
    use Movimenti;

    public function __construct($marca,$modello) {
        parent::__construct($marca,$modello);
    }

    public function stampaCaratteristiche() {
        echo "Sono una auto marca {$this->marca} e modello {$this->modello}\n";
    }

    /*
    public function avanti() {
        echo "Mi sto muovendo in avanti\n";
    }

    public function indietro() {
        echo "Mi sto muovendo indietro\n";
    }
     */
}

$moto = new Moto("Honda","cbr-500");

$auto = new Auto("Fiat","Panda");


$auto->stampaCaratteristiche();
$auto->avanti();
$auto->indietro();
