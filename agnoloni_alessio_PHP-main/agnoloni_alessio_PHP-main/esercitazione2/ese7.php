<?php

/*

Esercizio 7

Utilizzando opportunamente foreach ed if: creare una variabile $search che contiene uno degli elementi a piacere dell'esercizio 4. Poi scorrere l'array dell'esercizio 4 utilizzando foreach e stampare "Trovato!" se l'elemento corrente è uguale a quello contenuto nella variabile $search.

Dopo aver verificato che la ricerca funzioni, modificare il codice in modo da stampare "Nessun elemento trovato" se l'elemento cercato non esiste nell'array. (Prestate particolare attenzione a quest'ultimo punto).

*/




$scrivania = [
    "monitor",
    "tastiera",
    "casse",
    "lampadina",
    "pad",
    "cuffie",
];

$search = "tastiera";

$controllo = false;

foreach($scrivania as $oggetto) {

    if ($oggetto == $search) {
        echo "Trovato!";
        $controllo = true;
    }
}

if ($controllo == false) {
    echo "Nessun elemento trovato";
}


