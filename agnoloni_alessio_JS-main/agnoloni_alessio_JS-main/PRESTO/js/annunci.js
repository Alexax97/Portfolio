 
/*QUESTO SERVE PER USARE IL FILE JSON*/

fetch('./dati/elenco_immobili.json')

//questo serve per trasformare il file json, precedentemente indicato da fetch,
//in un array di oggetti
.then(Response => Response.json())
.then(data => {
    //Dentro queste parentesi possiamo utilizzare l'array di oggetti fuori no
    
    function si_no(valore){
        if (valore == true) {
            return 'SI'
        } else {
            return 'NO'
        }
    }

    let titolo = document.querySelector('#titolo');

    let inputPrezzo = document.querySelector('#inputPrezzo');

    function visualizza_annunci(arr_Annnunci) {

        let cont_annunci = document.querySelector('#cont_annunci');

        titolo.innerHTML = `Annunci su tutte le regioni, trovati ${arr_Annnunci.length}`;

        cont_annunci.innerHTML = '';

        //GENERAZIONE NUMERI PER LE IMMAGINI

        altezza = 400;
        larghezza = 400;

        arr_Annnunci.forEach(annuncio => {
            let piscina;
            let giardino;
            let vista_mare;
            
            let div = document.createElement('div'); //abbiamo creato l'elemento div

            div.classList.add('col-12','col-sm-3','mb-3'); // abbiamo aggiunto due classi al div per la responsivita

            prezzo = Math.floor(annuncio.prezzo);
            prezzo = prezzo.toLocaleString('it-IT');


            div.innerHTML = `

            <div class="card">
                <img src="https://picsum.photos/${larghezza}/${altezza}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">€ ${prezzo} </h5>
                        <h6 class="card-title">Regione: ${annuncio.Regione}</h6>
                        <p class="card-text mb-0">Sup. ${annuncio.metri_quadrati}mq</p>
                        <p class="card-text mb-0">Num.Camere ${annuncio.numero_camere}</p>
                        <p class="card-text mb-0">Piscina ${si_no(annuncio.piscina)}</p>
                        <p class="card-text mb-0">Giardino ${si_no(annuncio.giardino)}</p>
                        <p class="card-text mb-0">Vista mare: ${si_no(annuncio.vista_mare)}</p>

                    </div>
            </div>
            
            `;

            // mettiamo l'elemento div nel wrapper cont_annunci

            cont_annunci.append(div)    

            altezza++
            larghezza++
    
        });
    }
    
    function set_Regioni() {

        let filtri_regione = document.querySelector('#filtri_regione')
        
        let uniche_regioni = [];

        data.forEach( annuncio => {
            
            //il punto esclamativo prima della funzione inverte il significato perche includes restituirebbe false cosi restituisce true
            if (!uniche_regioni.includes(annuncio.Regione)) {
                uniche_regioni.push(annuncio.Regione);
            }
            
        });

        uniche_regioni.sort();

        //=========CREIAMO UN DIV CHE CONTERRA UN RADIO BUTTON PER OGNI REGIONE================

        uniche_regioni.forEach(regione => {

            let div_radio_regione = document.createElement('div');

            div_radio_regione.classList.add('form-check');

            div_radio_regione.innerHTML = `

                        <input class="form-check-input" type="radio" name="regioni" id="${regione}">
                        <label class="form-check-label" for="${regione}">${regione}</label>
                        
            `;

            filtri_regione.append(div_radio_regione)

        });

        
        
    }

    function filtra_regioni(regione) {
        
            if (regione == 'All') {
                visualizza_annunci(data);
                titolo.innerHTML = `Annunci su tutte le regioni, trovati ${data.length}`;
            } else {

                let regione_filtrata = data.filter( annuncio => {
                    return annuncio.Regione == regione
                });
                visualizza_annunci(regione_filtrata);
                titolo.innerHTML = `Annunci della regione: ${regione}, trovati ${regione_filtrata.length}`;
            }

    }

    function set_input_prezzi() {
        
    let arr_prezzi = data.map( annuncio => {
        return Math.floor(annuncio.prezzo)
    });

    arr_prezzi.sort( (a,b) => a - b);

    inputPrezzo.min = arr_prezzi[0];

    let prezzo_max = arr_prezzi.pop();
    inputPrezzo.max = prezzo_max;
    inputPrezzo.value = prezzo_max;

    }

    function filtro_prezzo(prezzo_scelto) {
        
        let arr_filtra_prezzi = data.filter( annuncio => annuncio.prezzo <= prezzo_scelto);
        visualizza_annunci(arr_filtra_prezzi);
        
    }

    inputPrezzo.addEventListener('input', () => {
        filtro_prezzo( inputPrezzo.value )
    });

    visualizza_annunci(data)

    set_Regioni()

    set_input_prezzi()


    let radio_regioni = document.querySelectorAll('.form-check-input');

    radio_regioni.forEach( singoloRadio => {

        singoloRadio.addEventListener('click', () => {
            filtra_regioni(singoloRadio.id)
        })
    });
})/*==========================END then data=============================*/

