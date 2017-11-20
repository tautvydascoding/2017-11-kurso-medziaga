console.log("Labas");

var spalva = "balta";
console.log("kintamasis spalva:", spalva);

var x = 150;
var y = 20;
var z;
z = x + y;

console.log("x + y =", z);
// ------------------------------------------------

var namas, butas, aukstuSkaicius, spalva, kambariuSkaicius;
// ....
namas = "Gabijos g. 165";
butas = 9;
aukstuSkaicius = 3;
spalva = "geltona";
kambariuSkaicius = 2;

console.log(namas, spalva, butas, aukstuSkaicius, kambariuSkaicius);


var tekstas = namas + " " + spalva + " kuris turi " + aukstuSkaicius + " aukstu.";

console.log("isvedu ilga teksta:", tekstas);
// ------------------------------------------------
var vardas = "Tadas";
// f-jos aprasymas (receptas) NOTE: bus nevykdoma tol kol jos kazkas neiskvies
function spausdintiPasisveikinima() {
  console.log("Hi, " + vardas);
}

// f-jos paleidimas

spausdintiPasisveikinima();


// 1 uzduotis
var vardas, pavarde, amzius, atlyginimas;
vardas = "Tadas";
pavarde = "Vosylius";
amzius = 21;
atlyginimas = 1000;

// 2 uzduotis
function printVardasPavardeAmzius() {
  console.log(vardas + " " + pavarde + " " + amzius);
}

// 3 uzduotis
function printMetinisPajamuDydis(menesinisPajamuDydis) {
  console.log(menesinisPajamuDydis * 12);
}

// 4 uzduotis
var salis, miestas, adresas, pastoKodas;
salis = "Lietuva";
miestas = "Kaunas";
adresas = "Partizanu g. 230-9";
pastoKodas = "LT-50316";

console.log(salis + " " + miestas + " " + adresas + " " + pastoKodas);

// 5 uzduotis
function printTekstas(x) {
  console.log(x);
}

// 6 uzduotis
//pazymiu vidurkis

function pazymiuVidurkis(x1, x2, x3, x4, x5) {
  var vidurkis = (x1 + x2 + x3 + x4 + x5)/5;

  console.log("Pazymiu vidurkis yra:", vidurkis);
}

var ivestasTekstas;
ivestasTekstas = prompt("iveskite savo varda");

//------------------------------------------------------------------------------
document.getElementById("run-js-text").innerHTML = "Labas, " + ivestasTekstas;
