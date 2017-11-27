// console.log("lasbas");
//
// // //////////// Martix ///////////////
//
// var data = [];
// var zmogus1 = ["Tomas", "Tomulis", 1998];
// var zmogus2 = ["Olga", "Babytute", 1901];
// var zmogus3 = ["Cioa", "Tratatyte", 1945];
//
//
// data[0] = zmogus1;
// //
// // console.log( data );
// // console.log( data [0]);
// //
// data[1] = zmogus2;
// data[2] = zmogus3;
//
//
// //
// //
// // console.log(data);
// // document.queryDelector('article').innerHTML += "duomenys";
//
//
//
//
// // 1 uzduotis
// // isvesti visus duomenis apie zmogu vienoje eiluteje
//
// for (var i = 0; i < data.length; i++) {
//     console.log(data[i].toString());
//
//
// // 2 uzduotis
// // isvesti duomenis stulpeliu
//
// // for (var i = 0; i < data.length; i++) {
// //     console.log(data[i][0]);
// //     console.log(data[i][1]);
// //     console.log(data[i][2]);
// // }
// // // einam per matricos eilutes
// // for (var i = 0; i < data.length; i++) {
// //     // einam per matricos stulpelius
// //     for (var t = 0; i < data[i].length; i++) {
// //         console.log(data[i][t]);
// //
// //         // t++              i  t
//         // console.log(data[0][0]);
//         // console.log(data[0][1]);
//         // console.log(data[0][2]);
//
//         // console.log(data[1][0]);
//         // console.log(data[1][1]);
//         // console.log(data[1][2]);
//
//
// }
//
//
//
// // 3 uzduotis "olgos" pavarde i "Jarukuotiene"
// data[2][1] = "Jarukuotiene";
// console.log(data);
//
//
//
// // 4 automastiskai patikrinti visus duomenis ir visus gimisiuos nuo 1980 iki 200isvest
//
// // einam per matricos eilutes
// for (var i = 0; i < data.length; i++) {
//     // einam per matricos stulpelius
//     for (var t = 0; t < data[i].length; t++) {
//         var duomenys = data[i][t];
//         if ( Number.isInteger(duomenys) && duomenys > 1980 && duomenys < 2000) {
//             console.log("laba nesergi ?" + data[i][0] + ' atvyk pasitikrint');
//         }
//     }
// }

// 555555555555555555555 10x10 matrica




var matrix = [];


//eilutes
for (var i = 0; i < 10; i++) {
    ///stulpeliai
    matrix[i] = [];
    for (var t = 0; t < 10; t++) {
        matrix[i][t] = Math.floor( (Math.random() * 40)) + 10;
    }
}

console.log(matrix);
