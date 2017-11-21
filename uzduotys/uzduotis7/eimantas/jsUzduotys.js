console.log ("Labas");
// ==============patarimai==========
// reiksme  - kintamasis
// "reiksme" - tekstas
// reiksme() - f-ja
// ==============patarimai==========
// reiksme  - kintamasis
// "reiksme" - tekstas
// reiksme() - f-ja

// 1 uzduotis
// sukurti 3 Globalius kintamuosius vardas , pavarde, klase
var vardas = "vardux";
var pavarde = "pavardux";
var klase = "klase";

//
// atspausdinti visus kintamuosius

console.log(vardas, pavarde, klase);

//2
// parasyti f-ja printName()  printLName(), printClass()
//

function printName(){
    console.log(vardas);
}
function printLName(){
    console.log(pavarde);
}
function printClass(){
    console.log(klase);
}

// 3
// parasyti f-ja printNameLNameClass(x, y, z)


function printNameLNameClass(x, y, z){
    console.log("vardas: ", x, "pavarde: ", y, "klase: ", z);
}

printNameLNameClass("tomas", "tomauskas", "5");
printNameLNameClass("darius", "noobas", "2");
printNameLNameClass("Egis", "siaip", "7");

// 4
// parasyti f-ja spausdintiPazymius(x, y, z)

function spausdintiPazymius(x, y, z){
    console.log("Rugsejis: ", x);
    console.log("Spalis: ", y);
    console.log("Lapkritis: ", z);
}

spausdintiPazymius(1, 2, 6);

 // 4.1
//  atspausdinti 4 vaiku pazymius
printNameLNameClass("tomas", "tomauskas", "5");
spausdintiPazymius(1, 2, 6);

printNameLNameClass("kitas", "tomauskas", "5");
spausdintiPazymius(1, 2, 6);

printNameLNameClass("dar", "tomauskas", "5");
spausdintiPazymius(1, 2, 6);

// 5
// issokanciam lange paprasyti ivesti vartotoja savo amziu
var vAmzius = prompt("Iveskite savo amziu");

// 5.1
// atspaudinti vartotojo amziu i konsole

console.log("ivestas amzius", vAmzius);

// ======FOR   LOOP=======
 // 1.
 // isvesti 50 kartu zodi "Azuolas" i konsole

 // for (var i = 0; i < 50; i++) {
 //     console.log("Azuolas" + (i+1));
 // }

 // 2.1
 //
 // isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  INNERHTML pagalba

document.querySelector("article").innerHTML = "";

for (var i = 0; i < 5; i++) {
    document.querySelector("article").innerHTML += "<h2>Azuolas</h2><br>";
    document.querySelector("article").innerHTML += "<p>ahsflahsdlaksj;fajsk </p>";
}

// 2 A
// sukurti f-ja printX(xx) i browser langa

function printX(xx){
    document.querySelector("article").innerHTML += xx;
}

var txt = "<h1>kazkas per info</h1>";
printX(txt);

// spausdina X, Y vietoje - vienkartiniai parametrai
function printXY(x, y){
    document.querySelector(y).innerHTML += x;
}

printXY("laba dena", "h3");

// 2B
// paleisti f-ja printX 100 kartu

// taikymas 3
// paleisti f-ja printX 12 kartu ir atspausdinti <img ...


// 3
 // sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);  i konsole






//
