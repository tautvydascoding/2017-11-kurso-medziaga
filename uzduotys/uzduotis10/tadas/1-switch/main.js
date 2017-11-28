console.log("----------------------------------------------------------------");

var brand = "OPEL";

brand = brand.toLowerCase();

brand = brand.slice(0, brand.length-2);

switch (brand) {
  case "op":
    var txt = "Jusu masina tikriausiai Opel";
    console.log(txt);
    break;

  case "Ignas":

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
    console.log("Jusu masinos nepavyko nustatyti");
    break;
}

//------------------------------------------------------------------------------
