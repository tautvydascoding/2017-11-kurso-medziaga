console.log("lasbas");

// get text value
var elementas = $("h1").html();
// console.log(elementas);

elementas = $('input[name="username"]').val();
console.log(elementas);


$('input[name="username"]').val( "Tomas");
$('input[type="email"]').val( "info@a.lt");

$("header h1").text('<b>Pakeiciau h1</b>');
// $(" h1", "header").text('Pakeiciau h1');
// $("header").find('h1').text('Pakeiciau h1');


var elm1 = "<button>Register</button>",
    elm2 = "<img  src='' width='200px'  height='200px' />",
    elm3 = "<a href='#'>OK</a>";

$('ul').prepend(elm1);
$('li:first').before(elm1);

$('ul').append(elm2);
$('form').before(elm3);
// $('main').prepend(elm3);

// elemento perkelimas
$('header').append( $('form'));

// ===========================
// elemento kurimas
var element = $('<section></section>').html("<nav>Menu</nav>");
$('main').append(element);

//
$('<footer/>', {
    "class": 'bg-warning aukstis-100',
    text: "&copy; 2017",
    click:  function() {
            $(this).hide();  // this - footer
    }
}).appendTo('body');

$('section').remove();

//
