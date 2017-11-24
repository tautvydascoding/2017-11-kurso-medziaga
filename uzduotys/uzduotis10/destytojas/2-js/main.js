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
// einam per matricos eilutes
for (var i = 0; i < data.length; i++) {
    // einam per matricos stulpelius
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
 data[2][1] = "Jarukuotiete";
console.log(data);

// 4 Uzduotis
// automatiskai patikrinti visus duomenis ir visus gimusius nuo 1980 iki 2000 isvesti

// einam per matricos eilutes
for (var i = 0; i < data.length; i++) {
    // einam per matricos stulpelis
    for (var t = 0; t < data[i].length; t++) {
        var duomenys = data[i][t];
        if ( Number.isInteger(duomenys) &&  duomenys > 1980 &&  duomenys < 2000) {
            console.log("Laba, " +  data[i][0] + " Gali but kad sergate, prasome atvykti pasitikrinti");
        }
    }
}

// arba
for (var i = 0; i < data.length; i++) {
    var gimimoData = data[i][2];
    if ( Number.isInteger(gimimoData) &&  (gimimoData > 1980) &&  (gimimoData < 2000)) {
        console.log("Laba, " +  data[i][0] + " Gali but kad sergate, prasome atvykti pasitikrinti");
    }
}

// 5 uzduotis
// sukurti matrica 10x10 dydzio, uzpildyta atsistiktiniais skaiciais nuo 10 iki 50

var matrix1 = ["aa", "bbb", "ccc"];
var matrix2 = matrix;  // !!! negalima

var matrix = [];

// eilutes
for (var i = 0; i < 10; i++) {
    // stulpeliai
    matrix[i] = [];  
    for (var t = 0; t < 10; t++) {
        matrix[i][t] = Math.floor( (Math.random() * 40)) + 10;
    }
}
console.log(matrix);




//
