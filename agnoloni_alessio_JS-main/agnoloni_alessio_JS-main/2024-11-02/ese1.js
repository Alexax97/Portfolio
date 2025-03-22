let num_Min = 50;

let num_Max = 100;

//variabile 1

let num1 = Math.random();

num1 = (Math.random()*(num_Max-num_Min)) + num_Min;

num1 = Math.round(num1);


console.log(num1);

//variabile 2

let num2 = Math.random();

num2 = (Math.random()*(num_Max-num_Min)) + num_Min;

num2 = Math.round(num2);


console.log(num2);

//variabile 3

let num3 = Math.random();

num3 = (Math.random()*(num_Max-num_Min)) + num_Min;

num3 = Math.round(num3);


console.log(num3);

//variabile 4

let num4 = Math.random();

num4 = (Math.random()*(num_Max-num_Min)) + num_Min;

num4 = Math.round(num4);


console.log(num4);

//variabile 5

let num5 = Math.random();

num5 = (Math.random()*(num_Max-num_Min)) + num_Min;

num5 = Math.round(num5);


console.log(num5);

//variabile 6

let num6 = Math.random();

num6 = (Math.random()*(num_Max-num_Min)) + num_Min;

num6 = Math.round(num6);


console.log(num6);

//variabile 7

let num7 = Math.random();

num7 = (Math.random()*(num_Max-num_Min)) + num_Min;

num7 = Math.round(num7);


console.log(num7);

//variabile 8

let num8 = Math.random();

num8 = (Math.random()*(num_Max-num_Min)) + num_Min;

num8 = Math.round(num8);


console.log(num8);

//variabile 9

let num9 = Math.random();

num9 = (Math.random()*(num_Max-num_Min)) + num_Min;

num9 = Math.round(num9);


console.log(num9);

//variabile 10

let num10 = Math.random();

num10 = (Math.random()*(num_Max-num_Min)) + num_Min;

num10 = Math.round(num10);


console.log(num10);


//HO PROVATO A METTERE UN ARRAY CON LE 10 VARIABILI MA NON MI FUNZIONA NON CAPISCO COSA SBAGLIO....

let query = prompt('prova ad indovinare il numero');

switch(true) {
    case query<=49:
        risposta = "ATTENZIONE immetti un numero compreso nell'intervallo richiesto"
        break;

    case query>=101:
        risposta = "ATTENZIONE immetti un numero compreso nell'intervallo richiesto"
        break;
        
                
    case query<=100:
        risposta = `Quante volte e uscito il numero scelto?${parseInt(query)}`
        break;
                      
    default:
        break;
}

console.log(risposta);
