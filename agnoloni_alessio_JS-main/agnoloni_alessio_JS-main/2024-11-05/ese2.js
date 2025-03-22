
let num_arr = [];

let totale = 0;


for(let a = 1; a <= 30; a++) {

    if (a % 2 == 0) {

        console.log(a);
           
    }else{
        
        num_arr.push(a)
    }
    
}


for(let a = 0; a < num_arr.length; a++) {

    totale += num_arr[a];
    
}


let media = totale/num_arr.length

console.log(`questa e la media dei numeri dispari ${media}`);



