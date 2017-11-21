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

// if(salyga){
//     //darom taip
// }else if(salyga){
//     //arba taip
// }else{
//     //kai abu netinka
// }

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
