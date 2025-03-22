/*
Traccia 1
Scrivi un programma con due funzioni, la prima prende in ingresso due interi e
verifica che il primo sia compreso tra 1 e 7 e il secondo tra 1 e 12.
Se i valori passati sono compresi, la funzione restituirà TRUE, se non è compreso
restituirà FALSE.
La seconda funzione:
nel caso la prima restituisca TRUE visualizza il giorno della settimana, e il nome
del mese corrispondente.
*/


// Prima funzione che verifica se i valori sono validi
function Giorno_Mese(giorno, mese) {
    if (giorno >= 1 && giorno <= 7 && mese >= 1 && mese <= 12) {
        return true;  // solo se i valori sono in questo range
    }
    return false;  // i valori non sono in questo range
}

// Seconda funzione, visualizza il giorno della settimana e il mese

function Scopri_Giorno_Mese(giorno, mese) {
    
    if (Giorno_Mese(giorno, mese)) {
        const Settimana = [
            "Lunedì", "Martedì", "Mercoledì", "Giovedì", "Venerdì", "Sabato","Domenica"
            /*  0        1            2           3         4           5         6 */ 
        ];
        
        const Anno = [
            "Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", 
            "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"
        ];

        // Mostra il giorno della settimana e il mese
        console.log(`Il giorno corrispondente è: ${Settimana[giorno-1]}`);
        console.log(`Il mese corrispondente è: ${Anno[mese-1]}`);
    } else {
        console.log("I valori inseriti non sono validi.");
    }
}
let scegli_giorno = parseInt(prompt(`inserisci il giorno da 1 a 7`))

let scegli_mese = parseInt(prompt(`inserisci il giorno da 1 a 12`))

Scopri_Giorno_Mese(scegli_giorno, scegli_mese); 



