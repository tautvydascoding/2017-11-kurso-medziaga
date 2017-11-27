console.log("lasbas");

var i = 0;
var masyvas = [];

// while (i < 100){
//   masyvas [i] = i;
//   i++;
// }
//
// console.log(masyvas);

// ===================================begalinis ciklas
// 2 Uzduotis. rasti elementa [i] kuris lygu 100
masyvas = [3232, 52551, 25151, 515112, 512, 100, 2212, 522, 4, 10, 23, 100];
var ieskomas = 100;

while (true) {
    if(masyvas[i] == ieskomas ){
      console.log("radome reiksme: ", i);
      break;

    }
    i++;

    //apsauga
    if (i>1000) {
      console.log("waring: fraze " + ieskomas + " nerasta");
      break;
    }
}

document.write(masyvas.join(" -_- "));
