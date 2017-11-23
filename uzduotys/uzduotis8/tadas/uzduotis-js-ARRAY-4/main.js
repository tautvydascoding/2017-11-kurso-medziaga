

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
// =================// =================// =================



// UZDUOTIS
// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
//Randam pirmaji "Rico"
var pozicija = names.indexOf("Rico");
console.log("Pirmasis Rico masyve yra " + pozicija + " stalciuje");

//Randam visus "Rico"
var tempStr = "";
for (var i = 0; i < names.length; i++) {
  if (names[i] == "Rico") {
    tempStr += i + " stalciuje yra 'Rico'! ";
  }
}
console.log(tempStr);

// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti pranesima "Nepavyko rasti...Bandykite kita zodi"
var tempStr = "";
var count = 0;
var vardas = "Tadas";
for (var i = 0; i < names.length; i++) {
  if (names[i] == vardas) {
    tempStr += i + " stalciuje yra '"+ vardas +"'! ";
    count++;
  }
}
if(count != 0){
  console.log(tempStr);
} else {
  console.log("Tokio vardo rasti nepavyko..");
}

// uzduotis:--------------------------
// 2) parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// uzduots:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
var lookFor = "Freida";
temp = "";
for (var i = 0; i < names.length; i++) {
  if (names[i] == lookFor) {
    console.log(names[i] + " " + lastNames[i]);
    // temp += + names[i] + " " + lastNames[i] + ", ";
  }
}

// rasti visu zmoniu vardu "Rico" pavardes
lookFor = "Rico";
temp = "";
cnt = 0;
for (var i = 0; i < names.length; i++) {
  if (names[i] == lookFor) {
    if(cnt >= 1) {
      temp += " ir ";
    }
    temp += names[i] + " " + lastNames[i];
    cnt++;
  }
}
console.log(temp);
