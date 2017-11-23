console.log("----------------------------------------");
var amzius = parseInt( prompt("Iveskite amziu:") );

while (!(Number.isInteger(amzius))) {
  amzius = parseInt( prompt("Amzius gali buti tik skaicius!!!\nIveskite amziu:") );
}

if(Number.isInteger(amzius)){

  if(amzius < 7 || amzius >= 65){
    console.log("Amzius:", amzius);
    console.log("Pliusines varles");
  } else if (amzius >= 7 || amzius < 14){
    console.log("Amzius:", amzius);
    console.log("Mini telefonas");
  } else if (amzius >= 14 || amzius < 18) {
    console.log("Amzius:", amzius);
    console.log("Music app");
  } else if (amzius >= 18 || amzius < 24) {
    console.log("Amzius:", amzius);
    console.log('Stok i "Saulius"');
  } else if (amzius >= 24 || amzius < 65) {
    console.log("Amzius:", amzius);
    console.log("Pensijos kaupimas");
  } if (amzius >= 65 || amzius < 7) {
    console.log("Kelione i Birstona");
  }

}
console.log("----------------------------------------");

function printNameLNameClass(x, y, z) {
  console.log("vardas: ", x, "pavarde: ", y, "klase: ", z);
}
  printNameLNameClass("Tomas", "Tomauskas", 6);
  printNameLNameClass("Petras", "Petrauskas", 8);
  printNameLNameClass("Tadas", "Tadauskas", 10);
  printNameLNameClass("Antanas", "Antanauskas", 12);
