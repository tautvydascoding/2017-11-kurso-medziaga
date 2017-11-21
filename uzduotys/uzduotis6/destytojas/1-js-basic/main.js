console.log("lasbas");

var spalva = "balta";

console.log("kintamasis  spalva: ", spalva);
var x = 200;
var y = 21;
var z;
 z = x + y;
 console.log("x + y = ", z);

 var namas, butas, aukstuSkaicius, spalva, kambariuSkaicius;
 // .....
 namas = "Gabijos g. 165-1";
 butas = 45;
 aukstuSkaicius = 5;
 spalva = "geltonas";
 kambariuSkaicius = 2;

console.log(namas, spalva, "kuris turi aukstu: \n \t ", aukstuSkaicius, butas, kambariuSkaicius);


// tekstas - saugos visa sakini
var tekstas = namas + " " + spalva + " kuris turi aukstu \n  "; // ilgas tekstas
console.log("isvedu ilga teksta:", tekstas);

//----------------------------------
var vardas = "Tomas";
// f-jos aprasymas (receptas)  NOTE: ji bus nevykdoma, iki kol neiskviesi
function spausdintiPasisveikinima()  {
    console.log("Hi," + vardas);
}
// f-jos paleidimas
spausdintiPasisveikinima();



//  1 UZDUOTIS
// sukurti kintamuosius : vardas, pavarde, amzius, atlyginimas
var vardas, pavarde, amzius, atlyginimas;
vardas = "Justas";
pavarde = "Justauskas";
amzius = 32;
atlyginimas = 500;

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
// sukurti f-ja "printAddressData()"
// ir juos isvesti/atspausdinti i konsole
var salis = "Lietuva";
var miestas = "Kaunas";
var adresas  = "Laisves al. 12";
var pastoKodas = 45232;
function printAddressData() {
    console.log(salis, miestas, adresas, pastoKodas);
}
printAddressData();


// function spausdintiPasisveikinima()  {
//     console.log("Hi");
// }
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)"
function printTekstas(paduotasTekstas) { // paduotasTekstas - local varible
    console.log(paduotasTekstas);
}
printTekstas("Labas Karoli");


// 6 uzduotis
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8
function pazymiuVidurkis(x1, x2, x3, x4, x5) {
    var vidurkis = (x1 + x2 + x3 + x4 + x5) / 5;
    console.log("vidurkis yra: ", vidurkis);
}
pazymiuVidurkis( 5, 10 , 8 , 6 , 8);

document.write("Mano tekstas su js");
 // window.alert("alabas");
 // alert("Viso");
 // var ivestasTekstas = prompt("Ivestkite savo varda");

//
var d = 5;
var r = 3;
z = d % r;  // randa liekana gali
console.log(" d / r = ", z);




//
