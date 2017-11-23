// apsilimui
// 1 kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100

console.log("====================== atsitiktiniai 10-100 ======================");

atsSkaiciai = [];

min = 10;
max = 100;

for (var i = 0; i < 10; i++) {
    x = Math.floor(Math.random() * (max-min+1)) + min;
    atsSkaiciai[i] = x;
    // tinka ir apatinis
    // atsitiktiniaiSkaiciai.push(x);
    console.log(atsSkaiciai[i]);
}

// 2 uzdavinys: skaicius, kurie yra lyginiai pakeisti i zodi "lyginis"

for (var i = 0; i < atsSkaiciai.length; i++) {
    if(atsSkaiciai[i] % 2 == 0){
        console.log(atsSkaiciai[i] = "lyginis");
    }else{
        console.log("nelyginis ");
    }
}

console.log(atsSkaiciai);

// rimta
// 1 kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 50 - 200 (pagamintomis datalemis per diena)

console.log("====================== atsitiktiniai 50-200 ======================");

skaiciai2 = [];

min2 = 50;
max2 = 200;

for (var i = 0; i < 10; i++) {
    x = Math.floor(Math.random() * (max2-min2+1)) + min2;
    skaiciai2[i] = x;
    // tinka ir apatinis
    // atsitiktiniaiSkaiciai.push(x);
    console.log(skaiciai2[i]);
}

// 2 burtu keliu 10 % tikimybe paversti minus reiksememis ( padauginti is  -1)

console.log("=================== 10% tikimybe =========================");


for (var i = 0; i < skaiciai2.length; i++) {
    // ar skaicius teigiamas
    if (skaiciai2[i] > 0) {
        // sukuria laikina random skaiciu
        var temp = Math.random() * 100;
        // jeigu 10% tikimybe
        if (temp <= 10) {
            // pavercia skaiciu i neigiama
            skaiciai2[i] = skaiciai2[i] * (-1);
        }
    }
}

console.log(skaiciai2);


// 3. uzdavinys: visus skaicius paversti teigiamas (is masyvo parts)

console.log("==================== visi neigiami i teigiamus ========================");


for (var i = 0; i < skaiciai2.length; i++) {
    if (skaiciai2[i] >= 0) {
        skaiciai2[i] = Math.abs(skaiciai2[i]);
        console.log(skaiciai2[i]);
    }
}


// 4. surasti geriausia darbuotoja
// 5. surasti blogiausia darbuotoja
