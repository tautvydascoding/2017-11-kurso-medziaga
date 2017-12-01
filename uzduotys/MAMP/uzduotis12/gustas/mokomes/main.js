console.log("lasbas");

// visas uzduotis atlikti naudojant js (arba jquery jeigu destytojas leidzia - sisiklausti)

// 1 uzduotis
// su js sukurti <img elementa 200x200 dydzio
$('h1').after($('<img>', {
    src : "",
    width : '200px',
    height : '200px',

}));

var img = $('<img/>');
img.attr('width', '150px');
img.attr('height', '150px');

// 1.1
// su js sukurti <header> ir <footer> ir ideti i 'body'
$('h1').before($('<header/>'));

var footerElement = $('<footer/>');
$('div').append(footerElement);




// 1.2
// i <header> ir <footer> ideti <img> elementa
$('header').append($('<img />'));
$('footer').append(img);


// 1.3
// css faile aprasyti .logo klase:
//      dydis 100x100, seselis i visas puses per 10px

// 1.4
// <img> elementui, kuris yra <header> elemente,  uzdeti klase "logo"
$('header img').addClass("logo");

// 1.5
// sukurti <main> elementa po <header> elementu  (<header></header>  <main>text</main>   <footer></footer>)
$('header').after($('<main/>'));
// 1.6
// sukurti <article> elementa su viduje <h2> ir <p> elementais (irasyti ir teksto i abu)
var h2 = $('<h2/>').text('Then let me GET to know you!');
var p = $('<p/>').text('I turned myself into a pickle, Morty! Boom! Big reveal! I\'m a pickle! What do you think about that? I turned myself into a pickle! W-what are you just staring at me for, bro? I turned myself into a pickle, Morty.');

// 1.7
//  ideti 1.6 <article> elementa (kuris laiko savyne <h2> ir <p>)  i <main> elementa

var x = $('<article/>').prepend(h2, p);
$(x).prependTo('main');
// ARBA
// $('main').prepend($('<article/>'));


// 1.8
// perkelti LOGO i kita vieta naudojant js

// ---------------------------------
// 1.9 daugiau uzduotiu su perkelimu elementu append, prepend, after, before, appendTo
// ---------------------------------
