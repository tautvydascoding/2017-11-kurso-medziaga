
// NAVIGATION SCROLL ------------------------------------------------------

$('nav ul').find('a').click(function(){
    var $href = $(this).attr('href');
    var $anchor = $('#'+$href).offset();
    window.scrollTo($anchor.left,$anchor.top);
    return false;
});

// REKLAMOS SLIDESHOW ------------------------------------------------------
var slideIndex = 0;

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 7000); // Keicia kas 7secs
}

showSlides();

// EMAIL SUBMIT ------------------------------------------------------

$('form.ajaxEmail').on('submit', function (){
    // Issaugo formos siuntimo duomenis
    var that = $(this);
    var url = that.attr('action');
    var type = that.attr('method');
    var data = {};

    // suranda ir saugo visus atributus su name ir ju duomenimis
    that.find('[name]').each(function(index, value){ // kiekvieno [name] attributo name ir value
        var that = $(this);
        var name = that.attr('name');
        var duomenys = that.val();

    // visi duomeys i obj masyvu
         data[name] = duomenys;
    });

    $.ajax({ // siuncia obj i php
        url: url, // email.php
        type: type, // POST
        data: data, // vartotojo suvesti duomenys
        success: function(response){
            $('div.emailPries, .ajaxEmail').addClass('hidden-active'); // paslepe form
            $('.emailPo').toggleClass('hidden-active'); // parodo, kad issiusta
        }
    });

    return false;
});

// ALBUM FUNKCIJOS ------------------------------------------------------
// Reikia perkurti i automatine f-ja

// Auto back to TTF album
function backToTTF(){
    // parodo albuma ir release
    $('.TTF-album, .TTF-date').removeClass('hidden-active');
    // paslepia tracks sarasa & back mygtuka
    // butinai prideti klase kitaip auto toggle padarys ir dades betkokiu atveju !!!!!!!!!!
    $('.TTF-tracks').addClass('hidden-active');
}

// Auto back to DE album
function backToDE(){
    // parodo albuma ir release
    $('.DE-album, .DE-date').removeClass('hidden-active');
    // paslepia tracks sarasa & back mygtuka
    // butinai prideti klase kitaip auto toggle padarys ir dades betkokiu atveju !!!!!!!!!!
    $('.DE-tracks').addClass('hidden-active');
}

function backToLE(){
    // parodo albuma ir release
    $('.LE-album, .LE-date').removeClass('hidden-active');
    // paslepia tracks sarasa & back mygtuka
    // butinai prideti klase kitaip auto toggle padarys ir dades betkokiu atveju !!!!!!!!!!
    $('.LE-tracks').addClass('hidden-active');
}

// PIRMAS ALBUMAS -------------------------------------------------------
$('#title-that-fits').click(function(){
    // paslepia albuma ir release
    $('.TTF-album, .TTF-date').addClass('hidden-active');
    // parodo tracks sarasa & back mygtuka
    $('.TTF-tracks').toggleClass('hidden-active');

    // player scroll
    $('#SCPlayer').addClass('SCPlayer-scroll-TTF').removeClass('SCPlayer-scroll-DE SCPlayer-scroll-LE');

    // back to album 10 secs
    setTimeout(backToTTF, 10000);
});

// Back to album TTF
$('#TTF-back').click(function(){
    // parodo albuma ir release
    $('.TTF-album, .TTF-date').removeClass('hidden-active');
    // paslepia tracks sarasa & back mygtuka
    $('.TTF-tracks').toggleClass('hidden-active');
});

// ANTRAS ALBUMAS -------------------------------------------------------
$('#dark-emoji').click(function(){
    // paslepia albuma ir release
    $('.DE-album, .DE-date').addClass('hidden-active');
    // parodo tracks sarasa & back mygtuka
    $('.DE-tracks').toggleClass('hidden-active');

    // player scroll
    $('#SCPlayer').addClass('SCPlayer-scroll-DE').removeClass('SCPlayer-scroll-TTF SCPlayer-scroll-LE');

    // back to album 10 secs
    setTimeout(backToDE, 10000);
});

// back to album DE
$('#DE-back').click(function(){
    // parodo albuma ir release
    $('.DE-album, .DE-date').removeClass('hidden-active');
    // paslepia tracks sarasa & back mygtuka
    $('.DE-tracks').toggleClass('hidden-active');
});

// TRECIAS ALBUMAS -------------------------------------------------------
$('#lunar-eclipse').click(function(){
    // paslepia albuma ir release
    $('.LE-album, .LE-date').addClass('hidden-active');
    // parodo tracks sarasa & back mygtuka
    $('.LE-tracks').toggleClass('hidden-active');

    // player scroll
    $('#SCPlayer').addClass('SCPlayer-scroll-LE').removeClass('SCPlayer-scroll-DE SCPlayer-scroll-TTF');

    setTimeout(backToLE, 10000);
});

$('#LE-back').click(function(){
    // parodo albuma ir release
    $('.LE-album, .LE-date').removeClass('hidden-active');
    // paslepia tracks sarasa & back mygtuka
    $('.LE-tracks').toggleClass('hidden-active');
});
