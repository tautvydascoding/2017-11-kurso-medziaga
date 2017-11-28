var detales = [];

for (var i = 0; i < 60; i++) {
  detales[i] = Math.floor(Math.random() * (300 - 25)) + 25;
}
console.log("Nesutvarkytas masyvas: ",  detales);


for (var j = 0; j < detales.length; j++) {
  var didziausiasSk = detales[0];

  for (var i = 1; i < detales.length; i++) {
    if (didziausiasSk > detales[i]) {
      detales[i-1] = detales[i];
      detales[i] = didziausiasSk;
    } else {
      didziausiasSk = detales[i];
    }
  }

}

console.log("Sutvarkytas masyvas: ",  detales);

//------------------------------- BURBULAS END ---------------------------------

//------------------------------- BURBULAS atvirksciai ---------------------------------
// var detales2 = [];
//
// for (var i = 0; i < 25; i++) {
//   detales2[i] = Math.floor(Math.random() * (300 - 1)) + 1;
// }
//
// console.log(detales2);
//
// for (var j = 0; j < detales2; j++) {
//   var maziausiasSk = detales2[0];
//
//   for (var i = 1; i < detales2; i++) {
//     if(maziausiasSk < detales2[i]){
//       detales2[i-1] = detales2[i];
//       detales2[i] = maziausiasSk;
//     } else {
//       maziausiasSk = detales2[i];
//     }
//   }
// }
//
// console.log(detales2);

//------------------------------- BURBULAS END ---------------------------------

//------------------------------- begalinis ciklas while -----------------------
var i = 0;
var masyvas = [213, 123, 61, 645, 100, 6544, 1, 321];
var ieskomas = 4545454;

while(true){
  if (masyvas[i] == ieskomas) {
    console.log("Rastas ieskomas skaicius masyvo "+ i +" vietoje");
    break;
  }
  i++;

  if(i > 10000) {
    console.warn("warning: fraze " + ieskomas + " nerasta.");
    break;
  }
}
