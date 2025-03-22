/*
creiamo un oggetto che chiameremo bowling, il quale conterra un elenco di giocatori,
indicando per ciascun giocatore: nome, cognome e l'elenco dei punteggi che ognuno avra ottenuto
*/

let bowling = {

    giocatori : [
        {
        nome : 'Alessandro', 
        cognome : 'Barrale', 
        punteggio : []
        },
        // ho scritto la stessa cosa ma in due modi diversi una piu leggibile
        {nome : 'Giuseppe', cognome : 'Randisi', punteggio : []},

        {nome : 'Catalina', cognome : 'Clius', punteggio : []},

        //{nome : 'Gaetano', cognome : 'Martorelli', punteggio : []}, questo e inserito a mano

    ],
    
    aggiungi_giocatore : function (nuovo_nome, nuovo_cognome) {

        // dobbiamo inserire un nuovo elemento nell'array giocatori, considerando che il nuovo elemento
        // e un oggetto
        this.giocatori.push(  {nome : nuovo_nome, cognome : nuovo_cognome, punteggio : []}  )
        
        // i tiri consentiti sono 5
        // il punteggio possibile per ogni tiro e compreso tra 0 e 10
        // dobbiamo popolare l'array punteggio, appena creato, con 5 numeri interi casuali compresi tra 0 e 10

    },
    
    aggiungi_punteggio : function (posizione) {
        

        for (let i = 0; i < 5; i++) {

            let punteggio_tiri = Math.floor(  Math.random()*11  )

        this.giocatori[posizione-1].punteggio.push(punteggio_tiri);
        }
    },

    //vogio memorizzare dentro un array la somma dei punteggi ottenuti da ogni giocatore
    calcola_punteggi : function(pos) { 

            const totale = 0;

            this.giocatori[pos-1].push(totale)
            //per ogni elemento dell'array giocatore, aggiungiamo una nuova chiave
            //che avra come valore il punteggio totale del singolo giocatore
            //potrebbe essere utile il metodo .reduce()
            
            totale = this.giocatori[pos-1].punteggio.reduce((accumulatore, valorecorrente) => 
                {return accumulatore + valorecorrente}
            
            );

            this.giocatori[pos-1].totale.splice(3,0,{totale})
        },

}

// per visualizzare il nome catalina che e dentro un array
console.log(  bowling.giocatori[2].nome  );

// adesso vogliamo vedere il punteggio di giuseppe al terzo tiro
console.log(  bowling.giocatori[1].punteggio[2]  );

// qui abbiamo aggiunto un nuovo giocatore
bowling.aggiungi_giocatore('Gaetano', 'Martorelli')

bowling.aggiungi_punteggio(1)

bowling.aggiungi_punteggio(2)

bowling.aggiungi_punteggio(3)

bowling.aggiungi_punteggio(4)

bowling.calcola_punteggi(1)

console.log(bowling);





/*
const array1 = [1, 2, 3, 4];

// 0 + 1 + 2 + 3 + 4
const initialValue = 0;
const sumWithInitial = array1.reduce(
  (accumulator, currentValue) => accumulator + currentValue,
  initialValue,
);

console.log(sumWithInitial);
// Expected output: 10
*/