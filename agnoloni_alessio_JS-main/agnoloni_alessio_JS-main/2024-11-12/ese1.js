/*
Scrivi un programma che dato un array di 10 numeri interi, generati casualmente, li riordini in modo decrescente. 

Esempio: 

Input: array = [3, 7, -2, 5, 8, 1, 2, 5, 6, -4] 

Output: [8, 7, 6, 5, 3, 2, 1, -2, -4] 


Prova ad ordinali in modo crescente. 
*/

let numeri_casuali = [];

for (i = 0; i < 10; i++) {
    numeri_casuali.push(Math.floor(Math.random()*100)-10);
}
console.log(numeri_casuali);

    numeri_casuali.sort((a, b) => {
        return b - a;
    })

console.log(`Ordine decrescente ${numeri_casuali}`);

    numeri_casuali.sort((a, b) => {
        return a - b;
    })

console.log(`Ordine crescente ${numeri_casuali}`);