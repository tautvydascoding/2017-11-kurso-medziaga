var out = document.getElementById('output');

var imone = [];
var imone = ['UAB Keksai ir Ko', 120, 620];



var x = "papildoma veikla: sokolado gamyba";

imone[3] = x;

// masyvo kopija

var temp = imone;
var ilgis = temp.length;

imone[ilgis] = "Dar kazka gamina";
//=================================
imone.push("Klientai: UK");
//=================================

imone.pop();

console.log(imone);
