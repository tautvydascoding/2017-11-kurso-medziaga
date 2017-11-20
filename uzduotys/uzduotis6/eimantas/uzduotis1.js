//  1 UZDUOTIS
// sukurti kintamuosius : vardas, pavarde, amzius, atlyginimas

var vardas = "Tomas";
var pavarde = "Pavardenis";
var amzius = 55;
var atlyginimas = 1900;


//  2 UZDUOTIS// sukurti funkcija "printVardas()"

function printVardas(){
    console.log(vardas);
}


//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()"

function pajamos(){
    console.log(atlyginimas * 12);
}

//  4 UZDUOTIS
// sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// ir juos isvesti/atspausdinti i konsole

var salis = "Lietuva";
var miestas = "Kaunas";
var adresas = "Gatve";
var pastoKodas = "Kodas";

console.log(salis + "," + miestas + "," + adresas + "," + pastoKodas);


//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)"

function textasNkartu(){
    var x = prompt("Kiek kartu?");

    for (var i = 0; i < x; i++) {
        console.log("Tiek kartu");
    }
}


// PALEIDZIA SUKURTAS FUNKCIJAS

console.log("=========================");

printVardas();
pajamos();
textasNkartu();
