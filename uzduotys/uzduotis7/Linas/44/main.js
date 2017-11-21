// //1111111
// var vardas = "vardenis";
// var pavarde = "pavardenis";
// var klase = 5;
// //
// // console.log("moksleivis: ", vardas, pavarde, "klase: ", klase);
//
//
// //22222222
// // function printName() {
// //     console.log('vardas', vardas);
// // }
// // function printLName() {
// //     console.log('pavarde', pavarde);
// // }
// // function printClass() {
// //     console.log('klase', klase);
// // }
// //
// // printClass();
//
// //333333333
//
// function PrintNameLNameClass (x, y, z) {
//     console.log("vardas :", x, "pavarde :", y, "klase :", z);
// }
//  PrintNameLNameClass("Tomas", "Tomauskas", 6);
//  PrintNameLNameClass("Kumpis", "Ttumaupas", 9);
//  PrintNameLNameClass("Egis", "Cmocmauskas", 4);
//  PrintNameLNameClass("Tomas", "Tomauskas", 6);
//  PrintNameLNameClass("Kumpis", "Ttumaupas", 9);
//  PrintNameLNameClass("Egis", "Cmocmauskas", 4);
//
//
// //4444444444
//
// function spausdintiPazymius (x, y, z) {
//     console.log("Rugsejis" , x);
//     console.log("Spalis" , x);
//     console.log("Rugpjutis" , x);
//
// }
//
//
//
// // 5555555555555
// var amzius = prompt("vestkite savo amziu");
// console.log('ivestas amzius yra: ', amzius);




// //////////////isvesti zodi azuolas 50 kartu/////////////////////




// for (var i = 0; i <50; i++) {
//     console.log("Azuolas" + (i =+ 100)); //  i +=100 => i = i + 100;
// }

//
// // //////istrinam esama teksta article emlemeta o ciklas padarys 50 kopiju///
// document.querySelector('article').innerHTML = '';
//
// for (var i = 0; i <50 ; i++) {
//
// document.querySelector('article').innerHTML += '<h2> Azuolas</h2>';
// }

function printX( xx ) {
document.querySelector('article').innerHTML += xx;
}

var tekstas = "<h1>Labas</h1>";
printX (tekstas);

function printXemelenteY(x , tagas) {
document.querySelector(tagas).innerHTML += x;
// document.querySelector("h1").innerHTML += xx;
}
printelementeY ('viso gero', 'h1');



var paveiksliukas = '<img src="" alt="traku pilis" width="200px" height="200px">';




