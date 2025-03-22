<?php

/*
Esercizio 9 - EXTRA

Creare una classe Motore che abbia un solo metodo public avvia(). Il metodo avvia stampa: "Motore avviato".

Successivamente, modificare il metodo avviaMotore della classe Veicolo, in modo da ricevere, come parametro, un oggetto di tipo Motore e di questo oggetto ne chiami il metodo avvia().
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

    public function avviaMotore(Motore $motore) {
        $motore->avvia();
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

class Motore {

    public function avvia() {

        echo "Motore avviato";
    }
}

$moto = new Moto("Yamaha", "MT-07"); 
$auto = new Auto("Fiat", "500");


$motore = new Motore();

$auto->avviaMotore($motore);

