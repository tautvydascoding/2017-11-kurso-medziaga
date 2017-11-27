
// var uInput = prompt("iveskite ieskomo auto markes pavadinima");

brand = "Opelis";

brand = brand.toLowerCase();
console.log(brand);

var ilgis = brand.length;
console.log(ilgis);

brand = brand.slice(0, ilgis -2);

console.log(brand);
// brand = brand.slice(0, brand.lenght -2);

switch (brand) {
    case "opel":
            var txt = "Jusu masina Opel";
            console.log(txt);
        break;
    case "bmw":
            var txt = "Jusu masina BMW";
            console.log(txt);
        break;
    case "audi":
            var txt = "Jusu masina Audi";
            console.log(txt);
        break;
    default:
        console.log("Nepavyko rasti: ", brand);
}
