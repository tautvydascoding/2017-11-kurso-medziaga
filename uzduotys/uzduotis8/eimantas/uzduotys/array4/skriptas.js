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
// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti pranesima "Nepavyko rasti...Bandykite kita zodi"
// uzduotis:--------------------------

for (var i = 0; i < 1; i++) {
    a = names.indexOf("Rico");
    if (a == -1) {
        console.log("nerado");
    }else{
        console.log(a);
    }
}


// 2) parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// uzduots:----------------------------

function grazinaIndex(ieskomasZodis){
    // var rasti = ieskomasZodis;
    for (var i = 0; i < 1; i++) {
        a = names.indexOf(ieskomasZodis);
        if (a == -1) {
            console.log("nerado");
        }else{
            console.log(a);
        }
    }
}

grazinaIndex("Newton");

// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
// rasti visu zmoniu vardu "Rico" pavardes


for (var i = 0; i < 1; i++) {
    a = names.indexOf("Freida");
    if (a == -1) {
        console.log("nerado");
    }else{
        console.log(lastNames[a]);
    }
}


// visu zmoniu vardu Rico pavardes

allRicos = [];

for(var i = 0; i < names.length; i++){
    if(names[i] == "Rico"){
        allRicos.push(i);
        console.log("rado cia ", i);
    }
}

for(var i = 0; i < allRicos.length; i++){
    console.log(lastNames[allRicos[i]]);
}
