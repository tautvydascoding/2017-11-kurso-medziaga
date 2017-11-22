console.log("lasbas");

// sukurimo budai
var imone = [];
// ARBA
// name, workers, area
var imone = ["UAB Keksai ir Ko", 120, 620];   // global

//===========
var x = "papildoma veikla: sokolado gamyba";  // global
imone[3] = x;

console.log( imone );
// imone[100] = "testas";
// console.log( imone );

var y = "papildoma veikla: meduoliai"; // global
imone[3] = y;

// masyvo kopija
var temp = imone;
var z = 10;
z++;

// ilgis - saugos masyvo ilgi
var ilgis = imone.length;
console.log("Imones masyvo ilgis: ", ilgis);
console.log("Apie imone turime ", ilgis , "duomenu");

// imone[ilgis] = "Dar gamina: pagrazinimus";
// arba
imone[imone.length] = "Dar gamina: pagrazinimus";
console.log(imone);


imone.push("Klientai: USA, UK");  // ideda i masyvo gala
console.log("Po komandos imone.push Klientai:", imone);

imone.pop(); // istrina paskutinta stalciu
console.log("Po komandos imone.pop :", imone);

imone.unshift("Direktorius Juozas K."); // ideda i masyvo pradzia
console.log("Po komandos imone.unshift :", imone);

imone.shift();  // istirna imone[0] - stalciu
console.log("Po komandos imone.shift :", imone);

var pozicija = imone.indexOf("UAB Keksai ir Ko");
// indexOf - atlieka paieska ir grazina , stalciaus numeri
// neradus - grazina "-1"
console.log(" teksto UAB kek ... pozicija:  ", pozicija);

// 1 - kelinta paveikti,
 // 1 - kiek istrinti,
 // ""darbuotoju skaicius yra 120"" - ka iterpti
 imone.splice(1, 1, "darbuotoju skaicius yra 120", "is ju 30 moteru");
console.log("imone.splice(1, 1,", imone);


imone.splice(3, 1, "patalpu plotas 620");
console.log("splice(3, 1, 'patalpu plotas 620'", imone);
//

delete imone[2];  // ! palieka tuscia stalciu
// arba
// imone.splice(2, 1);
console.log("after [2] delete: ", imone);

var imonesInfo = imone.slice(0, 2); // o - nuo kelinto , 2 - iki kelinto, jo neiskaitant
console.log("imone: ", imone);
console.log("imoneInfo: ", imonesInfo);




//
