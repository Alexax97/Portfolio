/*
Dato il seguente array:



let nomiPersone = [ "Alice", "Bob", "Charlie", "David", "Eve", "Fiona", "George", "Hannah", "Isaac", "Jack", "Katherine", "Liam", "Mia", "Nolan", "Olivia", "Paul", "Quinn", "Rachel", "Sam", "Tina" ];



permettere all'utente di eseguire le seguenti azioni:

aggiungere un nuovo nome
modificare un nome esistente
eliminare un nome esistente
Si consiglia di creare una funzione per ogni azione su elencata
*/


let nomiPersone = [ "Alice", "Bob", "Charlie", "David", "Eve", "Fiona", "George", "Hannah", "Isaac", "Jack", "Katherine", "Liam", "Mia", "Nolan", "Olivia", "Paul", "Quinn", "Rachel", "Sam", "Tina" ];
console.log(nomiPersone);

// aggiungi un nome

let nuovo = prompt('Inserisci un nuovo nome');


function Aggiungi(nome) {

    nomiPersone.splice(0,0, nome);
    
    console.log(nomiPersone);
};


let risultato = Aggiungi(nuovo);


/*
//Modifica un Nome Esistente

function Modifica(nome) {

    nomiPersone.splice(0,1, nome);

    console.log(nomiPersone);
};    

let nuovo2 = prompt('Inserisci un nome');
let risultato2 = Modifica(nuovo2);
*/


//Elimina un nome esistente

let nome_eliminato = prompt('Quale nome vuoi eliminare? sceglilo indicandolo con un numero')

function Elimina() {
    nomiPersone.splice((nome_eliminato)-1,1,);
    console.log(nomiPersone);
};
let eliminazione = Elimina();

