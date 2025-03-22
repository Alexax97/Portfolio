<?php

/*

Esercizio 1

Creare una classe "abstract" chimata Veicolo abbia le seguenti proprietà:

  marca

  modello



ed i seguenti metodi con visibilità pubblica:

  avviaMotore() che stampa: "Motore avviato"

  spegniMotore() che stampa: "Motore spento"



I valori di marca e modello devono essere passati attraverso il costruttore.

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

