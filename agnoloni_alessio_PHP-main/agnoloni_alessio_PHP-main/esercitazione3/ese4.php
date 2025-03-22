<?php

/*
Esercizio 4

Data una variabile $testo = 'Testo iniziale', creare una funzione che modifichi il valore di quella variabile esterna con un testo a piacere passando il parametro per riferimento (&).
*/




$testo = 'Testo iniziale';

function modifica_testo(& $testo){

    return $testo = 'Testo modificato';
}



modifica_testo($testo);

echo $testo;







// php esercitazione3\ese4.php