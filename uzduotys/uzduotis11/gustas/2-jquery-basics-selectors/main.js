console.log("lasbas");


$("h1").css("color", "red");
var antraste = $("h1");
antraste.css("color", "blue");

// css paduoti kaip obj
var stilius = {
    color: "orange",
    "font-size": "80px",
    "font-weight": 100
};
antraste.css(stilius);
// $("h1").css(stilius);

//fontsize paveiks tik h2 o spalva paveiks ir h1 ir h2
// antraste.css("font-size", "12px").add("h2").css("color", "purple");

$("li:even").css("background", "yellow");
$("li:eq(1)").css("background", "yellow");


//pakeicia tik tam tikros vietos elementa : h2 MAIN
// $("h2", "main").css("font-size", "60px");

// ARBA
// $("main").find("h2").css("font-size", "70px");

$('input[type="email"]').css("background-color","#b2b2b2");

$('input[type="email"]').val("aa");

$('h2').siblings().css('property', 'value');

console.log(antraste);



















//
