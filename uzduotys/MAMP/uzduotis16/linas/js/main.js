console.log("lasbas");



var ul = $('<ul></ul>');

ul.html("<li>Home</li>");
ul.append('<li>Gallery</>');
$('.container').append(ul);

ul.append('<li>About</>');
ul.append('<li>Contacts</>');


// ////////////////////////////////////////////////////
var x = $('li:first').text(); //text() - paima turini
//arba
var x = $('li').eq(0).text();

$('h1').text(x); //text(x) - ideda "x" i turini
//////////////////////////////////////////////////////

// $('li').addClass('active');

$('ul li').on('click', function(){
    // $(this).toggleClass('active');
    // $('ul li').removeClass('active');
    // $(this).addClass('active');

    if ($(this).hasClass('active')){
        $(this).removeClass('active');
    }else{
        $('ul li').removeClass('active');
        $(this).addClass('active');

    }
});



$('ul li:last').css('color', 'green');
$('ul li:last').css('font-size', '50px');
//arba
var style = {
    'color': 'green',
    'font-size': '50px'
};

    $('ul li:first').css({
        'color': 'green',
        'font-size': '50px'
});

$('ul li:first').eq(1).css(style);
console.log(x);
document.querySelector('ul li')[0].style('color', 'blue');
