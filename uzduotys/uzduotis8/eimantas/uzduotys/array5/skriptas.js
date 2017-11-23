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

console.log("==================== Geriausias darbuotojas ========================");

// reikia tikrinti kaip rikiuoja, galima klaida
// skaiciai2.sort();
// console.log(skaiciai2[skaiciai2.length -1]);

// custom rikiavimas



console.log("nerikiuotos: ", skaiciai2);

//dublikuoja masyva kad nesugadinti
// !!!! arr2 = arr - neveikia! kopijuoja i arr2 kelia iki arr.
// reikia arr2 = arr.slice(0); - sukurs nauja masyva nuo tevo pradzios
// !!!!!!!!!!!!!!!!!!!!!

var nerikiuotos = skaiciai2.slice(0);
for (var k = 0; k < skaiciai2.length; k++) {
    x = skaiciai2[0]; // labai mazas skaicius is masyvo
    for (var i = 1; i < skaiciai2.length; i++) {

        // sukeicia vietomis masyvo elementus jei didesnis sekantis didesnis
        if (x > skaiciai2[i]) {
            skaiciai2[i-1] = skaiciai2[i];
            skaiciai2[i] = x;
        }else{
            x = skaiciai2[i];
        }
    }
}

// reiketu visada patikrinti ar tikrai nuejo iki galo

console.log("rikiuotos: ", skaiciai2);
// detaliu skaicius kuri padare geriausias darbuotojas
var gerKiek = skaiciai2[skaiciai2.length -1];


// randa geriausio darbuotojo numeri
//mas: array - kuriame ieskome
// ieskomasSkaicius: reiksme kurios ieskosime masyve
// return: integer, masyvo index - darbuotojo nr

function findEmp(mas, ieskomasSkaicius){
    for (var i = 0; i < mas.length; i++) {
        if (mas[i] == ieskomasSkaicius){
            return i;
        }
    }
    return ieskomasSkaicius + " nerastas";
}

var bestWorker = findEmp(nerikiuotos, gerKiek);
console.log("geriausio darbuotojo nr", bestWorker);

// 5. surasti blogiausia darbuotoja

console.log("==================== Blogiausias darbuotojas ========================");
