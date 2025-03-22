<?php

/*

Esercizio 8

Creare una funzione check_password_length che verifica se la lunghezza di una password (una stringa) è di lunghezza compresa tra 8 e 18 caratteri. Se è compresa tra questi due valori, restituisce true, altrimenti false

*/


function check_password_length($stringa){

    $lunghezza = strlen($stringa);

    if ($lunghezza>=8 && $lunghezza<=18 ) {

        return true;

    } else {

        return false;
    }
}



echo check_password_length('Alessio');





// php esercitazione3\ese8.php