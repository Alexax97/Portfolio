<?php

/*

# Esercizio 1

Un'azienda che produce smartphone ha due tipologie di clienti:

    - Negozio;

    - Catene di distrubuzione.



Per meglio organizzare la consegna dei propri prodotti, realizza un software che gestisce i punti vendita e, più in dettaglio, le due tipologie di clienti sono così caratterizzate:



Negozio (singola sede):

    - nome

    - città

    - fatturato annuo

    - nome del responsabile



    - telefono

    - email



Grande distribuzione (con più sedi):

    - nome

    - città (della sede principale)

    - fatturato annuo

    - nome del responsabile



    - elenco delle sedi dei vari negozi (la singola sede ha come dati solo il nome della città)



Creare le relative classi, cercando di usare il concetto di ereditarietà sulle proprietà che sono in comune (magari partendo da una classe Cliente).



Scrivere opportunamente il costruttore in modo che, ogni oggetto creato abbia almeno i seguenti dati: nome, città, fatturato annuo e nome del responsabile.

*/


class Cliente {

    public $nome;
    public $citta;
    public $fatturato_annuo;
    public $nome_responsabile;


    public function __construct($nome, $citta, $fatturato_annuo, $nome_responsabile) {

        $this->nome = $nome;
        $this->citta = $citta;
        $this->fatturato_annuo = $fatturato_annuo;
        $this->nome_responsabile = $nome_responsabile;
    }

    public function getInfo() {

        return "Nome: {$this->nome}, Città: {$this->citta}, Fatturato Annuo: {$this->fatturato_annuo}, Responsabile: {$this->nome_responsabile}";
    }
}

class Negozio extends Cliente {

    public $telefono;
    public $email;

    public function __construct($nome, $citta, $fatturato_annuo, $nome_responsabile, $telefono, $email) {

        parent::__construct($nome, $citta, $fatturato_annuo, $nome_responsabile);

        $this->telefono = $telefono;
        $this->email = $email;
    }

    public function getInfo() {

        $base_info = parent::getInfo();

        return "{$base_info}, Telefono: {$this->telefono}, Email: {$this->email}";
    }
}

class GrandeDistribuzione extends Cliente {

    public $sedi;

    public function __construct($nome, $citta, $fatturato_annuo, $nome_responsabile, $sedi) {

        parent::__construct($nome, $citta, $fatturato_annuo, $nome_responsabile);

        $this->sedi = $sedi;
    }

    public function getInfo() {

        $base_info = parent::getInfo();

        $sedi_info = implode(", ", $this->sedi);

        return "{$base_info}, Sedi: {$sedi_info}";
    }
}


$negozio = new Negozio("Negozio Rossi", "Roma", 500000, "Mario Rossi", "123456789", "Rossi@negozio.it");

$grande_distribuzione = new GrandeDistribuzione("Distribuzione Verdi", "Milano", 2000000, "Luigi Bianchi", ["Firenze", "Torino", "Napoli"]);

echo $negozio -> getInfo() . "\n";

echo $grande_distribuzione -> getInfo() . "\n";


