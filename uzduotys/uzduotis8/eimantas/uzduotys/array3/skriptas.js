// --------------------Array / Masyvai -----
names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log(names);
console.log(names.join());
console.log("masyvo ilgis " + names.length );
//....



// uzduotis  Array



// 1. i masyvo gala ideti elmenta “butelis vandens”
// trys skirtingi budai

names.push("butelis vandens");
names[names.length] = "butelis vandens";
names.splice(names.length, 0, "butelis vandens");

// 2. i masyvo pradzia ideti elmenta “ziebtuvelis”

names.unshift("ziebtuvelis");

// 3. istrinti 3 elmenta

names.splice(3, 1);

// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti skaiciu 0 (kiekvienas stalcius turi but lygus "0");

var meow = [];

for(var i = 0; i < 50; i++){
    meow.push("0");
    // meow ++;
    console.log(meow);
}

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti skaiciu 1;

var dog = [];

while (dog.length < 50) {
    dog.push("1");
}

// 5.2: kas antra ^ masyvo elementa pakeisti i "3

for(var i = 0; i < dog.length; i ++){
    if(i % 2 == 1){
        dog[i] = "3";
    }
}

// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....

// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....

for(var i = 0; i < dog.length; i ++){
    if(i % 5 == 1){
        dog[i] = "9";
    }
}


//
