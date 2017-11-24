
// sukurti 100 masyva, naudojant wile

i = 0;
masyvas = [];

while ( i < 100) {
    masyvas[i] = i + 1 ; //masyvas.push(i) irgi galima, gal net geriau
    // + 1 del skaitymo geriau - [0] - 1


    i++; // nepamirsti
}

console.log(masyvas);

// 2. rasti elementa kuris = 100

masyvas = [222, 156, 122, 215, 100];
ieskomas = 100;
i = 0;


while (true) {
    if (masyvas[i] === ieskomas) {
        console.log("radom ", ieskomas, "cia: ", i);
        break;
    }
    i++; // loop kartai - kiekviena karta + 1

    // apsauga
    if (i > 10000) {
        console.warn("neranda:", ieskomas);
        break;
    }
}

arSveikinausi = false;

do{
    console.log("labas");
    arSveikinausi = true;
} while (!arSveikinausi);


//
