// $("h1").css("color", "red");
// naudoti .css yra Bad practice !!! nes yra sukuriamas <style = ... > HTML elemente

var h1 = $("h1");

var stilius = {
  color: "orange",
  "font-size": "80px",
  "font-weight": 100
};

h1.css(stilius);

// $("h1, h2").css("background", "black");

// font-size paveiks tik h1 elementa, o color atsiras ant abieju
// h1.css("font-size", "12px").add("h2").css("color", "purple");

$("li:odd").css("color", "white"); // nelyginiai
$("li:eq(2)").css("color", "white");


//--------Jeigu norim kad keistusi ne visi h2 ir h1, o tik tam tikri nurodyti
// $("h2", "main").css("font-size", "20px");

//ARBA

$("main").find("h2").css("font-size", "20px");
//--------

//Selectinam form lauke input'us
$('input[type="email"]').css("background-color", "#B2B2B2").val();


$('h2').siblings();
