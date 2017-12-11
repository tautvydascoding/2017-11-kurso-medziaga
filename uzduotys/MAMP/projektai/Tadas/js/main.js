//-------------------Global vars--------------------------
var debugMode = 1;


$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});
//--------------------Smooth scroll to target ID---------------------
$("#nav-item01, #section01").click(function() {
    $('html, body').animate({
        scrollTop: $("#section02").offset().top
    }, 1000);
});

$("#nav-item02").click(function() {
    $('html, body').animate({
        scrollTop: $("#section03").offset().top
    }, 1000);
});

$("#nav-item03").click(function() {
    $('html, body').animate({
        scrollTop: $("#section04").offset().top
    }, 1000);
});

//----------------------INDEX PHP sections fade in on scroll--------------------
$(window).scroll(function(){
  if($(window).scrollTop() > 450){
      $("#showSection1 .home-about").animate({opacity: 1}, 1500);
  }
  if($(window).scrollTop() > 900){
      $("#showSection2table").animate({opacity: 1}, 1500);
      $("#carouselExampleIndicators").animate({opacity: 1}, 1500);
  }
  if($(window).scrollTop() > 925){
      $(".main-stats-users").animate({opacity: 1}, 1500);
      $(window).off("scroll", startCounter());
      $("#section04").animate({opacity: 1}, 1500);
  }
});

//-----------------Statistics counter from 0 to target number at homepage------------------
function startCounter() {
  $('.count').each(function () {
      $(this).prop('Counter',0).animate({
          Counter: $(this).text()
      }, {
          duration: 2500,
          easing: 'swing',
          step: function (now) {
              $(this).text(Math.ceil(now));
          }
      });
  });
}
//-----------------Statistics counter END---------------------------------------

//-----------------REGISTER AVATAR SELECTION------------------------------------
$('.register-picture-select-item').click(function() {
  $('.register-picture-select-box img').removeClass('selected');
  $('.register-picture-select-box img').removeAttr('name');

  $('img', this).addClass('selected');
  $('img', this).attr('name', 'register-img');
  var whatToAdd = $('[name=register-img]').attr('value');

  $('#register-img-hidden-input').val(whatToAdd);
});

//-----------------Buttons for swaping login and register pages-----------------------------
$('#test-swap').click(function() {
  $('.login-img-side').animate({left: '-100vh', opacity: '0'}, 1500).hide(0);
  $('.login-input-side').animate({top: '-100vh', opacity: '0'}, 1500).hide(0);

  $('.login-register-img-side').delay(1500).show(0).animate({top: '0', opacity: '1'}, 3500);
  $('.login-register-input-side').delay(1500).show(0).animate({top: '0', opacity: '1'}, 1500);

});

$('#test-swap-back').click(function() {
  $('.login-register-img-side').clearQueue().finish().animate({opacity: '0'}, 1500).hide(0);
  $('.login-register-input-side').animate({top: '-100vh', opacity: '0'}, 1500).hide(0);

  $('.login-img-side').delay(1500).show(0).animate({left: '0', opacity: '1'}, 1500);
  $('.login-input-side').delay(1500).show(0).animate({top: '0', opacity: '1'}, 1500);
});


function instantRegisterWindow() {
  $('.login-img-side').animate({left: '-100vh', opacity: '0'}, 0).hide(0);
  $('.login-input-side').animate({top: '-100vh', opacity: '0'}, 0).hide(0);
  $('.login-register-img-side').show().animate({top: '0', opacity: '1'}, 0);
  $('.login-register-input-side').show().animate({top: '0', opacity: '1'}, 0);
}

