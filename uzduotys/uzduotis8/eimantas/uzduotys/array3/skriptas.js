// --------------------Array / Masyvai -----
names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log(names);
console.log(names.join());
console.log("masyvo ilgis " + names.length );
//....



// uzduotis  Array



// 1. i masyvo gala ideti elmenta “butelis vandens”

names.push("butelis vandens");

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

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
while (dog.length[i] == 2 % 0) {
    console.log(meow);
}

for(var i = 0; i < dog.length; i++){
    if(dog.length[i] == 2 % 0){
        console.log(dog[i]);
        // dog[i] = "3";
    }else{
        console.log("gaidys");
    }
}

for(var i = 0; i < dog.length; i ++){

}


// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....




//
