console.log("lasbas");


$('header').addClass('bg-warning');

//visus h2 elementus nudazyti baltai
$('h2').addClass('text-light');
$('h1').addClass('text-danger');

$('header').toggleClass('bg-warning');
$('header').toggleClass('bg-warning');
$('header').toggleClass('bg-warning');
$('header').toggleClass('bg-warning');

$('h2').addClass(function(index){
    var klase = "preke-" + index;
    return klase;
});

var x = 1;
$('.preke-' + x).addClass( 'text-dark');

$('h1').attr('id', 'antraste');
$('h1').attr('width', '150px');































//
