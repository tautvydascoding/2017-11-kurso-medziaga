console.log("Labas");

// visas uzduotis atlikti naudojant js (arba jquery jeigu destytojas leidzia - sisiklausti)

// 1 uzduotis
// su js sukurti <img elementa 200x200 dydzio
var img0 = $("<img> </img>", {   // nepatartina naudoti, nes viskas i style atsiras
      width:'200px',
      height:'200px'
  });
var img = "<img src='' width='200px' height='200px'>";
var img2 = $('<img/>');
img2.attr('width', '200px');
img2.attr('height', '200px');


// 1.1
// su js sukurti <header> ir <footer>

 $('<header></header>').prependTo('body');
 // arba
var footerElement = $('<footer/>');  // sukuria jq obj
$('body').append(footerElement);    // idedame obj i DOM i body apacia

// 1.2
// i <header> ir <footer> ideti <img> elementa
$('header').append(img);   // var img2 = $('<img/>');  + atributai
$('footer').html( img2 );

// 1.3
// css FAILE aprasyti .logo klase:
//      dydis 100x100, seselis i visas puses per 10px

// 1.4
// <img> elementui, kuris yra <header> elemente,  uzdeti klase "logo"
$('header img').addClass('logo');
$('img', 'header').addClass('logo');
$('header img').eq(0).addClass('logo');  // rizikingas budas

// 1.5
// sukurti <main> elementa po <header> elementu  (<header></header>  <main>text</main>   <footer></footer>)

$('header').after( "<main/>");
// 1.6
// sukurti <article> elementa su viduje <h2> ir <p> elementais (irasyti ir teksto i abu)
var h2 = $('<h2></h2>').text('Straipsnio antraste');
var p = $('<p></p>').html('<b>Lorem<b> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

var x = $('<article/>').prepend( h2, p );
$('main').prepend(x);

// 1.7
//  ideti 1.6 <article> elementa (kuris laiko savyne <h2> ir <p>)  i <main> elementa

// 1.8
// perkelti LOGO i kita vieta naudojant js

//
// ---------------------------------
// 1.9 daugiau uzduotiu su perkelimu elementu append, prepend, after, before, appendTo
// ---------------------------------


// =================click=========
// 1.9.1
// paspaudus ant logo ji suanimuoti jQuery
// LOGO keliauja i desine ir virsu ekrano puse
// tampa permatomas 0.5
//
