
var person = {
    vardas: "Julius",
    pavarde: "Bepavardis",
    klase: 7,
    pazymiai: [6, 5, 9, 10, 8]
};

console.log(person);

console.log(person.pazymiai);

var temp = person.pazymiai.join(" , ");
console.log(temp);



function skaiciuotiVidurki(mas){
    var suma = 0;
    for (var i = 0; i < mas.length; i++) {
        suma += mas[i];
    }
        vid = suma/mas.length;

    return vid;
}

var spausdint = skaiciuotiVidurki(person.pazymiai);

document.querySelector(".output").innerHTML = "vidurkis  " + spausdint;


function car (name, year, color) {
    this.name = name;
    this.year = year;
    this.color = color;
}

var car1 = new car ("Audi", 1999, "blue");
console.log(car1);
