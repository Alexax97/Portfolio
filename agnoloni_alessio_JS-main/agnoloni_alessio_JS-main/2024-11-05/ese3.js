
let bevanda;

do {
    
bevanda = parseInt(prompt("seleziona la tua bevanda"));



    
if (bevanda === "1") {
    
    console.log("E stata selezionata l'acqua");
    
} else if (bevanda === "2") {
    
    console.log("E stata selezionata coca cola");
    
} else if (bevanda === "3") {
    
    console.log("E stata selezionata birra");

} else {

    console.log("selezione non corretta, riprovare");

} 
} while (bevanda !== "1" && bevanda !== "2" && bevanda !== "3");