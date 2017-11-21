console.log("Hi");

var alga = 500;
console.log("alga ", alga);

alga++;
console.log("alga ", alga);

alga--;
console.log("alga ", alga);

// prideda ir isimena/parodo
// =+ isimena sena ir tada tik prideda, nenaudoti
alga += 100;
console.log("alga po pakelimo", alga);

// ================= if =================

//trumpas if
//(salyg) ? jei true : jei false

// if(salyga){
//     //darom taip
// }else if(salyga){
//     //arba taip
// }else{
//     //kai abu netinka
// }

// var s = true;

// (s) ? console.log("teip") : console.log("nope");

// var username;
// // jei nera username tada printins guest
// var welcome = "Hello " + (username || "guest");

// ================= END if =================

function apieAlga(){
    if (alga < 500){
        console.log("mazai gauni :D");
    }else{
        console.log("galim pasneketi :D");
    }
}

apieAlga();

alga = 100;
if (alga < 380){
    console.log("mazai gauni :D");
}else if(alga >= 380 && alga <500){
    console.log("no tax");
}else{
    console.log("pay tax");
}
