console.log("lasbas");


  // //============Anonimine funkcija ==============
   $( "li" ).on( "click", function() {
        $( this ).css({
          width: function( index, value ) {
          	console.log("w: " + value);
            return parseFloat( value ) * 1.2;
          },
          height: function( index, value ) {
          	console.log("h: " + value);
            return parseFloat( value ) * 1.2;
          }
        });
   });


$("h1").css("color", "red");
var antraste = $("h1");
antraste.css("color", "blue");

// css paduoti kaip obj
// var stilius = {
//     color: "orange",
//     "font-size": "80px",
//     "font-weight": 100
// };
// antraste.css(stilius);
// $("h1").css(stilius);

// font-size - paveiks TIK h1, o "color" paveiks ie h1 ir h2
// $("h1").css("font-size", "12px").add("h2").css("color", "purple");

$('li:eq(1)').css("color", "white");
// h2 bnus ieskomas tik "main" elemente
// $('h2', 'main').css('font-size', '65px');
// arba
// $('main').find('h2').css('font-size', '65px');


// $('input[type="email"]').css("background-color", "#b2b2b2");

// $('h2').siblings().css('property', 'value');


$('h2').addClass('text-light'); $('h1').attr('id', 'antraste'); $("header h1").text('<b>Pakeiciau h1</b>');
