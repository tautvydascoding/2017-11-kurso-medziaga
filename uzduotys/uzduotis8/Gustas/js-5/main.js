// apsilimui
var naujasMasyvas = [];
var min = 10;
var max = 100;
var detales = [];
// 1 kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100

for (i = 0; i < 50; i++){
  var random = Math.round((Math.random()*90)+10);//sugalvojamas atsitiktinis skaicius ir padaromas tarp 10 ir 100
  naujasMasyvas[i] = random;
}
console.log(naujasMasyvas);

// 2 uzdavinys:  skaicius, kurie yra lyginiai i pakeisti i zodi "lyginis"
// for (i = 0; i < naujasMasyvas.length; i++){
//   if(naujasMasyvas[i] % 2 == 0 ){
//     console.log("Lyginis");
//   } else {
//     console.log(naujasMasyvas[i]);
//   }
// }

// rimta
// 1 kursime nauja masyva uzpildyta atsitiktiniais skaiciais nuo 50 - 200 (pagamintomis datalemis per diena)
for (i = 0; i < 60; i++){
  var random = Math.round((Math.random() * (200 - 50) + 50));
  detales[i] = random;
}
console.log(detales);


// 2 burtu keliu 10 % tikimybe paversti minus reiksememis ( padauginti is  -1)
for (var i = 0; i < detales.length; i++) {
if(detales[i] > 0){
// tikrinam ar  10% tikimybe
  if (Math.random() < 0.1){
  detales[i] = detales[i] * (-1);
}
}
}

console.log(detales);

for (var i = 0; i < detales.length; i++) {
  if (detales[i] <= 0){
    detales[i] = Math.abs(detales[i]); // atlieka modulio operacija |-60| = 60
  }
}
console.log(detales);
// 3. uzdavinys: visus skaicius paversti teigiamas (is masyvo parts)
// 4. surasti geriausia darbuotoja
// 5. surasti blogiausia darbuotoja
