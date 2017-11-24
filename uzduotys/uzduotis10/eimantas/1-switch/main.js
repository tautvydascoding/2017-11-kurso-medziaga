


// ------------------- Matrica -------------------

var data = [];
var zmogus1 = ["Tomas", "Tomulis", 1985];
var zmogus2 = ["Birute", "Bitutaite", 1995];
var zmogus3 = ["Egis", "Tomulis", 1966];

data[0] = zmogus1;

// console.log(data);
// console.log(data[0]);

data[1] = zmogus2;
data[2] = zmogus3;

// console.log(data);

// 1 isvesti info apie zmogu eiluteje

for (var i = 0; i < 1; i++) {

    eiluteje = zmogus1.toString();

    console.log(eiluteje);
}
console.log("----------------------------------");
// 2 isvesti visus duomenis stulpeliu

// eina per matricso eilutes
for (var i = 0; i < data.length; i++) {
    // eina per matricos stulpelius
    for (var k = 0; k < data[i].length; k++) {
        console.log(data[i][k]);
    }
}
console.log("----------------------------------");
// 3 pakeisti birutes pavarde i vaflis

data[1][1] = "vaflis";
console.log(data);


// 4 automatiskai patikrinti visus duomenis ir visus gimusius nuo 1980 - 2000

// eina per matricso eilutes
for (var i = 0; i < data.length; i++) {
    // eina per matricos stulpelius
    // apacioje i reiskia matricos masyvo duomenu skaicius
    for (var k = 0; k < data[i].length; k++) {
        var dob = data[i][k];
        if (Number.isInteger(dob) && dob > 1980 && dob < 2000) {
            console.log(data[i][0]);
            console.log("Gimimo data tarp 1980 - 2000");
        }
    }
}

// arba

for (var i = 0; i < data.length; i++) {
    var dob = data[i][k];
    if (Number.isInteger(dob) && (dob > 1980) && (dob < 2000)) {
        console.log(data[i][0]);
        console.log("Gimimo data tarp 1980 - 2000");
    }
}
console.log("----------------------------------");
// 5 sukurti matrica 10x10 dydzio, uzpildyta atsitiktiniais skaiciais nuo 10-50

skaiciuArr = [];

// matricos pirmas lygis
for (var i = 0; i < 10; i++) {
    // matricos antras lygis
    skaiciuArr[i] = []; // Sukuri masyva kuris laikys po 10 elementu - random skaiciu
    for (var t = 0; t < 10; t++) {
        skaiciuArr[i][t] = Math.floor(Math.random() * 40) + 10; // random skaiciai nuo 10-50 saugoja i keikviena stalciuka
    }
}
console.log(skaiciuArr);


console.log("----------------------------------");
//
