console.log("----------------------------------------------------------------");

var data = [];
var zmogus1 = ["Tomas", "Tomulis", 1998];
var zmogus2 = ["Birute", "Bitutaite", 1966];
var zmogus3 = ["Olga", "Opapa", 1985];
data[0] = zmogus1;

//isvedimo budai
console.log(data);
console.log(data[0]);

data[1] = zmogus2;
data[2] = zmogus3;

// 1 Uzduotis
//ISvesti visus duomenis apie zmogu eiluteje
document.querySelector('article').innerHTML += "1 uzduotis:<br/>";

var vardas = "";
var pavarde = "";
var metai = 0;

for (var i = 0; i < data.length; i++) {
  vardas = data[i][0];
  pavarde = data[i][1];
  metai = data[i][2];
  document.querySelector('article').innerHTML += (i+1) + ". " + vardas + " " + pavarde + ", " + metai + "m.<br/>";
}
// document.querySelector('article').innerHTML += "....";

// 2 Uzduotis
// isvesti visus duomenis stulpeliu
document.querySelector('article').innerHTML += "<br/><br/>2 uzduotis:";

for (var i = 0; i < data.length; i++) {
  vardas = data[i][0];
  document.querySelector('article').innerHTML += "<br/>" + vardas;

  pavarde = data[i][1];
  document.querySelector('article').innerHTML += "<br/>" + pavarde;

  metai = data[i][2];
  document.querySelector('article').innerHTML += "<br/>" + metai;
}

// 3 uzduotis
// pakeisti "Olgos " pavarde i "Jarukuotiete"
document.querySelector('article').innerHTML += "<br/><br/>3 uzduotis:";
data[2][1] = "Jarukuotiete";

document.querySelector('article').innerHTML += "<br/> Olgos pavarde pakeista i: " + data[2][1] + " <br/>";

// 4 Uzduotis
// automatiskai patikrinti visus duomenis ir visus gimusius nuo 1980 iki 2000 isvesti
document.querySelector('article').innerHTML += "4 uzduotis:<br/>";


for (var i = 0; i < data.length; i++) {
  metai = data[i][2];
  if(metai > 1980 && metai < 2000){
    document.querySelector('article').innerHTML += data[i] + "<br/>";
  }
}


//------------------------------------------------------------------------------
//10x10 dydzio matrica uzpildyta random kintamaisiais

var matrix = [];

for (var i = 0; i < 10; i++) {
  matrix[i] = [];
  for (var k = 0; k < 10; k++) {
    var randNumb = Math.floor(Math.random() * (50 - 10)) + 10;
    matrix[i][k] = randNumb;
  }
}

console.log(matrix);
