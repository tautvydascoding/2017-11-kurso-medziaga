var atlyginimai = [];

// Uzpildom atlyginimu masyva
for (var i = 0; i < 50; i++) {
  atlyginimai[i] = Math.floor(Math.random() * (2000 - 500)) + 500;
}

//------------------------------- DIDEJIMO TVARKA ---------------------------------
// Isrykiuojam atlyginimus didejimo tvarka
for (var k = 0; k < atlyginimai.length; k++) {
  var max = atlyginimai[0]; // Pasiima pirma masyvo elementa

  for (var i = 1; i < atlyginimai.length; i++) {
    if(max > atlyginimai[i]) {
      atlyginimai[i-1] = atlyginimai[i];
      atlyginimai[i] = max;
    } else {
      max = atlyginimai[i]; //jeigu pirmasis mazesnis, imam nauja didziausia
    }
  }
}

console.log("[DIDEJIMAS] Isrykiuoti atlyginimai:", atlyginimai);

//------------------------------- MAZEJIMO TVARKA ---------------------------------
// Isrykiuojam atlyginimus mazejimo tvarka
for (var k = 0; k < atlyginimai.length; k++) {
  var min = atlyginimai[0];
  for (var i = 1; i < atlyginimai.length; i++) {
    if (min < atlyginimai[i]) {
      atlyginimai[i-1] = atlyginimai[i];
      atlyginimai[i] = min;
    } else {
      min = atlyginimai[i];
    }
  }
}

console.log("[MAZEJIMAS] Isrykiuoti atlyginimai:", atlyginimai);


//------------------------------- .sort() testas ---------------------------------
atlyginimai.sort(function (a, b) {
  return a - b;
});

console.log("Atlyginimai isrykiuoti su sort():", atlyginimai);


//------------------------------- REVERSE ---------------------------------
// console.log(atlyginimai.reverse());
