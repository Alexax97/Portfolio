<?php

/*
# Esercizio 7

Vogliamo che, richiamando il metodo appena scritto all'esercizio 6 da un oggetto di tipo GrandeDistribuzione, non venga visulizzato il valore, ma un messaggio: Dato attualmente non disponibile.

Suggerimento: override del metodo.
*/

class Cliente {

    public $nome;
    public $citta;
    private $fatturato_annuo;
    public $nome_responsabile;

    public function __construct($nome, $citta, $fatturato_annuo, $nome_responsabile) {

        $this->nome = $nome;
        $this->citta = $citta;
        $this->fatturato_annuo = $fatturato_annuo;
        $this->nome_responsabile = $nome_responsabile;
    }

    public function getInfo() {

        return "Nome: {$this->nome}, Città: {$this->citta}, Responsabile: {$this->nome_responsabile}";
    }

    public function getFatturatoAnnuo() {

        return "Fatturato Annuo: {$this->fatturato_annuo}";
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

    public function __construct($nome, $citta, $fatturato_annuo, $nome_responsabile, $sedi = []) {

        parent::__construct($nome, $citta, $fatturato_annuo, $nome_responsabile);
        $this->sedi = $sedi;
    }

    public function inserisci_Sede($sede) {

        if (is_array($sede)) {

            foreach ($sede as $s) {
                $this->sedi[] = $s;
            }
        } else {
            $this->sedi[] = $sede;
        }
    }

    public function getFatturatoAnnuo() {

        return "Dato attualmente non disponibile";
    }

    public function getInfo() {

        $base_info = parent::getInfo();
        $sedi_info = array_map(function($sede) {

            return "Città: {$sede['citta']}, Email: {$sede['email']}, Telefono: {$sede['telefono']}, Fatturato: {$sede['fatturato']}";
        }, $this->sedi);

        $sedi_info = implode(" | ", $sedi_info);
        return "{$base_info}, Sedi: {$sedi_info}";
    }
}


$sedi = [
    ["citta" => "Firenze", "email" => "firenze@distribuzione.it", "telefono" => "1234567890", "fatturato" => 300000],
    ["citta" => "Torino", "email" => "torino@distribuzione.it", "telefono" => "0987654321", "fatturato" => 400000],
    ["citta" => "Napoli", "email" => "napoli@distribuzione.it", "telefono" => "1122334455", "fatturato" => 500000]
];

$grande_distribuzione = new GrandeDistribuzione("Distribuzione Verdi", "Milano", 2000000, "Luigi Bianchi", $sedi);



echo $grande_distribuzione->getInfo() . "\n";
echo "Tipo: " . GrandeDistribuzione::TIPO . "\n";


echo $grande_distribuzione->getFatturatoAnnuo() . "\n";


