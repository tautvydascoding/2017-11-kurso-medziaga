// ________________add_class_______________

// 2
// css faile apsirasyti klase "active":
// fono spalva: #b3b3b3; teksto storis: 700;

// 2.1
// su js sukurti menu naudojant <ul> <li> :
// Home, Gallery, About, contacts
var menu = "<nav><ul><li>Home</li><li>Gallery</li><li>About</li><li>Contacts</li></ul></nav>";

$('.container').append(menu);
// 2.2
// suprogramuoti, kad paspaudus ant bet kurio menu punkto (li) jam uzsidetu klase "active
// 2.2.2 paspausti ant visu <li> elementu
$('li').click(function() {
  $(this).addClass('active');
});

// 2.3
// patobulinti 2.2 koda, kad paspaudus ant metu <li> elemento, pries tai nuimtu "active klase nuo kilu <li> elementu:
$('li').click(function() {
  $('li').removeClass('active');
  $(this).addClass('active');
});
// 2.3.A  patikrinti, jeigu kalse "active" buvo uzdeta ant kitu  <li> pasalinti nuo visu menu "li" elementu klase "active"
// 2.3.B  uzdeti klase "active" ant paspausto elemento
//
