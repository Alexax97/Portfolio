<?php

/*

Esercizio 3

Creare una funzione stampa_testo che accetta come parametro una stringa da stampare. Fare in modo che se non viene passato nessun parametro, la funzione non generi errori e stampi un messaggio: 'Attenzione: non hai indicato la stringa da stampare'.

*/


function stampa_testo($nome = 'Attenzione: non hai indicato la stringa da stampare') {

    echo $nome;
  
}

 
echo stampa_testo();








// php esercitazione3\ese3.php