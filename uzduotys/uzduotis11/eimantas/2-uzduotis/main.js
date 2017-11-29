console.log("Labas");

// ________________add_class_______________

// 2
// css faile apsirasyti klase "active":
// fono spalva: #b3b3b3; teksto storis: 700;

// .active{
//     color: #b3b3b3;
//     font-weight: 700;
// }

// 2.1
// su js sukurti menu naudojant <ul> <li> :
// Home, Gallery, About, contacts

var navEl = {
    home: "<li>Home</li>",
    gallery: "<li>Gallery</li>",
    about: "<li>About</li>",
    contacts: "<li>Contacts</li>"
};

$('body').prepend("<ul></ul>");
$('ul').append(navEl.home, navEl.gallery, navEl.about, navEl.contacts);

// 2.2
// suprogramuoti, kad paspaudus ant bet kurio menu punkto (li) jam uzsidetu klase "active
// 2.2.2 paspausti ant visu <li> elementu

// $('li').click(function(){
//     $(this).addClass("active");
// });


// 2.3
// patobulinti 2.2 koda, kad paspaudus ant metu <li> elemento, pries tai nuimtu "active klase nuo kilu <li> elementu:
// 2.3.A  patikrinti, jeigu kalse "active" buvo uzdeta ant kitu  <li> pasalinti nuo visu menu "li" elementu klase "active"
// 2.3.B  uzdeti klase "active" ant paspausto elemento
//

$('li').addClass("active");


$('li').click(function(){
    $('li').removeClass("active");
    $(this).addClass("active");
});



//
