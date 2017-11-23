console.log("lasbas");


//sukurimo budai
var imone = [];
//arba
// name, darbuotoju skaicius, plotas
imone = ["UAB Bananu salis", 25, 620]; //globali reiksme

//======
var x = "papildoma veikla: sokolado gamyba"; //globali reiksme
imone [3] = x;
console.log(imone);



var y = "papidloma veikla : batonai"; //globali reiksme
imone[3] = y;

// masyvo(array) kopija
var temp = imone;
var z = 10;



// ilgis - saugos masyvo ilgis
var ilgis = imone.length;
console.log("imones masyvo ilgis: ", ilgis);
console.log("imones duomenu turime: ", ilgis , "duomenu");



imone[imone.length] = "dar gamina: sokolada";



// ideda i masyvo gala
imone.push("klientai: usa, uk");
console.log("imone.push klientai:", imone);

// ideda i masyvo gala
imone.pop();
console.log("imone.push klientai:", imone);

// ideda i masyvo pradzia
imone.unshift("direktorius juozas k.");
console.log("po komandos imone.unshift :", imone);

//istrina imone nulini stalciu t.y pirmas stalcius
imone.shift("direktorius juozas k.");
console.log("po komandos imone.unshift :", imone);



var pozicija = imone.indexOf(25);

console.log("teksto uab salis pozicija:" , pozicija);

// pakeist zodi arba istrint nuo nurodytos vietos

imone.splice(2, 1, "patalpu dydis 620");
console.log("splice( 2, 1, 'patalpu dydis 620')", imone);


    // isdelytins
delete imone[2];

console.log("after [2] delete: ", imone);


var imonesInfo = imone.slice(0, 2);
console.log("imone: ", imone);
console.log("imoneInfo: ", imone);
