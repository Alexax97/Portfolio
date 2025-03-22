<?php

/*
Esercizio 10

Dato l'array [1000, 2500, 1955.5, 560, 700], calcolare la somma di tutti i valori utilizzando foreach.
*/


$array = [1000, 2500, 1955.5, 560, 700];

$tot = 0;

foreach ($array as $numero) {
    $tot += $numero;

};

echo $tot;



