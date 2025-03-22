<?php

/*
Esercizio 13

Creare una funzione che accetta un parametro opzionale $nome. Questa funzione stampa: Ciao {nome passato attraverso il parametro}. Se non viene passato un parametro allora la funzione deve stampare: Non c'è nessuno.
*/


function saluto($nome = null){

    if ($nome === null) {

     echo "Non c'è nessuno";
     
    } else {

     echo "Ciao ".$nome;
    }
 }

 $persona = 'Alessio';


 echo saluto($persona);




// php esercitazione3\ese13.php