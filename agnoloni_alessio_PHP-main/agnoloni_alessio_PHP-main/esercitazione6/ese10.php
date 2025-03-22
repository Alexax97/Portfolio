<?php

/*
Esercizio 10 - EXTRA

Modificare opportunamente la classe Veicolo e quanto fatto all'esercizio 8 in modo ottenere lo stesso funzionamento, ma, questa volta, passando l'oggetto di tipo non più attraverso il metodo avviaMotore, ma attraverso il costruttore di Veicolo.

*/


interface MovimentiInterface {

    public function avanti();
    public function indietro();

}

trait Movimenti {
    public function avanti() {
        echo "Mi sto muovendo in avanti\n";
    }

    public function indietro() {
        echo "Mi sto muovendo indietro\n";
    }
}


abstract class Veicolo {

    public $marca;

    public $modello;

    public $motore;

    public function __construct($marca, $modello, Motore $motore) {

        $this->marca = $marca;
        $this->modello = $modello;
        $this->motore = $motore;
    }

    public function avviaMotore() {
        $this->motore->avvia();
    }

    public function spegniMotore() {
        echo "Motore spento\n";
    }

    abstract public function stampaCaratteristiche();
}

class Moto extends Veicolo {

    public function stampaCaratteristiche() {
        echo "Sono una moto marca {$this->marca} e modello {$this->modello}\n";
    }

}

class Auto extends Veicolo implements MovimentiInterface {
    use Movimenti;

    public function __construct($marca,$modello,Motore $motore) {
        parent::__construct($marca,$modello,$motore);
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

class Persona {
    use Movimenti;

    public $nome;

    public function __construct($nome) {

        $this->nome = $nome;
    }
}

class Motore {

    public function avvia(){

        echo "Motore Avviato";
    }
}


$motore = new Motore();

$auto = new Auto("Fiat", "500",$motore);


$auto->avviaMotore();

