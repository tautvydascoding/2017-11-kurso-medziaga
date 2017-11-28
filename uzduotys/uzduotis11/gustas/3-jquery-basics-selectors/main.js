console.log('labas');
//======================================

//.text()
//.html()
//.val()

//paimam texto reiksme (text value)
var elementas = $("h1").html();

// console.log(elementas);

elementas = $( 'input[name="username"]').val();

console.log(elementas);

$( 'input[name="username"]').val("Tomas");
$( 'input[type="email"]').val("info@a.lt");

$("header h1").html('<b>Pakeiciau h1</b>');
// $( "h1", "header").text('Pakeiciau h1');
// $("header").find("h1").text('Pakeiciau h1');


var elm1 = "<button>Register</button>",
    elm2 = "<img src='' width='200px' height = '200px' />",
    elm3 = "<a href='#'>OK</a>";

// $('ul').prepend(emem1);
$('li:first').before(elm1);

$('ul').append(elm2);
$('form').before(elm3);

//perkeliam forma i virsu!!!!!!!!!!
$('header').append($('form'));

//===============================kuriamas naujas elementas
var element = $('<section><section/>').html("<nav>Menu</nav>");
$('main').append(element);


$('<footer/>', {
  "class": 'bg-warning' 'aukstis-100',
  text: "&copy; 2017",
  click: function () {
    $(this).hide();
  }
}).appendTo('body');











//
