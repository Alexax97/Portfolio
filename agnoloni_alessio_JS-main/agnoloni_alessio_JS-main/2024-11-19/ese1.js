/*
Lavora con il DOM:

crea una pagina HTML con 3 paragrafi e 3 bottoni.
Il primo bottone dovra’ cambiare il colore del testo dei paragrafi in modo casuale.
ogni paragrafo dovra' avere un colore diverso.
il secondo dovra’ rendere il testo dei paragrafi in grassetto.
il terzo dovra’ far scomparire e ricomparire i paragrafi.


TIPS:

ricordati della proprieta’ display: none in CSS!

i colori su CSS sono formati da R, G e B. Quindi puoi settare un colore random semplicemente randomizzando questi tre valori e mettendoli insieme. Scopri come.
*/

let paragrafo_1 = document.querySelector('#paragrafo_1');

let paragrafo_2 = document.querySelector('#paragrafo_2');

let paragrafo_3 = document.querySelector('#paragrafo_3');


let bottone_1 = document.querySelector('#bottone_1');

let stato = 0;

bottone_1.addEventListener('click',function (){

    let r = Math.random()*255 ;
    let g = Math.random()*255 ;
    let b = Math.random()*255 ; 

    let r2 = Math.random()*255 ;
    let g2 = Math.random()*255 ;
    let b2 = Math.random()*255 ; 

    let r3 = Math.random()*255 ;
    let g3 = Math.random()*255 ;
    let b3 = Math.random()*255 ; 

    let colore_casuale1 = `rgb(${r},${g},${b})`;
    let colore_casuale2 = `rgb(${r2},${g2},${b2})`;
    let colore_casuale3 = `rgb(${r3},${g3},${b3})`;

    if (stato == 0) {
        paragrafo_1.style.color = colore_casuale1;
        paragrafo_2.style.color = colore_casuale2;
        paragrafo_3.style.color = colore_casuale3;

        stato = 1;
    } else if (stato == 1) {
        paragrafo_1.style.color = 'black';
        paragrafo_2.style.color = 'black';
        paragrafo_3.style.color = 'black';

        stato = 0;
    }
});


let bottone_2 = document.querySelector('#bottone_2');

let stato2 = 0;

bottone_2.addEventListener('click',function (){

    if (stato2 == 0) {
        paragrafo_1.style.fontWeight = 'bold';
        paragrafo_2.style.fontWeight = 'bold';
        paragrafo_3.style.fontWeight = 'bold';

        stato2 = 1;
    } else if (stato2 == 1) {
        paragrafo_1.style.fontWeight = 'normal';
        paragrafo_2.style.fontWeight = 'normal';
        paragrafo_3.style.fontWeight = 'normal';

        stato2 = 0;
    }
});

let bottone_3 = document.querySelector('#bottone_3');

let stato3 = 0;

bottone_3.addEventListener('click',function (){

    if (stato3 == 0) {
        paragrafo_1.style.display = 'none';
        paragrafo_2.style.display = 'none';
        paragrafo_3.style.display = 'none';

        stato3 = 1;
    } else if (stato3 == 1) {
        paragrafo_1.style.display = 'block';
        paragrafo_2.style.display = 'block';
        paragrafo_3.style.display = 'block';

        stato3 = 0;
    }
});