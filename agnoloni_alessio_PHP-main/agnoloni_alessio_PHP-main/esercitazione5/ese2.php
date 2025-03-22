<?php

/*
# Esercizio 2

Aggiungere una costante di classe che abbia valore 'Negozio' oppure 'Grande Distribuzione' a seconda della classe dove si trova. Provare a stamparne il valore.
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

    const TIPO = 'Negozio';

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

    const TIPO = 'Grande Distribuzione';

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



echo $negozio->getInfo() . "\n";

echo "Tipo: " . Negozio::TIPO . "\n";

echo $grande_distribuzione->getInfo() . "\n";

echo "Tipo: " . GrandeDistribuzione::TIPO . "\n";





