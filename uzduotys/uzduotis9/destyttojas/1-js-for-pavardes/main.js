console.log("lasbas");

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

var rastiDarbuotojai = [];
var ieskomiZmones = [2, 16, 17, 18, 19, 25];

// 4) rasti visu zmoniu vardu "Rico" pavardes

for (var i = 0; i < names.length; i++) {
    if (names[i] == "Rico") {
        console.log(  lastNames[i]  );

        // var length = rastiDarbuotojai.length;
        // rastiDarbuotojai[length] = lastNames[i];
        rastiDarbuotojai.push(lastNames[i]);
    }
}
console.log("rasti Rico zmones:", rastiDarbuotojai);


// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];  isvesti ju pavardes ir vardus

for (var i = 0; i < ieskomiZmones.length; i++) {
    var nr = ieskomiZmones[i];

     console.log( names[nr], lastNames[nr] );

    // kaip FOR veikia
     // console.log( names[0] );   // names[0] == 2
     // console.log( names[1] );   // names[1] == 16
     // console.log( names[2] );   // names[2] == 17
     // console.log( names[3] );   // names[3] == 18
}


//
