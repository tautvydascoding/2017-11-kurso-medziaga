console.log("labas");

//sukurimo budai
var imone = [x];

// arba

//name, workers, area
var imone = ['UAB keksai', 120, 620];

//=============
var x = "papildoma veikla: sokolado gamyba";
imone[ 3] = x;

// console.log( imone );
// imone[100] = "tekstas";
// console.log( imone );

var y = "papildoma veikla: meduoliai";
imone [3] = y;

//masyvo kopija
var temp = imone;

// ilgis saugos masyvo ilgi
var ilgis = imone.length;
console.log(imone);
console.log("imones masyvo ilgis: ", ilgis);
console.log("apie imone turime duomenu: ", ilgis, "duomenu");


//imone[ilgis] = "dar gamina: sausainius";
//arba==============================================
imone[imone.length] = "dar gamina: sausainius";

console.log(temp);


//idedu nauja kintamaji i gala
imone.push("klientai: uk");
console.log(imone);

//istrina galini
// imone.pop();
// console.log(imone);

//ideda i [0] vieta
imone.unshift("akcine bendrove");
console.log(imone);

//istrina [0]
imone.shift("akcine bendrove");
console.log(imone);

//parodo kelintas [] jei neranda parodo => -1
var pozicija = imone.indexOf("kakas");
console.log("teksto 'UAB keksai' pavadinimo pozicija masyve: " + pozicija);



imone.splice(1, 1, "imones darbuotoju skaicius 120", "is ju 30 moteru", "5 kuriu niescios" );
console.log("imone.splice(1, 1,", imone);

imone.splice(4,1, "patalpu plotas 620 kv.m.");
console.log("imone.splice(4,1, 'patalpu plotas 620 kv.m.')", imone);

delete imone[2];
console.log(imone);

//arba kad nebutu tuscios skyles!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!1:
imone.splice(2,1);
console.log("imone.splice(2,1)", imone);

var imonesInfo = imone.slice(0,2);
console.log("imone: " + imone + "\n imonesInfo " + imonesInfo);
console.log(imone);






















//
