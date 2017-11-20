// console.log("labas");
//
// var spalva = "balta";
//
// console.log("kintamasis spalva: ", spalva);
// var x = 150;
// var y = 20;
//     var z;
//  z = x + y;
//  console.log("atsakymas= ", z );
//
//  var namas, butas, aukstuSkaicius, spalva, kambariuSkaicius;
//  namas = "gabijos g.1337";
//  butas = 45;
//  aukstuSkaicius = 5;
//  spalva = "geltonas";
//  kambariuSkaicius = 2;
// console.log(namas, spalva, "aukstas: \n \t ",aukstuSkaicius, butas, kambariuSkaicius); //tekstas saugos visa sakini
//
// var tekstas = namas + spalva + "aukstas \n "; //ilgas tekstas
// console.log("isvedu ilga teksta:", tekstas);
//
// //------------------------------
// var vardas = "tomas"
// // funkcijos aprasymas (receptas) NOTE: ji bus nevykdoma tol kol jos neiskvies
// function spausdintiPasisveikinima() {
//     console.log("Hi," + vardas);
// }
// // funkcijos iskvietimas
//
// spausdintiPasisveikinima();




//  1 UZDUOTIS
// sukurti kintamuosius : vardas, pavarde, amzius, atlyginimas
var vardas, pavarde, amzius, atlyginimas;
vardas = "Linas";
pavarde = "pop";
amzius = 21;
atlyginimas = 1337;

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()"
function printVardasPavardeAmzius() {
    console.log("Vardas: ", vardas);
    console.log("Pavarde: ", pavarde);
    console.log("Amzius: ", amzius);
}
    printVardasPavardeAmzius();
//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()"
function printMetinisPajamuDydis() {
    var pajamos = atlyginimas * 12;
    console.log("metines pajamos yra: ", pajamos);
}
printMetinisPajamuDydis();

//  4 UZDUOTIS
// sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// sukurti funkcija "printAddressData()"
// ir juos isvesti/atspausdinti i konsole
var salis, miestas, adresas, pastoKodas;
salis = "Lietuva";
miestas = "Kedainiai";
adresas = "Josvainiai gatve";
pastoKodas = 58185;
function printAddressData(){
    console.log(salis, miestas, adresas,
    pastoKodas);
}
printAddressData();
printAddressData();
printAddressData();


//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)"

function printTekstas(paduotasTekstas) {
 console.log(paduotasTekstas);
}
printTekstas("labas Karoli");
//  paduotasTekstas - lokalus kintamasis kuris galioja tik sitoj funkcijoj

// 6 uzduotis
// parasyti funkcija "pazymiuVidurkis()" kuri apskaicuoja vidurki is paduotu 5 menesiu pazymiu
// suskaicuotis pazymiu vidurki, 5 , 10 , 8 , 6 , 8

function pazymiuVidurkis(x1, x2, x3, x4, x5) {
    var vidurkis = (x1 + x2 + x3 + x4 + x5) /5;
    console.log("vidurkis yra: ", vidurkis);
}
pazymiuVidurkis( 5, 10, 8, 6, 8);

document.write("mano tekstas su js");
// window.alert("labas");
// alert("ate");
// var ivestasTekstas = prompt("Iveskite savo varda");

var d = 5;
var r = 3;
z = d % r;  // randa liekana
console.log("d % r = ", z);
