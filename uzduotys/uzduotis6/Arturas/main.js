console.log("labas");
var vardas = "Jonas";
console.log("kintamasis vardas: ", vardas);
var x = 150;
var y = 20;
var z;
z = x + y;
console.log("x + y = ", z);
var namas, butas, aukstuSkaicius, spalva, kambariuSkaicius;
//.....
namas = "Gabijos g. 166-1";
butas = 45;
aukstuSkaicius = 5;
spalva = "geltonas";
kambariuSkaicius = 2;
console.log(namas, "butas", butas, "\n", "kurio spalva ", spalva);

var tekstas = namas + " " + spalva + " kuris turi aukstu \n";
console.log(tekstas); //ilgas tekstas

//----------------------------

//funkcijos aprasymas (receptas) note: ji nebus vykdoma tol, kol jos neiskvies
function spausdinti() {
    console.log("Hello, " + vardas);
}

spausdinti (); //---Funkcijos paleidimas
spausdinti ();

//---Uzduotis

var vardas, pavarde, amzius, atlyginimas;
vardas = "Jonas";
pavarde = "Jonaitis";
amzius = 30;
atlyginimas = 1000;
metinesPajamos = 12*1000;

function vardasPavarde() {
    console.log("Vardas: " + vardas, "Pavarde: " + pavarde);
}
function metinisPajamuDydis () {
    console.log("Metines pajamos: " + metinesPajamos);
}

vardasPavarde();
metinisPajamuDydis();

var salis, miestas, adresas, pastoKodas;

salis = "Lietuva";
miestas = "Kaunas";
adresas = "Vilniaus g. 20-5";
pastoKodas = "49306";

function pilnasAdresas () {
    console.log("Salis: " + salis + "\n" + "Miestas: " + miestas + "\n" + "Adresas: " + adresas + "\n" + "Pasto kodas: " + pastoKodas );
}

pilnasAdresas ();

function printTekstas (paduotasTekstas){  // paduotasTekstas - local variable
    console.log(paduotasTekstas);
}
printTekstas ("Labas Karoli");

//6 Uzduotis
// parastysi f-ja "pazymiuVidurkis" kuri paskaiciuoja pazymiu vidurki is paduotu 5men pazymiuVidurkis
// pazymiai 5, 10, 8, 6, 8

function pazymiuVidurkis(x1, x2, x3, x4, x5) {
    var vidurkis = (x1 + x2 + x3 + x4 + x5) / 5;
    console.log("Vidurkis yra ", vidurkis);
}

pazymiuVidurkis (5, 10, 8, 6, 8);

//document.write ("mano tekstas su js");
//window.alert ("mano tekstas")
//alert("ispejimas")
//prompt ("iveskite varda");

//---------------
var d = 5;
var r = 3;
z = d % r; //  % randa liekana
console.log("d / r = ", z);
