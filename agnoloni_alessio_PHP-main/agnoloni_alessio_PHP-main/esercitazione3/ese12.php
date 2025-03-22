<?php

/*
Esercizio 12

Scrivere una funzione che prenda in input un array ed una stringa. La funzione cerca l'elemento indicato nella stringa tra gli elementi degli array e se lo trova stampa il messaggio: "Trovato alla posizione: n" dove n è l'indice dell'elemento nell'array. Se l'elemento non viene trovato, la funzione stampa il messaggo: "Elemento non trovato". Se l'elemento viene trovato, interrompere il foreach con il comando "break".



*/

$scrivania = [
    'cuffie',
    'lampada',
    'mouse',
    'tastiera',
    'casse',
    'monitor',
];

$elemento = 'casse';

function controllo($array, $string){

    foreach ($array as $key => $value) {

        if ($value === $string) {

            echo "Trovato nella posizione " . $key;
            break;
        }
        
        if ($value === $string) {

            echo "Elemento non trovato";
        }
    }
}


echo controllo($scrivania, $elemento);




// php esercitazione3\ese12.php