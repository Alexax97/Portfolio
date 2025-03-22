<?php

/*
Esercizio 5

Stampare tutti gli elementi dell'array all'esercizio 4 utilizzando foreach, visualizzandone anche l'indice.

*/


$scrivania = [
    "monitor",
    "tastiera",
    "casse",
    "lampadina",
    "pad",
    "cuffie",
];


foreach($scrivania as $key => $oggetto) {

    echo "$key - $oggetto\n";
}



