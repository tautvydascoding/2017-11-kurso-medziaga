console.log("lasbas");

// 1
// pakeisti header fono spalva "bg-danger"
$('header').addClass('bg-danger');
// 2
// visus h2 elemnetus nudaryti baltai
$('h2').addClass('text-light');


$('header').toggleClass('bg-danger');
$('header').toggleClass('bg-danger');
$('header').toggleClass('bg-danger');
$('header').toggleClass('bg-danger');

$('h2').addClass( function(index, currentClass) {
        var klase = "preke-" + index + " " + currentClass;
        return klase;
});
var x = 1;
$('.preke-' + x).addClass('text-dark');


$('h1').attr('id', 'antraste');
$('h1').attr('width', '151px');

//
