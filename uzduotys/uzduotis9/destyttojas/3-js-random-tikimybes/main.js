console.log("lasbas");


var  detales = [];
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


// masyvo reiksmes paversti teigiamomis
 for (var i = 0; i < detales.length; i++) {
     if (detales[i] < 0 ) {
         detales[i] = Math.abs(detales[i]);  // atlieka modulio operacija
     }
 }
console.log("abs", detales);



var nerikiuotas = [];
nerikiuotas = detales.slice(0);

console.log("-----------------nerikiuotas--", nerikiuotas);
 // 4. surasti geriausia darbuotoja
// detales

 console.log("nerikiuotos: ", detales);
for (var k = 0; k < detales.length; k++) {
    didziausiasSk = detales[0]; // labai mazas skaicius
    for (var i = 1; i < detales.length; i++) {
        // ar 8 > 2   Ar sukeisti?
        if ( didziausiasSk > detales[i]) {
            detales[i-1] = detales[i];   // vietoj [0] irasome 2
            detales[i] = didziausiasSk;   // vietoj [1] irasome 8
        } else {
            didziausiasSk = detales[i];
        }
    }
}
console.log("surikiuotos: ", detales);

console.log("geriausias rezultatas", detales[detales.length-1]);
var bestNumberOfItems = detales[detales.length-1];  // 199

// 4B rasti geriausia darbuototjo nr.
/*
   rasti Darbuotojo Nr Pagal Pagamintos Detales Kieki
   mas: array - kuriame ieskosime
   ieskomasSk: -  reiksme, kurios ieskosime masyve
   return: integer - grazina darbuotojo nr (masyvo stalciaus index)
*/
function rastiMasyveReiksme(mas, ieskomasSk) {
    for (var i = 0; i < mas.length; i++) {
        if( mas[i] == ieskomasSk) {
            return i;
        }
    }
    return ieskomasSk + ": toks skaicius nerastas";
}

console.log("-----------------nerikiuotas--", nerikiuotas);
var bestWorker =  rastiMasyveReiksme(nerikiuotas, bestNumberOfItems );
console.log("geriausio darbuotojo nr: ", bestWorker);
// nerikiuotas.indexOf("199");


// =================== ===10% tikimybe bandom minusiniu reikmiu 1/3 padaryti====
// var kiekKartuSkaiciavau = 0;
// while (true) {
//     kiekKartuSkaiciavau++;
//     for (var i = 0; i < detales.length; i++) {
//         if (Math.random() < 0.1) {
//             detales[i] *= -1;
//         }
//     }
//     detales.sort();
//     console.log(kiekKartuSkaiciavau);
//     if ( detales[ 40]  < 0) {
//         break;
//     }
// }
// console.log("minusisnes detales: ", detales, " prireiek ciklu", kiekKartuSkaiciavau );

 // 5. surasti blogiausia darbuotoja
//
