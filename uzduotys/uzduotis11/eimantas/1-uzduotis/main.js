console.log("Labas");

// visas uzduotis atlikti naudojant js (arba jquery jeigu destytojas leidzia - sisiklausti)

// 1 uzduotis
// su js sukurti <img elementa 200x200 dydzio

var img = "<img src='./1.jpg' width='200px'  height='200px' >";
var imgSmaller = "<img src='./1.jpg', width='100px', height='100px'>";

$("body").append(img);

// 1.1
// su js sukurti <header> ir <footer>

$("body").append("<header> header </header><footer> footer </footer>");

// 1.2
// i <header> ir <footer> ideti <img> elementa

$("header, footer").append(imgSmaller);

// 1.3
// css faile aprasyti .logo klase:
//      dydis 100x100, seselis i visas puses per 10px

// .logo{
//     width: 100px;
//     height: 100px;
//     box-shadow: 0 0 35px grey;
// }

// 1.4
// <img> elementui, kuris yra <header> elemente,  uzdeti klase "logo"
$('header img').addClass("logo");


// 1.5
// sukurti <main> elementa po <header> elementu  (<header></header>  <main>text</main>   <footer></footer>)

$('header').after("<main> TEXT IN MAIN </main>");

// 1.6
// sukurti <article> elementa su viduje <h2> ir <p> elementais (irasyti ir teksto i abu)

$('header').append("<article> ARTICLE HERE </article>");
$('article').append("<h2> Im in article </h2>");
$('article').append("<p> im a paragraph in article </p>");

// 1.7
//  ideti 1.6 <article> elementa (kuris laiko savyne <h2> ir <p>)  i <main> elementa

$('article').appendTo('main');

// 1.8
// perkelti LOGO i kita vieta naudojant js

$('.logo').appendTo('header');

// ---------------------------------
// 1.9 daugiau uzduotiu su perkelimu elementu append, prepend, after, before, appendTo
// ---------------------------------
