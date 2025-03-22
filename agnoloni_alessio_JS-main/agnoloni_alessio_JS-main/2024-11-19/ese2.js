/*
Crea un file html con le seguenti caratteristiche:

un input per il titolo
una textarea per inserire un paragrafo
un bottone per creare l’articolo
Al click sul bottone, crea un articolo popolato dai valori prelevati dai due input.



inserire nell’articolo anche la data di pubblicazione tramite questa istruzione

    let date = new Date();
    let formatDate = date.toLocaleDateString()

Puoi consultare la documentazione relativa all'oggetto Date() qui:

https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date#examples



EXTRA:

fai in modo che, cliccando sul bottone crea articolo, se titolo o paragrafo sono vuoti, fai comparire nella pagina un messaggio che avverta che i due campi sono vuoti;
fai in modo che, una volta creato l’articolo, gli input vengano puliti
*/


let bottone = document.querySelector('#bottone');


bottone.addEventListener("click", () => {

    // valori campi di input
    let titolo = document.querySelector("#titolo");
    let paragrafo = document.querySelector('#paragrafo');
    
    let valore_titolo = titolo.value;
    let valore_paragrafo = paragrafo.value;

    // Verifica se i campi sono vuoti

    if (valore_titolo == "" || valore_paragrafo == "") {
        alert("Compila i seguenti Campi!");
        return;
    }

    // data
    let date = new Date();
    let formatDate = date.toLocaleDateString();

    // scrivi articolo
    let articolo = document.querySelector('#contenitore');

    articolo.innerHTML = `
        <h2>${valore_titolo}</h2>
        <p>${valore_paragrafo}</p>
        <p>Articolo pubblicato in data: ${formatDate}</p>
    `;

    // Pulisci i campi di input

    titolo.value = "";
    paragrafo.value = "";
}); 