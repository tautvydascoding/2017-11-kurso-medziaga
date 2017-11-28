console.log("----------------------------------------------------------------");

var person = {};

person = {
  name: "Tomas",
  lname: "",
  age: 26
};

person.lname = "Tututu";
person.age = 45;

var amzius = person.age;

console.log("----------------------------------------------------------------");
// PASIKARTOTI
// js saugosime mokinio informacija:
// 			mokinio: vardo, pavardes, kelintokas. mokinio matematikos pazymiai (6, 5, 9 , 10, 8)

var people = {};

people.name = "Greta";
people.lname = "Gertauskaite";
people.klase = 7;
people.pazymiai = [6, 5, 9 , 10, 8];

for(var x in people) {
  console.log(x);
}

// Uzdavinys:
// 1) isvesti i console mokinio informacija.
console.log("Vardas: " + people.name + ", pavarde: "+ people.lname + ", klase: "+ people.klase + ", pazymiai: " + people.pazymiai.toString());
// 2) pasirasyti funkcija, kuri is duotu 5 pazymiu, grazintu ju vidurki

function vidurkis(array) {
  suma = 0;
  kiekis = array.length;

  for (var i = 0; i < array.length; i++) {
    suma += array[i];
  }

  var vidurkis = suma/kiekis;

  return vidurkis;
}

console.log("Pazymiu vidurkis yra: ", vidurkis(people.pazymiai));

// uzduotis: sukurti 2 objektus:
var tevas = {};
var vaikas = {};
// 1) tevas : vardas, pavarde, vaikas
tevas = {
  vardas: "Jonas",
  pavarde: "Jonaitis",
  vaikas: {}
};
// 2) vaikas: klase, vardas
vaikas = {
  klase: 10,
  vardas: "Petriukas"
};
// 3) priskirti tevo objekui (kintamajam) vaika
tevas.vaikas = vaikas;

console.log(tevas);
