console.log("labas");

var spalva = "balta";
console.log("kintamasis spalva: ", spalva);
var x = 150;
var y = 20;
var z;
z = x + y;
console.log("x + y =", z);
var namas, butas, aukstuSkaicius, spalva, kambariuSkaicius;
namas = "Gabijos g. 165-1";
butas = 45;
aukstuSkaicius = 5;
spalva = "Geltonas";
kambariuSkaicius = 2;
console.log(namas, spalva, "kuris turi aukstu: \n \t", aukstuSkaicius, butas, kambariuSkaicius);

var tekstas = namas + spalva + "kuris turi aukstu: \n ";
console.log(tekstas + aukstuSkaicius);

var vardas = "Tautvydas"

// f-jos aprasymas (receptas) NOTE: ji bus nevykdoma kol jos neiskvies
function spausdintiPasisveikinima() {
  console.log("Hi,", vardas);
}
// f-jos paleidimas
spausdintiPasisveikinima();

var pavarde = "Rackaitis";
var amzius = "20";
var atlyginimas = 500;
function printVardasPavardeAmzius() {
  console.log(vardas, pavarde, amzius, atlyginimas);
}
printVardasPavardeAmzius();

var atlyginimas = 500;
function printMetinisPajamuDydis() {
  var pajamos = atlyginimas * 12;
  console.log("metines pajamos yra: ", pajamos);
}
printMetinisPajamuDydis();

function printTekstas(paduotasTekstas) {
  console.log(paduotasTekstas);
}
printTekstas("Sveiki");

// suskaiciuoti pazymiu vidurki
// parasyti funkcija, skaiciuojancia vidurki is duotu pazymiu
function pazymiuVidurkis(x1, x2, x3, x4, x5) {
  var vidurkis = (x1 + x2 + x3 + x4 + x5) / 5;
  console.log("Vidurkis yra: ", vidurkis);
}
pazymiuVidurkis(5, 9, 8, 3, 7);

document.write("Mano tekstas su js");
document.getElementById("pirmas").innerHTML += prompt("Kiek jums metų?");

var d = 3;
var r = 2;
z = d % r; // randa liekana
console.log("d / r =", z);
