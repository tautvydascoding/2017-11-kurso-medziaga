// --------------------Array / Masyvai -----
names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log(names);
console.log(names.join());
console.log("masyvo ilgis " + names.length );
//....



// uzduotis  Array

var bag = ["kirvis", "saukstas", "miegmaisis"];

console.log(bag.join(" "));

console.log(bag.toString());




// 1. i masyvo gala ideti elmenta “butelis vandens”

bag.push('vandens butelis');

console.log(bag);

// 2. i masyvo pradzia ideti elmenta “ziebtuvelis”

bag.unshift('ziebtuvelis');
console.log(bag);

// 3. istrinti 3 elmenta

bag.splice(2, 1);
console.log(bag);
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti skaiciu 0 (kiekvienas stalcius turi but lygus "0");


// var myArray=[];
// for (var i=0; i<50; i++) {
//     myArray[i]= 0;
// }
//
// console.log(myArray);

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti skaiciu 1;
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"

var myArray=[];

for (var i=0; i<50; i++) {
    myArray[i]= 1;
}

// for (var i=0; i<50; i+2) {
//     myArray[i]= 3;
// }

console.log(myArray);

// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....




//
