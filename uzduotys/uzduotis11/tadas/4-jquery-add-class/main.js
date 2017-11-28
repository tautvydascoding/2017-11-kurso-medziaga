$('header').addClass('bg-danger');
$('h2').addClass('text-light');


$('header').toggleClass('bg-danger');

$('h2').addClass(function(index) {
  var klase = "preke-" + index;
  return klase;
});

var x = 1;
$('.preke-' + x).addClass('text-dark');
