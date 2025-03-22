<?php

/*
# Esercizio 3

La classe GrandeDistribuzione deve essere modificata in modo che __construct accetti anche il parametro $sedi che sarà collegato al parametro "elenco delle sedi dei vari negozi" come indicato nelle caratteristiche.
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

$grande_distribuzione = new GrandeDistribuzione("Distribuzione Verdi", "Milano", 2000000, "Luigi Bianchi", ["Firenze", "Torino", "Napoli"]);


echo $grande_distribuzione->getInfo() . "\n";

echo "Tipo: " . GrandeDistribuzione::TIPO . "\n";







