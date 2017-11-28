//get text value
var elementas = $('h1').html();

// console.log(elementas);

elementas = $('input[name="username"]').val();
console.log(elementas);

$('input[name="username"]').val("Petras");
$('input[name="elpastas"]').val("info@a.lt");


//keiciam elemento teksta
// 1 budas
$('header h1').text('Pakeiciau h1');

// 2 budas
// $('h1', 'header').text('Pakeiciau h1');

// 3 budas
// $('header').find('h1').text('Pakeiciau h1');

var elm1 = "<button>Register</button>",
  elm2 = "<img src='' width='200px' height='200px'</img>",
  elm3 = "<a href='#'>ok</a>";

$('ul').prepend(elm2);
$('ul').append(elm1);

$('form').before(elm3);


// Formos perkelimas i headeri
$('header').append($('form'));



// naujo elemento kurimas
var element = $('<section></section>').html("<nav>Menu</nav>");
$('main').append(element);



//more complex footer
$('<footer/>', {
  class: "bg-warning aukstis-100",
  text: "&copy; 2017",
  click: function(){
    $(this).hide();
  }
}).appendTo('body');


$('section').remove();
