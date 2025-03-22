<?php

/*
Esercizio 11 - Extra

Creare una classe a piacere che:

Estenda una classe astratta (a piacere)
Implementi un'interfaccia con almeno due metodi a piacere
Utilizzi un trait che soddisfi i requisiti dell'interfaccia
*/

abstract class Elettrodomestico {

    abstract public function descrizione();
}

interface Funzioni{
    public function accendi();
    public function spegni();
}

trait FunzioniTrait{
    public function accendi() {
        echo "accensione in corso...\n";
    }

    public function spegni() {
        echo "spegnimento in corso...\n";
    }
}

class Cucina extends Elettrodomestico implements Funzioni {
    use FunzioniTrait;

    public function __construct(public $marca, public $modello){
        
    }

    public function descrizione() {
        echo "Questa e una cucina {$this->marca} e modello {$this->modello}\n";
    }
}

$cucina = new Cucina("Francese","sbiribin");

$cucina->descrizione();

$cucina->accendi();
$cucina->spegni();