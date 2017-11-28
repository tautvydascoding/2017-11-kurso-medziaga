// KOMANDINE UZDUOTIS




// A zogus ir B

// A
// 1 sukurti array su meniu punktu pavadinimais (bent 5)
// 1.1 sukurti <nav> <ul>  blokus
// 2 su ciklu (loop) isvesti <li> elementus ir meniu punktus

var menuNames = ["Home", "Gallery", "Contacts", "About", "Stuff"];

for (var i = 0; i < menuNames.length; i++) {
    $('ul').append("<li>" + menuNames[i] + "</li>");
}
