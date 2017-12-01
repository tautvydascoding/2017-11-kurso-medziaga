console.log("lasbas");



// 1 uzduotis
// su js sukurti <img elementa 200x200 dydzio');
var img = $('<img/>');
img.attr('width', '200px');
img.attr('width', '200px');


// 1.1
// su js sukurti <header> ir <footer> ir ideti juos i body
// var header = $('<header/>');
// arba
$('<header/>').prependTo('body');

var footerElement = $('<footer/>');
//arba
$('body').append(footerElement);  //idedame objekta i doma


// 1.2
// i <header> ir <footer> ideti <img> elementa
$('header').append(img);
$('footer').html(img);




$('header img').addClass('logo');
$('img', 'geader').addClass('logo');
$('header img').eq(0).addClass('logo');







$('header').after('<main/>');


var x = $('<article/>').html(h2 + p);
$(x).prepend('Some text');


var h2 = $()
