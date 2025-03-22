/*
se temperatura e’ minore di 20, stampare “non ci sono piu’ le mezze stagioni”
se temperatura e’ maggiore uguale a 30, stampare “lu mare, lu sole, lu ientu”
se temperatura e’ minore di 30, stampare “mi dia una peroni sudata”
se temperatura e’ minore di 0, stampare “non e’ tanto il freddo quanto l’umidità’”
se temperatura e’ minore di -10, stampare “copriti…ancora ti raffreddi”
*/



let temperatura = prompt("inserisci la temperatura")

let risposta;        

/*
if (temperatura<-10) {
    risposta = "copriti…ancora ti raffreddi";

}else if (temperatura<0) {
    risposta = "non e' tanto il freddo quanto l'umidità";

}else if (temperatura<20) {
    risposta = "non ci sono piu' le mezze stagioni";  

}else if (temperatura<30) {
    risposta = "mi dia una peroni sudata";

}else if (temperatura>=30) {
    risposta = "lu mare, lu sole, lu ientu";

}

console.log(risposta);
*/


switch (true) {
    case temperatura<-10:
        risposta = "copriti…ancora ti raffreddie";
        break;

    case temperatura<0:
        risposta = "non e' tanto il freddo quanto l'umidità";
        break;

    case temperatura<20:
        risposta = "non ci sono piu' le mezze stagioni";
        break;

    case temperatura<30:
        risposta = "mi dia una peroni sudata";
        break;

    case temperatura>=30:
        risposta = "lu mare, lu sole, lu ientu";
        break;

    default:
        break;
}

console.log(risposta);
