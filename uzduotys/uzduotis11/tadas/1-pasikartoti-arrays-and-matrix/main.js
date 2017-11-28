var dvigarsiai = ["al", "am", "an", "ar", "el", 'em', "en", "er", "il", "im", "in", "ir", "ul", "um", "un", "ur"];
var names = [];
//Generuojam 10 vardu kuriu ilgis random nuo 4 iki 10 dvigarsiu
for (var i = 0; i < 10; i++) {
  var vardas = "";
  var vardaSudaro = Math.floor(Math.random() * (10 - 4)) + 4;
  for (var k = 0; k < vardaSudaro; k++) {
    j = Math.floor(Math.random() * (dvigarsiai.length - 1)) + 1;
    vardas += dvigarsiai[j];
    names[i] = vardas;
  }
  console.log(i+1 + ". " + vardas);
}

// 3 uzduotis
// sukurti matrica vardas, pavarde, skaicius, matricos dydis 3x10

var matrica = [];

for (var i = 0; i < 10; i++) {
  var rand = Math.floor(Math.random() * names.length);
  var rand2 = Math.floor(Math.random() * names.length);
  matrica[i] = [];
  matrica[i][0] = names[rand];
  matrica[i][1] = names[rand2];
  matrica[i][2] = Math.floor(Math.random() * 10);
}

console.log(matrica);
