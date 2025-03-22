/*
Scrivi una funzione che dato un numero intero (massimo 9999) conti da quante cifre è formato. 

Esempio: 

Input : 9 → output: 1 cifra
 Input : 99 → output: 2 cifre
 Input: 12000 → output: Numero troppo grande 
 */

let numero = prompt("inserisci il numero");

function cifre(numero) {

    if (numero > 9999) {
        return "numero troppo grande"
        
    }else if (numero <= 9) {
        return "1 cifra"
    }else if (numero <= 99) {
        return "2 cifre"
    }else if (numero <= 999) {
        return "3 cifre"   
    }else if (numero <= 9999) {
        return "4 cifre"    
    }else {
        return "non e un numero"
    }    
}

let risultato = cifre(numero);


console.log(risultato);

