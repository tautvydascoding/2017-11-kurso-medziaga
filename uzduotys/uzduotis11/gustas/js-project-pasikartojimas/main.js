console.log("labas");

// 1 uzduotis
//sukurti dvigarsiu masyva

var balsiai = ["a", "e", "i", "o", "u", "y"];
var priebalsiai = ["q", "w", "r", "t", "p", "s", "d", "f", "g", "h", "j", "k", "l", "z", "x", "c", "v", "b", "n", "m" ];
var dvigarsiai = [];
var k = 0;
var vardai = [];
var random = 2;

for(i = 0; i < priebalsiai.length; i++ ){
  for (j = 0; j < balsiai.length; j++){
  dvigarsiai [k] = priebalsiai[i] + balsiai[j];
  k++;
}
}

console.log(dvigarsiai);

//2 uzduotis
//is turimu dvigarsiu sugeneruoti burtu keliu 10 vardu (skirtingu)
// vardu ilgis 10 (rimtesne uzduotis nuo 4 iki 10)
for(t = 0; t < 10; t++){
numb = Math.random();
y = Math.round(Math.random() * 120);
x = Math.round(Math.random() * 120);
w = Math.round(Math.random() * 120);
e = Math.round(Math.random() * 120);
h = Math.round(Math.random() * 120);

if (numb < 0.25){
    vardai [t] = dvigarsiai[x] + dvigarsiai[y];

} else if (numb < 0.5) {
    vardai [t] = dvigarsiai[x] + dvigarsiai[y] + dvigarsiai[w];

} else if (numb < 0.75) {
    vardai [t] = dvigarsiai[x] + dvigarsiai[y] + dvigarsiai[w] + dvigarsiai[e];

} else {

    vardai [t] = dvigarsiai[x] + dvigarsiai[y] + dvigarsiai[w] + dvigarsiai[e] + dvigarsiai[h];
}}


console.log(vardai);

//3 uzduotis
//SUKURTI MATRICA VARDAS, PAVARDE, SKAICIUS, MATRICOS DYDIS 3X10

var matrica = [];

for (var i = 0; i < 10; i++) {
    var rand = Math.floor(Math.random() * vardai.length);
    var rand2 = Math.round(Math.random() * vardai.length);
    matrica[i] = [];
    matrica[i][0] = vardai[rand];
    matrica[i][1] = vardai[rand2];
    matrica[i][2] = Math.round(Math.random() * 10);
}

console.log(matrica);

console.log(matrica[4][0], matrica[4][1], matrica[4][2]);

















//
