// apsilimui
// 1 kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100
function SetRandom(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
  //* (max - min + 1) ) + min;
}
var array1 = [];

for (var i = 0; i < 15; i++) {
  array1[i] = SetRandom(10, 100);
}
console.log(array1);
// 2 uzdavinys: pakeisti atsitiktinius skaicius, kurie yra lyginiai i zodi "lyginis"
for (var i = 0; i < array1.length; i++) {
  if ((array1[i] % 2) == 0) {
    // console.log(array1[i]);
    array1.splice(i, 1, "lyginis");
  }
}
console.log(array1);


// rimta
// 1 kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 50 - 200 (pagamintomis datalemis per diena)
var detales = [];
for (var i = 0; i < 25; i++) {
  detales[i] = SetRandom(50, 200);
}
console.log("Isvedam random uzpildyta masyva:", detales);

// 2 burtu keliu 10 % tikimybe paversti minus reiksememis ( padauginti is  -1)
function probability(percentage) {
  if(Math.random() <= percentage){
    return true;
  }
}

for (var i = 0; i < 25; i++) {
  if (probability(0.1) == true) {
    detales[i] *= -1;
  }
}

console.log("Isvedam masyva su 10% tikimybe * -1:", detales);
// 3. uzdavinys: visus skaicius paversti teigiamas (is masyvo parts)
for (var i = 0; i < 25; i++) {
  if (detales[i] < 0) {
    detales[i] *= -1;
  }
}

console.log("Visi neigiami paversti i +:", detales);
// 4. surasti geriausia darbuotoja
var geriausias = 0;
for (var i = 0; i < detales.length; i++) {
  if (detales[i] > geriausias) {
    geriausias = detales[i];
  }
}
console.log("Geriausias darbuotojas yra " + detales.indexOf(geriausias) + " stalciuje, pagamines " + geriausias + " detaliu.");

// 5. surasti blogiausia darbuotoja
var blogiausias = 200;
for (var i = 0; i < detales.length; i++) {
  if (detales[i] < blogiausias) {
    blogiausias = detales[i];
  }
}
console.log("Blogiausias darbuotojas yra " + detales.indexOf(blogiausias) + " stalciuje, pagamines " + blogiausias + " detaliu.");
