/*
Traccia 2
Scrivi un programma che dato:
- un array di 10 elementi di numeri casuali interi (compresi tra 1 e 90 senza
ripetizioni),
- un array di 10 numeri inseriti dall’utente tramite il prompt.
Verifichi quanti numeri scelti da te sono presenti nell'array principale e
restituisca un risultato del tipo:
2 numeri uguali => ambo
3 numeri uguali => terna
4 numeri uguali => quaterna
5 numeri uguali => cinquina
tutti i numeri uguali => tombola
In caso di vittoria dovrà essere stampato un messaggio "Hai fatto X",
in caso di perdita dovrà essere mostrato il messaggio "Mi dispiace, hai perso!"
*/


/*
//numeri casuali miei
let numeri_casuali = [];
    
for( let a = 0; a < 10; a++) {
        let dato = Math.floor((Math.random()*90)+1)
        numeri_casuali.push(dato)
    }

console.log(`I miei numeri sono ${numeri_casuali}`);
    

// numeri utente
function chiedi_numeri() {
    
    
    let numeri_utente = [];
    
    for(let i = 0; i < 10; i++) {
        
        let numero = parseInt(prompt(`inserisci i numeri ${i+1}:`))
        
        if (numero >= 1 && numero <=90){
            numeri_utente.push(numero)

        }else{
            console.log(`PER FAVORE INSERISCI UN VALORE VALIDO`); 
        }
    }
    console.log(`i numeri inseriti sono ${numeri_utente}`);
}

chiedi_numeri();




//verifica


    
let numeri_uguali = [];
    
    numeri_casuali.forEach(numero => {
        
        if (numero == numeri_casuali(dato))

            numeri_uguali.push(numero)
    }
);

    
    
switch (numeri_uguali.length) {
    
    case 10:
        console.log(`Hai fatto Tombola`);
        break;
        
    case 5:
        console.log(`Hai fatto Cinquina`);
        break;    
        
    case 4:
        console.log(`Hai fatto Quaterna`);
        break;
        
    case 3:
        console.log(`Hai fatto Terna`);
        break;

    case 2:
        console.log(`Hai fatto Ambo`);
        break;

    default:
        console.log("Mi dispiace, hai perso!");
        break;
    
    }
    
    console.log(`i numeri uguali sono ${numeri_uguali}`);
    
*/
//=============================================================================================================================//   
// esrcizio rifatto a lezione
       

function estrazioni() { /* se non volessimo limitarci con i 10 numeri estratti 
    basta mettere un parametro e poi quando richiamiamo la funzione dirgli quanto vale*/

    let numeri = [];

    while (numeri.length < 10) {

        // generiamo un numero casuale intero compreso tra 1 e 90

        let numero = Math.floor((Math.random() * 90) ) + 1;

        // adesso popoliamo l'array numeri, pero in questo caso bisogna controllare che 
        // il numero generato non sia gia presente nell'array

        if (!numeri.includes(numero)) { // col ! messo davanti si inverte la condizione
            // in questo caso gli diciamo se numero non e incluso nell'array allora pusha il numero
            // se non avessimo messo il punto esclamativo pushava se era presente nell'array
            numeri.push(numero);
        }
    }   

    return numeri;

}
/*
let estratti = estrazioni();

console.log(estratti);
*/

// funzione che permette all'utente di inserire i suoi numeri

function numeri_utente() {
    let numeri_scelti = [];

    while ( numeri_scelti.length < 10) {

        let num = parseInt( prompt("Inserisci un numero a tua scelta tra 1 e 90"));

        if ( num >= 1 && num <= 90 && !numeri_scelti.includes(num)) {
            numeri_scelti.push(num);
        }else {
            alert("Numero non valido o gia inserito")
        }
    }
    return numeri_scelti
}

/*
let numeri_scelti_utente = numeri_utente();

console.log(numeri_scelti_utente);
*/

// FUNZIONE DI VERIFICA NUMERI

function verifica_numeri(numeri_estratti, num_utente) {

    let cont = 0;

    num_utente.forEach( numero => {
//if, con l'aiuto di icludes() controllera che ogni numero scelto dall'utente e presente
//nell'array dei numeri casuali generati, se includes restituisce true, la variabile cont
//viene incrementata di 1, quindi cont, alla fine di tutto il ciclo rappresentera quanti
//numeri l'utente ha indovinato
        if (numeri_estratti.includes(numero)) {
            cont++;
        }
    }
);
return cont;

}

let numeri_casuali = estrazioni();

console.log("numeri casuali estratti:",numeri_casuali);

let scelti_utenti = numeri_utente();

console.log("Riepilogo numeri scelti dall'utente:",scelti_utenti);

let numeri_indovinati = verifica_numeri(numeri_casuali,scelti_utenti)

//console.log(numeri_indovinati);


switch (numeri_indovinati) {
    
    case 10:
        console.log(`Hai fatto Tombola`);
        break;
        
    case 5:
        console.log(`Hai fatto Cinquina`);
        break;    
        
    case 4:
        console.log(`Hai fatto Quaterna`);
        break;
        
    case 3:
        console.log(`Hai fatto Terna`);
        break;

    case 2:
        console.log(`Hai fatto Ambo`);
        break;

    default:
        console.log("Mi dispiace, hai perso!");
        break;
    
    }