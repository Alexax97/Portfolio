
let num1 = parseInt(prompt("inserisci il primo valore"));

let num2 = parseInt(prompt("inserisci il secondo valore"));

let somma = num1+num2;

let sottrazione = num1-num2;

let moltiplicazione = num1*num2;

let divisione = num1/num2;

let potenza = num1**num2;


let operazioni = `
Con i numeri da te scelti, 
i risultati delle varie operazioni sono: 
somma ${somma}, 
sottrazione ${sottrazione} 
moltiplicazione ${moltiplicazione}
divisione ${divisione}
potenza ${potenza}

`

console.log(operazioni);
