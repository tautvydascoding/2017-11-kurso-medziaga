
person = {
    name: "vardas",
    lname: "pavarde",
    klase: 5,
    pazymiai: [6, 5, 9, 10, 8]
};

// console.log(person.pazymiai.toString());
//
for( x in person){
    console.log(x);
}


console.log("-------------------------");

kazkoksArray = [8, 5, 6, 20, 2, 3];

function vidurkis(mas){
    suma = 0;
    for (var i = 0; i < mas.length; i++) {
        suma += mas[i];
    }
    console.log("apskaiciuota suma:", suma);
    console.log("is sk kiekio", mas.length);
    var vid = suma / mas.length;
    ats = Math.round(vid);
    console.log(ats);
    return ats;
}

vidurkis(kazkoksArray);


console.log("-------------------------");

var tevas = {
    vardas: "Juozas",
    pavarde: "Juozaitis",
    vaikas: {}
};

var vaikas = {
    klase: 5,
    vardas: "Vaikezas"
};

tevas.vaikas = vaikas;

console.log("-------------------------");



//
