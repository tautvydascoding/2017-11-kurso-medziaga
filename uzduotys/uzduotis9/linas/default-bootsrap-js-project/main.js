// apsilimui

var masyvas = [];
var min = 10;
var max = 100;
var itemai = [];



// 1 kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100

// for (var i = 0; i < 50; i++) {
//     var atsitiktinis = Math.round ((Math.random() * 90) +10) ;
//     masyvas[i] = atsitiktinis;
// }
//
// console.log(masyvas);
//
//
//
// // 2 uzdavinys:  skaicius, kurie yra lyginiai i pakeisti i zodi "lyginis"
//
//
//
//
// for (var i = 0; i < masyvas.length; i++) {
//     if (masyvas[i] % 2 == 0 ) { //jeigu lliekanos nera tai lyginis
//         masyvas[i] = "lyginis";
//     }
// }
//  console.log("lyginiai skaciai pervesti i zodzius: ", masyvas);









// rimta
// 1 kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 50 - 200 (pagamintomis datalemis per diena)

for (var i = 0; i < 60; i++) {
    // burtu keliu generuos nuo 50 iki 200
    var burtuKeliu = Math.floor(Math.random() * (200 - 50 + 1)) + 50;
    itemai[i] = burtuKeliu;
}
console.log("itemai: ", itemai);




// 2 burtu keliu 10 % tikimybe paversti minus reiksememis ( padauginti is  -1)


for (var i = 0; i < itemai.length; i++) {
    var temp = Math.random() * 100;
    // tikrinam ar 10% tikimybe
    if (temp <= 10) {
        // ar skaicius teigimas
        if (itemai[i] > 0) {
            itemai[i] = itemai[i] * (-1);
        }
    }
}
console.log("kitas: ", itemai);









// 3. uzdavinys: visus skaicius paversti teigiamas (is masyvo parts)




for (var i = 0; i < itemai.length; i++) {
    var temp = Math.random() * 100;
    // tikrinam ar 10% tikimybe
    if (temp <= 10) {
        // ar skaicius teigimas
        if (itemai[i] > 0) {
            itemai[i] = itemai[i] * (-1);
        }
    }
}
console.log("no: ", itemai);






// // 4. surasti geriausia darbuotoja
// console.log("rikiuotos: ", itemai);
// itemai.sort();
// console.log("nerikuotos: ", itemai);



console.log("nerikuotos: ", itemai);

didziausiasSk = itemai[0];
for (var i = 0; i < itemai.length; i++) {
    // ar 8 > 2 ar sukeisti?
    if (didziausiasSk > itemai[i]) {
        itemai[i-1] = itemai[i];
        itemai[i] = itemai[i];
    } else {
        didziausiasSk = itemai[i];

    }

}
console.log("surikiuotos", itemai);
rikiuoti(itemai);

var geriausiasSkaicius = itemai[itemai.length-1];


// 5. surasti blogiausia darbuotoja
 // mas: arry-kuriamae
 // ieskomasSk reikme kurios ieskosime masyve
 // ieskosime return: integer- darbuotojo nr ( masyvo indekse )







function rastiIlgasTekstas(mas) {
    for (var i = 0; i < mas.length; i++) {
        if (mas[i] == geriausiasSkaicius) {

            return i;
    }
    }

    return ieskomasSk + "toks skaicius neegzistuoja";

}




masyvas = [213,132,61,645,100,6544,1,321];
while (true) {
    if (masyvas[i] == ieskomas) {
        console.log("radome, reiksme yra: ", masyvas[i]);
        break;
    }
    i++;

    // apsauga
    if (i > 10000) {
        console.error("fraze" + ieskomas + "nerasta");
        break;
    }
}
