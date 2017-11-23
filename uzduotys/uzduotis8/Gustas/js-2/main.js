
names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log(names);
console.log(names.join());
console.log("masyvo ilgis " + names.length );


var bag = ["kirvis", "saukstas", "miegmaisis"];
//=============join sujungia i viena sakini
console.log(bag.join(" : "));

// 1. i masyvo gala ideti elmenta “butelis vandens”
bag.push("butelis vandens");
console.log(bag);

// 2. i masyvo pradzia ideti elmenta “ziebtuvelis”
bag.unshift("ziebtuvelis");
console.log(bag);

// 3. istrinti 3 elmenta
delete bag [2];
console.log(bag);

bag.splice(2, 1);
console.log(bag);

// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti skaiciu 0 (kiekvienas stalcius turi but lygus "0");
var array = [];

for (i = 0; i < 50; i++){
  array [i] = 0;
}
console.log(array);


// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti skaiciu 1;
var array2 = [];
var x = 0;

while(x < 50){
  array2[x] = 1;
  x++;
}
console.log(array2);

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....

for (i = 1; i < 50; i += 2){
  array2[i] = 3;
}
console.log(array2);

// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....
for (i=4; i < 50; i += 5){
  array2[i] = 9;
}
console.log(array2);




















//
