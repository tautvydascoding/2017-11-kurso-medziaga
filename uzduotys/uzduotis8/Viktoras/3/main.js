// // --------------------Array / Masyvai -----
// names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
//
// console.log(names);
// console.log(names.join());
// console.log("masyvo ilgis " + names.length );
// //....
//
//
//
// // uzduotis  Array
//
// var bag = ["kirvis", "saukstas", "miegmaisis"];
//
// console.log(bag.join(" "));
//
// console.log(bag.toString());
//
//
//
//
// // 1. i masyvo gala ideti elmenta “butelis vandens”
//
// bag.push('vandens butelis');
//
// console.log(bag);
//
// // 2. i masyvo pradzia ideti elmenta “ziebtuvelis”
//
// bag.unshift('ziebtuvelis');
// console.log(bag);
//
// // 3. istrinti 3 elmenta
//
// bag.splice(2, 1);
// console.log(bag);
// // 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti skaiciu 0 (kiekvienas stalcius turi but lygus "0");
//
//
// // var myArray=[];
// // for (var i=0; i<50; i++) {
// //     myArray[i]= 0;
// // }
// //
// // console.log(myArray);
//
// // 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti skaiciu 1;
// // 5.2: kas antra ^ masyvo elementa pakeisti i "3"
//
// var myArray=[];
//
// for (var i=0; i<50; i++) {
//     myArray[i]= 1;
// }
//
// // for (var i=0; i<50; i+2) {
// //     myArray[i]= 3;
// // }
//
// console.log(myArray);

// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....




//

// UZDUOTIS
// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];



// var kelintas = names.indexOf("Rico");
// console.log(kelintas);

var positions = [];
for (var i = 0; i < names.length; i++) {
    if (names[i] == "Rico") {
        positions.push(i);
    }
}
console.log(positions);

// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti pranesima "Nepavyko rasti...Bandykite kita zodi"

var positions = [];
for (var i = 0; i < names.length; i++) {
    if (names[i] == "Rico") {
        positions.push(i);
        console.log(positions);
}
}
// uzduotis:--------------------------
// 2) parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];
var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

//
// var ieskomas = prompt("iveskite varda");
// for (var i = 0; i < names.length; i++) {
//     if (names[i] == ieskomas) {
//         alert(i);
//     }
// }
// uzduots:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
for (var i = 0; i < names.length; i++) {
    if (names[i] == "Freida") {
        console.log(lastNames[i]);
    }
}


// 4) rasti visu zmoniu vardu "Rico" pavardes

// for (var i = 0; i < names.length; i++) {
//     if (names[i] == "Rico") {
//         alert(lastNames[i]);
//     }
// }
// 5) Turime masyva su zmoniu nr, ieskomiZmones = [2, 16, 17, 18, 19, 25]; isvesti ju pavardes ir vardus;

ieskomiZmones = [2, 16, 17, 18, 19, 25];
for (var i = 0; i < ieskomiZmones.length; i++){
    console.log(names[ieskomiZmones[i]], lastNames[ieskomiZmones[i]]);
}



var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];
var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];
