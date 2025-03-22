let query = prompt(`scegli tra ${'Quadrato'},${'Rettangolo'},${'Circonferenza'} e ${'Triangolo Rettangolo'}`).toLocaleLowerCase();




switch(query) {

    case query="quadrato":
        lato = parseFloat(prompt(`dimmi il lato del quadrato`));
        area = lato*lato;
        perimetro = lato*4;
        
        console.log(`area ${area}`);
        console.log(`perimetro ${perimetro}`);
        break;
    
    case query="rettangolo": 
        base = parseFloat(prompt(`immetti la base del rettangolo`));
        altezza = parseFloat(prompt(`immetti l'altezza del rettangolo`));
        area = base*altezza;
        perimetro = (base+base+altezza+altezza);
        
        console.log(`area ${area}`);
        console.log(`perimetro ${perimetro}`);
        
        break;



    case query="circonferenza":
        raggio = parseFloat(prompt(`immetti il raggio della circonferenza`));
        area = (raggio**2)*Math.PI;
        perimetro = (raggio*2)*Math.PI;
        
        console.log(`area ${area}`);
        console.log(`perimetro ${perimetro}`);
        
        break;

    case query="triangolo rettangolo":
        base_lato1 = parseFloat(prompt(`immetti la base del triangolo rettangolo`));
        altezza_lato2 = parseFloat(prompt(`immetti il lato 2 del triangolo rettangolo`));
        lato3 = parseFloat(prompt(`immetti il lato 3 del triangolo rettangolo`));
        area = (base_lato1*altezza_lato2)/2;
        perimetro =(base_lato1 + altezza_lato2 + lato3);
        
        console.log(`area ${area}`);
        console.log(`perimetro ${perimetro}`);
        
        break; 
        
        
    default:
        console.log(`hai inserito un valore sbagliato`);  
        break;
}

