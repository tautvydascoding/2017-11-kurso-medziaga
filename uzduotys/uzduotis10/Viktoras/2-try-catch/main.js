try {
    var i = 0;
    while (true) {
        console.log("suskaiciavau iki ", i);

        if ( i > 5000) {
            throw "Atleiskite, kazkas negerai";
        }
        if ( i < 0 ) {
            throw "Atleiskite, nenumatyta klaida";

        }
        i++;
    }

} catch (e) {
    console.log("Klaida: ", e);

} finally {

}
