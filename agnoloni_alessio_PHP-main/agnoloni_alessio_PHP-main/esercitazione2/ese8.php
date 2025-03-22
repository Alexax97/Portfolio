<?php

/*
Esercizio 8

Creare un array che ha come elementi i numeri da 1 a 10 [1, 2, 3, ecc...]. Utilizzando foreach, stampare "Pari" se l'elemento corrente è un numero pari e "Dispari" in caso contrario.
*/


$array = [1,2,3,4,5,6,7,8,9,10];


$search = 1;



foreach($array as $numero) {

    if ($numero == $search ){

        if ($numero % 2 == 0) {
            echo "Pari";

        } else if ($numero % 2 != 0) {
            echo "dispari";

        }
    }
}






