console.log("lasbas");

var masyvas = [];
var min = 10;
var max = 100;
var detales = [];
// 1 kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100


for (var i = 0; i < 50; i++) {
    var atsitiktinis =  (Math.random() * 90) + 10 ;
    atsitiktinis = Math.round( atsitiktinis );
    masyvas[i] = atsitiktinis;
}
console.log(masyvas);
// 2 uzdavinys:  skaicius, kurie yra lyginiai i pakeisti i zodi "lyginis"
for (var i = 0; i < masyvas.length; i++) {
    // tikriname ar skaicius yra lyginis
    if ( masyvas[i] % 2 == 0 ) { // jeigu liekamos nera, tai lyginis
         masyvas[i] = "lyginis";
    }
}
console.log("lyginiai sk. paversti i zodzius: ", masyvas);


// 1 kursime nauja masyva uzpildyta atsitiktiniais skaiciais nuo 50 - 200 (pagamintomis datalemis per diena)

for (var i = 0; i < 60; i++) {
    // burtu keliu sugeneruotas sk. nuo 50 iki 200
    var burtuSkaicius = Math.floor(Math.random() * (200 - 50 + 1)) + 50;
    detales[i] = burtuSkaicius;
}
console.log("detales", detales);


// 2 burtu keliu 10 % tikimybe paversti minus reiksememis ( padauginti is  -1)

for (var i = 0; i < detales.length; i++) {
    // ar skaicius teigiamas
    if ( detales[i] > 0) {
        var temp = Math.random() * 100;
        // tikrinam ar 10% tikimybe
        if ( temp <= 10) {
                detales[i] = detales[i] * (-1);
        }
    }
}
console.log(detales);

 for (var i = 0; i < detales.length; i++) {
     if (detales[i] >= 0 ) {
         detales[i] = Math.abs(detales[i]);  // atlieka modulio operacija
     }
 }


//
