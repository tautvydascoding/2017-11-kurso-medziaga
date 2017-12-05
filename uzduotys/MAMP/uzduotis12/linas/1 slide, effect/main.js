


//
//     $('img')[0].hide(2000);
//
//
// console.log($('img')[0]); //return Dom element
// console.log($('img').eq(0)); //eq() return jquery obj
//
// $('img')[0].hide(); //error
// $('img').eq(0).hide(); //ok
//


// $('img').eq(0).hide(2000); //ok
//
// $('img').eq(0).show("slow"); //ok
//
//

//paspaudus ant paveiksliuko kad jis isnyktu

// islenda ir sulenda
// $(document).ready(function(){
//     $("#flip").click(function(){
//         //$("#panel").slideUp("slow");
//         //$("#panel").slideDown("slow");
//         $("#panel").slideToggle("slow");
//     });
// });





// //
// $("img").click(function() {
//     $(this).hide(2000);
// });
//
//
// $('.btn1').on('click', function() {
//     // $('img').fadeTo('slow', 0.5);
//     $('img').fadeToggle('slow');
// });

$('img').click( function() {
    $(this).css('position', 'absolute');

    $(this).animate({
        "width": "300px",
        height: "300px",
        opacity: 0.5,
        right: 20,
        top: 20
        
    }, 3000);

$(this).animate({
    opacity: 0.1,
    bottom: 0
}, 300);


});
