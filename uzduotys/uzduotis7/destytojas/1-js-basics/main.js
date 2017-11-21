console.log("lasbas");



var alga = 500;
console.log("alga yra: ", alga);
alga++;    // alga = alga + 1;
alga++;    // alga = alga + 1;
alga++;    // alga = alga + 1;
alga++;    // alga = alga + 1;
alga++;    // alga = alga + 1;
console.log("alga po padidejimo yra: ", alga);
alga--;     // alga = alga - 1;
console.log("alga po sumazinimo yra: ", alga);


alga += 100;   // alga = alga + 100;
console.log("alga po metinio pakelimo: ", alga);
alga =+ 500;
console.log("isvedu =+ 500", alga  );



// =================if ====================
 // if ( salyga ) {
 //     // jei salyga tenkinama
 // }
 //
 // if ( salyga ) {
 //     // jei salyga tenkinama
 // } else {
 //     // jei salyga netenkinama  / priesingu atveju
 // }
 //
 // if (salyga) {
 //
 // } else if (salyga) {
 //
 // } else {
 //     // ?
 // }
alga = 500;
console.log(alga);

if ( alga <= 500 ){
    console.log("alga maziau nei 500 arba lygi");
} else {
    console.log("alga didesne nei 500 ir jus turesite susimoketi papildomus mokescius");
}

alga = 100;
if (  alga < 380 ) {
    console.log( "gaunate pasalpa");
} else if ( alga >= 380 && alga < 500) {
    console.log( "nereik moketi mokesciu");
}  else {
    console.log( "reik moketi papildomus mokescius 9%");
}

var username; // undefined
var welcomeMessage  =   (username || 'guest');
console.log(welcomeMessage);  // guest

var username = "Tomas"; // undefined
var welcomeMessage  =  (username || 'guest');
console.log(welcomeMessage);  // Tomas




//
