console.log("lasbas");

// $('img:first').hide


// console.log($('img')[0]);        // get DOM element - nesuveiks
console.log($('img').eq(0));    // eq() grazina jQuery objekta - suveiks


// $('img')[0].hide("slow");     //nesuveiks
// $('img').eq(0).click().hide(2000);     //suveiks
// $('img').eq(0).show('slow');     //suveiks
//

//1 UZDUOTIS  paspaudus ant paveiksliuko jis isnyktu
var x;

// $('img').click( function() {
//     $(this).hide(2000);
// });

// $('.btn1').on('click', function(){
//   $('img').fadeTo(2000, 0.5);
// });
//
// $('.btn1').on('click', function(){
//   $('img').show(2000);
// });


//
$('img').click( function() {
  $(this).css('position', 'absolute');
    $(this).animate({
      width: "300px",
      height: "300px",
      opacity: 0.5,
      right: 0

    }, 1000);

    $(this).animate({
      opacity: 0.1,
      top: 0,
    });

    $(this).animate({
      opacity: 0,
      top: 0,

    });
});

$('.btn1').on('click', function(){
  $('img').css('position', 'absolute');
  $('img').animate({
    opacity: 1,
    left: 0
  }, 5000);
});
