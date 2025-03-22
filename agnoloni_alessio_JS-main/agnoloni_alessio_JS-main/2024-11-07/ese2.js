/*
Scrivi una funzione che permetta di stampare in console tutti i numeri da 1 a N: 

N dovra’ rappresentare il parametro formale della funzione
 tutti i numeri multipli di 3 siano sostituiti dalla stringa 'Fizz',
 tutti i numeri multipli di 5 siano sostituiti dalla stringa 'Buzz'
 e tutti i numeri multipli di 15 siano sostituiti dalla stringa 'fizzBuzz' 
*/

function stampa(n) {

    for(i = 1; i <= n; i++) {       
        if (i % 15 == 0) {   
            console.log(`FizzBuzz`);
                        
        }else if (i % 3 == 0) {
            console.log(`Fizz`);
                        
        }else if (i % 5 == 0) {
            console.log(`Buzz`);
            
        }else {
            console.log(i);
            
        }

    }
    
}

stampa(35);