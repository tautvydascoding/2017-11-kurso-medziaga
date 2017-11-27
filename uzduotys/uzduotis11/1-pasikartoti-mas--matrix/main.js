console.log("lasbas");

var dvigarsiai = ["ul", "li", "am", "in", "ar", "ko", "ur", "is", "ak", "na"];
var names = [""];

// 1 uzduotis
// sukurti masyva dvigarsiu masyva

// 2 uzduotis
// is turimu dvigarsiu sugeneruoti burtu keliu 10 vardu (skirtingu)
// vardu ilgis 10 ( rimtesne uzduotis nuo 4 iki 10 simboliu)
var rand4or10 = 0;
var rand0orX = 0;
// kiek vardu
for (var i = 0; i < 10; i++) {
    // zodzio ilgis
    rand4or10 = Math.round(Math.random() * 6 ) + 4;
    names[i] = "";
    // ilginame zodi tol, kol jis nevirsino numatyto ilgio
    while ( names[i].length <  rand4or10 ) {
        rand0orX = Math.floor(Math.random() * dvigarsiai.length ) ;
        names[i]  += dvigarsiai[rand0orX];
    }
}
console.log(names);

// 3 uzduotis
// sukurti matrica vardas, pavarde, skaicius. Matricos dydis 3x10

 var matrica = [];

for (var i = 0; i < 10; i++) {
    matrica[i][0] = 
}




//
