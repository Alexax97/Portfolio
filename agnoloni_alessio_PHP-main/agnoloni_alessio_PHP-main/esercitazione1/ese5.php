<?php

/*
Esercizio 5

All'array precedente, aggiungere un nuovo elemento (senza modificare l'array originale) con chiave 'accessori' che contenga as sua volta questi due elementi: cambio automatico, navigatore satellitare


*/

$auto = [
    'marca' => 'Fiat',
    'modello' => '500',
    'motore' => 'elettric',
    'colore' => 'rosso',
];



$auto['accessori'] = ['cambio automatico','navigatore satellitare'];

print_r($auto);