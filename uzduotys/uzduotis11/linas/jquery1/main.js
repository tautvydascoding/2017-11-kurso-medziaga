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


// font size paveiks TIK h1, o color paveiks ir h1 ir h2
// $("h1").css("font-size", "12px").add("h2").css("color", "purple");

$('li:eq(1)').css("color", "white");

// $('h2', 'main').css('font-size', '60px');
//
//
// $('main').find("h2").css('font-size', '65px');
// $('input[type"email"]').css('background-color', '#b2b2b2');

$('h2').siblings().css('property', 'value');
console.log(antraste);
