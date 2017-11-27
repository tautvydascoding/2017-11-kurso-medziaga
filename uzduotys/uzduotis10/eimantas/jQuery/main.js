console.log("hi.");

// Kintamieji
var antraste = $("h1, h3");
// CSS su objektu
var stilius = {
    color: "orange",
    "font-size": "80px",
    "background-color": "pink",
    "font-weight": 100
};
var backIrFontON = {
    "background": "yellow",
    "font-size": 24
};
var backIrFontOUT = {
    "background": "none",
    "font-size": 20
};


antraste.css("color", "blue");


antraste.css(stilius);

// jei vienodi elementai, priskirs tik paskuti nurodyma
$("h2").css("color", "red").add("h3").css("font-size", 14).add("h2").css("color", "black");


// h2 ieskos main elemente
$("h2", "main").css("background", "red");


$("li:even").css("color", "green");
$("li:odd").css("color", "red");

$( "li" ).mouseover(function() {
    $(this).css(backIrFontON);
});
$( "li" ).mouseout(function() {
    $(this).css(backIrFontOUT);
});

// suranta h2 main elemente
$("main").find("h2").css("font-size", 65);


$('input[type="email"]').css("background-color", "#b2b2b2");
// issaugo vartotojo ivesta reiksme
var a = $('input[type="email"]').val();


$("li").siblings().css('property', 'value');

// .next() sekantis brolinis elementas

// .nextAll() viskas kas po juo

// .nextUntil() viska po iki nurodyto

//
