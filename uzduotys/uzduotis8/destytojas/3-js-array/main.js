console.log("lasbas");


// --------------------Array / Masyvai -----
names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log(names);
console.log(names.join());

var bag = ["kirvis", "saukstas", "miegmaisis"];
console.log( bag.join(" : ") ); // join - visus masyvo elelmtus sujungs i viena sakini, galite nurodyti skyriklius
console.log( bag.toString());

// uzduotis  Array
// 1. i masyvo gala ideti elmenta “butelis vandens”
<<<<<<< HEAD

// 2. i masyvo pradzia ideti elmenta “ziebtuvelis”
=======
// bag[4] = "butelis vandens";
bag.push("butelis vandens");
// bag[bag.length] = "butelis vandens";
// bag.splice(bag.length, 0, "butelis vandens");
console.log("idejom vandeni", bag);
>>>>>>> ddcb8edfbdb58b6ab74cfeee4ac9fdbb29d4ee74

// 2. i masyvo pradzia ideti elmenta “ziebtuvelis”
bag.unshift("ziebtuvelis");
console.log("idejom siebtuveli", bag);
// 3. istrinti 3 elmenta
delete bag[3]; // lieka skyle
// bag.splice(3,1); //
console.log("after delete 3", bag);

// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");
// masyvas[i] = 0;
var masyvas = [];
for (i = 0; i < 50; i++) {
    masyvas[i] = 0;
    // arba
    // masyvas.push(0);
}
console.log(masyvas);


// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti skaiciu 1;

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....


var ieskomiZmones = ()

    


//
