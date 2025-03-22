// cattura dei pulsanti

let visualizza_rubrica = document.querySelector('#visualizza_rubrica');
let aggiungi_contatto = document.querySelector('#aggiungi_contatto');
let modifica_contatto = document.querySelector('#modifica_contatto');
let elimina_contatto = document.querySelector('#elimina_contatto');

//cattura delle caselle di input

let nome_contatto = document.querySelector('#nome_contatto');
let cognome_contatto = document.querySelector('#cognome_contatto');
let telefono_contatto = document.querySelector('#telefono_contatto');

//wrapper per visualizzare la RUBRICA

let view_rubrica = document.querySelector('#view_rubrica');

let rubrica = {
    contatti : [
        {
            nome : 'Andrea',
            cognome : 'Rossi',
            num_telefono : '+39 789 456 123'
        },
        
        {nome : 'Michele', cognome : 'Russo', num_telefono : '+39 555 456 333'},
        {nome : 'Antonio', cognome : 'Bianchi', num_telefono : '+39 555 444 111 456'},
        {nome : 'Luca', cognome : 'Verdi', num_telefono : '+39 456 852 654'},

    ],

    visualizza_contatti : function() {

        view_rubrica.innerHTML = "";

        this.contatti.forEach( contatto => {

            let singolo_contatto = document.createElement('div');
            // il metodo classList mi consente di gestire le classi di un oggetto HTML
            //add() ci permette di aggiungere una o piu classi all'oggetto a cui ci riferiamo
            // il metodo add puo ricevere piu classi, l'importante che siano divise da una virgola
            singolo_contatto.classList.add('col-4')
            singolo_contatto.innerHTML = `
                <div class="card" >
                    <img src="https://picsum.photos/300/100" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">${contatto.nome} ${contatto.cognome}</h5>
                         <p class="card-text">${contatto.num_telefono}</p>
                        
                     </div>
                </div>
            `;
            // inserimento nel wrapper
            view_rubrica.appendChild(singolo_contatto)
        } 

        );

    },// end metodo visualizza_contatti()


    aggiungi_contatto : function(nuovo_nome, nuovo_cognome, nuovo_tel) {
        // dobbiamo aggiungere un nuovo contatto, ovvero aggiungere un nuovo elemento all'array 
        //contatti, ricordandoci che l'elemento a sua volta e un oggetto

        this.contatti.push( {nome:nuovo_nome, cognome:nuovo_cognome, num_telefono:nuovo_tel} )
    },

    elimina_contatto : function(cognome_elimina, nome_elimina) {

        // devo assicurarmi che il contatto da eliminare esista, se esiste il metodo filter restituira
        //un array che contiene tutti gli elementi che soddisfano la condizione
        let trovato = this.contatti.filter(contatto  => {

            return contatto.cognome == cognome_elimina && contatto.nome == nome_elimina;
        });
        //console.log(trovato);


        //se il contatto esiste,posso eliminarlo e ne consegue che l'array trovato contiene almeno un 
        //elemento se questa condizione e verificata significa che l'elemento da eliminare esiste e quindi
        //provvedo alla sua eliminazione 
        if(trovato.lenght >= 1) {

            let contatti_aggiornato = this.contatti.filter( contatto => {
                return contatto.cognome != cognome_elimina && contatto.nome != nome_elimina;
            });

            this.contatti = contatti_aggiornato;
            
        }
        
    },

    modifica_contatto : function(mod_nome , mod_cognome, mod_telefono) {

        this.contatti.forEach( (contatto, index) => {

                if (contatto.nome == mod_nome && contatto.cognome == mod_cognome) {
                    
                    this.contatti[index].num_telefono = mod_telefono;
                }
        });
    }

}// end oggetto rubrica

elimina_contatto.addEventListener('click', () => {

    let elimina_nome = nome_contatto.value;
    let elimina_cognome = cognome_contatto.value;

    rubrica.elimina_contatto(elimina_nome, elimina_cognome);

    rubrica.visualizza_contatti();
});

modifica_contatto.addEventListener('click', () => {
    let mod_nome = nome_contatto.value;
    let mod_cognome = cognome_contatto.value;
    let mod_telefono = telefono_contatto.value;

    rubrica.modifica_contatto(mod_nome, mod_cognome, mod_telefono)

    rubrica.visualizza_contatti();
})

visualizza_rubrica.addEventListener('click', () => {
    rubrica.visualizza_contatti()
    
} );



cognome_contatto.addEventListener('input', () => {

    let cognome = cognome_contatto.value;

    if(cognome.length >= 3) {
        
        cognome_contatto.style.border = '1px solid rgb(222, 226, 230)';
        cognome_contatto.style.backgroundColor = 'white';
    }

});

telefono_contatto.addEventListener('input', () =>{
    
    telefono_contatto.style.border = '1px solid rgb(222, 226, 230)';
    telefono_contatto.style.backgroundColor = 'white';
})
  
aggiungi_contatto.addEventListener('click', () => {


    let new_nome = nome_contatto.value;
    let new_cognome = cognome_contatto.value;
    let new_tel = telefono_contatto.value;

    if (new_cognome == '' || new_tel == '' ) {

        if (new_cognome == '') {
            
            cognome_contatto.style.border = '2px solid red';
            cognome_contatto.placeholder = 'Questo campo e obbligatorio';
            cognome_contatto.style.backgroundColor = 'grey';
        }
       
        if (new_tel == '') {
            
            telefono_contatto.style.border = '2px solid red';
            telefono_contatto.placeholder = 'Questo campo e obbligatorio';
            telefono_contatto.style.backgroundColor = 'grey';
        }
        
    } else {

        rubrica.aggiungi_contatto(new_nome, new_cognome, new_tel)

        rubrica.visualizza_contatti();

        nome_contatto.value = '';
        cognome_contatto.value = '';
        telefono_contatto.value = '';
    }

});