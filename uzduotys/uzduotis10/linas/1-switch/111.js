console.log("lasbas");


var brand = "opel";

brand = brand.toLowerCase();
var ilgis = brand.length;
console.log("teksa ilgis: ", ilgis);

brand = brand.slice(0, ilgis-2);
console.log("teksas sutrumpinas ilgis: ", brand);

switch (brand) {
    case "Ignas":
            var txt = "Jusu masina tikriausiai opel";
            console.log(txt);
        break;
    case "Igne":
            var txt = "Jusu masina tikriausiai opel";
            console.log(txt);
        break;
    case "As":
            var txt = "Jusu masina tikriausiai opel";
            console.log(txt);
        break;
    case "op":
            var txt = "Jusu masina tikriausiai opel";
            console.log(txt);
        break;
    case "audi":
            var txt = "Jusu masina Audi";
            console.log(txt);
        break;

    case "opel":
            var txt = "Jusu masina Opel";
            console.log(txt);
        break;
    default:
    console.log("Jusu automobilio nustatyi nepavyko");
    break;

}
