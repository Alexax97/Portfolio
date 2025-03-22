<?php

/*
Esercizio 5

Creare una funzione somma che possa sommare "infiniti" numeri passati come singoli parametri.
*/



function somma(...$numeri) {

   echo array_sum($numeri);
   

}


somma(15,20,45,10);






// php esercitazione3\ese5.php