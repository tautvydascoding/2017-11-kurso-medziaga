// $('img:first').hide('3000');

// $('img').eq(0).hide(3000);
// $('img').eq(0).show(3000);

// 1 uzduotis: Paspaudus ant paveiksliuko jis isnyksta
// $('img').click(function() {
//   $(this).hide(2000);
// });

$('.btn1').on('click', function functionName() {
  $('img').fadeToggle(3000);
});

$('img').click(function() {
  $(this).css("position", "absolute");
  $(this).animate({
  width: "300px",
  height: "300px",
  opacity: 0.5,
  right: 0
}, 3000);
});
