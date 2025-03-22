<?php

/*
# Esercizio 9 - Extra

Modificare il metodo all'esercizio 7 in modo che sommi tutti i fatturati presenti nell'elenco delle sedi e ne stampi il risulato in questo modo: "Il fatturato totale di nome_della_grande_distribuzione è valore_del_fatturato". 


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

    protected function getFatturatoAnnuoValue() {

        return $this->fatturato_annuo;
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

        $fatturato_totale = $this->getFatturatoAnnuoValue();

        foreach ($this->sedi as $sede) {
            $fatturato_totale += $sede['fatturato'];
        }
        return "Il fatturato totale di {$this->nome} è {$fatturato_totale}";
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




