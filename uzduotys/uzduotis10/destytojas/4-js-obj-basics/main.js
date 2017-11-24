console.log("lasbas");


var person = {};

person.name = "Gerta";
person.lname = "Gertauskaite";
person.klase = 7;
person.pazymiai = [6, 5, 9 , 10, 8];

console.log( person);
console.log( person.klase);

// for ( x in person) {
//     console.log(x);
// }

// PASIKARTOTI
// js saugosime mokinio informacija:
// mokinio: vardo, pavardes, kelintokas. mokinio matematikos pazymiai (6, 5, 9 , 10, 8)

// Uzdavinys:
// 1) isvesti i console mokinio informacija.
console.log(  person.name, person.lname, person.klase);
console.log( person.pazymiai.join(" , ") );

// 2) pasirasyti funkcija, kuri is duotu 5 pazymiu, grazintu ju vidurki
// f-ja "skaiciuotiVidurki(array)    return: integer"
// atspausdinti vidurki
function skaiciuotiVidurki(mas) {
    var suma = 0;
    for (var i = 0; i < mas.length; i++) {
        suma += mas[i];
    }
    // return Math.round(suma / mas.length);
    var ats = suma / mas.length;
    ats = Math.round(ats);
    return ats;
}
var atsakymas = skaiciuotiVidurki(person.pazymiai);
console.log(atsakymas);


// uzduotis: sukurti 2 objektus:
// 1) tevas : vardas, pavarde, vaikas (obj)
// 2) vaikas: klase, vardas
// 3) priskirti tevo objekui (kintamajam) vaika

var tevas = {
    vardas: "Tomas",
    pavarde: "Jokutenas",
    vaikas: {}
};


var child = {
    vardas: "Joniukas",
    klase: 7
};

console.log(tevas);
tevas.vaikas = child;
console.log(tevas);
console.log(child);


// uzduotis susikurti konstruktoriu
