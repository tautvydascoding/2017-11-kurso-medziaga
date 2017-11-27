
$('header').addClass("bg-danger");
$('h2').addClass("bg-light text-success");

var addMygtukas = $('<button class="btn btn-info"> bg change </button>');
$('body').append(addMygtukas);
$("button").click( function()
           {
             $('header').toggleClass("bg-danger");
           }
        );

// automatiskai visiem h2 el uzdeda klase ir index numeriuka
$('h2').addClass(function(index){
    var klase = "preke-" + index;
    return klase;
});

// sukurs atributa ir pavadins - pvz id="151"
$('h1').attr('id', '151');
