console.log("lasbas");


// (salyga) ? jei true : jei false;
// (salyga) ? pintVardas() : pintError();

// if (salyga) {
//     // jei true
//     //
//     //
// } else {
//     // jei false
// }

// 1 uzduotis
// sukurti 3 Globalius kintamuosius vardas , pavarde, klase
var vardas = "Jona"; // globalus
var pavarde = "Jononauskaite"; // globalus
var klase = 7; // globalus

// 1B
// atspausdinti visus kintamuosius
console.log("moksleivis: ", vardas, pavarde, "klase", klase );

//2
// parasyti f-ja printName()  printLName(), printClass()
function printName() {
    console.log("vardas", vardas);
}
// printName();
function printLName() {
    console.log("pavarde", pavarde);
}
 // printLName();

function printAllStudentData() {
    printName();
    printLName();
    // printClass();
}
printAllStudentData();

// 3
// parasyti f-ja printNameLNameClass(x, y, z)
function printNameLNameClass(x, y, z) {
    console.log("vardas: ", x, "pavarde:", y, "klase:", z);
}
// printNameLNameClass("Tomas",  "Tomauskas", 6);
// printNameLNameClass("Pertas", "Pertrauskutis", 9);
// printNameLNameClass("Masha",  "Linkutaite", 6);
// printNameLNameClass("Igoris", "Orlov", 12);

// 4
// parasyti f-ja spausdintiPazymius(x, y, z)
function spausdintiPazymius(x, y, z) {
    console.log("Rugsejis: ", x);
    console.log("Spalis: ", y);
    console.log("Lapkritis: ", z);
}


 // 4.1
//  atspausdinti 4 vaiku pazymius
printNameLNameClass("Tomas",  "Tomauskas", 6);
spausdintiPazymius(1, 5, 6);
printNameLNameClass("Igoris", "Orlov", 12);
spausdintiPazymius(5, 6, 7);
printNameLNameClass("Masha",  "Linkutaite", 6);
spausdintiPazymius(7, 8, 6);

// 5
// issokanciam lange paprasyti ivesti vartotoja savo amziu
// var amzius = prompt("Iveskite savo amziu");
// 5.1
// atspaudinti vartotojo amziu i konsole
// console.log("Ivestas amzius yra: ", amzius);


// ====== FOR  LOOP =======
 // 1.
 // isvesti 50 kartu zodi "Azuolas" i konsole

// for (pradine reiksme;  salyga;  reikemes kitimas) {
//     // veiksmai
// }

for (var i = 0; i < 50; i++) {
    console.log("Azuolas" + (i += 100));   //  i += 100;  => i = i + 100;
}


 // 2.1
 // isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  INNERHTML pagalba
 // document.write("<h2> Azuolas</h2>");
// document.getElementsByTagName("article").innerHTML = "<h2> Azuolas</h2>";

// istriname esama teksta <article> elemente
document.querySelector("article").innerHTML = "";

for (var i = 0;  i < 12; i++) {
    document.querySelector("article").innerHTML += "<h2> Azuolas" + i + "</h2>";
    document.querySelector("article").innerHTML += "<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>";
}

// pasitestavimui
// var elementas = document.querySelector("article");
// console.log(elementas);

// 2 A
// sukurti f-ja printX(xx) i browser langa
function printX( xx ) {
    document.querySelector('article').innerHTML += xx;
}
var tekstas = "<h1>Labas</h1>";
printX( tekstas );

function printXelementeY(x , tagas) {
    document.querySelector( tagas ).innerHTML = x;
    // document.querySelector( "h1" ).innerHTML += "Viso gero";
}
printXelementeY( "Viso gero", "h1" );

// 2B
// paleisti f-ja printX 100 kartu

// taikymas 3
// paleisti f-ja printX 12 kartu ir atspausdinti <img ...

var paveiksliukas = ' <img src=""   width="200px" height="200px"> ';

for (var i = 0;  i < 8; i++) {
    document.querySelector("article").innerHTML += paveiksliukas;
}

// 3
// sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);  i konsole

 




//
