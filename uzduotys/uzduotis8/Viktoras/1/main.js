var out = document.getElementById('output');

var imone = [];
var imone = ['UAB Keksai ir Ko', 120, 620];



var x = "papildoma veikla: sokolado gamyba";

imone[3] = x;

// masyvo kopija

var temp = imone;
var ilgis = temp.length;

imone[ilgis] = "Dar kazka gamina";
//============== (shift) iveda nauja elementa i masyvo gala
imone.push("Klientai: UK");
//============== (pop) istrina masyvo paskutini elementa
imone.pop();
//============== (unshift) iveda pirma masyvo elementa
imone.unshift("direktorius: Juozas");
//============== (shift) istrina pirma masyvo elementa
imone.shift();
//=================================

var pozicija = imone.indexOf("UAB Keksai ir Ko");

//============== (splice) istrina pasirinkta elementa ir gali nuo jo iterpt kitus
//1 - kelinta paveikti;
//1 - kiek istrinti;
//""Darbuotoju skaicius: 120"" - ka iterpti


imone.splice(1, 1, "Darbuotoju skaicius: 120");

imone.splice(2, 1, "patalpu plotas 620");

//============ (slice)

var imoneInfo = imone.slice(0, 2);
console.log("imone info: ", imoneInfo);
console.log("imone: ", imone);




console.log(imone);
console.log(pozicija);
