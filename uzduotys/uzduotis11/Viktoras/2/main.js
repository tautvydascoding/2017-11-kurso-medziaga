var dvigarsiai = ["ja", "ma", "ki", "tu", "kas", "ly", "po", "ve"];
var names = [""];
var rand4to10 = Math.round(Math.random()* (10 - 4) + 4);

for (var i = 0; i < 10; i++) {
    // zodzio ilgis
    rand4to10 = Math.round(Math.random() * 6 ) + 4;
    names[i] = "";
    // ilginame zodi tol, kol jis nevirsino numatyto ilgio
    while ( names[i].length <  rand4to10 ) {
        rand0toX = Math.floor(Math.random() * dvigarsiai.length ) ;
        names[i]  += dvigarsiai[rand0toX];
    }
}
console.log(names);

var matrica = [];

for (var i = 0; i < 10; i++) {
    var rand1 = Math.floor(Math.random() * names.length);
    var rand2 = Math.floor(Math.random() * names.length);
    matrica[i] = [];
    matrica[i][0] = names[rand1];
    matrica[i][1] = names[rand2];
    matrica[i][2] = Math.round(Math.random() * 10);

}

console.log(matrica);
