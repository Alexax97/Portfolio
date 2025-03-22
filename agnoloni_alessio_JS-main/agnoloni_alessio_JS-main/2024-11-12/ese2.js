/*
Scrivi un programma che dato un array di numeri, calcoli la media dei valori e restituisca in output la media e tutti i valori minori della media: 

Esempio: 

Input: a = [3, 5, 10, 2, 8]

Output: media = 5.6, valori minori = [3, 5, 2] 

Variante:

Stampa anche quanti sono i valori minori della media e quanti quelli maggiori. 

N.B.: cercare nella documentazione MDN il metodo .filter() degli array, che potrebbe essere utile nello svolgimento della traccia 2
*/

let arr_num = [];

for(let i = 0; i < 10; i++) {
    arr_num.push(Math.floor(Math.random()*100)+1);
}

console.log(arr_num);

let somma = arr_num.reduce((accumulatore , valore) => {
    return accumulatore + valore;
})

let media = somma/arr_num.length;

console.log(`questo e il valore medio ${media}`);

let minore = arr_num.filter(number => number < media);

let maggiore = arr_num.filter(number => number > media);

// valori minori della media
console.log(`Questi sono i valori minori della media ${minore}`);

console.log(`Ci sono ${minore.length} valori minori della media `);


// valori maggiori della media
console.log(`Questi sono i valori maggiori della media ${maggiore}`);

console.log(`Ci sono ${maggiore.length} valori maggiori della media `);



