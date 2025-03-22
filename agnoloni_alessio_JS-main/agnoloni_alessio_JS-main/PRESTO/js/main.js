let number1 = document.querySelector('#number1');
let number2 = document.querySelector('#number2');
let number3 = document.querySelector('#number3');


function crea_intervallo(EleNumber, numMax, tempo){

    let counter = 0;
    let intervall = setInterval( () => {
        
        if (counter <= numMax) {
            EleNumber.innerHTML = counter;
            counter++;
        } else {
            clearInterval(intervall)
        }
    },tempo)
}

let controllo_ripetizione = false;

let osserva = new IntersectionObserver( entries => {

    entries.forEach( entry => {

        if(entry.isIntersecting && controllo_ripetizione == false) {
            crea_intervallo(number1, 1000, 5);
            crea_intervallo(number2, 294, 35);
            crea_intervallo(number3, 90, 200);

            controllo_ripetizione = true;

        }
    })

});

osserva.observe(number3)