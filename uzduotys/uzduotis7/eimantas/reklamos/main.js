var age = parseInt(prompt("Ivesk amziu"));

while (!(Number.isInteger(age))) {
    age = parseInt(prompt("Neteisinga reiksme"));
}

function reklama(age){
    if(age <= 7){
        console.log("pliusines varles");
    }else if(age > 7 && age <= 14){
        console.log("Mini telefonai");
    }else if(age > 14 && age <= 18){
        console.log("Naujas App muzikai");
    }else if(age > 18 && age <= 24){
        console.log("Pensijos kaupimas - uzsiregistruok");
    }else if(age >= 24 && age <= 65){
        console.log("Stok i sauliu sajunga");
        console.log("Pensijos kaupimas - usiregistruok");
    }else{
        if(age >= 65){
            console.log("Kelione i birstona :D");
        }
    }
}

reklama(age);
