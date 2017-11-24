console.log("lasbas");

// ----------------------Matrix---------------------------
var data = [];
var zmogus1 = ["Tomas", "Tomulis", 1998];
var zmogus2 = ["Birute", "Bitutaite", 1966];
var zmogus3 = ["Olga", "Opapa", 1985];
data[0] = zmogus1;

console.log( data );
console.log( data[0] );

data[1] = zmogus2;
data[2] = zmogus3;

console.log(data);
document.querySelector('article').innerHTML += "....";


// 1 uzduotis
// isvesti visus duomenis apie zmogu vienoje eilute
for (var i = 0; i < data.length; i++) {
    console.log(  data[i].toString() );
}

// 2 Uzduotis
// isvesti visus duomenis stulpeliu
for (var i = 0; i < data.length; i++) {
     console.log(data[i][0]);
     console.log(data[i][1]);
     console.log(data[i][2]);
}
for (var i = 0; i < data.length; i++) {
     for (var t = 0; t < data[i].length; t++) {
         console.log( data[i][t] );
         // t++               i   t
         // console.log( data[0][0] );
         // console.log( data[0][1] );
         // console.log( data[0][2] );

         // console.log( data[1][0] );
         // console.log( data[1][1] );
         // console.log( data[1][2] );
     }
     // i++
}



// 3 uzduotis
// pakeisti "Olgos " pavarde i "Jarukuotiete"
// 

// 4 Uzduotis
// automatiskai patikrinti visus duomenis ir visus gimusius nuo 1980 iki 2000 isvesti








//
