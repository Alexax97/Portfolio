/*
Traccia 1

                            
Crea una pagina html con le seguenti caratteristiche: 

crea un input dove potrai inserire un tot di secondi.
un pulsante che, al click, fara' partire un countdown (dai secondi selezionati a zero).
un pulsante che, al click, mettera' in pausa il countdown.
﻿un pulsante che, al click, pulira' l’input e azzerera' il countdown. 
EXTRA: 

se il timer viene stoppato (non azzerato), il click sul tasto di avvio fara' riprendere il timer da quel punto 

*/

let countdownEl = document.querySelector('#countdown');


let start = document.querySelector('#start');
let stop = document.querySelector('#stop');
let reset = document.querySelector('#reset');

let inputEl = document.querySelector('#countdown-input');

let countdown = 0;
let intervalid;
let secondi_rimasti = 0;


start.addEventListener('click',() => {

    countdown = inputEl.value;
    //console.log(countdown); prova per vedere se fa



    //EXTRA 
    if (secondi_rimasti != 0) {
        countdown = secondi_rimasti;
        secondi_rimasti = 0;
    }
    //EXTRA


    intervalid = setInterval( () => {
        countdownEl.innerHTML = countdown;
        countdown--;

        if (countdown < -1) {
            clearInterval(intervalid)
            countdownEl.innerHTML = 'Tempo scaduto'            
        }
    },1000);

});

stop.addEventListener('click', () => {
    clearInterval(intervalid);

    //EXTRA
    secondi_rimasti = countdown;
});

reset.addEventListener('click', () => {
    clearInterval(intervalid);
    countdown = 0;
    countdownEl.innerHTML = '...';
    inputEl.value = '';
});