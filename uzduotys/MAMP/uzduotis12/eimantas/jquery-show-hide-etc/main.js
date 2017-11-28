console.log("hi.");


$("img").eq(0).hide("slow", function(){
    $(".container").append("<a href='' class='show'>click me to show</a>");
});

$(".show").click(function(){
    $("img".eq(0).show("slow"));
});

$(".btn1").on("click", function(){
    $("img").fadeTo("slow", 0.5); // slow fade in iki 0.5
});

$("img").click(function(){
    $(this).css("position", "absolute");
    $(this).animate({
        width: '300px',
        height: '300px',
        opacity: '0.5',
        right: '50px',
        top: '50px'
    }, "slow");
});


// !!!!! NOTES

// console.log($(img)[0]); // grazina DOM elementa. Visas html. - .hide neveiks
// console.log($(img)[0].eq(0)); // grazina jQuery obj. - hide veiks eq(-2) antras nuo galo
