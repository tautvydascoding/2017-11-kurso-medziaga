
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
    setTimeout(showSlides, 7000); // Change image every 2 seconds
}

showSlides();

// FORMOS SUBMIT ------------------------------------------------------

$('#form-submit').click(function(){
    if($('formos-email').prop('required')){
        console.log("ajks");
    }
});

// $('form#form-submit').find('input').each(function(){
//     if(!$(this).prop('required')){
//         console.log("NR");
//     } else {
//         console.log("IR");
//     }
// });



// ALBUM FUNKCIJOS ------------------------------------------------------

// PIRMAS ALBUMAS -------------------------------------------------------
$('#dark-emoji').click(function(){
    // paslepia albuma ir release
    $('.DE-album, .DE-date').addClass('hidden-active');
    // parodo tracks sarasa & back mygtuka
    $('.DE-tracks').toggleClass('hidden-active');
});

$('#DE-back').click(function(){
    // parodo albuma ir release
    $('.DE-album, .DE-date').removeClass('hidden-active');
    // paslepia tracks sarasa & back mygtuka
    $('.DE-tracks').toggleClass('hidden-active');
});

// DARK EMOJI TRACK list

$('#DE-track-1').click(function(){
    console.log("Playing dark emoji track 1");
});

// ANTRAS ALBUMAS -------------------------------------------------------
$('#lunar-eclipse').click(function(){
    // paslepia albuma ir release
    $('.LE-album, .LE-date').addClass('hidden-active');
    // parodo tracks sarasa & back mygtuka
    $('.LE-tracks').toggleClass('hidden-active');
});

$('#LE-back').click(function(){
    // parodo albuma ir release
    $('.LE-album, .LE-date').removeClass('hidden-active');
    // paslepia tracks sarasa & back mygtuka
    $('.LE-tracks').toggleClass('hidden-active');
});

// DARK EMOJI TRACK list

$('#LE-track-1').click(function(){
    console.log("Playing lunar eclipse track 1");
});

// TRECIAS ALBUMAS -------------------------------------------------------
$('#title-that-fits').click(function(){
    // paslepia albuma ir release
    $('.TTF-album, .TTF-date').addClass('hidden-active');
    // parodo tracks sarasa & back mygtuka
    $('.TTF-tracks').toggleClass('hidden-active');
});

$('#TTF-back').click(function(){
    // parodo albuma ir release
    $('.TTF-album, .TTF-date').removeClass('hidden-active');
    // paslepia tracks sarasa & back mygtuka
    $('.TTF-tracks').toggleClass('hidden-active');
});

// DARK EMOJI TRACK list

$('#TTF-track-1').click(function(){
    console.log("Playing title that fits track 1");
});
