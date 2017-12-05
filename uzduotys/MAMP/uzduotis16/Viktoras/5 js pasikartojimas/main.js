console.log("lasbas");
var ul = $('<ul></ul>');
ul.html('<li>Home</li>');
// ul.html('<li>Labas</li>'); - sitas istrintu sita ul.html('<li>Home</li>');, overwritintu;
ul.append("<li>Gallery</li>");
ul.append("<li>About</li>");
ul.append("<li>Contacts</li>");
$('.container').append(ul);


var x = $('li').eq(0).text();

$('h1').text(x);



$('li').click(function () {
//     $('ul li').removeClass('active');
//     $(this).addClass('active');
    if($(this).hasClass('active')) {
        $(this).removeClass('active');
    }
    else {
        $('ul li').removeClass('active');
        $(this).addClass('active');
    }

});

$('ul li:last').css({'color': 'green', 'font-size': '40px'});
$('ul li').eq(1).css({'color': 'green', 'font-size': '40px'});

var x = document.querySelectorAll('ul li')[1];
console.log(x);
