$(document).ready(function() {
  $('div.miestas').hover(function(){
    $('img', this).animate({opacity:0.2}, 'fast');
    $('h2', this).addClass('matomas', 4000);

  }, function(){
    $('img', this).stop().animate({opacity:1}, 400);
    $('h2', this).removeClass('matomas');
  });
});

// $(document).ready(function() {
//     $('#submit').click(function(){
//         $.ajax({
//             url: './create-article.php',
//             type: 'POST',
//             data: {param1: 'autvardas'},
//
//         success : function() {
//             $('#msg').addClass('.msg-success');}
//
// });
// });
// });
