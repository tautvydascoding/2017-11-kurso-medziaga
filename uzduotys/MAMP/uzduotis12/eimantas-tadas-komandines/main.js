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


// B
// 1 sukurti array su 6 skritingu straipsniu turiniu
// 1.1 sukurti <section>   bloka
// 2 su ciklu (loop) isvesti <div class="col-3"> <article> elementus ir juose <p> straipsnio turini
// t.y. 3 stulpelius ir kiekviename po 1 straipsni

var straipsniai = ["Finansų ministerija spalio pabaigoje atleidimo lapelius išdalijo 173 iš 429 darbuotojų – tai yra net 40 proc.", " visų darbuotojų, 15min patvirtino finansų ministro patarėja Rita Rekašiūtė-Balsienė.",
"Šių metų pradžioje kartu su Finansų ministerijos departamentų bei skyrių vadovais turėjome strateginio planavimo sesiją", "Panaši reforma vykdoma Kultūros ministerijoje. Tačiau joje atleidimo lapelius gavo visi be išimties darbuotojai",
"Reforma šiemet vykdyta ir Vyriausybės kanceliarijoje.", "kaip efektyvinti veiklą ir labiau įtraukti darbuotojus"];

var sekcija = "<section><div class='row'></div></section>";
$('.container').append(sekcija);

for (var i = 0; i < 3; i++) {
  var vienasStraipsnis = "<div class='col-md-3'><article><p>" + straipsniai[i] + "</p></article></div>";
  $('section .row').append(vienasStraipsnis);
}
