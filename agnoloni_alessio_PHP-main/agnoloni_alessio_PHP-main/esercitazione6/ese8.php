<?php

/*
Esercizio 8

Creare una classe Persona ed assegnare il trait Movimento. Creare un oggetto di tipo persona e verificare il corretto funzionamento dei metodi avanti e indietro;

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
        echo "Mi sto muovendo indietro\n";
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

class Persona {
    use Movimenti;

    public $nome;

    public function __construct($nome) {

        $this->nome = $nome;
    }
}

$persona = new Persona("Alessio");

$persona->avanti();
$persona->indietro();

