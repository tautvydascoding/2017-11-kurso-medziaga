console.log("lasbas");

try {
    var i = 0;

    while (true) {
        console.log("suskaiciavau", i);
            if(i > 5000){
                throw "Soriukas";
            }
            if(i < 0){
                throw "Soriukas 2";
            }
        i++;
    }
} catch (e) {
    console.log("klaida: ", e);
}
