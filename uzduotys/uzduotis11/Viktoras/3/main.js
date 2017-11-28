
//Execute the function when the DOM is ready to be used.

//=============selectors=========


// keliu elementu select'as (select h1 and h2 elements)
//$( "h1, h2" ).css( "background", "black" );
//$( "h1" ).add( "h2" ).css( "background", "yellow" );

$("h1").css("color", "red");
var antraste = $("h1");


// css paduoti kaip objekta
var stilius = {
    color: "orange",
    "font-size": "80px",
    "font-weight": 100
};
antraste.css(stilius);

// add - galima dadeti selektoriu
// $("h1").css("font-size", "10px").add("h2").css("color", "red");

$('li:odd').css("color", "green");

//pakeis h2 elementus tik main'e, bet ne headeryje
// $("h2", "main").css("background-color", "purple");

//galima ieskot elemento (atliks ta pati kaip ir kodas auksciau)
$('main').find("h2").css("background-color", "purple");

// jei po tasko (.val("aaa")) paliktumem tik () tai jis get'ins;
//jei po tasko i () irasysim kazka, tai jis settins
//var pvz = $('input[type="email"]') bus get'eris
//var pvz = $('input[type="email"]').val('aaa') bus set'eris
$('input[type="email"]').val("aaa");

var elementas = $('h1').html();
console.log(elementas);

// paveiks paskutini is li elementu
//$( "li" ).last().css( "background", "yellow" );
//$( "li:last" ).addClass( "selected highlight" );
// $( "p:even" )
//$( "p:eq(1)" ); // pirmas

//$( "h1", "form" ).addClass( "bar" );
// !!! importnat sekantis parametras nurodo kur ieskoti. pvz ^ h1 bus ieskomas TIK form'os viduje !!!

// more complex  - antras .css() suveiks abiems elementams (h1 ir h2)
// $( "h1" ).css( "font-size", "8px" ).add( "h2" ).css( "background", "yellow" );

// veikslu atlieka surasyta tvarka
//$( "form" ).css( "color", "red" ).find( "h1" ).css( "color", "green" );  // note: find(...) - iesko elemento viduje selected item

// form'os lauku select'as
//$( "input[type='email']").val("Username");    // will return the current real value of a text field, for example if the user typed something there after a page load.
// note: $("input[type='email']").attr('value') // will return value from DOM/HTML.

// brolius ir seses Isskyrus h2 pati
//$("h2").siblings().css({"color": "red", "border": "2px solid red"});
// h2 brolius kurie yra "p", bet nera h2 ar kiti
//$("h2").siblings("p").css({"color": "orange", "border": "2px solid red"});
// sekanti brolini elementa
//$("h2").next().css({"color": "red", "border": "2px solid red"});
// $("h2").nextAll();
//$("h2").nextUntil("h6");
