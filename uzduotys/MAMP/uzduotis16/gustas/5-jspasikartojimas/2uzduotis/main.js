console.log("lasbas");

var ul = $('<ul></ul>');
$('.container').append(ul);

ul.html("<li>Home</li>");
// ul.html("<li>Home</li>"); --- istrins kas bus pries tai ir ides sita
ul.append("<li>Gallery</li>");
ul.append("<li>About</li>");
ul.append("<li>Contact us</li>");
$('li:last').prependTo('ul');


//-----------------------------------------------------
var x = $('li:first').text();// paima turini
// arba
var x = $('li').eq(0).text();// paima turini

$('h1').text(x); // ideda i turini

//-----------------------------------------------------
// $('li').addClass('active');

$('ul li').on('click', function(){
    $('ul li').removeClass('active');
    $(this).addClass('active');

    // if($(this).hasClass('active')){
    //     $(this).removeClass('active');
    // } else {
    //     $('ul li').removeClass('active');
    //     $(this).addClass('active');
    //
    // }
});


$('ul li:last').css('color', 'green');
$('ul li:last').css('font-size', '50px');

// arba
var style = {
    'color': 'green',
    'font-size': '50px'
};

$('ul li:first').css({
    'color': 'green',
    'font-size': '50px'
});


$('ul li').eq(1).css(style);



//javascript budu---------------------
// var x = document.querySelector('ul li');
// console.log(x);
// document.querySelector('ul li').style(;
