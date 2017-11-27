// get text value
var el = $("h1").html();

console.log(el);


// issaugo inputo value - galima ne tik pagal type, bet ir pagal name(kaip ID)
el = $('input[type=text]').val();
console.log(el);

$('input[name="username"]').val("meow");
$('input[type="email"]').val("meow@cats.ru");


// trys skirtingi budai kaip pakeisti info html faile
$('header h1').text("HAX0R");
// $('h1', 'header').text("HAX0R");
// $('header').find('h1').text('HAX0R');

// pakeis visa body
// $('body').html("<div><h1>HIHIHIHIHIHI</h1></div>");


var btn1 = "<button> CLICK ME </button>";
var btn2 = "<button> NO, CLICK ME </button>";
var foto = "<img src='' width='200' height='200'/>";
var linkas = "<a href='#'>El linkoooooooooooooooo</a>";

// apend() ir prepend() viduje


// insert content at the beginning
// $("ul").prepend(btn1);
// $("li:first").before(btn1);

$("ul").before(foto);
$("ul").after(btn1, btn2);

// $("form").before(linkas);
$("form").prepend(linkas);
$("h2")[1].prepend(foto);

$("form").after(linkas);
$("input")[1].before(linkas);

// forma ikele i header
// $("header").append($("form"));

// $("form").appendTo("header");

// elemento kurimas
var naujasEl = $('<section></section>').html('<nav> Menu </nav>');
// idejo i main pacia apacia
$('main').append(naujasEl);

$("<footer></footer>", {
    "class": "bg-info",
    html: "&copy; 2017 <h1>click me</h1>",
    click: function(){
        $(this).hide();
    }
}).appendTo("body");


// isvalo body elementa
//$("body").empty();

// istrins viska, teva ir vaikus
//$("body").remove();






//
