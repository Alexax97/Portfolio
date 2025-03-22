let rubrica = {
    'contacts' : [
        {nome: 'Alessio', telefono: '33824641401'},
        {nome: 'Lorenzo', telefono: '3332222222'},
        {nome: 'Paola', telefono: '3333333333'},
        {nome: 'Jenny', telefono: '3334444444'},
    ],

    //aggiungo una funzione con due parametri per mettere nuovi contatti
    aggiungi_contatto : function (nuovo_nome, nuovo_telefono){
        this.contacts.push( {nome: nuovo_nome, telefono: nuovo_telefono} )
    },

    modifica_contatto : function (posizione,nome2,telefono2) {
        this.contacts.splice(posizione,1,{nome : nome2, telefono: telefono2})
    }
}

//questo e per visualizzare il contatto scelto
//console.log(rubrica.contacts[3]);

//rimuovo un elemento
/*
let rimuovi_elemento = rubrica.contacts.splice(0,1)

console.log(rubrica);
*/

/*
//aggiungo un contatto
rubrica.aggiungi_contatto('Francesco','1234567890')
console.log(rubrica);
*/

// modifico un contatto
rubrica.modifica_contatto(2,"Roby","9876543210");

console.log(rubrica);
