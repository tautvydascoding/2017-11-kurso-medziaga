console.log("lasbas");

//* sukurimo budai
var imone = [];
//name, workers, area
imone = ["UAB Keksai ir KO", 120, 620];
//-------------------------------------

var x = "papildoma veikla: sokolado gamyba";
imone[3] = x;

// imone[100] = "testas";

console.log(imone);

var y = "papildoma veikla: meduoliai";
imone[3] = y;

//-------------------------------------
//* masyvo kopija
var temp = imone;
//-------------------------------------


//* ilgis - saugos masyvo ilgi
var ilgis = imone.length;
console.log("Imones masyvo ilgis: ", ilgis);

//-------------------------------------
//* kaip rasti masyvo gala?
var temp = "testas";
imone[imone.length] = temp;

console.log(imone);


//-------------------------------------
//* Ideda i masyvo gala, nereikia papildomo skaiciavimo
imone.push("Klientai: USA, UK");
console.log("Panaudota funkcija push(): ", imone);

//-------------------------------------
//* panaikina visa stalciu (ne tik istrina turini)

imone.pop();
console.log("Panaudota funkcija pop(): ", imone);

//-------------------------------------
//* ideda i nulini stalciu, sekancius pastumia tolyn
imone.unshift("Direktorius Juozas K.");
console.log("Panaudota funkcija unshift():", imone);

//-------------------------------------
//* istrina is nulinio stalciaus
imone.shift();
console.log("Panaudota funkcija shift():", imone);

//-------------------------------------
//* Isveda stalciaus numeri
var pozicija = imone.indexOf(120);
console.log("Panaudota funkcija indexOf(120):", pozicija);

//-------------------------------------
//* istrinti ir(arba) iterpti elementus
//* splice('kuri elementa paveikti', 'kiek istrinti stalciu', 'turinys kuri iterpti')
imone.splice(1, 1, "Darbuotoju skaicius: 120", "is ju 20 moteru");
console.log("Panaudota funkcija splice(indexas, kiek istrinti, naujas content):", imone);

imone.splice(3, 1, "Imones patalpu plotas: 620");
console.log("Panaudota funkcija splice():", imone);

//-------------------------------------
//* istrina turini is stalciaus (stalciu palieka)

delete imone[2];
console.log("Panaudota funkcija delete:", imone);

//arba
//galima istrinti ir su splice, nenurodant ka iterpti.
//splice istrina visa stalciu, nepalieka tuscios vietos
imone.splice(2, 1);
console.log("Panaudota funkcija splice() istrinimui:", imone);

//-------------------------------------
//* 0 - nuo kelinto stalciaus, 2 - iki kelinto (neiskaitant)
var imonesInfo = imone.slice(0, 2);
console.log("Panaudota funkcija slice():", imonesInfo);

//-------------------------------------
//* concat() - sujungia masyvus

var pirmasMasyvas = ["Pirmas", "Antras", "Trecias"];
