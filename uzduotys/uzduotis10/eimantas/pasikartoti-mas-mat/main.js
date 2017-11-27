
// random 10 vardu is dvigarsiu
// vardu ilgis is 10

var dvigarsiai = ["al", "am", "el", "em", "il", "im", "ul", "um", "en", "ir"];
var vardai = [];
var dvigarsiuIlgis = dvigarsiai.length;

for (var i = 0; i < 10; i++) {
    var random1 = Math.floor(Math.random() * dvigarsiuIlgis - 1) + 1;
    var random2 = Math.floor(Math.random() * dvigarsiuIlgis - 1) + 1;
    var random3 = Math.floor(Math.random() * dvigarsiuIlgis - 1) + 1;

    vardai[i] = dvigarsiai[random1] + dvigarsiai[random2] + dvigarsiai[random3];
}
console.log(vardai);

// random vardai ir pavardes is vardu masyvo. Deda i matrica ir spausdina.

var matrica = [];

for (var i = 0; i < 10; i++) {
    // sumazinam random reiksme vienetu
    var randNum = Math.floor(Math.random() * vardai.length);
    var randNum2 = Math.floor(Math.random() * vardai.length);
    matrica[i] = [];
    // deda i pirmus tris matricos elementus, tada pasuka
    matrica[i][0] = vardai[randNum];
    matrica[i][1] = vardai[randNum2];
    matrica[i][2] = Math.floor(Math.random() * 10) +1;
}

console.log(matrica);


//
