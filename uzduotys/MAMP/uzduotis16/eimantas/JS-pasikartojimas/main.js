console.log("lasbas");


// $("<footer></footer>", {
//    "class": "test",
//    text: "Click me!",
//    click: function() {
//        $( this ).hide( );
//    }
// }).appendTo( "body" );

$('<div></div>', {
    "class" : "klaseeee",
    text: "Spasuk",
    click: function(){
        $(this).hide();
    }
}).appendTo(".meow");

$('.meow').css("background", "yellow");
$('.meow div').css("color", "red");
