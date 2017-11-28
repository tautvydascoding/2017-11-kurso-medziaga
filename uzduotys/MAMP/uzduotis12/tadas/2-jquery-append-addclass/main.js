// visas uzduotis atlikti naudojant js (arba jquery jeigu destytojas leidzia - sisiklausti)

// 1 uzduotis
// su js sukurti <img elementa 200x200 dydzio
var paveikslas = "<img src='./1.jpg' width='200px' height='200px' />";

// 1.1
// su js sukurti <header> ir <footer>
var header = "<header></header>";
var footer = "<footer/>";
// 1.2
// i <header> ir <footer> ideti <img> elementa
$('.container').prepend(header);
$('.container').append(footer);

$('header').prepend(paveikslas);
$('footer').prepend(paveikslas);

// 1.3
// css faile aprasyti .logo klase:
//      dydis 100x100, seselis i visas puses per 10px

// 1.4
// <img> elementui, kuris yra <header> elemente,  uzdeti klase "logo"
$('header img').addClass('logo');

// 1.5
// sukurti <main> elementa po <header> elementu  (<header></header>  <main>text</main>   <footer></footer>)
var main = "<main></main>";

$('header').after(main);
// 1.6
// sukurti <article> elementa su viduje <h2> ir <p> elementais (irasyti ir teksto i abu)
var article = "<article><h2>pavadinimas</h2><p>tekstas tekstas tekstas tekstas tekstas tekstas tekstas tekstas tekstas </p></article>";

// 1.7
//  ideti 1.6 <article> elementa (kuris laiko savyne <h2> ir <p>)  i <main> elementa
$('main').append(article);

// 1.8
// perkelti LOGO i kita vieta naudojant js
$('img.logo').appendTo('footer');
// ---------------------------------
// 1.9 daugiau uzduotiu su perkelimu elementu append, prepend, after, before, appendTo
// ---------------------------------
