// apsilimui
// 1 kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100
var masyvas = [];
var min = 10;
var max = 100;
var detales = [];
var masyvoNeig = [];

for (var i = 0; i < 50; i++) {
    var atsitiktinis = Math.round((Math.random() * 90) + 10);
    masyvas[i] = atsitiktinis;
}
console.log(masyvas);


//2 uzdavinys: pakeisti atsitiktinius skaicius, kurie yra lyginiai i zodi "lyginis"

for (var i = 0; i < masyvas.length; i++) {
    if (masyvas[i] % 2 ==0){
        masyvas[i] = "lyginis";
    }
}
console.log(masyvas);
// rimta
// 1 kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 50 - 200 (pagamintomis datalemis per diena)

for (var i = 0; i < 60; i++) {
    var skaicius = Math.floor(Math.random() * (200 - 50 +1)) + 50;
    //burtu keliu sugeneruotas skaicius
    detales[i] = skaicius;
}
console.log(detales);

//burtu keliu 10 % tikimybe paversti minus reiksememis ( padauginti is  -1)

for (var i = 0; i < detales.length; i++) {
    var temp = Math.random();
    // tikriname 10% tikimybe
    if (temp < 0.1) {
    // tikriname ar skaicius teigiamas
        if (detales[i] > 0) {
            detales[i] = detales[i] * (-1);
            if (detales[i] < 0) {
                masyvoNeig.push(detales[i]);
            }
        }
    }
}
console.log(detales);
console.log(masyvoNeig.length);


// 3. uzdavinys: visus skaicius paversti teigiamas (is masyvo parts)
//reikia naudoti Math.abs;

for (var i = 0; i < detales.length; i++) {
        if( detales[i] < 0) {
            detales[i] = detales[i] * (-1);
        }
}

console.log("ar teigiamas", detales);
var nerikiuotos = detales;

// 4. surasti geriausia darbuotoja
for (var j = 0; j < detales.length; j++) {
    var u = detales[0];
    for (var i = 1; i < detales.length; i++) {
        if (u > detales[i]) {
            detales[i-1] = detales[i];
            detales[i] = u;
        }
        else {
            u = detales[i];
        }
    }

}


/*
rasti darbuotojo nr pagal pagamintas detales;
mas: array - kuriame ieskome;
ieskomasSk: - reiksme, kurios ieskosime masyve;
return: - integer, geriausio darbuotojo masyvo numeris

*/
var geriausiasSk = detales[detales.length-1];


function rastiMasyveReiksme (mas, ieskomasSk){
    for (var i = 0; i < mas.length; i++) {
        if (mas[i] == ieskomasSk) {
            return i;
        }
    }
    return "toks skaicius nerasta";
}

rastiMasyveReiksme (nerikiuotos, geriausiasSk);
console.log(detales);

// 5. surasti blogiausia darbuotoja
