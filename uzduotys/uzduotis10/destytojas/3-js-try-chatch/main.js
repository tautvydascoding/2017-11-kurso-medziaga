var debugMode = 1;


console.log("lasbas");
// ....
try {
    var i = -200;
    while (true) {
        console.log("suskaiciavau", i);

        if( i > 5000) {
            throw "error:5062 begalinis ciklas" ;
        }
        if( i < 0) {
            throw "error:5063 Atleiskite, nenumatyta klaida. i yra minus" ;
        }
        i++;
    }
} catch (e) {
    if(debugMode){
        console.log("Klaida: ", e);
    }
} finally {
    if(debugMode){
         console.log(" rezultatas: ", i);
    }
}


//. .....
