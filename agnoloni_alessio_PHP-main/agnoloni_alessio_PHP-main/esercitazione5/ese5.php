<?php

/*
# Esercizio 5

Adesso dobbiamo modicare la classe GrandeDistribuzione, in modo che l'elenco delle sedi non contenga più solamente le singole città, ma tutti i seguenti dati per ogni sede: città, email, telefono, fatturato.

Suggerimento: quello che vogliamo trasformare è il singolo elemento dell'elenco SEDI, che, da essere una semplice stringa, diventa un array associativo contenente i vari campi: ittà, email, telefono, fatturato.

Riflettete: per come abbiamo scritto la classe, è realmente necessaria una modifica? O va già bene scritta così?
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
    ["citta" => "Firenze", 
    "email" => "firenze@distribuzione.it", 
    "telefono" => "1234567890", 
    "fatturato" => 300000],
];

$grande_distribuzione = new GrandeDistribuzione("Distribuzione Verdi", "Milano", 2000000, "Luigi Bianchi", $sedi);


echo $grande_distribuzione->getInfo() . "\n";
echo "Tipo: " . GrandeDistribuzione::TIPO . "\n";


