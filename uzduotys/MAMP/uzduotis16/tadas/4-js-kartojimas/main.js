var ul = $('<ul></ul>');

ul.html("<li>Home</li>");
ul.append("<li>Gallery</li>");
ul.append("<li>About</li>");
ul.append("<li>Contacts</li>");
$('.container').append(ul);

var x = $('li').eq(0).text();
$('h1').text(x);

// $('li').addClass("active");

$('li').click(function() {

  if($(this).hasClass("active")){
    $('li').removeClass("active");
    $(this).removeClass("active");
  }else{
    $('li').removeClass("active");
    $(this).addClass("active");
  }
  
});
