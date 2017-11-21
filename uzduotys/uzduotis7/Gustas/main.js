console.log("lasbas");

var alga = 500;
console.log("alga yra: ", alga);
alga ++; //alga + 1
alga ++; //alga + 1
alga ++; //alga + 1
alga ++; //alga + 1
console.log("alga po padidejimo yra: ", alga);

alga --;// alga -1

console.log("alga po sumazinimo yra: ", alga);

alga += 100; //alga = alga + 100
console.log("alga po metinio pakelimo yra :", alga);

alga =+ 500;//VEIKIA KITAIP!!!!!
console.log("isvedu =+ 500 ", alga);


//=====================================if =====================================

alga = 1452;

console.log(alga);
    if (alga <= 500) {
        console.log("alga iki 500");
    } else {
        console.log("alga didesne nei 500, bus didesni mokesciai");
    }





    if (alga < 380) {
        console.log("gausi pasalpa, alga =", alga);
    } else if (alga >=380 && alga < 500) {
        console.log("nereikia moketi mokesciu, alga =", alga);
    } else {
        mokesciai = alga * 0.09;
        naujaAlga = alga - mokesciai;
        console.log("reikia susimoketi daugiau mokesciu 9%", mokesciai, "alga po mokesciu", naujaAlga);
    }


//===================
