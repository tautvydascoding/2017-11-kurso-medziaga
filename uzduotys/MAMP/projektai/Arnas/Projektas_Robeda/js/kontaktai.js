
$( document ).ready(function(){
  $('.fonas1').hide().text("Neivedete vardo");
});

function check(){
    var name = $('#sample3').val();
    var pastas = $('#sample2').val();
    var numeris = $('#sample1').val();
    var data = $('#sample').val();
    if(name == ""){
      $('.fonas1').fadeIn(1000).text("Neivedete vardo");
      $('.fonas1').fadeOut(4000);
      return false;
    }
    else if(pastas == ""){
      $('.fonas1').fadeIn(1000).text("Neivedete elektroninio pasto");
      $('.fonas1').fadeOut(4000);
      return false;
    }
    else if(numeris == ""){
      $('.fonas1').fadeIn(1000).text("Neivedete telefono numerio");
      $('.fonas1').fadeOut(4000);
      return false;
    }
    else if(data == ""){
      $('.fonas1').fadeIn(1000).text("Nepasirinkote datos");
      $('.fonas1').fadout(4000);
      return false;
    }
    else{
      $('.fonas1').fadeIn(3000).css('background-color','green').text("Duomenys nusiusti");
      //$('.fonas1').hide(3000);

      //$('#button').prop('required',true);
      $('#button').attr("required", true);
      console.log(name+" "+pastas+" "+numeris+" "+data);
        //return false;
    }

  }
