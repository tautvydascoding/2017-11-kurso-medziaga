var masinosBagazine = ["atsarginisRatas", "kastuvas", "gesintuvas", "virve", "uzkurimoLaidai", "krokodilas"];

console.warn("console blogai atvaizduoja isskleistus masyvus, bet gerai atvaizduoja skliaustuose []");


// =====sukurti masyva 100 elementu ilgio naudojant FOR
var masyvas100 = [];
for (var i = 0; i < 100; i++) {
  masyvas100[i] = "";
}
//===== sukurti masyva 100 elementu ilgio naudojant WHILE
i = 0;
while (i < 100) {
  masyvas100[i] = "";
  i++;
}

// ————————————pasikartojimas f-ju ir while————————————————————————

// Uzduotis:
// 1A) susikurti funkcija, kuri atspasudina i konsole skaiciu kuri paduodate
function printInt(int) {
  console.log("Paduotas skaicius:", int);
}

printInt(4000);
// 1B) Paleisti funkcija 20 kartu
for (var i = 0; i < 20; i++) {
  printInt(4000);
}
// 2) susikurti funkcija, kuri spausdina paduota skaiciu, kai paduodama reiksme (jeigu niekas nepaduodama: spausdina "-1")
function printIntTurbo(int) {
  if (int != null) {
    console.log("Paduotas skaicius:", int);
  } else {
    console.log("Nepaduotas joks skaicius. -1");
  }
}

printIntTurbo( );

// --------------------------- Object -----------------------------------------
var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];
var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];
// Uzduotis
// 1:  susiskurti darbuotojo "worker" obj., kuris saugo varda, pavarde, amziu, pagamintu detaliu skaiciu
function fillWorker(value1, value2, value3, value4) {
  this.vardas = value1;
  this.pavarde = value2;
  this.amzius = value3;
  this.pagamintaDetaliu = value4;
}
// 2. sukurti “workers”  masyva. Masyvas, kuriame saugomi objektai. Kiekvienas obj saugo visa informacija apie konkretu darbuotoja:
var workers = [];

    //    A) paleisti cikla ir uzpildyti "workers" masyva darbuotoju duomenimis (amzius ir pagamintu detaliu skaicius - burtu keliu)

    for (var i = 0; i < names.length; i++) {
      var randAge = Math.floor(Math.random() * (60 - 18)) + 18;
      var randParts = Math.floor(Math.random() * (400 - 50)) + 50;

      workers[i] =  fillWorker(names[i], lastNames[i], randAge, randParts);
    }


//	HINT: // !!!!! var naudojame, kad RAM'e / atmintyje sukurtu nauja kintamaji
// 3. sukurti f-ja, kuri i konsole atspausdiname masyva (pilna objektu)
function printWorkersToConsole() {
  console.log(workers);
}

printWorkersToConsole();
