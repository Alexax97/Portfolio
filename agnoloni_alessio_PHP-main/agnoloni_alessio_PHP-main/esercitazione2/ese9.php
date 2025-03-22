<?php

/*

Esercizio 9

Modificare l'esercizio 4 in modo da stampare 'Nessun corso disponibile' se rimuoviamo tutti gli elementi dall'array. (ricordate che un array vuoto [] corrisponde ad un valore falsy ovvero false).

*/



$corsi = [
    "Java",
    "php",
    "html",
    "css",
];


if ($corsi == false) {
    echo "Nessun corso disponibile";

} else {
    foreach($corsi as $corso) {
       echo $corso ."\n";
    }

}



