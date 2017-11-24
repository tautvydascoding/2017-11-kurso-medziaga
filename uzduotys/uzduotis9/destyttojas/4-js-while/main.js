console.log("lasbas");


// 1 uzduotis
// sukurit 100 masyva, naudojant WHILE

var i = 0;
var masyvas = [];
while ( i < 100) {
    masyvas[i] = i;   // masyvas.push(i);

    // if( i < 10000) {
    //     break;
    // }
    i++; // !!! nepamirsti
}
console.log(masyvas);


// ------begalinis ciklas-------------
// 2. rasti index'a (stalcius/elementas) , kuris yra "100"
var masyvas = [213,132,61,645, 100, 6544,1,321];
var ieskomas = 100;
var i = 0;
while (true) {
    if (masyvas[i] === ieskomas) {
        console.log("radome, reikeme yra: ", i);
        break;
    }
    i++;

    // apsauga
    if (i > 10000) {
        console.warn("warning: fraze " + ieskomas + " nerata", );
        break;
    }
}
var arSveikinausi = false;
do {
    console.log("Labas");
    arSveikinausi = true;
} while (arSveikinausi != true)    // while(!arSveikinausi)

document.write(masyvas.toString());
document.write("<br>");
document.write(masyvas.join(" _ "));


//
