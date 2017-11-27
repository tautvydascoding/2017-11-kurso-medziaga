console.log("lasbas");

var masyvas = [];
var min = 10;
var max = 100;
var detales = [];
var didziausiasSk = 0;
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
