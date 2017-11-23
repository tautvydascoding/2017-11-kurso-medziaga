// --------------------Array / Masyvai -----
names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log(names);
console.log(names.join());
console.log("masyvo ilgis " + names.length );

bag = ["kirvis", "saukstas", "miegmaisis"];
console.log(bag.join ()); //visus elemento masyvus sujungs i viena sakini

console.log(bag.toString());



// uzduotis  Array



// 1. i masyvo gala ideti elmenta “butelis vandens”

bag.push("butelis vandens");
// bag[bag.length] = "butelis vandens";
console.log(bag);

// 2. i masyvo pradzia ideti elmenta “ziebtuvelis”

bag.unshift("ziebtuvelis");
console.log(bag);


// 3. istrinti 3 elmenta

delete bag[2];
console.log(bag);

// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti skaiciumi 0 (kiekvienas stalcius turi but lygus "0");
var masyvas = [];
for (var i = 0; i < 50 ; i++) {
    masyvas[i] = 0;
}
//arba
// masyvas.push
console.log(masyvas);



// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti skaiciu 1;

...............

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....




//
