

let voto = prompt("inserisci il tuo voto")
/*
let risposta;

if (voto<18) {
    risposta = 'insufficiente';  

}else if (voto>=18 && voto<21) {
    risposta = 'sufficiente';

}else if (voto>=21 && voto<24) {
    risposta = 'buono';

}else if (voto>=24 && voto<27) {
    risposta = 'distinto';

}else if (voto>=27 && voto<=29) {
    risposta = 'ottimo';

}else if (voto=30) {
    risposta = 'eccellente';

}else{
    giudizio = 'hai messo un voto non valido';  //QUESTO NON MI FUNZIONA NON CAPISCO PERCHE
    
}            

console.log(risposta);
*/

let risposta;

switch (true) {
    case voto<18:
        risposta = 'insufficiente';
        break;

    case voto>=18 && voto<21:
        risposta = 'sufficiente';
        break;

    case voto>=21 && voto<24:
        risposta = 'buono';
        break;

    case voto>=24 && voto<27:
        risposta = 'distinto';
        break;

    case voto>=27 && voto<=29:
        risposta = 'ottimo';
        break;

    case voto=30:
        risposta = 'eccellente';
        break;

    default:
        break;
}

console.log(risposta);
