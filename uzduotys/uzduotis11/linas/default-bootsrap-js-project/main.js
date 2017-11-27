


//
  var names = [ "ar", "al", "il", "ul", "am", "em", "im", "um",  "an", "en", "un", "in", "ir"];

// var names = [""];
//
//
// var rand4or10 = 0;
// var rand0orX = 0;
//
//
// // kiek vardu
// for (var i = 0; i < 10; i++) {
//     rand4or10 = Math.round(Math.random() * 6 ) + 4;
//     names [i] = "";
//     while (names[i].length < rand4or10) {
//         rand0orX = Math.floor(Math.random() * dvigarsiai.length ) ;
//             names[i] += dvigarsiai[rand0orX];
//     }
//
// }
// console.log(names);
var matrica = [];

for (var i = 0; i < 10; i++) {
    var rand = Math.floor(Math.random () * names.length ) ;
    var rand2 = Math.floor(Math.random () * names.length ) ;
    matrica[i] = [];
    matrica[i][0] = names[rand];
    matrica[i][1] = names[rand2];
    matrica[i][2] = Math.round(Math.random() * 10);
}
console.log(matrica);
