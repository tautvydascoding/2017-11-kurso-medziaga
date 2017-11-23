// --------------------Array / Masyvai -----
names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log(names);
console.log(names.join());
console.log("masyvo ilgis " + names.length );
//....
console.log("-----------------------------");


// uzduotis  Array



// 1. i masyvo gala ideti elmenta “butelis vandens”
names.push("butelis vandens");
console.log("Step 1:", names);
// 2. i masyvo pradzia ideti elmenta “ziebtuvelis”
names.unshift("ziebtuvelis");
console.log("Step 2:", names);
// 3. istrinti 3 elmenta
names.splice(2, 1);
console.log("Step 3:", names);
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti skaiciu 0 (kiekvienas stalcius turi but lygus "0");
var array1 = [];
for (var i = 0; i < 50; i++) {
  array1[i] = 0;
}
console.log(array1);
// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti skaiciu 1;
var array2 = [];
var i = 0;
while (array2.length != 50) {
  array2[i] = 1;
  i++;
}
console.log(array2);

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
for (var i = 1; i < 50; i = i + 2) {
  array2[i] = 3;
}
console.log(array2);
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....
for (var i = 4; i < 50; i = i + 5) {
  array2[i] = 9;
}
console.log(array2);


//
