console.log("lasbas");



console.log($('img')[0]);  // return DOM element
console.log($('img').eq(0)); // eq() - return jQuery obj

// $('img')[0].hide();  // error
// $('img').eq(0).hide();  // OK
// .eq( -2 )


// $('img').eq(0).hide(2000);
// $('img').eq(0).show("slow");

// 1
// paspaudus ant paveiksliuko, kad jis isnyktu

// $('img').click( function() {
//      $(this).hide(2000);
// });
//
$('.btn1').on('click', function() {
    // $('img').fadeTo('slow', 0.5);
    $('img').fadeToggle('slow');
});

$('img').click( function() {
    $(this).css('position', 'absolute');

     $(this).animate({
         "width": "300px",
          height: "300px",
          opacity: 0.5,
          right: "30px",
          top: "30px",
         "padding-left": "300px"
      }, 3000);

      $(this).animate({
           opacity: 0.1,
           bottom: 0
       }, 3000);
});


//
