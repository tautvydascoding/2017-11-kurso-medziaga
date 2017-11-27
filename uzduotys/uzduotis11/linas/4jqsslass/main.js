console.log("lasbas");



$('header').addClass('bg-danger');
$('h2').addClass('text-warning');



$('header').toggleClass('bg-danger');

$('h2').toggleClass('text-warning');






$('h2').addClass(function(index, currentClass){
    var klase = "preke-" + index + " " + curentClass;
    return klase;
});

//

var x = 2;
$('.preke-' + x).addClass("text-light");


$('h1').attr('id', 'antraste');
