// susikiriam objekta su css reiksmemis
var objStyle= {
    color: "blue",
    "font-size": "80px",
    opacity: "0.5"
};
// Priskirima jquary selectoriu js atributui
var h1 = $("h1");
h1.css("color","red");
// Priskiriam objekto duomenis
$("#ats").css(objStyle);
// metodas add paimma ir elementa h3
$("h2").add("h3").css("background", "yellow");
// Pasirenka paskutini
$("li").last().css("background", "#00065999");
// Irgi pasirenka paskutini
$("li:last").css("background","#000");
// pasirenki lyginius ir nelyginius
$("li:even").addClass("bg-warning");
$("li:odd").addClass("bg-light");
// iesko formoje elemento p
$("form").find("p").css("color","red");
// Surranda elementa pagal atributus
$("input[type='email']").css("background","#b2b2b2");
// Pasima arba duoda reiksme
$("input[type='email']").val();
var a = $("input[type='email']").val();
// pasirenk nurodyta elementa eile
$("h2")[0].css("background","#b2b299");





$(document).ready(function(){
    // $("button").click(function(){
    //     $("#dingau").hide();
    // });
});