//-----------------Dashboard currency info graph------------------
var cGraph = document.querySelector("#currency-graph");
if (cGraph === null){
  if (debugMode == 1) {
    console.log("[DEBUG]: Currency graph ID was not found. Skipping this part of code.");
  }
} else {
  var currencyGraph = new Chart(cGraph, {
    type: 'line',
    data: {
      labels: graphTime, // Masyvas sukuriamas 'dashboard-currency-info.php' faile.
      datasets: [{
        label: 'Value',
        data: graphData, //Masyvas sukuriamas 'dashboard-currency-info.php' faile.
        backgroundColor: 'rgba(54, 162, 235, 0.2)', //Melyna
        pointHoverBackgroundColor: 'rgba(255, 255, 255, 0.7)',
        pointHoverBorderColor: '#fff',
        borderColor: 'rgba(54, 162, 235, 1)', // Melyna
        borderWidth: 2
      }]
    },
    options: {
        legend: {
          labels: {
            fontColor: 'rgba(255, 255, 255, .6)'
          }
        },
        scales: {
            yAxes: [{
              scaleLabel: {
                  display: true,
                  labelString: "In-game money",
                  fontColor: 'rgba(255, 255, 255, .6)'
                },
                ticks: {
                    beginAtZero:true,
                    fontColor: 'rgba(255, 255, 255, .6)'
                }
            }],
            xAxes: [{
              scaleLabel: {
                  display: true,
                  labelString: "Hours",
                  fontColor: 'rgba(255, 255, 255, .6)'
                },
                ticks: {
                  fontColor: 'rgba(255, 255, 255, .6)'
                }
            }]
        }
    }
});
}
//-----------------Dashboard currency info graph END------------------

//-----------------Dashboard market carousel------------------

$(document).ready(function(){
  // var owlCarousel = $(".owl-carousel");
  var owlCarousel = document.querySelector(".owl-carousel");
  if (owlCarousel === null){
    if (debugMode == 1) {
      console.log("[DEBUG]: Market carousel was not found. Skipping this part of code.");
    }
  } else {
      $(".owl-carousel").owlCarousel({
      loop:true,
      autoplay: true,
      autoplayTimeout: 6000,
      autoplaySpeed:3000,
      margin:10,
      responsiveClass:true,
      dots: false,
      responsive:{
          0:{
              items:1
          },
          425:{
              items:2
          },
          1024:{
              items:4
          }
      }
    });
  }//else END
});//document ready END

//-----------------Dashboard market carousel END------------------

//-----------------CONTACT-FORM-DATA-------------------------------GERAS
$('form.ajax').on('submit', function() {
  if ($('#hidden-contact-form-checker').val() != "stop") {

    var that = $(this),
        url = that.attr('action'),
        method = that.attr('method'),
        data = {};

    that.find('[name]').each(function(){
      var that = $(this),
          name = that.attr('name'),
          value = that.val();

      data[name] = value;
    });

    $.ajax({
      url: url,
      type: method,
      data: data,
      success: function(response) {

        var size = $('form.ajax').height();
        $('form.ajax').fadeOut(1000, function() {
          $('form.ajax').addClass('d-none');
          $('#to-show-after-send').removeClass('d-none').height(size).animate({opacity: '1'}, 1000);
        });
      }
    });
    return false;

  }
  else
  {
    validateContactForm();
    return false;
  }
});

//-----------------------------CURRENCY-INFO.PHP ON FOCUS OUT-------------------
function UnitsFocusOut() {
  var units = $('input#units').val();
  if(units > 0){
    var price = units * last_price;
    var tax = price * taxes;
    $('input#price').val(price.toFixed(2));
    $('input#tax').val(tax.toFixed(2));
  }
  if(units == 0){
    $('input#price').val("");
    $('input#tax').val("");
  }
}

function PriceFocusOut() {
  var price = $('input#price').val();
  if(price > 0){
    var units = price / last_price;
    var tax = price * taxes;
    $('input#units').val(units.toFixed(2));
    $('input#tax').val(tax.toFixed(2));
  }
  if(price == 0){
    $('input#units').val("");
    $('input#tax').val("");
  }
}

function UnitsSellFocusOut() {
  var units = $('input#units-sell').val();
  if(units > 0){
    var price = units * last_price;
    var tax = price * taxes;
    $('input#price-sell').val(price.toFixed(2));
    $('input#tax-sell').val(tax.toFixed(2));
  }
  if(units == 0){
    $('input#price-sell').val("");
    $('input#tax-sell').val("");
  }
}
