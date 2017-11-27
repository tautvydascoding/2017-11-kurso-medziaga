console.log("lasbas");




var person = {};

person.name = "Gerda";
person.lname = "Gerdauskaite";
person.klase= 7;
person.pazymiai = [6, 5, 9 , 10, 8];

// console.log(person);
// console.log(person.lname);



// PASIKARTOTI
// js saugosime mokinio informacija:
// 			mokinio: vardo, pavardes, kelintokas. mokinio matematikos pazymiai (6, 5, 9 , 10, 8)
// Uzdavinys:
// 1) isvesti i console mokinio informacija.



console.log(person.name, person.lname, person.klase);
console.log(person.pazymiai.join());


// 2) pasirasyti funkcija, kuri is duotu 5 pazymiu, grazintu ju vidurki
// funkcija "skaiciuotiVidurki(array)" return: integer
// atspauzdinti Vidurki



function skaiciuotiVidurki(mas) {
    var suma = 0;
    for (var i = 0; i < mas.length; i++) {
    suma += mas[i];
}
    var ats = suma / mas.length;
    ats = Math.round(ats);
    return ats;

}
var atsakymas = skaiciuotiVidurki(person.pazymiai);
console.log(atsakymas);









// uzduotis: sukurti 2 objektus:
// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas: klase, vardas
// 3) priskirti tevo objekui (kintamajam) vaika



var tevas = {
    vardas: "Kazys",
    pavarde: "Kazlauskas",
    vaikas: {}
};

var vaikas = {
    klase: 7,
    vardas: "Petras"
} ;

tevas.vaikas = vaikas;
console.log(tevas);
