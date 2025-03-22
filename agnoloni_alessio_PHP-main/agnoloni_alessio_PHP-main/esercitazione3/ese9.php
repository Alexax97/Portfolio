<?php

/*
Esercizio 9

Creare una funzione che prende in input un parametro di tipo stringa contenente diversi elementi separati da ; come in questo esempio: 'elemento1;elemento2 ;elemento3; elemento4'. La stringa in input deve rispettare queste tre regole:
 ogni elemento non può contenere spazi

- gli elementi sono separati tra loro da ;

- prima o dopo il ; può esserci, non obbligatoriamente uno spazio



La funzione deve restituire tutti gli elementi della stringa in input, organizzati in un array
*/


$stringa = 'mouse; tastiera; cuffie; casse';


function converti_array($testo) {

    return explode('; ', $testo);
}   


$a = converti_array($stringa);

print_r($a);



// php esercitazione3\ese9.php