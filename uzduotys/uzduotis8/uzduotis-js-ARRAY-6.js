var masinosBagazine = ["atsarginisRatas", "kastuvas", "gesintuvas", "virve", "uzkurimoLaidai", "krokodilas"];

console.warn("console blogai atvaizduoja isskleistus masyvus, bet gerai atvaizduoja skliaustuose []");


// =====sukurti masyva 100 elementu ilgio naudojant FOR
//===== sukurti masyva 100 elementu ilgio naudojant WHILE

// uzduotis
// 1. i masyvo gala ideti elmenta “butelis vandens”
// 2. i masyvo pradzia ideti elmenta “ziebtuvelis”
// 3. istrinti 3 elmenta
// 4. sukurti masyva (50 ilgumo)naudojant FOR ir uzpildyti skaiciu 0 (kiekvienas stalcius turi but lygus "0");
// 5.  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti skaiciu 1;

// ————————————pasikartojimas f-ju ir while————————————————————————

// Uzduotis:
// 1A) susikurti funkcija, kuri atspasudina i konsole skaiciu kuri paduodate
// 1B) Paleisti funkcija 20 kartu
// 2) susikurti funkcija, kuri spausdina paduota skaiciu, kai paduodama reiksme (jeigu niekas nepaduodama: spausdina "-1")

//------------while break-- uzduotis:----------------------------
// UZDUOTIS
// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti pranesima "Nepavyko rasti...Bandykite kita zodi"
// uzduotis:--------------------------
// 2) parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (skalciuas numeri) ir si   numeri
// uzduots:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
// rasti visu zmoniu vardu "Rico" pavardes



var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];



//  sukurti nauja masyva uzpildyta, atsitiktiniais skaiciais
//  var nuoVienoIkiSimto = Math.floor(Math.random() * 100) ;
skaiciai = [];
console.log(skaiciai.toString());



// kursime nauja masyva uzpildyta, atsitiktiniais skaiciais (pagamintomis datalemis per diena)

// 1. uzdavinys: visus skaicius paversti teigiamas (is masyvo parts)
// 2. surasti geriausia darbuotoja
// 3. surasti blogiausia darbuotoja


// ——————————— Object ————————————————
// Uzduotis
// 1:  susiskurti darbuotojo "worker" obj., kuris saugo varda, pavarde, amziu, pagamintu detaliu skaiciu
// 2. sukurti “workers”  masyva. Masyvas, kuriame saugomi objektai. Kiekvienas obj saugo visa informacija apie konkretu darbuotoja:
    //    A) paleisti cikla ir uzpildyti "workers" masyva darbuotoju duomenimis (amzius ir pagamintu detaliu skaicius - burtu keliu)
//	HINT: // !!!!! var naudojame, kad RAM'e / atmintyje sukurtu nauja kintamaji
// 3. sukurti f-ja, kuri i konsole atspausdiname masyva (pilna objektu)
