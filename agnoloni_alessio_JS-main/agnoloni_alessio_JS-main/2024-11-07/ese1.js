/*
Scrivi una funzione che simuli un gioco di dadi tra due utenti, partendo da un prompt che richieda quanti tiri sono da effettuarsi. 

Stampare il giocatore che ha totalizzato più punti, tenendo conto che: 

ogni dado ha 6 facce 
ogni giocatore tirerà il dado n volte 
Per ogni giocatore: 

generare un numero casuale per ogni tiro che effettuera’
ogni tiro sarà sommato ai precedenti per calcolare il punteggio finale del giocatore rispettivo. 
*/


function gioco_dadi() {
    
    let tiri = parseInt(prompt("quanti tiri volete effettuare?"));
    
    
    function punteggio() {
        
        let punteggio = 0;
        
        for (let i = 0; i <= tiri; i++) {
            punteggio += Math.floor(Math.random()*6)+1;
        }
        return punteggio;
        
    }
    
    let punteggio1 = punteggio();
    let punteggio2 = punteggio();
    
    console.log(`Punteggio giocatore 1: ${punteggio1}`);
    console.log(`Punteggio giocatore 2: ${punteggio2}`);
   
    
    if (punteggio1 > punteggio2) {
        console.log(`Il giocatore 1 ha vinto`);
        
    } else if (punteggio2 > punteggio1) {
        console.log(`Il giocatore 2 ha vinto`);
    } else {
        console.log(`avete pareggiato`);
        
    }
}

gioco_dadi();