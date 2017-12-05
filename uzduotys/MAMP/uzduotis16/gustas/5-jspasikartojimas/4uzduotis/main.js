console.log("lasbas");

$('header').removeClass('bg-success');
$('header').addClass('bg-warning');

$('section div.row').removeClass('bg-info');
$('section div.row').addClass('bg-success');

$('section ads.row').removeClass('bg-warning');
$('section ads.row').addClass('bg-dark');

$('div nav').removeClass('bg-success');
$('div nav').addClass('bg-warning');

$('.container footer').removeClass('bg-dark');
$('.container footer').addClass('bg-success');


var menu = ['home', 'about', 'red-more', 'ceslovas'];

var nav = ('<nav/>');
var ul = ('<ul/>');

$('header.row').html(nav);
$('nav').html(ul);


for(i = 0; i < 4; i++){
    $('ul').append("<li/>");
    $('li').eq(i).append(menu[i]);
}




//
