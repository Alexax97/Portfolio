<?php

/*

Esercizio 4

Abbiamo un'auto di marca Fiat, modello 500, motore elettrico e colore rosso:

  - Strutturare i dati (marca, modello, motore, colore) di questa auto utilizzando un array associativo.

  - Stampare una stringa con apici singoli che attraverso echo che visualizzi: "L'auto scelta è una Fiat 500". Dove Fiat e 500 sono presi dall'array

 */

$auto = [
    'marca' => 'Fiat',
    'modello' => '500',
    'motore' => 'elettric',
    'colore' => 'rosso',
];

$frase = 'L\'auto scelta è una '.$auto['marca'].' '.$auto['modello'].'';

var_dump($frase);