<?php

/*

Esercizio 1

Creare una variabile $temperatura ed utilizzando if, stampare il testo "Fa freddo" se il valore contenuto in temperatura è minore di 15 gradi.

Successivamente, utilizzando else, stampare il testo "Fa caldo" se la temperatura è maggiore o uguale a 15 gradi.

Infine, utilizzando if else, e modificando opportunamente quanto già scritto, aggiungere la stampa del testo "Fa molto caldo" se la temperatura supera i 25 gradi.

*/

$temperatura = 40;

if ($temperatura <= 15) {
    echo "Fa freddo";

} else if  ($temperatura <= 25){
    echo "Fa caldo";
    
} else {
    echo "fa caldissimo";
}


