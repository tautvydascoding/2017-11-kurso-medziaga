console.log("labas");



// =================svarbus patarimai===================:
// ARRAY: jeigu naudoji FOR || while cikla, tai negalvojant masyve naudoti "i" (pvz.: myArray[i])
// FOR:   "for (i = 0; i < x; i++) {"  - nesusijusi su uzdaviniu (skirtas apeit masyva/ ivykdyti daug kartu kazka)
// matricas  - visada nusipiesti ant popieriaus eskiza su testiniais duomenimis
// matrica narys paimamas: myMatrica[x][y]   x- stulpelis; y - eilute
// matrica - pasitikritni ar nereik x ir y sukeisti vietomis (ar nesuklydai kuris stulpelis ir kuris eilute )
// matricos ilgis daznai skiriasi nuo plocio.
//  pvz.:
 // for ( i < eiluciuSkaicius)
 //    for ( k < stulpeliuSkaicius)
 // =================// =================// =================





 var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];
 var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

// UZDUOTIS
// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
console.log(names.indexOf("Rico"));

for (i=0; i < names.length; i++){
    if( names [i] === "Rico") {
    console.log(i);
  } else {}
}

// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti pranesima "Nepavyko rasti...Bandykite kita zodi"
// uzduotis:--------------------------
var vardas = "Rico";
tiesa = false;
for (i=0; i < names.length; i++){
    if( names [i] === vardas) {
    console.log(i, "!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!");
    tiesa = true;
  } else {}
}

if (tiesa){
}else{
  console.log("Nepavyko rasti " + vardas + ", bandykite kita zodi");
}


// 2) parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// uzduots:----------------------------
function vardoIeskojimas(x){
  for (i=0; i < names.length; i++){
      if( names [i] === x) {
      console.log(i);
}else {}
}
}
vardoIeskojimas("Piper");

// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
console.log(names.indexOf("Freida"));
var kelintas = names.indexOf("Freida");
console.log(lastNames[kelintas]);


var vardas2 = "Freida";
for (i=0; i < names.length; i++){
    if( names [i] === vardas2) {
    console.log(lastNames[i]);
  } else {}
}

// rasti visu zmoniu vardu "Rico" pavardes
var rastiDarbuotojai = [];

for (i=0; i < names.length; i++){
    if( names [i] === "Rico") {
    console.log(i + ". Rico " + lastNames[i]);
    rastiDarbuotojai.push(lastNames[i]);
  } else {}
}

console.log(rastiDarbuotojai);

// isvesti siu zmoniu vardus ir pavardes
ieskomiZmones = [2, 16, 17, 18, 19, 25];

console.log("!!!!!!!!!!!!!!!!!!!Ieskomi zmones yra sie: \n");
for(i = 0; i < ieskomiZmones.length; i++ ){
  var x = ieskomiZmones[i];
  console.log(names[x], lastNames[x]);
}









//
