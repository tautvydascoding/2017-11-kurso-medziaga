console.log("laabas");
// Pasirinkti elementa is elementi saraso
//$("img").eq(0).hide(1000);

// $("button").eq(0).click(function(){
//     $("img").eq(0).hide(1000);
//     $("img").eq(0).show(1000);
// });

$("button").eq(1).mouseenter(function(){
    $("img").eq(1).toggle(1000);
    //$("img").eq(1).show(1000);
});


$("button").eq(2).click(function(){
    //$("img").eq(2).fadeTo('slow',0.6);
    $("img").eq(2).fadeToggle('slow');
});


$("button").eq(0).click(function(){
    if(document.getElementById("aaa").style.opacity == 0.5){
        $(".pietusL").css("position","relative");
        $("img").eq(0).css("position","absolute");
        $("img").eq(0).animate({
            left:"0px",
            opacity: "1",
            height: "100px",
            width: "100px"
    });}
    else{
        $(".pietusL").css("position","relative");
        $("img").eq(0).css("position","absolute");
        $("img").eq(0).animate({
            left:"250px",
            opacity: "0.5",
            height: "150px",
            width: "150px"
        });
    }
});




























var sliderImages = document.querySelectorAll("img"),
  arrowLeft = document.querySelector("#left"),
  arrowRight = document.querySelector("#right"),
  current = 0;
//console.log(sliderImages);
