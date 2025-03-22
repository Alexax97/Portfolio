<?php

/*
Esercizio 10

creare una funzione che prende in input questi 3 parametri nel seguente ordine: email, nome, cognome e restituisce un array che poi andrete a memorizzare in una variabile $user
*/


function salva($email, $nome, $cognome) {

    return [
        'email' => $email,
        'nome' => $nome,
        'cognome' => $cognome,

    ];
}

$user = salva('alessio@gmail.com','Alessio','Agnoloni');

print_r($user);









// php esercitazione3\ese10.php