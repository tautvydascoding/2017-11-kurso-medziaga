console.log("----------------------------------------------------------------");


try {

  var i = 0;
  while (true) {
    console.log("Prasukau:", i);
    if (i > 5000) {
      throw "Atleiskite, atlikom 5000 ciklu, kazas negerai.";
    }

    if (i < 0) {
      throw "Atleiskite, ivyko nenumatyta klaida";
    }
    i++;
  }
}
catch (e) {
  console.log("Klaida: ", e);
}
