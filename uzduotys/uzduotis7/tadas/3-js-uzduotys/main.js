console.log("----------------------------------------");

function printNameLNameClass(x, y, z) {
  console.log("vardas: ", x, "pavarde: ", y, "klase: ", z);
}
  printNameLNameClass("Tomas", "Tomauskas", 6);
  printNameLNameClass("Petras", "Petrauskas", 8);
  printNameLNameClass("Tadas", "Tadauskas", 10);
  printNameLNameClass("Antanas", "Antanauskas", 12);


function spausdintiPazymius(x, y, z) {
  console.log("Rugsejis: ", x);
  console.log("Spalis: ", y);
  console.log("Lapkritis: ", z);
}

printNameLNameClass("Tomas", "Tomauskas", 6);
spausdintiPazymius(5, 6, 7);
printNameLNameClass("PEtras", "Petrauskas", 8);
spausdintiPazymius(9, 5, 8);
printNameLNameClass("Tadas", "Tadauskas", 10);
spausdintiPazymius(4, 5, 8);


// for (var i = 0; i < 50; i++) {
//   console.log("Azuolas" + i);
// }

// document.write("<h2>");

// --------------------------------- KEICIAM CONTENT'A-------------------
// 1)
// document.querySelector("article").innerHTML = "<h2> Azuolas</h2>";

// 2)
document.querySelector("article").innerHTML = ""; // istrinam sena teksta
for (var i = 0; i < 10; i++){
  document.querySelector("article").innerHTML += "<h2> Azuolas" + i + "</h2>";
}

function printX( xx ) {
  document.querySelector("article").innerHTML += xx;
}

var tekstas = "LAbas";
printX(tekstas);

function printXElementeY(x, tagas) {
  document.querySelector(tagas).innerHTML += x;
}

printXElementeY("Viso gero", "h1");


// 3)
var paveiksliukas = '<img src="" width="200px" height="200px">';

for (var i = 0; i < 8; i++){
  document.querySelector("article").innerHTML += paveiksliukas;
}
