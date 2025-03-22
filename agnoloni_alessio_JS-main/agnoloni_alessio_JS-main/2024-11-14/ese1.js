/*
Scrivi una funzione che prenda in input una stringa e restituisca TRUE se è palindroma, FALSE se non lo è. 

Primo step: eliminare gli spazi e i segni di punteggiatura: 

Suggerimento: 

Puoi eliminare spazi e segni di punteggiatura usando → str.replace(/\W/g, "") 

Esempio: 

Input: “i topi non avevano nipoti” 

Output: true 

N.B.: alcuni metodi necessari per eseguire l’esercizio non sono stati ancora trattati a lezione, documentati su internet, partendo dalle MDN Reference di Javascript 



Ci sarà qualche metodo che inverte la posizione degli elementi di un array? ;).
*/


let frase = prompt("inserisci una frase");

function Verifica(frase) {

    // uso replace
    let stringa = frase.replace(/\W/g, "");
    

    let stringa_girata = stringa.split("").reverse().join("");

    return stringa == stringa_girata;

}

console.log(Verifica(frase));





