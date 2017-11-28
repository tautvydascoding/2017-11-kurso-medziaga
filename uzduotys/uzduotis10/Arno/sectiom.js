$("label").css("color", "red");

var element = $("h1").text();
console.log(element);

var inputReiksme = $('input[value="Ozy"]').val("Gerieti");
console.log(inputReiksme);

$("input[value='Ei']").val("Tomas");
$("input[name='Lastname']").val("Kerbedis");
$("input[name='number']").val("888");

$("h1").text("Pakeistas h1");

var elm1 = "<button>Register</buttton>",
elm2 = "<img src='' width='200px' heigth='200px'/>",
elm3 = "<label>Enter</label>";

// // kaip monipuliuotis HTML elementus
// $("ul").after(elm1);
// $("ul").before(elm3);
// $("ul").append(elm1);
// $("ul").prepend(elm3);

$("button[name='Magic']").click(function(){
    $("#h3").hide();
});

// Elemento kurimas
var elfas = $("<section></section>").html("<nav class='bg-warning'>Meniu</nav>");
$("main").append(elfas);
var goter = $("<footer></footer>", {
    "class": "bg-primary",
    text: "&copy, 2017",
    click: function() { $(this).hide();}
}).appendTo('body');

$("header").addClass("bg-info");
$("header h2").addClass("bg-light text-primary");

$("header").toggleClass("bg-info");
$("header").toggleClass("bg-info");

$("header h2").addClass(function(index, currentClass){
    var klase = "preke-"+ index;
    return klase;
});
var x=1;
$(".preke-"+x).addClass("text-warning");

























// -------------------
