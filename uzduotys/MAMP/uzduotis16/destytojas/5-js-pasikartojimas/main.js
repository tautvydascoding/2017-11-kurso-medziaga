console.log("lasbas");


// su js sukurti menu naudojant <ul> <li> :
// Home, Gallery, About, contacts

var ul = $('<ul></ul>');
// $('<ul/>')

ul.html("<li>Home</li>");
// ul.html("<li>Gallery</li>"); // istrins kas pries tai buvo
ul.append("<li>Gallery</li>");
$('.container').append(ul);
ul.append("<li>About</li>");
ul.append("<li>Contacts</li>");
//-----------------
var x = $('li:first').text(); // text() - paima turini
// arba
var x = $('li').eq(0).text();


$('h1').text(x); // text(x) - idada "x" i turini
//-----------------------
// $('li').addClass('active');

$('ul li').on('click', function() {
    // $(this).toggleClass('active');
    // $('ul li').removeClass('active');

    if ($(this).hasClass('active')) {
        $(this).removeClass('active');
    } else {
        $('ul li').removeClass('active');
        $(this).addClass('active');
    }
});

$('ul li:last', 'header').css('color', 'green');
$('header ul li:last').css('font-size', '50px');

// $('body').prepend('ul');
// $('ul').prependTo('body');
// arba
var style = {
    'color': 'green',
    'font-size': '50px'
};

$('ul li:first').css({
    'color': 'green',
    'font-size': '50px'
});

$('ul li').eq(1).css(style);
// js budu
var x = document.querySelector('ul li');
console.log(x);
document.querySelectorAll('h1').style.color='blue' ;

//
