console.log("lasbas");

var brand  = "Igno";

brand = brand.toLowerCase();
var ilgis = brand.length;
console.log("tekst o ilgis: ", ilgis);

brand = brand.slice(0, ilgis-2);
console.log("sutrumpintas tekstas: ", brand);

switch (brand) {

    case "Ignas":
            var txt = "Jusu masina tikriausiai Opel";
            console.log(txt);
        break;
    case "Igne":
            var txt = "Jusu masina tikriausiai Opel";
            console.log(txt);
        break;
    case "Asgnas":
            var txt = "Jusu masina tikriausiai Opel";
            console.log(txt);
        break;

    case "op":
            var txt = "Jusu masina tikriausiai Opel";
            console.log(txt);
        break;
    case "audi":
            var txt = "Jusu masina Audi";
            console.log(txt);
        break;
    case "opel":
            var txt = "Jusu austomobilis Opel";
            console.log(txt);
        break;
    default:
        console.log("Jusu masinos nepavyko nustatyti");
    break;
}
